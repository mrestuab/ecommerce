<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function __construct()
    {
        $this ->middleware('auth:api', ['except' => 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return response()->json([
            'data' => $orders
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator::make($request->all(), [
            'recipient_name'=> 'required',
            'recipient_phone' => 'required',
            'recipient_email' => 'required',
            'address' => 'required',
            'province' => 'required',
            'subdistrict' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();

        $inputOrderMaster = [
            'status' => 'unpaid'
        ];

        $order = Order::create($inputOrderMaster);

        for($i = 0; $i < count($input['id_product']); $i++) {
            OrderDetail::create([
                'id_order' => $order['id'],
                'id_product' => $input['id_product'][$i],
                'recipient_name'=> $input['recipient_name'][$i],
                'recipient_phone'=> $input['recipient_email'][$i],
                'recipient_email'=> $input['recipient_email'][$i],
                'address'=> $input['address'][$i],
                'province'=> $input['province'][$i],
                'subdistrict'=> $input['subdistrict'][$i],
                'province'=> $input['province'][$i],
                'address' => 'required',
                'province' => 'required',
                'subdistrict' => 'required',
                'jumlah' => $input['jumlah']['$i'],
                'color' => $input['color']['$i'],
                'total' => $input['total']['$i'],
            ]);
        }

        return response()->json([
            'data' => $order
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return response()->json([
            'data' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validator = validator::make($request->all(), [
            'id_number' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json(
                $validator->errors(),
                422
            );
        }

        $input = $request->all();

        $order->update($input);

        OrderDetail::where('id_order', $order['id'])->delete();

        for($i = 0; $i < count($input['id_product']); $i++) {
            OrderDetail::create([
                'id_order' => $order['id'],
                'id_product' => $input['id_product']['$i'],
                'jumlah' => $input['jumlah']['$i'],
                'color' => $input['color']['$i'],
                'total' => $input['total']['$i'],
            ]);
        }

        return response()->json([
            'message' => 'succes',
            'data' => $order
        ]);
    }

    public function ubah_status(Request $request, Order $order)
    {
        $order->update([
            'status' => $request -> status
        ]);

        return response()->json([
            'message' => 'succes',
            'data' => $order
        ]);
    }

    public function dikonfirmasi()
    {
        $orders = Order::where('status', 'Dikonfirmasi')->get();

        return response()->json([
            'data' => $orders
        ]);
    }

    public function dikemas()
    {
        $orders = Order::where('status', 'Dikemas')->get();

        return response()->json([
            'data' => $orders
        ]);
    }

    public function dikirim()
    {
        $orders = Order::where('status', 'Dikirim')->get();

        return response()->json([
            'data' => $orders
        ]);
    }

    public function diterima()
    {
        $orders = Order::where('status', 'Diterima')->get();

        return response()->json([
            'data' => $orders
        ]);
    }

    public function selesai()
    {
        $orders = Order::where('status', 'Selesai')->get();

        return response()->json([
            'data' => $orders
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return response()->json([
            'message' => 'succes'
        ]);
    }
}
