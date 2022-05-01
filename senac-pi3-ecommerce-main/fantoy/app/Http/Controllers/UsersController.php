<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class UsersController extends Controller
{

    function loginApi(Request $request){

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'error' => 'Crendências Inválidas!'
            ], 401);
        }

        return response()->json([
            'user' => $user,
            'token' => $user->createToken($request->email)->plainTextToken
        ]);

    }

    public function indexApi(){
        return response()->json(User::all());
    }

    public function storeApi(Request $request){

           $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        if($user){
            return response()->json($user);
        }

    }

    public function showApi()

    {
        if(auth('sanctum')->user()){
            return response()->json(auth('sanctum')->user());
        }else{
            return response()->json([
                'error' => 'Sem autenticação!'
            ], 401);
        }

    }

    public function updateApi(User $user, Request $request){


        $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|min:8',
            'email' => 'required'
        ]);

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            return response()->json([
                'user' => $user,
                'token' => $user->createToken($request->device)->plainTextToken
            ]);
        }else{
            return response()->json([
                'error' => 'Erro ao alterar usuário!',

            ],401);
        }
    }

    public function destroyApi(User $user)
    {
        $user->delete();
        return response()->json($user);
    }

    public function edit()
    {
        return view('user.edit')->with('user', Auth()->user());
    }

    public function update(Request $request)

    {
        $user = Auth()->user();
        $user->name= $request->name;
        $user->address= $request->address;
        $user->number= $request->number;
        $user->cellphone= $request->cellphone;
        $user->city= $request->city;
        $user->state= $request->state;
        $user->save();
            session()->flash('success','Seu usuário foi Editado com sucesso!');
            return redirect(route('user.edit'));
     }

     public function cliente(User $user){

        return response()->json($user->cliente());
    }
}
