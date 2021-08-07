<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{
    public function index(){
        $collection=User::where('status',1)->get();
        return view('admin.index', ['collection'=>$collection]);
    }

    // Basic pages

    public function blade_index(){
        return view('admin.blank.index');
    }

    public function blade_create(){
        return view('admin.blank.create');
    }

    public function blade_view(){
        return view('admin.blank.view');
    }


}
