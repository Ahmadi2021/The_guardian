<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Traits\HasOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderStatusController extends Controller
{
    use HasOwner;
    private $owner;

    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->owner = $this->getOwner(auth()->user()->roles()->first()->name);
            return $next($request);
        });
    }

    public function index($status)
    {
        $orders = $this->owner
            ->orders()
            ->when($status === 'latest', function ($query)use($status){
                $query->where('created_at', '>', Carbon::now()->subDay(3));
            })
            ->when($status !== 'latest', function ($query)use($status){
                $query->where('status', $status);
            })
            ->with(['customer:id,user_id', 'customer.user:id,name'])
            ->paginate(12);

        return view('dashboard.orders.orders', compact('orders', 'status'));
        // TODO: Implement __invoke() method.
    }
}
