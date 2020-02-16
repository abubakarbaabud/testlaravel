@extends('layouts.app')
@section('title','Contact Us')

@section('content')

<h1>Contact Us</h1>
<p class="">Company Number</p>
<p class="">1234-1234</p>

@if( ! session()->has('message'))
<form action="{{route('contact.store')}}" method="post" class="py-5">
    @csrf
    <div class="form-group pb-2">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="name" value="{{old('name')}}">
        <div>{{$errors->first('name')}}</div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" placeholder="email" value="{{old('email')}}">
        <div>{{$errors->first('email')}}</div>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
        <div>{{$errors->first('message')}}</div>
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
</form>
    @endif


    @endsection
