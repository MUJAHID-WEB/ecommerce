<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public static function scopeActive($query){
        return $query->where('status',1);
    }

    public function status(){
        return $this->belongsTo('App\Models\Status','status','serial');
    }
    public function brand_info(){
        return $this->belongsTo('App\Models\Brand','brand_id');
    }
    public function creator_info(){
        return $this->belongsTo('App\Models\User','creator');
    }

    public function main_category(){
        return $this->belongsToMany('App\Models\MainCategory')->withTimestamps();
    }
    public function main_category_info(){
        return $this->belongsTo('App\Models\MainCategory','main_category_id');
    }
    public function category(){
        return $this->belongsToMany('App\Models\Category')->withTimestamps();
    }
    public function category_info(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
    public function sub_category(){
        return $this->belongsToMany('App\Models\SubCategory')->withTimestamps();
    }
    public function color(){
        return $this->belongsToMany('App\Models\Color')->withTimestamps();
    }
    public function image(){
        return $this->belongsToMany('App\Models\Image')->withTimestamps();
    }
    public function publication(){
        return $this->belongsToMany('App\Models\Publication')->withTimestamps();
    }
    public function size(){
        return $this->belongsToMany('App\Models\Size')->withTimestamps();
    }
    public function unit(){
        return $this->belongsToMany('App\Models\Unit')->withTimestamps();
    }
    public function vendor(){
        return $this->belongsToMany('App\Models\Vendor')->withTimestamps();
    }
    public function writer(){
        return $this->belongsToMany('App\Models\Writer')->withTimestamps();
    }
    
}
