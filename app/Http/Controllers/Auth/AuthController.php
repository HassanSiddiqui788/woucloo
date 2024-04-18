<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function viewpage()
    {
        return view('users.pages.view');
    }

    public function accountpage()
    {
        return view('users.pages.account');
    }
    public function account(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name`' => 'required',
            'email' => 'required',
            'password' => 'required|max:8',
            'confirm_password' => 'required|same:password',
        ]);
        // dd($request->all());
        // Create a new product instance
        $product = new User();
        $product->name = $validatedData['name'];
        $product->email = $validatedData['email'];
        $product->password = Hash::make($validatedData['password']);

        // Save the product to the database
        $product->save();
        // Optionally, you can return a response or redirect to a different page
        // return redirect()->route('login.get')->with('success', 'Product created successfully');
        return redirect()->route('account.get')->with('success', 'Product created successfully');
    }


    public function filterpage()
    {
        return view('users.pages.filter');
    }

    public function messagepage()
    {
        return view('users.pages.message');
    }

    public function productpage()
    {
        return view('users.pages.product-list');
    }
    public function loginpage()
    {
        return view('users.pages.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required | email | exists:users',
            'password' => 'required'
        ]);
        // dd($request);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 1) {
                // return redirect()->route('admin.index.get')->with('success', 'Admin login successfully !!!');
                return redirect()->route('index.get')->with('success', 'User login successfully !!!');
            } else {
                return redirect()->route('index.get')->with('success', 'User login successfully !!!');
            }
        }
        return back()->with('message', 'Record not matched with data !!!');
    }
}
