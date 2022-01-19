@extends('layout.default')

@section('content')
    @section('title', 'New Order')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add New Order</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Add new Order</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Order</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            @if(Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <strong>Success!</strong> {{session::get('success')}}
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                </div>
                            @elseif(Session::get('error'))
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                    <strong>Error!</strong> {{session::get('error')}}.
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                </div>
                            @endif
                            <form class="form-valide" action="{{route('orders.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"  i name="title" placeholder="Enter title.." required>
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">{{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-suggestions">Description
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="10" placeholder="Enter description" required> {{ old('description') }}</textarea>
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-skill">Budget
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <input type="number" class="form-control @error('budget') is-invalid @enderror" value="{{ old('budget') }}"  name="budget" placeholder="Enter Your Budget" required>
                                                @error('budget')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-skill">Deadline
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <input type="date" class="form-control @error('deadline') is-invalid @enderror" value="{{ old('deadline') }}"  name="deadline" placeholder="Enter Your Budget" required>
                                                @error('deadline')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-phoneus">Upload Document
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control @error('document') is-invalid @enderror" value="{{ old('document') }}" name="document" placeholder="Upload your Document" required>
                                                @error('document')
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
