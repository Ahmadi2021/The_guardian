{{-- Extends layout --}}
@extends('layout.default')


zz
{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Writers</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">List</a></li>
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
                                                <th class="align-middle">ID</th>
                                                <th class="align-middle pr-7">Full Name</th>
                                                <th class="align-middle pr-7">Email</th>
                                                <th class="align-middle minw200">Contact No</th>
                                                <th class="align-middle text-right">Bank Name</th>
                                                <th class="align-middle text-right">Account Number</th>
                                                <th class="no-sort"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="orders">
                                        <?php  $count = 0; ?>
                                        @foreach($writers as $writer)
                                            <?php  $count++ ?>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="custom-control custom-checkbox checkbox-success">
														<input type="checkbox" class="custom-control-input" id="checkbox">
														<label class="custom-control-label" for="checkbox"></label>
													</div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <strong>#{{$count}}</strong></a></td>
                                                        <td class="py-2">{{$writer->user->name}}</td>
                                                <td class="py-2">
                                               <a href="mailto:ricky@example.com">{{$writer->user->email}}</a>
                                                </td>
                                                <td class="py-2">{{$writer->phone}}
                                                </td>
                                                <td class="py-2 text-right">{{$writer->bank_name}}</td>
                                                <td class="py-2 text-right">{{$writer->account_number}}</td>
                                                <td class="py-2 text-right">
                                                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="">Delete</a>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
