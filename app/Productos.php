<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
     protected $table = 'productos';
	protected $fillable = ['name', 'slug', 'description', 'extract', 'image', 'visible', 'price', 'category_id'];
    
    // Relation with Category
    public function category()
    {
        return $this->belongsTo('App\Categoria');
    }
    // Relation with OrderItem
    public function order_item()
    {
        return $this->hasOne('App\OrderItem');
    }
}
