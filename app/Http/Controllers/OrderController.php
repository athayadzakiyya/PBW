<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Order()
    {
        return view('order',[]);

    }
    public function Home()
    {
        return view('Home',[]);
    }    
    public function Pesanan()
    {
        return view('pesanan',[]);
    }   
    public function closing()
    {
        return view('Closing',[]);
    }    
} 
