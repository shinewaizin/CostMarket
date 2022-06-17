@extends('master')

@section('title') Calculate Page @endsection

@section('contect')

    <div class="main-container vh-100 d-flex align-content-center">
        <div class="container">
            <div class="row h-100 d-flex justify-content-center align-content-center">
                <div class="col-10">
                    <div class="card mt-5 bcolor border-0 cardshadow">
                        <div class="card-header bg-warning">
                            <div class="tohome">
                                <a href="{{ route('home') }}">
                                    <button class="btn btn-outline-info ibcolor text-dark fw-bold">Go To Home</button>
                                </a>
                            </div>

                            <div class="to">
                                <a href="{{ route('list') }}">
                                    <button class="btn btn-outline-info ibcolor text-dark fw-bold">Go To Listed</button>
                                </a>
                            </div>

                            <div class="w-100 d-flex justify-content-center"> <h3 class="text-dark text-uppercase tshadow"> Update Calculated Your Market Cost</h3> </div>


                        </div>
                        <div class="card-body cardbody">

                            {{-- Go To List and Home Page --}}


                            <div class="row">



                            {{-- Calculate Tebt --}}

                                <div class="col-7">
                                    <form action="{{ route('store') }}" method="post">

                                        @csrf

                                        {{-- Total and Current M --}}
                                        <div class="row mt-4">
                                            <div class="col-6">
                                                <label for="TotalM" class="mcolor">Total M</label>
                                                <input required type="number" name="memberTotalMoney" class="form-control ibcolor " id="TotalM" placeholder="...MMK">
                                            </div>

                                            <div class="col-6">
                                                <label for="CurrentTotalM" class="mcolor">Current Total M</label>
                                                <input required type="number" name="currentTotalMoney" class="form-control ibcolor" id="CurrentTotalM" placeholder="...MMK">
                                            </div>
                                        </div>

                                        {{-- Morning Rotate --}}
                                        <div class="my-5 row">
                                            <div class="col-8">
                                                <label for="FirstTitle" class="mcolor">First Title</label>
                                                <input required type="text" name="firstTitle" class="form-control ibcolor" id="FirstTitle" placeholder="....Goods">
                                            </div>

                                            <div class="col-4">
                                                <label for="FirstCost" class="mcolor">Cost M</label>
                                                <input required type="number" name="firstCost" class="form-control ibcolor" id="FirstCost" placeholder="...MMK">
                                            </div>
                                        </div>

                                        {{-- Evening Rotate --}}
                                        <div class="row">
                                            <div class="col-8">
                                                <label for="secondTitle" class="mcolor">Second Title</label>
                                                <input required type="text" name="secondTitle" class="form-control ibcolor" id="secondTitle" placeholder="....Goods">
                                            </div>

                                            <div class="col-4">
                                                <label for="SecondCost" class="mcolor">Cost M</label>
                                                <input required type="number" name="secondCost" class="form-control ibcolor" id="SecondCost" placeholder="...MMK">
                                            </div>
                                        </div>

                                        <button class="btn btn-primary mt-5 ibcolor text-dark fw-bold">Calculate&Save</button>
                                    </form>
                                </div>

                            {{-- Calculate Result --}}
                                <div class="col-5 border-start border-info ">

                                    <div class="card ibcolor">

                                        <div class="card-body cardbody">
                                            {{-- <div class="tohome">
                                                    <button class="btn btn-primary ibcolor text-dark fw-bold" onClick="bills()">Check</button>
                                            </div> --}}

                                            <div class="w-100 d-flex justify-content-center"><h5 class="text-dark fw-bold">Update Calculated</h5></div>

                                            <div class=" d-flex justify-content-between align-items-center mt-4">
                                                <h6 class="text-dark">Total M</h6>
                                                <h6 class="text-dark" id="totalM">0 MMK</h6>
                                            </div>

                                            <div class=" d-flex justify-content-between align-items-center my-4">
                                                <h6 class="text-dark">Current Total M</h6>
                                                <h6 class="text-dark" id="currentTotalM">0 MMK</h6>
                                            </div>

                                            <hr>

                                            <div class=" d-flex justify-content-between align-items-center ">
                                                <h6 class="text-dark">Morning Cost</h6>
                                                <h6 class="text-dark" id="morningCost">0 MMK</h6>
                                            </div>

                                            <div class=" d-flex justify-content-between align-items-center my-4">
                                                <h6 class="text-dark">Evening Cost</h6>
                                                <h6 class="text-dark" id="eveningCost">0 MMK</h6>
                                            </div>

                                            <div class=" d-flex justify-content-between align-items-center">
                                                <h6 class="text-dark">Total Cost</h6>
                                                <h6 class="text-dark" id="totalCost" >0 MMK</h6>
                                            </div>
                                            <hr>

                                            <div class=" d-flex justify-content-between align-items-center my-4">
                                                <h6 class="text-dark">Balance Bills</h6>
                                                <h6 class="text-dark" id="balanceBills">0 MMK</h6>
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

@endsection

@section('footer')

    <script>
        let totalM = document.getElementById('totalM');
        let currentTotalM = document.getElementById('currentTotalM');
        let morningCost = document.getElementById('morningCost');
        let eveningCost = document.getElementById('eveningCost');
        let totalCost = document.getElementById('totalCost');
        let balanceBills = document.getElementById('balanceBills');



        document.querySelector('#TotalM').addEventListener("keyup",(event) => {
            let value = event.target.value;
            totalM.innerHTML = value+" MMK";

        })

        let currentBills ;
        document.querySelector("#CurrentTotalM").addEventListener("keyup",(event) => {
            currentBills = event.target.value;
            currentTotalM.innerHTML = currentBills + " MMK";

        })

        let firstCostValue ;
        document.querySelector("#FirstCost").addEventListener("keyup",(event) => {
            firstCostValue = event.target.value;
            morningCost.innerHTML = firstCostValue+" MMK";

        })


        document.querySelector("#SecondCost").addEventListener("keyup",(event) => {
            let secondCostValue = event.target.value;

            eveningCost.innerHTML = secondCostValue+" MMK";

            if(secondCostValue > 0){
                let totalFirstAndSecond = Number(firstCostValue) + Number(secondCostValue);
                totalCost.innerHTML = totalFirstAndSecond + " MMK";

                let balanceTotalBills = Number(currentBills) - Number(totalFirstAndSecond);
                balanceBills.innerHTML = balanceTotalBills + " MMK";
            }else{
                totalCost.innerHTML =  "0 MMK";
                balanceBills.innerHTML = "0 MMK";
            }

        })





    </script>

@endsection

