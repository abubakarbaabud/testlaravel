@extends('layouts.app')
@section('title','Customers Section')
@section('content')


<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
        <p>
            <a href="customers/create"> Add New Customer</a>
        </p>
    </div>
</div>


@foreach($customers as $customer)
    <div class="row">
        <div class="col-1">
            {{$customer->id}}
        </div>
        <div class="col-3">
            <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
        </div>
        <div class="col-3">
            {{$customer->email}}
        </div>
        <div class="col-3">
            {{$customer->company->name}}
        </div>
        {{--Active Versi 2--}}
        <div class="col-2">
            {{$customer->active}}
        </div>

        {{-- Active Versi 1--}}
{{--        <div class="col-1">--}}
{{--            {{$customer->active ? 'Active':'Inactive'}}--}}
{{--        </div>--}}

    </div>


@endforeach

{{--<div class="row">--}}
{{--    <div class="col-6">--}}
{{--        <h4>Active Customer</h4>--}}
{{--        <ul>--}}
{{--            @foreach($activeCustomers as $activeCustomer)--}}
{{--                <li>{{$activeCustomer->name}}, <span class="text-muted">({{$activeCustomer->email}}), {{$activeCustomer->company->name}}</span></li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}


{{--    </div>--}}
{{--    <div class="col-6">--}}
{{--        <h4>Inactive Customer</h4>--}}
{{--        <ul>--}}
{{--            @foreach($inactiveCustomers as $inactiveCustomer)--}}
{{--                <li>{{$inactiveCustomer->name}}, <span class="text-muted">({{$inactiveCustomer->email}}), {{$inactiveCustomer->company->name}}</span></li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}

{{--    </div>--}}
{{--</div>--}}

{{--<hr>--}}

{{--<div class="row my-5">--}}
{{--    <div class="col-12">--}}
{{--        @foreach($companies as $company)--}}
{{--            <h3>{{$company->name}}</h3>--}}
{{--            <ol>--}}
{{--            @foreach($company->customers as $customer)--}}
{{--                <li>{{$customer->name}},<span class="text-muted"> {{$customer->email}}</span></li>--}}
{{--                @endforeach--}}
{{--            </ol>--}}

{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}
{{--<hr>--}}
{{--    --}}
@endsection
