<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection=Brand::where('status',1)->latest()->paginate(8);
        return view('admin.product.brand.index', ['collection'=>$collection]);
        
        // return view('admin.product.brand.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.brand.create');
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
            
        ]);

        $brand = Brand::create($request->except('logo'));
        if($request->hasfile('logo')){
            $brand->logo = Storage::put('uploads/brand', $request->file('logo'));
            $brand->save();
        }
        $brand->slug = Str::slug($brand->name);
        $brand->creator = Auth::user()->id;
        $brand->save();

        // return redirect()->route('brand.index', $brand->id);
        return 'success';
        // return response()->json([
        //     'html' => "<option value='".$brand->id."'>".$brand->name."</option>",
        //     'value' => $brand->id,
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($brand)
    {
        $brand = Brand::where('id',$brand)->first();
        return view('admin.product.brand.view', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        // $brand= Brand::find($id);
        // return view('admin.product.brand.edit', compact('brand'));

        return view('admin.product.brand.edit',['brand'=>$brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request,[
            'name'=>['required']
        ]);

        $brand = $brand;
        $brand->update($request->except('logo'));
        if($request->hasfile('logo')){
            $brand->logo = Storage::put('uploads/brand', $request->file('logo'));
            $brand->save();
        }
        $brand->slug = Str::slug($brand->name);
        $brand->creator = Auth::user()->id;
        $brand->save();

        // return redirect()->route('brand.index', $brand->id);
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {

        $brand = $brand;
        $brand->delete();
        return response('success');
  
        
    }
}
