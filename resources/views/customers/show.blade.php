@extends('layouts.app')
@section('title', 'Details for '.$customer->name)

@section('content')


    <div class="row">
        <div class="col-12">
            <h1>Details for {{$customer->name}}</h1>
            <a class="btn btn-primary" href="/customers/{{$customer->id}}/edit">Edit</a>
            <form action="/customers/{{$customer->id}}" method="post" >
                @method('delete')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-12">
            <p><strong>Name</strong> : {{$customer->name}}</p>
            <p><strong>Email</strong> : {{$customer->email}}</p>
            <p><strong>Status</strong> : {{$customer->active}}</p>
            <p><strong>Company</strong> : {{$customer->company->name}}</p>
        </div>
    </div>

@endsection
