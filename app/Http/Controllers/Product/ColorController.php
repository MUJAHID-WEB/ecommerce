<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection=Color::where('status',1)->latest()->paginate(8);
        return view('admin.product.color.index', ['collection'=>$collection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.color.create');
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
            'name'=>['required']
            
        ]);
        $color = Color::create($request->all());
        // $color = Color::create($request->except('logo'));
        // if($request->hasfile('logo')){
        //     $brand->logo = Storage::put('uploads/brand', $request->file('logo'));
        //     $brand->save();
        // }
        $color->slug = Str::slug($color->name);
        $color->creator = Auth::user()->id;
        $color->save();

        // return redirect()->route('color.index', $color->id);
        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($color)
    {
        $color = Color::where('id',$color)->first();
        return view('admin.product.color.view', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        return view('admin.product.color.edit',['color'=>$color]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
        $this->validate($request,[
            'name'=>['required']
            
        ]);
        $color = $color;
        $color->update($request->all());
        // $brand->update($request->except('logo'));
        // if($request->hasfile('logo')){
        //     $brand->logo = Storage::put('uploads/brand', $request->file('logo'));
        //     $brand->save();
        // }
        $color->slug = Str::slug($color->name);
        $color->creator = Auth::user()->id;
        $color->save();

        // return redirect()->route('size.index', $color->id);
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        $color = $color;
        $color->delete();
        return response('success');
    }
}
