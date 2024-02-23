<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function index()
    {
        return view('backend.brands.index');
    }

    public function create()
    {
        return view('backend.brands.create');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('backend.brands.edit', compact('brand'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:191',
                'image' => 'required',
                'title' => 'required',

            ]
        );

        if ($validator->fails()) {
            Session()->flash('message', 'Emri titulli dhe imazhi duhen plotesuar');
            Session()->flash('class', 'Danger');
            return redirect()->back()->withInput();
        }

        $brand           = new Brand();
        $brand->name     = $request->name;
        $brand->title    = $request->title;
        $brand->title_en = $request->title_en;
        $brand->category = $request->category;
        $brand->category_en = $request->category_en;
        $brand->description = $request->description;
        $brand->description_en = $request->description_en;

        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension, PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111, 99999) . '.' . $extension;
                $medium_image_path = public_path('images/brands/') . $imageName;
                Image::make($image_temp)->resize(760, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $brand->image = $imageName;
            } else {
                $brand->image = '';
            }
        }
        if ($request->hasFile('banner')) {
            $image_temp1 = $request->file('banner');
            if ($image_temp1->isValid()) {
                $img_extension1 = $image_temp1->getClientOriginalName();
                $img_name1      = pathinfo($img_extension1, PATHINFO_FILENAME);
                $extension1     = $image_temp1->getClientOriginalExtension();
                $imageName1     = $img_name1 . '-' . rand(111, 99999) . '.' . $extension1;
                $medium_image_path1 = public_path('images/brands/') . $imageName1;
                Image::make($image_temp1)->save($medium_image_path1);
                $brand->banner = $imageName1;
            } else {
                $brand->banner = '';
            }
        }
        if ($request->hasFile('logo')) {
            $image_temp1 = $request->file('logo');
            if ($image_temp1->isValid()) {
                $img_extension1 = $image_temp1->getClientOriginalName();
                $img_name1      = pathinfo($img_extension1, PATHINFO_FILENAME);
                $extension1     = $image_temp1->getClientOriginalExtension();
                $imageName1     = $img_name1 . '-' . rand(111, 99999) . '.' . $extension1;
                $medium_image_path1 = public_path('images/brands/') . $imageName1;
                Image::make($image_temp1)->save($medium_image_path1);
                $brand->logo = $imageName1;
            } else {
                $brand->logo = '';
            }
        }
        $brand->save();
        $notification = array('message' => 'Brandi u shtua me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function update($id, Request $request)
    {
        $brand = Brand::findOrFail($id);
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:191',
                'title' => 'required',

            ]
        );

        if ($validator->fails()) {
            Session()->flash('message', 'Duhet te plotesoni fushat e detyruara');
            Session()->flash('class', 'Danger');
            return redirect()->back()->withInput();
        }

        $brand->update([
            'name'  =>  $request->name,
            'title'  =>  $request->title,
            'title_en'  =>  $request->title_en,
            'category'  =>  $request->category,
            'category_en'  =>  $request->category_en,
            'description'  =>  $request->description,
            'description_en'  =>  $request->description_en,
        ]);
        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension, PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111, 99999) . '.' . $extension;
                $medium_image_path = public_path('images/brands/') . $imageName;
                Image::make($image_temp)->resize(760, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $brand->image = $imageName;
            } else {
                $brand->image = '';
            }
        }

        if ($request->hasFile('banner')) {
            $image_temp1 = $request->file('banner');
            if ($image_temp1->isValid()) {
                $img_extension1 = $image_temp1->getClientOriginalName();
                $img_name1      = pathinfo($img_extension1, PATHINFO_FILENAME);
                $extension1     = $image_temp1->getClientOriginalExtension();
                $imageName1     = $img_name1 . '-' . rand(111, 99999) . '.' . $extension1;
                $medium_image_path1 = public_path('images/brands/') . $imageName1;
                Image::make($image_temp1)->save($medium_image_path1);
                $brand->banner = $imageName1;
            } else {
                $brand->banner = '';
            }
        }
        if ($request->hasFile('logo')) {
            $image_temp1 = $request->file('logo');
            if ($image_temp1->isValid()) {
                $img_extension1 = $image_temp1->getClientOriginalName();
                $img_name1      = pathinfo($img_extension1, PATHINFO_FILENAME);
                $extension1     = $image_temp1->getClientOriginalExtension();
                $imageName1     = $img_name1 . '-' . rand(111, 99999) . '.' . $extension1;
                $medium_image_path1 = public_path('images/brands/') . $imageName1;
                Image::make($image_temp1)->save($medium_image_path1);
                $brand->logo = $imageName1;
            } else {
                $brand->logo = '';
            }
        }


        $brand->save();
        $notification = array('message' => 'Brandi u përditsua me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $brand = Brand::FindOrFail($id);
        $brand->delete();
        $notification = array('message' => 'Brandi u fshi me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function all_brands_search(Request $request)
    {
        if ($request->ajax()) {
            $data = Brand::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('brand.edit', $row->id);
                    $deleteUrl = route('brand.destroy', $row->id);
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
                        $instance->where(function ($w) use ($request) {
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
}
