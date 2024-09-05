<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facedas\Auth;
use Illuminate\Support\Facedas\Required;
use Illuminate\Support\Facedas\Redirect;
use App\Models\product;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = auth()->user();
        $data['produk'] = product::find($request->id);
        return view('user-shop', compact('user'),$data);
    }
    public function auth(Request $request){
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (FacadesAuth::attempt($validate)) {
            return redirect('/user');
        }

        return redirect()->back()->with('pesanLogin','Maaf, Login anda gagal!');
    }

    public function user(Request $request)
    {
        $data['user'] = User::all();
        $data['product'] = product::all();
        $data['total_user'] = $data['user']->count();
        return view('user',$data);
    }
    

    function add(){
        return view('user-shop');
        return redirect('/user/shop');

    }

    public function ceckout(){
        return view('ceck-out');
    }
    public function keranjang(){
        return view('keranjang');
    }
    public function dasboard(){
        return view('dasboard');
    }
    public function checkout(){
        return view('checkout');
    }
    public function product(){
        return view('product');
    }


    // public function create()
    // {
    //     return view('users-create');
    // }
}
