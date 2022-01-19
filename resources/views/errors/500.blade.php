
@extends('layout.fullwidth')

@section('title', __('Server Error'))
{{-- Content --}}
@section('content')
    <div class="col-md-5">
        <div class="form-input-content text-center error-page">
            <h1 class="error-text font-weight-bold">500</h1>
            <h4><i class="fa fa-times-circle text-danger"></i> Internal Server Error</h4>
            <p>{{$message}}</p>
            <div>
                <a class="btn btn-primary" href="{{route('dashboard')}}">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
