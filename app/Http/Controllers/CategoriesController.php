<?php
namespace App\Http\Controllers;
use App\Http\Resources\CatResource;
use App\Cat;
use App\Product;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers;

class CategoriesController extends Controller
{
    
    public function index()
    {
        $cats=Cat::all();
        return view('categories.catproducts',compact('cats'));
        return CatResource::collection($cats);
    }

 public function store(Request $request){
        // return $request->all();
$validation = Validator::make($request->all(), [
    'name' => 'required',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,JPG,PNG,JPEG,GIF'
      ]);
        
        // return $request->image;
        if(isset( $request->image )){
       
            $photo =  $request->image;
             $fileName = time() .'.'. $photo->getClientOriginalExtension();
             $destinationPath = public_path('uploads/');
       
           $photo->move($destinationPath, $fileName);
            $fileNewName=  $fileName;
            // return $fileNewName;
        }else{
            $fileNewName='noimage.jpg';
        }
        $cat=new Cat();
        $cat->name=request('name');
        $cat->image=$fileNewName;

        $cat->save();
        return redirect('/home2');
       // return new CatResource($cat);
    }
    public function show($id){
        $cat=Cat::find($id);
        return view('categories.catproduct',compact('cat'));
        //return new CatResource($cat);
    }
     
 
     
     public function edit($id){
        $cat=Cat::find($id);
        return view('categories.editcat',compact('cat'));
     }
 
     public function update(Request $request,$id){
         $cat=Cat::find($id);
         $cat->name=$request->name;
         $cat->save();
         return redirect('/home2');
        // return new CatResource($cat);

   
     }

     public function destroy($id){
         $cat=Cat::find($id);
         $cat->delete();
         return back();

        // return new CatResource($cat);
     }
     public function showbin()
     {
         $cats=Cat::all();
         return view('categories.catproducts',compact('cats'));
         
     }
        public function restorebin($id){
         $cat=Cat::find($id);
         $cat->save();
         //return redirect('/pro');
     }
}

