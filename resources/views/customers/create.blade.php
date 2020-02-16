@extends('layouts.app')
@section('title','Add Customers Section')
@section('content')


    <div class="row">
        <div class="col-12">
            <h1>Add New Customers</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers" method="post">

                @include('customers.include.form')

                <button class="btn btn-primary" type="submit">Add Customer</button>
            </form>

        </div>
    </div>

@endsection
