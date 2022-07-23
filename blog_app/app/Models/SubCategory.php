<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected  $table='sub_categories';

    protected $fillable =['title','title_en','title_ru','slug','category_id'];

    public  function  category(){
       return $this->hasOne(Category::class,'id','category_id');
    }

}
