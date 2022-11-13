@extends('layouts.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-3 text-gray-800">Add Data Invoice</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header">
                            Invoice Details
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label"><strong>Name</strong></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Name...">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label"><strong>Type</strong></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label"><strong>Airplane</strong></label>
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
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label"><strong>Layout</strong></label>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label">Seat
                                                Arrangement</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label">Distance between
                                                Seats</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label"><strong>Price</strong></label>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1" class="form-label">Adult
                                                Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1" class="form-label">Children's
                                                Prices</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1" class="form-label">Baby
                                                Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label"><strong>Baggage</strong></label>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1" class="form-label">Baggage
                                                Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1" class="form-label">Capacity</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Kg</span>
                                                <input type="text" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label"><strong>Profit</strong></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <strong>Refund</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <strong>Reschedule</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <strong>Meals on board</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <strong>Entertainment on the plane</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <strong>Power outlet & USB</strong>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            Flight Details
                        </div>
                        <div class="card-body">
                            <button class="btn btn-sm btn-info mb-3"><i class="fa fa-plus"></i> Add Details</button>
                            <div class="card mb-3">
                                <div class="card-header">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label"><strong>From</strong></label>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Time</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Airplane</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label"><strong>To</strong></label>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Time</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Airplane</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label"><strong>From</strong></label>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Time</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Airplane</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label"><strong>To</strong></label>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Time</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Airplane</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>

        </div>
    </div>




</div>

@endsection