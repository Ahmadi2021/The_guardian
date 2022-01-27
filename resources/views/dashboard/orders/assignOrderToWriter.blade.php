@extends('layout.default')
{{-- Content --}}
@section('content')

    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Orders</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Assign Order To Writer</a></li>
            </ol>
        </div>
        <div class="row">
            @if(session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="form-valide" action="{{route('writerOrder.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-skill">Writer
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <select class="form-control @error('writer') is-invalid @enderror" value="{{ old('writer') }}"  name="writer_id" placeholder="Enter Your Budget" required>

                                                    @foreach($writers as $writer)
                                                    <option value="{{$writer->id}}">{{$writer->bank_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('writer')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="order">Order
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <select class="form-control id='order' @error('order') is-invalid @enderror" value="{{ old('order') }}"  name="order_id"  required>
                                                    @foreach($orders as $order)
                                                        <option value="{{$order->id}}">{{$order->title}}</option>
                                                    @endforeach

                                                </select>
                                                @error('order')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn ml-4 btn-primary">Submit</button>
                                        <a href="{{route('dashboard')}}" class="btn ml-4 btn-primary">Cancel</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
