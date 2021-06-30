<?php

namespace App\Http\Controllers;
use App\Account;
use Exception;



use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        try {
            $accounts =  Account::all();
            return response()->json(['message'=>'OK','data'=>$accounts],200);
        } catch (Exception $e) {
            return response()->json(['message'=>$e->getMessage(),'data'=>""], 400);
        } 
    }

    public function show($id)
    {
        try {
            $account = Account::findOrFail($id);
            return response()->json(['message'=>'OK','data'=>[$account, $account->user]],200);
        } catch (Exception $e) {
            return response()->json(['message'=>$e->getMessage(),'data'=>""], 400);
        } 
    }

    public function store(Request $request)
    {
        try {
            $account = Account::create([
                'ag' => $request->ag,
                'account' => $request->account,
                'amount' => 0,
                'user_id' => $request->user_id,
            ]);
            $account->save();
            return response()->json(['message'=>'OK','data'=>$account],200);
        } catch (Exception $e) {
            return response()->json(['message'=>$e->getMessage(),'data'=>""], 400);
        } 
    }

    public function destroy($id)
    {
        try {
            $account = Account::destroy($id);
            return response()->json(['message'=>'OK','data'=>$account],200);
        } catch (Exception $e) {
            return response()->json(['message'=>$e->getMessage(),'data'=>""], 400);
        } 
    }
}
