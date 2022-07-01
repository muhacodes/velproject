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
        $data = Approve::orderBy('created_at', 'DESC')
                                    ->where('created_at', '>=', $today)
                                    ->where('is_approved', '=', 'pending')
                                    ->get();

        return view('approve', compact('data'));
    }

    public function approve(Request $request){
        $user_id = Auth::user()->id;
        $approve = Approve::find($request->id);
        $approve->is_approved = "approved";
        $approve->user_id = $user_id;

        $approve->save();
    }

    public function reject(Request $request){
        $user_id = Auth::user()->id;
        $approve = Approve::find($request->id);
        $approve->is_approved = "rejected";
        $approve->user_id = $user_id;
        $approve->save();
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

    public function all(Request $request)
    {
        $filter =  $request->filter;
        $date =  $request->date;
        $all = $request->all;
        $today = Carbon::today();


        if($date){
            if($filter == "all"){
                $data = Approve::orderBy('created_at', 'DESC')->whereDate('created_at', '=',  $date)->get();
            }else{

                $data = Approve::orderBy('created_at', 'DESC')->where('is_approved', '=', $filter)->whereDate('created_at', '=',  $date)->get();
            }
        }else{
            if($filter == "all"){
                $data = Approve::orderBy('created_at', 'DESC')->whereDate('created_at', '>=',  $today)->get();
            }else{
                $data = Approve::orderBy('created_at', 'DESC')->where('is_approved', '=', $filter)->whereDate('created_at', '>=',  $today)->get();
            }
        }

        return view('approve', compact('data'));
    }
}
