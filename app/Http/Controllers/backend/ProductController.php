<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index()
    {
        return view('backend.products.index');
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('backend.products.create', compact('brands', 'categories'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brands = Brand::all();
        $categories = Category::all();
        return view('backend.products.edit', compact('product', 'brands', 'categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required',
                'image'     => 'required'
            ]
        );
        if ($validator->fails()) {
            Session()->flash('message', 'Duhet te plotesoni fushat e detyruara');
            Session()->flash('class', 'danger');
            return redirect()->back()->withInput();
        }

        $product                = new Product();
        $product->name          = $request->name;
        $product->brand         = $request->brand;
        $product->barcode       = $request->barcode;
        $product->system_code   = $request->system_code;
        $product->packet_code   = $request->packet_code;
        $product->package       = $request->package;
        $product->pieces        = $request->pieces;
        $product->lifespan      = $request->lifespan;
        $product->category      = $request->category;

        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension, PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111, 99999) . '.' . $extension;
                $medium_image_path = public_path('images/products/') . $imageName;
                Image::make($image_temp)->resize(760, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $product->image = $imageName;
            } else {
                $product->image = '';
            }
        }

        $product->save();
        $notification = array('message' => 'Produkti u shtua me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required',
            ]
        );
        if ($validator->fails()) {
            Session()->flash('message', 'Duhet te plotesoni fushat e detyruara');
            Session()->flash('class', 'danger');
            return redirect()->back()->withInput();
        }


        $product->update([
            'name'          => $request->name,
            'brand'         => $request->brand,
            'barcode'       => $request->barcode,
            'system_code'   => $request->system_code,
            'packet_code'   => $request->packet_code,
            'package'       => $request->package,
            'pieces'        => $request->pieces,
            'lifespan'      => $request->lifespan,
            'category'      => $request->category
        ]);

        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension, PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111, 99999) . '.' . $extension;
                $medium_image_path = public_path('images/products/') . $imageName;
                Image::make($image_temp)->resize(760, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $product->image = $imageName;
            } else {
                $product->image = '';
            }
        }

        $product->save();
        $notification = array('message' => 'Produkti u perditsua me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $notification = array('message' => 'Produkti u fshi me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function all_products_search(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('product.edit', $row->id);
                    $deleteUrl = route('product.destroy', $row->id);
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
                                ->orWhere('barcode', 'LIKE', "%$search%")
                                ->orWhere('system_code', 'LIKE', "%$search%");
                        });
                    }
                })

                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
