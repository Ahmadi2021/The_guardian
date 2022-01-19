<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'bank_name',
        'account_number',
        'user_id',
    ];
    public function orders(){
        return $this->belongsToMany(Order::class);
    }
}
