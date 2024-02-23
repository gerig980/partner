<?php

namespace App\Http\Controllers\backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        return view('backend.services.index');
    }

    public function create()
    {
        return view('backend.services.create');
    }
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.services.edit',compact('service'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'name'   => 'required',
           'description' => 'required', 
           'type'   => 'required'
        ]);
        if($validator->fails()){
            Session()->flash('message','You need to complete name and description');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }

        $service = new Service();
        $service->name          = $request->name;
        $service->description   = $request->description;
        $service->type          = $request->type;

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/services/') . $imageName;
                Image::make($image_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $service->image = $imageName;   
            }else{
                $service->image = '';
            }
        }
        $service->save();
        $notification = array('message'=>'Service created successfully','alert-type'=>'success');
        return redirect()->route('services')->with($notification);
    }

    public function update(Request $request,$id)
    {
        $service = Service::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'name'        => 'required',
            'description' => 'required',
        ]);
        if($validator->fails()){
            Session()->flash('message','You need to complete name and description');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }

        $service->update([
            'name'          => $request->name,
            'description'   => $request->description,
            'type'          => $request->type
        ]);

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/services/') . $imageName;
                Image::make($image_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $service->image = $imageName; 
            }else{
                $service->image = '';
            }
        }

        $service->save();
        $notification = array('message'=>'Service updated successfully!','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        $notification = array('message'=>'Service deleted successfully','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function all_services_search(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('service.edit', $row->id);
                    $deleteUrl = route('service.destroy', $row->id);
                    $editBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Edit</a>';
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('description', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('images/services'), $fileName);
    
            $url = asset('images/services/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
