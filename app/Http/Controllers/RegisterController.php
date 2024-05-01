<?php

namespace App\Http\Controllers;

use App\Models\Registration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewProduct;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{

    public function create()
    {
        return view('student.create');
    }
    public function Register(Request $request)
    {
       
        $user = new Registration;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->number = $request->input('number');
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
       
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect("login")->withSuccess('Great! You have Successfully loggedin');
    }
    public function NewProduct(Request $request)
    {
        $product = new NewProduct;
        $product->name = $request->input('name');
        $product->details = $request->input('details');
        $product->price = $request->input('price');
  
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('image', $filename);
            $product->image = $filename;
        }

        $product->save();
        
        return redirect()->back()->with('success','Add Product Successfully');
    }
    public function update(Request $request, $id)
    {
        $product = NewProduct::find($id);
        $product->name = $request->input('name');
        $product->details = $request->input('details');
        $product->price = $request->input('price');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('image', $filename);
            $product->image = $filename;
        }

        $product->update();
        return redirect()->back()->with('status','Product Updated Successfully');
    }

  
    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('home')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');

    } 
    public function store(Request $request)
    {
        $Order = new Order;
        $Order->qty = $request->input('qty');
        $Order->user_id = $request->input('user_id');
        $Order->product_id = $request->input('product_id');
        $Order->save();
        return redirect()->back()->with('status','Student Added Successfully');
    }
  
}
