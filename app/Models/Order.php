<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'title',
        'type',
        'description',
        'budget',
        'status',
        'is_assigned',
        'deadline',
        'payment_type',
        'payment_status',
        'file',
        'customer_id'
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function drafts(): HasMany
    {
        return $this->hasMany(Drafts::class);
    }

    public function revisions(): HasMany
    {
        return $this->hasMany(Revision::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class,'owner_id');
    }
    public function writers(){
        return $this->belongsToMany(Writer::class);
    }
    public function managers(){
        return $this->belongsToMany(Manager::class);
    }



}
