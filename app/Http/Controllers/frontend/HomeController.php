<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Activity;

class HomeController extends Controller
{
    public function home(){
      $activities = Activity::paginate(5);
      return view('frontend.home',compact('activities')); 
    }

   public function brand(){
      return view('frontend.brand');
   }

   public function activity(Request $request,$id){
      $activity = Activity::findOrFail($id);
      $other_activities = Activity::where('id','!=',$activity->id)->orderBy('id','DESC')->paginate(5);

      return view('frontend.activities',compact('activity','other_activities'));
   }

   public function activities(){
      $activities = Activity::paginate(10);
      return view('frontend.activity-pages',compact('activities'));
   }

   public function services(){
      return view('frontend.services');
   }

   public function about(){
      return view('frontend.about');
   }

   public function contact(){
      return view('frontend.contact');
   }

   public function product(Request $request,$id){
    $brand    = Brand::findOrFail($id);
    $products = Product::where('brand','=',$brand->name)->get();
    $other_brands = Brand::where('id', '!=' , $brand->id)->get();
    
    if(!empty($products[0])){
      $categories = Category::where('brand','=',$products[0]->brand)->get();
      return view('frontend.product',compact('products','brand','categories','other_brands'));
   }

    $categories = null;
    $products = null;
    return view('frontend.product',compact('brand','categories','products','other_brands'));
   }
}
