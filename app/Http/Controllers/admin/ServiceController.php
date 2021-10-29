<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use Image;
class ServiceController extends Controller
{


    public function ServiceIndex(){
       $data['service'] = Service::get();
    	return view('backend/service/index',$data);
    }

    public function ServiceCreate(){

    	return view('backend/service/create');
    }

    public function ServiceStore(Request $request){


    	// return $request->all();


    	 $request->validate([
          'title'=>'required',
          // 'sub_title'=>'required',
          'description'=>'required',
    	 ]);

    	$store = new Service();
    	$store->title = $request->title; 
    	$store->sub_title = $request->sub_title; 
    	$store->short_title = $request->short_title; 
    	$store->description = $request->description; 
    	 
    	 if ($request->image) {
    	 	
    	   $image = $request->file('image');
    	   $fullName = time().'.'.$image->getClientOriginalExtension();

    	   Image::make($image)->resize(2050,1500)->save('upload/service/'.$fullName);
    	   $store->image = $fullName;
    	   $store->save();

    	 }

    	 $store->save();

    	return redirect()->route('ServiceIndex')->with('successMsg','Slider Successfully Saved');


    }

    public function ServiceEdite($id){
    
     $data['edite'] = Service::find($id);

     return view('backend/service/edite',$data);

    } 

      public function ServiceUpdate(Request $request){
    
        $update = Service::find($request->EditeId);

    	$update->title = $request->title; 
    	$update->sub_title = $request->sub_title; 
    	$update->short_title = $request->short_title; 
    	$update->description = $request->description;
   
      if ($request->image) {
    	 	
    	   $image = $request->file('image');
    	   $fullName = time().'.'.$image->getClientOriginalExtension();
    	   @unlink('upload/service/'.$update->image);

    	   Image::make($image)->resize(1920,1100)->save('upload/service/'.$fullName);
    	   $update->image = $fullName;
    	   $update->save();

    	 }
        $update->save();

    	return redirect()->route('ServiceIndex')->with('successMsg','Slider Successfully Update');

    }

    public function ServiceDelete($id){

    	$delete = Service::find($id);

    	if ($delete) {
    	  
    	  @unlink('upload/service/'.$delete->image);

    	  $delete->delete();
    	}

     
     return redirect()->route('ServiceIndex')->with('successMsg','Slider Successfully Delete');

    }

}
