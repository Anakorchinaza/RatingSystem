<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class review extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = [];

    public $sortable = [    'product_id',
                            'comments',
                            'star_rating',
                            'created_at'
                        ];

    //create relationship between product table and review table
    public function product(){
        return $this->belongsTo(Product::class);
    }

     //create relationship between user table and review table
     public function user(){
        return $this->belongsTo(User::class);
    }

   
}
