<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection=Status::where('status',1)->latest()->paginate(8);
        return view('admin.product.status.index', ['collection'=>$collection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.status.create');
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
        $status = Status::create($request->all());
        // $size = Size::create($request->except('logo'));
        // if($request->hasfile('logo')){
        //     $brand->logo = Storage::put('uploads/brand', $request->file('logo'));
        //     $brand->save();
        // }
        $status->slug = Str::slug($status->name);
        $status->creator = Auth::user()->id;
        $status->save();

        // return redirect()->route('status.index', $status->id);
        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($status)
    {
        $status = Status::where('id',$status)->first();
        return view('admin.product.status.view', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('admin.product.status.edit',['status'=>$status]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
        $this->validate($request,[
            'name'=>['required']
            
        ]);
        $status = $status;
        $status->update($request->all());
        // $brand->update($request->except('logo'));
        // if($request->hasfile('logo')){
        //     $brand->logo = Storage::put('uploads/brand', $request->file('logo'));
        //     $brand->save();
        // }
        $status->slug = Str::slug($status->name);
        $status->creator = Auth::user()->id;
        $status->save();

        // return redirect()->route('status.index', $status->id);
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status = $status;
        $status->delete();
        return response('success');
    }
}
