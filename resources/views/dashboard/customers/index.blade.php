{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Customers</a></li>
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
                                    <th class="align-middle ">Role</th>
                                    <th class="no-sort"></th>
                                </tr>
                                </thead>
                                <tbody id="orders">
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        <div class="custom-control custom-checkbox checkbox-success">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox"></label>
                                        </div>
                                    </td>
                                    <td class="py-2">
                                        <a href="#">
                                            <strong>#181</strong></a></td>
                                    <td class="py-2">Ricky Jatsy</td>
                                    <td class="py-2">
                                        <a href="mailto:ricky@example.com">ricky@example.com</a>
                                    </td>
                                    <td class="py-2">+92-314-3210998
                                    </td>
                                    <td class="py-2">User</td>
                                    <td class="py-2 text-right">
                                        <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                        </div>
                        </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                            <td class="py-2">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                                    <label class="custom-control-label" for="checkbox1"></label>
                                </div>
                            </td>
                            <td class="py-2">
                                <a href="#">
                                    <strong>#182</strong></a></td>
                            <td class="py-2">James Lucas</td>
                            <td class="py-2">
                                <a href="mailto:ricky@example.com">james@example.com</a>
                            </td>
                            <td class="py-2">+92-314-3200000
                            </td>
                            <td class="py-2">Super Admin</td>
                            <td class="py-2 text-right">
                                <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                                    </div>
                                </div>
                    </div>
                    </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                        <td class="py-2">
                            <div class="custom-control custom-checkbox checkbox-secondary">
                                <input type="checkbox" class="custom-control-input" id="checkbox2">
                                <label class="custom-control-label" for="checkbox2"></label>
                            </div>
                        </td>
                        <td class="py-2">
                            <a href="#">
                                <strong>#183</strong></a></td>
                        <td class="py-2">OliverJucas</td>
                        <td class="py-2">
                            <a href="mailto:ricky@example.com">oliver@example.com</a>
                        </td>
                        <td class="py-2">+92-314-3210888
                        </td>
                        <td class="py-2">User</td>
                        <td class="py-2 text-right">
                            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                                </div>
                            </div>
                </div>
                </td>
                </tr>
                <tr class="btn-reveal-trigger">
                    <td class="py-2">
                        <div class="custom-control custom-checkbox  checkbox-warning">
                            <input type="checkbox" class="custom-control-input" id="checkbox3">
                            <label class="custom-control-label" for="checkbox3"></label>
                        </div>
                    </td>

                    <td class="py-2">
                        <a href="#">
                            <strong>#184</strong></a></td>
                    <td class="py-2">James William</td>
                    <td class="py-2">
                        <a href="mailto:ricky@example.com">james@example.com</a>
                    </td>
                    <td class="py-2">+92-314-3210111
                    </td>
                    <td class="py-2">Admin</td>
                    <td class="py-2 text-right">
                        <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                        </div>
            </div>
            </td>
            </tr>
            <tr class="btn-reveal-trigger">
                <td class="py-2">
                    <div class="custom-control custom-checkbox checkbox-secondary">
                        <input type="checkbox" class="custom-control-input" id="checkbox4">
                        <label class="custom-control-label" for="checkbox4"></label>
                    </div>
                </td>
                <td class="py-2">
                    <a href="#">
                        <strong>#185</strong></a></td>
                <td class="py-2">Liam Noah</td>
                <td class="py-2">
                    <a href="mailto:ricky@example.com">liam@example.com</a>
                </td>
                <td class="py-2">+92-314-3211111
                </td>
                <td class="py-2">Super Admin</td>
                <td class="py-2 text-right">
                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                        <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                        </div>
                    </div>
        </div>
        </td>
        </tr>
        <tr class="btn-reveal-trigger">
            <td class="py-2">
                <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" id="checkbox5">
                    <label class="custom-control-label" for="checkbox5"></label>
                </div>
            </td>
            <td class="py-2">
                <a href="#">
                    <strong>#186</strong></a></td>
            <td class="py-2">Benjamin Lucas</td>
            <td class="py-2">
                <a href="mailto:ricky@example.com">benjamin@example.com</a>
            </td>
            <td class="py-2">+92-314-3210123
            </td>
            <td class="py-2">User</td>
            <td class="py-2 text-right">
                <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                    </div>
                </div>
    </div>
    </td>
    </tr>
    <tr class="btn-reveal-trigger">
        <td class="py-2">
            <div class="custom-control custom-checkbox checkbox-success">
                <input type="checkbox" class="custom-control-input" id="checkbox6">
                <label class="custom-control-label" for="checkbox6"></label>
            </div>
        </td>
        <td class="py-2">
            <a href="#">
                <strong>#187</strong></a></td>
        <td class="py-2">William Ricky</td>
        <td class="py-2">
            <a href="mailto:ricky@example.com">williamricky@example.com</a>
        </td>
        <td class="py-2">+92-314-3210443
        </td>
        <td class="py-2">User</td>
        <td class="py-2 text-right">
            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                </div>
            </div>
            </div>
        </td>
    </tr>
    <tr class="btn-reveal-trigger">
        <td class="py-2">
            <div class="custom-control custom-checkbox checkbox-secondary">
                <input type="checkbox" class="custom-control-input" id="checkbox7">
                <label class="custom-control-label" for="checkbox7"></label>
            </div>
        </td>
        <td class="py-2">
            <a href="#">
                <strong>#188</strong></a></td>
        <td class="py-2">Elijah Jatsy</td>
        <td class="py-2">
            <a href="mailto:ricky@example.com">elijah@example.com</a>
        </td>
        <td class="py-2">+92-314-3210443
        </td>
        <td class="py-2">User</td>
        <td class="py-2 text-right">
            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                </div>
            </div>
            </div>
        </td>
    </tr>
    <tr class="btn-reveal-trigger">
        <td class="py-2">
            <div class="custom-control custom-checkbox ">
                <input type="checkbox" class="custom-control-input" id="checkbox8">
                <label class="custom-control-label" for="checkbox8"></label>
            </div>
        </td>
        <td class="py-2">
            <a href="#">
                <strong>#189</strong></a></td>
        <td class="py-2">Noah Watsy</td>
        <td class="py-2">
            <a href="mailto:ricky@example.com">noahwatsy@example.com</a>
        </td>
        <td class="py-2">+92-314-2139004
        </td>
        <td class="py-2">Admin</td>
        <td class="py-2 text-right">
            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                </div>
            </div>
            </div>
        </td>
    </tr>
    <tr class="btn-reveal-trigger">
        <td class="py-2">
            <div class="custom-control custom-checkbox checkbox-success">
                <input type="checkbox" class="custom-control-input" id="checkbox9">
                <label class="custom-control-label" for="checkbox9"></label>
            </div>
        </td>
        <td class="py-2">
            <a href="#">
                <strong>#190</strong></a></td>
        <td class="py-2">Kamil Woah</td>
        <td class="py-2">
            <a href="mailto:ricky@example.com">kamil@example.com</a>
        </td>
        <td class="py-2">+92-314-3210121
        </td>
        <td class="py-2">User</td>
        <td class="py-2 text-right">
            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                </div>
            </div>
            </div>
        </td>
    </tr>
    <tr class="btn-reveal-trigger">
        <td class="py-2">
            <div class="custom-control custom-checkbox checkbox-success">
                <input type="checkbox" class="custom-control-input" id="checkbox10">
                <label class="custom-control-label" for="checkbox10"></label>
            </div>
        </td>
        <td class="py-2">
            <a href="#">
                <strong>#191</strong></a></td>
        <td class="py-2">Ricky Jatsy</td>
        <td class="py-2">
            <a href="mailto:ricky@example.com">ricky@example.com</a>
        </td>
        <td class="py-2">+92-314-3210090
        </td>
        <td class="py-2">Admin</td>
        <td class="py-2 text-right">
            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                </div>
            </div>
            </div>
        </td>
    </tr>
    <tr class="btn-reveal-trigger">
        <td class="py-2">
            <div class="custom-control custom-checkbox ">
                <input type="checkbox" class="custom-control-input" id="checkbox11">
                <label class="custom-control-label" for="checkbox11"></label>
            </div>
        </td>
        <td class="py-2">
            <a href="#">
                <strong>#192</strong></a></td>
        <td class="py-2">Ricky Jatsy</td>
        <td class="py-2">
            <a href="mailto:ricky@example.com">ricky@example.com</a>
        </td>
        <td class="py-2">+92-314-3210998
        </td>
        <td class="py-2">User</td>
        <td class="py-2 text-right">
            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                </div>
            </div>
            </div>
        </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
