<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fakturomat;
use Illuminate\Support\Facades\DB;

class fakturomatController extends Controller
{
    public function welcome(){      
        return view('welcome');
  }
  public function stronaglowna(){      
    return view('welcome');
}

    public function faktury(){
        $fakturomats = fakturomat::with('klient')->paginate(15);
        return view('fakturomat.faktury',['faktury'=>$fakturomats]);
    }

    public function edytuj($id) {
        $faktura = fakturomat::find($id);
         return view('fakturomat.edytuj',['faktura'=>$faktura]);
     }

     public function aktualizuj($id,Request $request){
        $faktura = fakturomat::find($id);
        $faktura->number = $request->number;
        $faktura->date = $request->date;
        $faktura->kwota = $request->kwota;
        $faktura->klient_id = $request->id_klienta;
        $faktura->save();
        return redirect()->route('faktury')->with('message','Faktura poprawnie zaktualizowana!');
     }
 
     public function utworz(){

         return view('fakturomat.utworz');
     }

    public function zapisz(Request $request){
   
       $faktura = new fakturomat();
       $faktura->number = $request->number;
       $faktura->date = $request->date;
       $faktura->kwota = $request->kwota;
       $faktura->klient_id = $request->klient;
       $faktura->save();
       return redirect()->route('faktury')->with('message','Faktura poprawnie dodana!');
    }

     public function usun($id){
        fakturomat::destroy($id);
        return redirect()->route('faktury')->with('message','Faktura poprawnie usunięta!');
     }


public function search(Request $request){
    $q = $request->get('q');
    $faktury = fakturomat::with('klient')->where('number','LIKE','%'.$q.'%')->orWhere('kwota','LIKE','%'.$q.'%')->orWhere('date','LIKE','%'.$q.'%')->orWhere('id','LIKE','%'.$q.'%')->get();
    return view('fakturomat.search',['found'=>$faktury],['q'=>$q]);
}
}
