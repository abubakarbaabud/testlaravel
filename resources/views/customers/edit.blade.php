@extends('layouts.app')
@section('title','Edit Customer for'.$customer->name)
@section('content')


    <div class="row">
        <div class="col-12">
            <h1>Edit Customer for {{$customer->name}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers/{{$customer->id}}" method="post">

                @method('patch')
                @include('customers.include.form')

                <button class="btn btn-primary" type="submit">Save Customer</button>
            </form>

        </div>
    </div>


@endsection
