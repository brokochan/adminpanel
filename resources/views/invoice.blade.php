@extends('layouts.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-3 text-gray-800">Invoice</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="/maskapaiadd" class="btn btn-primary mr-2"><i class="fa fa-plus"></i> Add Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>
                                <button class="btn btn-sm btn-success"><i class="fa fa-print"></i> Print</button>
                                <button class="btn btn-sm btn-info" type="button"><i class="fa fa-eye"></i>
                                    View</button>
                                <button class="btn btn-sm btn-warning" type="button"><i class="fa fa-pen"></i>
                                    Edit</button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                            <td>
                                <button class="btn btn-sm btn-success"><i class="fa fa-print"></i> Print</button>
                                <button class="btn btn-sm btn-info" type="button"><i class="fa fa-eye"></i>
                                    View</button>
                                <button class="btn btn-sm btn-warning" type="button"><i class="fa fa-pen"></i>
                                    Edit</button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                            <td>
                                <button class="btn btn-sm btn-success"><i class="fa fa-print"></i> Print</button>
                                <button class="btn btn-sm btn-info" type="button"><i class="fa fa-eye"></i>
                                    View</button>
                                <button class="btn btn-sm btn-warning" type="button"><i class="fa fa-pen"></i>
                                    Edit</button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                            <td>
                                <button class="btn btn-sm btn-success"><i class="fa fa-print"></i> Print</button>
                                <button class="btn btn-sm btn-info" type="button"><i class="fa fa-eye"></i>
                                    View</button>
                                <button class="btn btn-sm btn-warning" type="button"><i class="fa fa-pen"></i>
                                    Edit</button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                            <td>
                                <button class="btn btn-sm btn-success"><i class="fa fa-print"></i> Print</button>
                                <button class="btn btn-sm btn-info" type="button"><i class="fa fa-eye"></i>
                                    View</button>
                                <button class="btn btn-sm btn-warning" type="button"><i class="fa fa-pen"></i>
                                    Edit</button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection