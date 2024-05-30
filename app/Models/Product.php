<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'category_id',
        'description',

    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
    public static function list(){
        $data = self::all();
        return $data;
    }
    public static function store($request,$id=null){
        $data = $request->only('name','category_id', 'description');
        $data = self::updateOrCreate(['id'=> $id],$data);

    }
}
