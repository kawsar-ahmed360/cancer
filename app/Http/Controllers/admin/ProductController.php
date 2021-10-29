<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductCategory;
use App\Products;
use Image;
class ProductController extends Controller
{
     
   //.....................Category Secton....................

	public function ProductCategoryIndex(){
      
      $categoryView = ProductCategory::get();

      return view('backend/product/product_category_index',compact('categoryView')); 
 
	}

    public function ProductCategoryCreate(){

    	return view('backend/product/product_category_create');
    }

    public function ProductCategoryStore(Request $request){

        $request->validate([
        'category_name'=>'required',
        'category_image'=>'required'
        ]);
     // return $request->all();

    	$category = new ProductCategory();
    	$category->category_name = $request->category_name;
    	$slug =str_slug($request->category_name);
        $category->slug = $slug;
    	if ($request->hasFile('category_image')) {
    		$image = $request->file('category_image');
    		$fullName = time().'.'.$image->getClientOriginalExtension();
    		Image::make($image)->resize(255,255)->save('upload/category_image/'.$fullName);
    		$category->category_image = $fullName;
    		$category->save();
    	}
    	$category->save();

    	return redirect()->route('ProductCategoryIndex')->with('successMsg','Slider Successfully Saved');
    }

    public function ProductCategoryEdite($id){

    	$edite = ProductCategory::find($id);

    	return view('backend/product/product_category_edite',compact('edite'));
    }

    public function ProductCategoryUpdate(Request $request,$id){

    	$request->validate([
    		'category_name'=>'required'
    	]);

    	$update = ProductCategory::find($id);
    	$update->category_name = $request->category_name;
    	if ($request->hasFile('category_image')) {
    		$image = $request->file('category_image');
    		$fullName = time().'.'.$image->getClientOriginalExtension();
    		@unlink('upload/category_image/'.$update->category_image);
    		Image::make($image)->resize(255,255)->save('upload/category_image/'.$fullName);
    		$update->category_image = $fullName;
    		$update->save();
    	}
    	$update->save();

    	return redirect()->route('ProductCategoryIndex')->with('successMsg','Slider Successfully Update');
    }

    public function ProductCategoryDelete($id){

    	$pro_cat = ProductCategory::where('id',$id)->first();

    	if ($pro_cat) {
    		@unlink('upload/category_image/'.$pro_cat->category_image);
    	}

    	ProductCategory::where('id',$id)->delete();

    	return redirect()->route('ProductCategoryIndex')->with('successMsg','Slider Successfully Delete');


    }



    //....................End Category Section.........................





    //........................ Products  Section...........................

    public function ProductCreate(){
        $data['category'] = ProductCategory::get();
    	return view('backend/product/product_create',$data);
    }

    public function ProductStore(Request $request){


    	$request->validate([
         'cat_id'=>'required',
         'product_name'=>'required',
         'product_image'=>'required',
    	]);

    	$product = new Products();
    	$product->cat_id = $request->cat_id;
    	$product->product_name = $request->product_name;
        $slug = str_slug($request->product_name);
        $product->slug = $slug;

    	if ($request->hasFile('product_image')) {
    		$image = $request->file('product_image');
    		$fullName = time().'.'.$image->getClientOriginalExtension();
    		// @unlink('upload/product_image/'.$update->category_image);
    		Image::make($image)->resize(255,255)->save('upload/product_image/'.$fullName);
    		$product->product_image = $fullName;
    		$product->save();
    	}
    	$product->save();

	   

         return redirect()->route('ProductIndex')->with('successMsg','Slider Successfully Inserted');
    }

    public function ProductIndex(){

    	$product = Products::get();

    	return view('backend/product/product_index',compact('product'));
    }

    public function ProductEdite($id){

    	$edite = Products::where('id',$id)->first();
        $category = ProductCategory::get();

    	return view('backend/product/product_edite',compact('edite','category'));

    	// dd($edite->toArray());
    }

    public function ProductUpdate(Request $request,$id){

    	$request->validate([
         'product_name'=>'required',
         // 'gallery_image'=>'required',
    	]);

    	$update = Products::where('id',$id)->first(); 

         $update->product_name = $request->product_name;
         $update->cat_id = $request->cat_id;

         if ($request->hasFile('product_image')) {
    		$image = $request->file('product_image');
    		$fullName = time().'.'.$image->getClientOriginalExtension();
    		@unlink('upload/product_image/'.$update->product_image);
    		Image::make($image)->resize(255,255)->save('upload/product_image/'.$fullName);
    		$update->product_image = $fullName;
    		$update->save();
    	}

    	$update->save();
       

    	return redirect()->back()->with('successMsg','Slider Successfully Update');


    }

    public function ProductDelete($id){
    
      $update = Products::where('id',$id)->first(); 

    	if ($update) {
         
            @unlink('upload/product_image/'.$update->product_image);
    		
    		
    	}

    		return redirect()->route('ProductIndex')->with('successMsg','Slider Successfully Update');

    }

}
