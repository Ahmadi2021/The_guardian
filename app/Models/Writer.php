<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
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
    public function skills(){
        return $this->belongsToMany(Skill::class);
    }
}
