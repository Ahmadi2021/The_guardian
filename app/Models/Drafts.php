<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drafts extends Model
{
    use HasFactory;
    protected  $fillable =[
        'title',
        'description',
        'type',
        'file',
        'creator_type',
        'creator_id',
        'order_id',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
}
