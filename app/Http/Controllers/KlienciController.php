<?php

namespace App\Http\Controllers;

use App\Models\klient;
use Illuminate\Http\Request;

class KlienciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $klients = klient::paginate(10);
     return view('klienci.klienci',['klienci'=>$klients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('klienci.utworz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $klient = new klient();
            $klient->imie = $request->imie;
            $klient->adres = $request->adres;
            $klient->pesel = $request->pesel;
            $klient->save();
            return redirect()->route('klienci.index')->with('message','Klient poprawnie dodany!');
         }
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       klient::destroy($id);
       return redirect()->route('customers.index')->with('message','Poprawnie usunięto klienta.');
    }
}
