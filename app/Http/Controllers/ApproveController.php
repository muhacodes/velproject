<?php

namespace App\Http\Controllers;

use App\Approve;
use Illuminate\Http\Request;
use auth;
use Carbon\Carbon;

class ApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today();
        $data = Approve::orderBy('customer_name', 'ASC', 'created_at')
                                    ->where('created_at', '>=', $today)
                                    ->get();
        return view('approve', compact('data'));
    }

    public function approve(Request $request){
        $userId = Auth::user();
        $approve = Approve::find($request->id);
        $approve->is_approved = "approved";
        $approve->user_id = $userId;


        $orders->save();
    }

    public function reject(Request $request){
        $userId = Auth::user();
        $approve = Approve::find($request->id);
        $approve->is_approved = "rejected";
        $approve->user_id = $userId;
        $orders->save();
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Approve  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Approve $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Approve  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Approve $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Approve  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Approve $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Approve  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Approve $orders)
    {
        //
    }
}
