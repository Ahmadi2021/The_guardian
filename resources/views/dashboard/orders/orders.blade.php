{{-- Extends layout --}}
@extends('layout.default')

@section('title', ucfirst($status) . ' Orders')

{{-- Content --}}
@section('content')

    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Orders</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Latest Orders</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0 text-black">
                                <thead>
                                <tr>
                                    <th class="align-middle">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkAll">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th class="align-middle">Order no</th>
                                    <th class="align-middle pr-7">Date</th>
                                    <th class="align-middle pr-7">Deadline</th>
                                    <th class="align-middle minw200">Deliver To</th>
                                    <th class="align-middle text-right">Status</th>
                                    <th class="align-middle text-right">Amount</th>
                                    <th class="no-sort"></th>
                                </tr>
                                </thead>
                                <tbody id="orders">
                                    @foreach($orders as $order)
                                        <tr class="btn-reveal-trigger">
                                            <td class="py-2">
                                                <div class="custom-control custom-checkbox checkbox-success">
                                                    <input type="checkbox" class="custom-control-input" value="{{$order->id}}" id="checkbox">
                                                    <label class="custom-control-label" for="checkbox"></label>
                                                </div>
                                            </td>
                                            <td class="py-2">
                                                <a href="#">
                                                    <strong>#{{$order->order_id}}</strong></a></td>
                                            <td class="py-2">{{$order->created_at->format('d/M/Y')}}</td>
                                            <td class="py-2">{{date('d/M/Y', strtotime($order->deadline))}}</td>
                                            <td class="py-2">
                                                <strong>{{$order->customer->user->name}}</strong>
                                            </td>
                                            <td class="py-2 text-right">
                                                @if($order->status=== 'completed')
                                                    <span class="badge badge-success">Completed
                                                        <span class="ml-1 fa fa-check"></span>
                                                    </span>
                                                @elseif($order->status=== 'rejected')
                                                        <span class="badge badge-danger">Rejected
                                                        <span class="ml-1 fa fa-check"></span>
                                                    </span>
                                                @elseif($order->status=== 'confirmed')
                                                    <span class="badge badge-info">Confirmed
                                                        <span class="ml-1 fa fa-check"></span>
                                                    </span>
                                                @elseif($order->status=== 'processing')
                                                    <span class="badge badge-primary">Processing
                                                        <span class="ml-1 fa fa-redo"></span>
                                                    </span>
                                                @elseif($order->status=== 'on-hold')
                                                    <span class="badge badge-secondary">On Hold
                                                        <span class="ml-1 fa fa-ban"></span>
                                                    </span>
                                                @elseif($order->status=== 'pending')
                                                    <span class="badge badge-warning">Pending
                                                        <span class="ml-1 fas fa-stream"></span>
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="py-2 text-right">{{$order->budget}}
                                            </td>
                                            <td class="py-2 text-right">
                                                <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                        <div class="py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    {{$orders->links()}}
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
