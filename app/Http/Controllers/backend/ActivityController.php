<?php

namespace App\Http\Controllers\backend;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function index(){
        return view('backend.activity.index');
    }

    public function edit($id){
        $activity = Activity::findOrFail($id);
        return view('backend.activity.edit',compact('activity'));
    }

    public function create(){
        return view('backend.activity.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),
        [
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'required|image'
        ]);

        if($validator->fails()){
            Session()->flash('message','Titulli , Description dhe imazhi jane te detyrueshme!');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }

        $activity              =    new Activity();
        $activity->title       =    $request->title;
        $activity->title_en    =    $request->title_en;
        $activity->description =    $request->description;
        $activity->description_en =    $request->description_en;
        $activity->location    =    $request->location;
        $activity->date        =    $request->date;
        $activity->time        =    $request->time;

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/activities/') . $imageName;
                Image::make($image_temp)->resize(1360,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $activity->image = $imageName;   
            }else{
                $activity->image = '';
            }
        }

        if ($request->hasfile('other_images')) {
            $images = array();
            foreach ($request->other_images as $key => $image) {
                if ($image->isValid()) {
                    //Get Original Image Name
                    $img_extension = $image->getClientOriginalName();
                    $img_name = pathinfo($img_extension, PATHINFO_FILENAME);
                    //Get Image Extension
                    $extension = $image->getClientOriginalExtension();
                    //Generate new image name
                    $filename = $img_name . '-' . rand(111, 99999) . '.' . $extension;
                    //Set path for small, medium, large image
                    $destinationLargePath = public_path('images/activities/') . $filename;
                    // $image->move(public_path('images/properties/'), $filename);
                    Image::make($image)->resize(1360, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationLargePath);
                    // $image->move($destinationPath, $filename);
                    array_push($images, $filename);
                    
                }
            }
            $activity->other_images = $images;
        }

        $activity->save();

        $notification = array('message'=>'Aktiviteti u regjistrua me sukses','alert-type'=>'success');
        return redirect()->route('activities.back')->with($notification);

    }

    public function update(Request $request, $id){
        $activity = Activity::findOrFail($id);
        $validator = Validator::make($request->all(),
            [
            'title'      => 'required',
            ]);

        if($validator->fails()){
            Session()->flash('message','Duhet te plotesoni fushat e detyruara');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }

        $activity->update([
            'title'         =>  $request->title,
            'title_en'      =>  $request->title_en,
            'description'   =>  $request->description,
            'description_en'=>  $request->description_en,
            'location'      =>  $request->location,
            'date'          =>  $request->date,
            'time'          =>  $request->time,
        ]);

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/activities/') . $imageName;
                Image::make($image_temp)->resize(1360,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $activity->image = $imageName;   
            }else{
                $activity->image = '';
            }
        }

        if ($request->hasFile('other_images')) {
            $images =[];
            foreach ($request->other_images as $key => $image) {
                if ($image->isValid()) {
                    //Get Original Image Name
                    $img_extension = $image->getClientOriginalName();
                    $img_name = pathinfo($img_extension, PATHINFO_FILENAME);
                    //Get Image Extension
                    $extension = $image->getClientOriginalExtension();
                    //Generate new image name
                    $filename = $img_name . '-' . rand(111, 99999) . '.' . $extension;
                    //Set path for small, medium, large image
                    $destinationLargePath = public_path('images/activities/') . $filename;
                    $image->move(public_path('images/activities/'), $filename);
                    array_push($images, $filename);
                }
            }
            if(empty($activity->other_images)){
            $activity->other_images = $images;
            }
            else{
            $activity->other_images = array_merge($activity->other_images, $images);
            }
        }

        $activity->save();
        $notification = array('message' => 'Aktiviteti u perditsua me sukses!','alert-type' =>  'success');
        return redirect()->route('activities.back')->with($notification);
        
    }

    public function destroy($id){
        $activity = Activity::findOrFail($id);
        $activity->delete();
        $notification = array('message'=>'Aktiviteti u fshi me sukses!','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('images/activities'), $fileName);
    
            $url = asset('images/activities/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

    public function deleteImage($id, $imageName)
        {
            
            $activity= Activity::findOrFail($id);
            $images = is_array($activity->other_images) ? $activity->other_images : [$activity->other_images];
        
            // Remove the image from the $images array
            $key = array_search($imageName, $images);
            if ($key !== false) {
                unset($images[$key]);
        
            }
        
            // Update the complex's images attribute
            $activity->other_images = $images;
            $activity->save();
        
            //Delete the actual file from disk
            Storage::disk('public')->delete('images/activities/' . $imageName);
            
        
        
            return back()->with('success', 'Image deleted successfully.');
        }

        public function all_activities(Request $request)
    {
        if ($request->ajax()) {
            $data = Activity::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('activity.edit', $row->id);
                    $deleteUrl = route('activity.destroy', $row->id);
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
                                $w->orWhere('title', 'LIKE', "%$search%")
                                ->orWhere('description', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
