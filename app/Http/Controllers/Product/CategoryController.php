<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection=Category::where('status',1)->latest()->paginate(8);
        return view('admin.product.category.index', ['collection'=>$collection]);
    }

     // public function get_category_json(){
    //      $main_category_id = Session::get('selected_json_main_category_id'); 
    
    //      if($main_category_id){
    //     $collection = Category::where('main_category_id',$main_category_id)->where('status',1)->latest()->get();
    //      Session::forget('selected_json_main_category_id');
    //      }else{
    //     $collection = Category::where('status',1)->latest()->get();
    //      }
    
        
    //     $options = "";

    //     foreach ($collection as $key => $value) {
            
    //         $options.="<option ".($key==0?'selected':'')." value='".$value->id."'>".$value->name."</option>";
    //     }
    //     return $options;

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_category=MainCategory::where('status',1)->latest()->get();
        return view('admin.product.category.create', compact('main_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>['required'],
            'icon'=>['required']
        ]);

        $category = Category::create($request->except('icon'));
        if($request->hasfile('icon')){
            $category->icon = Storage::put('uploads/category', $request->file('icon'));
            $category->save();
        }
        $category->slug = Str::slug($category->name);
        $category->creator = Auth::user()->id;
        $category->save();

        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        
        $category =Category::where('id',$category)->first();
        return view('admin.product.category.view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $main_category=MainCategory::where('status',1)->latest()->get();
        return view('admin.product.category.edit',compact('category','main_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name'=>['required']
            
        ]);
        $category = $category;
        $category->update($request->except('icon'));

        if($request->hasfile('icon')){
            $category->icon = Storage::put('uploads/category', $request->file('icon'));
            $category->save();
        }
        $category->slug = Str::slug($category->name);
        $category->creator = Auth::user()->id;
        $category->save();

        // return redirect()->route('category.index', $category->id);
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category = $category;
        $category->delete();
        return response('success');
    }

    public function get_category_by_main_category($main_category_id){
        $categories = Category::where('main_category_id', $main_category_id)->get();
        $option = "";

        foreach ($categories as $key => $value) {
            $id = $value->id;
            $name = $value->name;
            $option.="<option value='$id'>$name</option>";
        }
        return $option;

    }
}
