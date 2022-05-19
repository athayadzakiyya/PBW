<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function Order()
    {   
        $menu = DB::table('order')->get();
        // dd($menu);
        return view('order',[
            'order' => $menu
        ]);

    }
    public function dot(Request $request)
    {   
        DB::table('users')->insert([
            'Nama' => $request->Nama,
            'meja' => $request->meja
        ]);
        // return view('Home',[]);
        return redirect('/Home');
    }  

    public function Home()
    {   
        // $count = DB::table('pesan')->count('HARGA');
        $cod = DB::table('users')->get();
        // dd($cod);
        return view('Home',[
            'run' => $cod
        ]);
    }  

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('pesan')->insert([
            'NAMA_MAKANAN' => $request->NAMA_MAKANAN,
            'HARGA' => $request->HARGA
        ]);

        return redirect('/pesanan');
    }

    public function Pesanan()
    {   
        // $cart->total_sum = $cart->sum('HARGA');
        $total = 0;

        $code = DB::table('pesan')->get();
        // dd($code);
        return view('pesanan',[
            'run' => $code
        ]);
    }   

    public function closing()
    {
        return view('Closing',[]);
    }    
} 
