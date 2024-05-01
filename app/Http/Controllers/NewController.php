<?php
namespace App\Http\Controllers;

use App\Models\NewProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class NewController extends Controller
{
  
    public function Home(){
        if(Auth::check())
        {
            return view('home');
        }
        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the Home.',
        ])->onlyInput('email');
    }
    public function About(){
        return view('about');
    }
    public function Order(){
        return view('order');
    }

    public function Registration(){
        return view('registration');
    }
    public function Login(){
        return view('login');
    }
    public function Contact(){
        return view('contact');
    }
    public function Productv(){
        return view('productview');
    }
    public function Viewproduct($id){
        $viewproduct = NewProduct::find($id);
        return view('productview',['viewproduct'=>$viewproduct]);
    }
    public function View(){
        return view('view');
    }
   
    public function NewProduct(){
        return view('newproduct');
    }
    public function Product()
    {
        $viewproduct = NewProduct::all();
        return view('view',['viewproduct'=>$viewproduct]);
       
    }
    public function Destroy($id)
    {
        $viewproduct = NewProduct::find($id);
        $viewproduct->delete();
        return redirect()->back()->with('status','Product Deleted Successfully');
    }
    public function Edit($id){
        $viewproduct = NewProduct::find($id);
        return view('edit',['viewproduct'=>$viewproduct]);
    }
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
   
}

?>