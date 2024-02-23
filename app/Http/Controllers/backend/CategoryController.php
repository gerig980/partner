<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){
        return view('backend.category.index');
    }
    
    public function edit($id){
        $category = Category::findOrFail($id);
        return view('backend.category.edit',compact('category'));
    }
    
    public function create(){
        return view('backend.category.create');
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(),
        [
            'name',
            'brand'
        ]);
        
        if($validator->fails()){
            Session()->flash('message','Duhet te plotesohen te gjitha fushat');
            Session()->flash('class','Danger');
            return redirect()->back()->withInput();
        }
        
        $category = new Category();
        $category->name = $request->name;
        $category->name_en = $request->name_en;
        $category->brand = $request->brand;
        $category->save();
        
        $notification = array('message'=>'Kategoria u shtua me sukses!','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
    
    public function update(Request $request,$id){
        $category = Category::FindOrFail($id);
        $validator = Validator::make($request->all(),
        [
            'name'  => 'required',
            'brand' => 'required'
        ]
        );
        
        if($validator->fails()){
            Session()->flash('message','Te gjitha fushat duhen plotesuar');
            Session()->flash('class','success');
            return redirect()->back()->withInput();
        }
        $category->update([
            'name' => $request->name,
            'name_en' => $request->name_en,
            'brand'=> $request->brand
            ]);
            
        $notification = array('message'=>'Kategoria u perditesua me sukses','alert-type'=>'success');
        return redirect()->back()->with($notification);
        
    }
    
    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        $notification = array('message'=>'Kategoria u fshi me sukses!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    
    public function all_Categories(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('category.edit', $row->id);
                    $deleteUrl = route('category.destroy', $row->id);
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
                                $w->orWhere('name', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
