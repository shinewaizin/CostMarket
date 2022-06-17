@extends('master')

@section('title') Home Page @endsection


@section('contect')

<div class="main-container">
    <div class="container-fluid">
        <div class="w-100 d-flex justify-content-center">
            <h1 class="text-white  mt-5 mb-0">Cost For Market</h1>
        </div>
        <div class="row  vh-100 d-flex justify-content-center align-content-center">
            <div class="col-8 d-flex justify-content-center">
                <div class="d-flex justify-content-between align-items-center w-75">
                    <a href="{{ route('calculate') }}"><button class="btn btn-primary">Go To Calculate Cost Of Market</button></a>
                    <a href="{{ route('list') }}"><button class="btn btn-info">Go To Cost Of Market List</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


