<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection=MainCategory::where('status',1)->latest()->paginate(8);
        return view('admin.product.main_category.index', ['collection'=>$collection]);
    }

    // public function get_main_category_json(){
    //     $collection = MainCategory::where('status',1)->latest()->get();
    //     $latest_main_category = MainCategory::where('status',1)->latest()->first();
    //     Session::put('selected_json_main_category_id', $latest_main_category->id);
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
        return view('admin.product.main_category.create');
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
        $main_category = MainCategory::create($request->except('icon'));
        if($request->hasfile('icon')){
            $main_category->icon = Storage::put('uploads/main_category', $request->file('icon'));
            $main_category->save();
        }
        $main_category->slug = Str::slug($main_category->name);
        $main_category->creator = Auth::user()->id;
        $main_category->save();

        // return redirect()->route('main_category.index', $main_category->id);
        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($main_category)
    {
        $main_category = MainCategory::where('id',$main_category)->first();
        return view('admin.product.main_category.view', compact('main_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MainCategory $main_category)
    {
        return view('admin.product.main_category.edit',['main_category'=>$main_category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainCategory $main_category)
    {
        $this->validate($request,[
            'name'=>['required']
            
        ]);
        $main_category = $main_category;
        $main_category->update($request->except('icon'));

        if($request->hasfile('icon')){
            $main_category->icon = Storage::put('uploads/main_category', $request->file('icon'));
            $main_category->save();
        }
        $main_category->slug = Str::slug($main_category->name);
        $main_category->creator = Auth::user()->id;
        $main_category->save();

        // return redirect()->route('main_category.index', $main_category->id);
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainCategory $main_category)
    {
        $main_category = $main_category;
        $main_category->delete();
        return response('success');
    }
}
