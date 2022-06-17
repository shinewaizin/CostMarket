@extends('master')

@section('title') Home Page @endsection


@section('contect')

<div class="main-container">
    <div class="container vh-100">
       <div class="row d-flex justify-content-center">
           <div class="col-8">
                <div class="card cardshadow mt-4 bcolor">
                    <div class="card-header bg-warning text-center">
                        <h4 class="fw-bold text-uppercase m-0">Detail Of Market Cost</h4>
                        <div class="to">
                            <a href="{{ route('list') }}">
                                <button class="btn btn-outline-info ibcolor text-dark fw-bold">Go To Listed</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" d-flex justify-content-between align-items-center mt-4">
                            <h5 class="mcolor">Total M</h5>
                            <h5 class="mcolor" id="totalM">{{$calculate->TotalM}} MMK</h5>
                        </div>

                        <div class=" d-flex justify-content-between align-items-center my-4">
                            <h5 class="mcolor">Current Total M</h5>
                            <h5 class="mcolor" id="currentTotalM">{{$calculate->CurrentM}} MMK</h5>
                        </div>

                        <hr>

                        <div class=" d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mcolor">Morning Goods</h5>
                            <h5 class="mcolor" id="morningCost">{{$calculate->FirstTitle}}</h5>
                        </div>

                        <div class=" d-flex justify-content-between align-items-center ">
                            <h5 class="mcolor">Morning Cost</h5>
                            <h5 class="mcolor" id="morningCost">{{$calculate->FirstCost}} MMK</h5>
                        </div>

                        <div class=" d-flex justify-content-between align-items-center my-4">
                            <h5 class="mcolor">Evening Goods</h5>
                            <h5 class="mcolor" id="eveningCost">{{$calculate->SecondTitle}}</h5>
                        </div>

                        <div class=" d-flex justify-content-between align-items-center my-4">
                            <h5 class="mcolor">Evening Cost</h5>
                            <h5 class="mcolor" id="eveningCost">{{$calculate->SecondCost}} MMK</h5>
                        </div>

                        <div class=" d-flex justify-content-between align-items-center">
                            <h5 class="mcolor">Total Cost</h5>
                            <h5 class="fw-bold text-warning" id="totalCost" >{{$calculate->TotalFandS}} MMK</h5>
                        </div>
                        <hr>

                        <div class=" d-flex justify-content-between align-items-center my-4">
                            <h5 class="mcolor">Balance Bills</h5>
                            <h5 class=" fw-bold text-danger" id="balanceBills">{{$calculate->FinalM}} MMK</h5>
                        </div>

                        <small class="text-white-50"> @ < < {{ $calculate->created_at->format("d / F / Y") }} > >  listed from this day . . . . </small>
                    </div>
                </div>
           </div>
       </div>
    </div>
</div>

@endsection
