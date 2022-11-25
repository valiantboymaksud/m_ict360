<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'fcm_token'  =>  'required',
        ]);

        if ($validator->fails()) {

            return response()->json([

                'message'   => $validator->errors()->first(),
                'data'      => "Validation Error",
                'status'    => 0,
            ]);
        }

        try {
            Subscriber::firstOrCreate([
                'fcm_token' => $request->fcm_token,
            ]);
        } catch (\Throwable $th) {
            return response()->json([

                'message'   => $th->getMessage(),
                'data'      => "Error",
                'status'    => 0,
            ]);
        }
        return response()->json([

            'message'   => 'Success',
            'data'      => "Success",
            'status'    => 1,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
