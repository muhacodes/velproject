<?php

namespace App\Http\Controllers;

use App\Approve;
use Illuminate\Http\Request;
use Auth;

class ApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Approve::all();
        return view('approve', compact('data'));
    }

    public function approve(Request $request){
        $orders = Approve::find($request->id);
        $orders->is_approved = "approved";

        $orders->save();
    }

    public function reject(Request $request){
        $orders = Approve::find($request->id);
        $orders->is_approved = "rejected";

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
