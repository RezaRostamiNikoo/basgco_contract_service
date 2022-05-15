<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index(Request $request)
    {
        $contracts = Contract::all();
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $contracts
        ]);
    }

    public function detail(Request $request, $contract)
    {
        $con = Contract::find($contract);
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $con
        ]);
    }

    public function update(Request $request, $contract)
    {
        $con = Contract::find($contract);
        $data = $this->validate($request, [
            "contract_type_id" => "required",
            "person_id" => "required",
            "job_id" => "required",
            "site_id" => "required",
            "description" => "required",
            "contract_number" => "required",
            "start_date" => "string",
            "finish_date" => "string"
        ]);
        $con->update($data);
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $con
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            "contract_type_id" => "required",
            "person_id" => "required",
            "job_id" => "required",
            "site_id" => "required",
            "description" => "required",
            "contract_number" => "required",
            "start_date" => "string",
            "finish_date" => "string"
        ]);
        $contract = Contract::create($data);
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $contract
        ]);
    }

    public function delete(Request $request, $contract)
    {
        Contract::find($contract)->delete();
        return response()->json([
            "success" => true,
            "message" => "model is deleted",
            "data" => ""
        ]);
    }
}
