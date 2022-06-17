@extends('master')

@section('title') List Page @endsection

    <div class="main-container vh-100 d-flex align-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card cardshadow mt-4 bcolor">
                        <div class="card-header bg-warning d-flex justify-content-center align-items-center cardbody">
                            <div class="text-dark"><h4 class="mb-0 fw-bold text-uppercase">Market Cost Listed</h4></div>

                            {{-- Go To List Page --}}
                            <div class="tohome">
                                <a href="{{ route('home') }}">
                                    <button class="btn btn-outline-info ibcolor text-dark fw-bold">Go To Home</button>
                                </a>
                            </div>
                            <div class="to">
                                <a href="{{ route('calculate') }}">
                                    <button class="btn btn-outline-info ibcolor text-dark fw-bold">Go To Calculate</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-sm  mcolor">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Total M</th>
                                        <th>Morning Goods</th>
                                        <th class="text-nowrap">Morning Cost</th>
                                        <th>Evening Goods</th>
                                        <th class="text-nowrap">Evening Cost</th>
                                        <th>Total M&E</th>
                                        <th>Current M</th>
                                        <th class="text-nowrap">Balance M</th>
                                        <th class="text-nowrap">Controller</th>
                                        <th class="text-nowrap">Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($calculates as $calculate )
                                        <tr class="text-center">
                                            <td>{{ $calculate->id }}.</td>
                                            <td>{{ $calculate->TotalM }} MMK</td>
                                            <td>{{ $calculate->FirstTitle }}</td>
                                            <td>{{ $calculate->FirstCost }} MMK</td>
                                            <td>{{ $calculate->SecondTitle }}</td>
                                            <td>{{ $calculate->SecondCost }} MMK</td>
                                            <td>{{ $calculate->TotalFandS }} MMK</td>
                                            <td>{{ $calculate->CurrentM }} MMK</td>
                                            <td class="text-nowrap">{{ $calculate->FinalM }} MMK</td>
                                            <td>
                                                <div class="d-flex justify-content-between m-0">

                                                    <a href="{{ route("show",$calculate->id) }}" class="btn btn-primary btn-sms fw-bold">Detail</a>
                                                    <a href="{{ route('edit',$calculate->id) }}" class="btn btn-info btn-sms fw-bold mx-1">Edit</a>
                                                    <form action="{{ route('destroy',$calculate->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sms fw-bold">Delete</button>
                                                    </form>
                                                    
                                                </div>
                                            </td>
                                            <td class="text-nowrap">{{ $calculate->created_at->format("d / M / Y") }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('contect') @endsection

