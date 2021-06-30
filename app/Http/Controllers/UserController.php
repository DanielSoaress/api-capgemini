<?php

namespace App\Http\Controllers;
use App\User;
use Exception;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users =  User::all();
            return response()->json(['message'=>'OK','data'=>$users],200);
        } catch (Exception $e) {
            return response()->json(['message'=>$e->getMessage(),'data'=>""], 400);
        } 
    }

    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return response()->json(['message'=>'OK','data'=>[$user, $user->account]],200);
        } catch (Exception $e) {
            return response()->json(['message'=>$e->getMessage(),'data'=>""], 400);
        } 
    }

    public function store(Request $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'cpf' => $request->cpf,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' =>  bcrypt($request->password)

            ]);
            $user->save();
            return response()->json(['message'=>'OK','data'=>$user],200);
        } catch (Exception $e) {
            return response()->json(['message'=>$e->getMessage(),'data'=>""], 400);
        } 
    }

    public function update(Request $request, $id){
        try {
            $user = User::find($id);
            $user->name = $request->name;
            $user->cpf = $request->cpf;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = bcrypt($request->password);
            $user->save();
            return response()->json(['message'=>'OK','data'=>$user],200);
        } catch (Exception $e) {
            return response()->json(['message'=>$e->getMessage(),'data'=>""], 400);
        } 
    }

    public function destroy($id)
    {
        try {
            $user = User::destroy($id);
            return response()->json(['message'=>'OK','data'=>$user],200);
        } catch (Exception $e) {
            return response()->json(['message'=>$e->getMessage(),'data'=>""], 400);
        } 
    }
}
