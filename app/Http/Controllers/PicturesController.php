<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture;
use Illuminate\Support\Facades\Storage;

class PicturesController extends Controller
{
    public function create(){
        return view('Pictures_Folder.createNew');
    }

    public function save(Request $req){

        // Store the image
        $path = $req->file('product_image')->store('pimage','public');
    
        $fileUrl = Storage::url($path);
        
        // Insert product including category
        Picture::create([
            'name' => $req->input('Product_Name'), 
            'price' => $req->input('product_price'),
            'description' => $req->input('description'),
            'image' => $fileUrl,
            'artist' => $req->input('category', 'Unknown artist')
        ]);
    
        return redirect('/home');
    }
    

    public function index(){
        $pictures = Picture::get();
        return view('Pictures_Folder.index',['product' => $pictures]);
    }

    public function edit(Picture $item){
       return view('Pictures_Folder.edit', ['product'=>$item]);
    }

    public function update(Picture $item, Request $request){

        // store the file
        if($request->hasFile('product_image')){
            $path = $request->file('product_image')->store('pimage','public');
            $fileUrl = Storage::url($path);
        }else{
            $fileUrl = $item->image;
        }

        $item->update([
            'name'=>$request->input('Product_Name'),
            'price'=>$request->input('product_price'),
            'description'=>$request->input('description'),
            'artist' => $request->input('category', 'Unknown artist'),
            'image'=>$fileUrl
        ]);

        return redirect('pictures/index');

    }

    public function delete(Request $request){
        Picture::find($request->input('pro_id'))->delete();
        return redirect('pictures/index');
    }
}
