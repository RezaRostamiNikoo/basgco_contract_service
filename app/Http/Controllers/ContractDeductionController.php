<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractDeductionController extends Controller
{
    public function index(Request $request, $contract)
    {
        $con = Contract::find($contract);
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $con->deductions
        ]);
    }


    public function update(Request $request, $contract, $deduction)
    {
        $con = Contract::find($contract);
        $data = $this->validate($request, [
            "amount" => "required",
        ]);
        $deduction = $con->deductions()->updateExistingPivot($deduction, $data);
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $con->deductions
        ]);
    }

    public function store(Request $request, $contract)
    {
        $con = Contract::find($contract);

        $data = $this->validate($request, [
            "amount" => "required",
        ]);
        $deduction = $con->deductions()->attach($request->deduction_id, $data);
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $deduction
        ]);
    }

    public function delete(Request $request, $contract, $deduction)
    {
        $con = Contract::find($contract);
        $deduction = $con->deductions()->detach($deduction);
        return response()->json([
            "success" => true,
            "message" => "model is deleted",
            "data" => ""
        ]);
    }
}
