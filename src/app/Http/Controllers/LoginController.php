<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\CreateRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
  
    public function check(LoginRequest $request)
    {
      
        if ($customer = Customer::where('email', $request->userName)
                      ->orWhere('name', $request->userName)->first()) {
            if (Hash::check($request->password, $customer->password)) {
             
                Session::put('customer', ['id' => $customer->id,'name' => $customer->name]);
               
                return response()->json(["success" => "Customer Name & Password Match"], 200);
            } else {
                return response()->json(["errors" => ["password" => "Customer Name & Password Not Match"]], 401);
            }
        } else {
            return response()->json(["errors" => ["customerName" => "Customer Not Found in DataBase"]], 401);
        }

    }

    public function create(CreateRequest $request)
    {
        if ($request->hasfile('id_proof_img')) {
            $file = $request->file('id_proof_img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('assets/customer/', $filename);
            $id_proof = 'assets/customer/'.$filename;
        }

        $customer = Customer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_proof'=>isset($id_proof)?:null,
            'password'=>hash::make($request->password)

        ]);

        return redirect()->route('login.index')->with('success', 'Customer Created Successfully');

    }

   

    public function logout()
    {
        Session::flush();
        return redirect()->route('login.index')->with('SuccessMessage', 'Logut Successfully');
    }


   
}
