<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\CreateOrderRequest;
use App\Models\Order;
use App\Traits\HasOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    use HasOwner;

    private $owner;
//    public function __construct()
//    {
//        $this->middleware(function ($request, $next){
//            $this->owner = $this->getOwner(auth()->user()->roles()->first()->name);
//            return $next($request);
//        });
//    }

    public function index()
    {
//        $orders =  Order::query()->get();
        $orders= Order::with('writers')
            ->where('status','processing')
            ->get();
        return response()->json(['data'=>$orders]);

//        return view('dashboard.orders.latest', compact('orders'));

    }

    public function create()
    {
        return view('dashboard.orders.create');
    }

    public function store(CreateOrderRequest $request)
    {

        try {
            $fileName = strtolower(Str::random(10)) . '.' . $request->document->getClientOriginalExtension();

            $path = $request->file('document')->storeAs('public/orders',$fileName);
            $request->merge(['file' => $path . $fileName]);

            $order = $this->owner
                ->orders()
                ->create($request->all());

            if($order)
                return redirect()->back()->withSuccess('Order Successfully Submitted');
            else
                return redirect()->back()->withError('Order not Submitted');
        }catch(\Exception $exception){
            return view('errors.500')->with(['message'=>$exception->getMessage()]);
        }
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }

    public function ordersWithStatus(Request $request)
    {
        dd($request->all());
    }
}
