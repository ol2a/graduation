<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orders = $request->validate([
            "user_id" =>"required",
            "craft_id" => "required"
        ]);
        if(!$orders){
            return $message = "All order data are required !" ;
        }else(
            // Order::create([
            //     'user_id' => $request->user_id ,
            //     'craft_id' => $request->craft_id
            // ])
            DB::table("order")->insert([
                "user_id" => $request->user_id ,
                'craftman_id' => $request->craft_id
            ])

            );
            return $response = [
                'message' => "order created " ,
                'order ' => $orders
            ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
