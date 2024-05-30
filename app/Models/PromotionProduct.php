<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromotionProduct extends Model
{
    use HasFactory ,SoftDeletes;
    
    protected $fillable =[
        'title',
        'discount',
    
    ];
    public function products():HasMany
    {
        return $this->hasMany(PromotionProduct::class);
    }
    public static function list(){
        $data = self::all();
        return $data;
    }
  
    public static function store($request,$id=null){
        $data = $request->only('title', 'discount');
        $data = self::updateOrCreate(['id' => $id], $data);

    }
}
