@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session()->get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<h1 class="header center orange-text">Lista faktur dla klienta:</h1>
<h3 class=" orange-text">Dane klienta:</h3>
<div class="black-text" style="font-size:20px">
<p>Imie: {{$klient->imie}}</p>
<p>Adres: {{$klient->adres}}</p>
<p>Pesel: {{$klient->pesel}}</p>
</div>
<div class="formularz" >
<table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Numer faktury</th>
              <th>Kwota</th>
              <th>Usuń</th>
              <th>Edytuj</th>
          </tr>
        </thead>

        <tbody>
        @foreach($klient->invoices as $faktura)
       <div>
    
       <tr>
<td>{{$faktura->id}}</td> 
 <td>{{$faktura->number}}</td>
 <td>{{$faktura->kwota}}zł</td>
 <td><a href="{{route('faktura.usun',['id'=>$faktura->id])}}" class="btn btn-danger"  >Usuń fakture<a></td>
 <td><a href="{{route('faktura.edycja',['id'=>$faktura->id])}}" class="btn btn-default"  >Edytuj fakture<a></td>
</tr>
      

          </div>
          @endforeach
        </tbody>
      </table>
      </div><br/> <br/>
@endsection