@extends('layouts.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-3 text-gray-800">Add Data Invoice</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-3">
        <div class="card-header">
            Invoice Details
        </div>
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label"><strong>No.
                                    Tiket</strong></label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="No. Tiket...">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label"><strong>Kode
                                    Booking</strong></label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Kode Booking...">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><strong>Name</strong></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><strong>Maskapai</strong></label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><strong>Airplane</strong></label>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">From</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">To</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>
            </form>
        </div>
    </div>

</div>

@endsection