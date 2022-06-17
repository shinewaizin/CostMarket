<?php

namespace App\Http\Controllers;

use App\Calculate;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function calculate(){
        return view('calculate');
    }

    public function list(){
        $calculates = Calculate::all();
        return view('list',compact('calculates'));
    }

//     Array
// (
//     [_token] => Yq1RuCjx2mkY3NoQQjqN9avUjyB1WH2iGPGMJcrC
//     [memberTotalMoney] => 60000
//     [currentTotalMoney] => 50000
//     [firstTitle] => oil, onion
//     [firstCost] => 5000
//     [secondTitle] => chitken, dask
//     [secondCost] => 5000
// )

    public function store(Request $request){

        $totalFandS = $request->firstCost + $request->secondCost;
        $finalM     = $request->currentTotalMoney -  $totalFandS;

        $calculated = new Calculate();
        $calculated->TotalM = $request->memberTotalMoney;
        $calculated->FirstTitle = $request->firstTitle;
        $calculated->FirstCost = $request->firstCost;
        $calculated->SecondTitle = $request->secondTitle;
        $calculated->SecondCost = $request->secondCost;
        $calculated->TotalFandS = $totalFandS;
        $calculated->CurrentM = $request->currentTotalMoney;
        $calculated->FinalM =$finalM;
        $calculated->save();

        return redirect()->route('list');

    }

    // {
    //     "id": 1,
    //     "TotalM": 60000,
    //     "FirstTitle": "oil, onion",
    //     "FirstCost": 5000,
    //     "SecondTitle": "chitken, dask",
    //     "SecondCost": 7200,
    //     "TotalFandS": 12200,
    //     "CurrentM": 50000,
    //     "FinalM": 37800,
    //     "created_at": "2022-05-31T09:08:03.000000Z",
    //     "updated_at": "2022-05-31T09:08:03.000000Z"
    //   }

    public function show($id){
        $calculate = Calculate::find($id);
        return view('show',compact('calculate'));
    }

    public function destroy($id){
        $calculate = Calculate::find($id);
        $calculate->delete();

        return redirect()->route('list');
    }

    public function edit($id){
        $calculate = Calculate::find($id);
        return view('edit',compact('calculate'));
    }

    public function update(Request $request,$id){
        $calculate = Calculate::find($id);
        $calculate->TotalM = $request->memberTotalMoney;
        $calculate->FirstTitle = $request->firstTitle;
        $calculate->FirstCost = $request->firstCost;
        $calculate->SecondTitle = $request->secondTitle;
        $calculate->SecondCost = $request->secondCost;
        $getTotalFandS = $request->firstCost + $request->secondCost;
        $calculate->TotalFandS = $getTotalFandS;
        $calculate->CurrentM = $request->currentTotalMoney;
        $getFinalM = $request->currentTotalMoney - $getTotalFandS;
        $calculate->FinalM =$getFinalM;
        $calculate->update();

        return redirect()->route('list');
    }
}
