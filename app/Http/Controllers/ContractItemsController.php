<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractItemsController extends Controller
{
    public function index(Request $request, $contract)
    {
        $con = Contract::find($contract);
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $con->items
        ]);
    }


    public function update(Request $request, $contract, $item)
    {
        $con = Contract::find($contract);
        $item = $con->items()->find($item);
        $data = $this->validate($request, [
            "item_row" => "required",
            "description" => "required",
            "unit_id" => "required",
            "unit_price" => "required",
        ]);
        $item->update($data);
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $item
        ]);
    }

    public function store(Request $request, $contract)
    {
        $con = Contract::find($contract);

        $data = $this->validate($request, [
            "item_row" => "required",
            "description" => "required",
            "unit_id" => "required",
            "unit_price" => "required",
        ]);
        $item = $con->items()->create($data);
        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $item
        ]);
    }

    public function delete(Request $request, $contract, $item)
    {
        $con = Contract::find($contract);
        $item = $con->items()->find($item);
        $item->delete();
        return response()->json([
            "success" => true,
            "message" => "model is deleted",
            "data" => ""
        ]);
    }
}
