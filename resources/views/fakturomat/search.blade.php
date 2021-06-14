@extends('layouts.layout')

@section('content')

<h1 class="header center orange-text">Wyszukane faktury</h1>
<div class="formularz" >
<button class="glyphicon glyphicon-search"><a href="{{route('faktury')}}">Pokaz wszystkie faktury</a>
</button>

<h6>Poszukiwana wartość: <b>{{ $q }}</b></>

<table>

        <thead>
          <tr>
              <th>ID</th>
              <th>Numer faktury</th>
              <th>Kwota</th>
              <th>Klient</th>
              <th>Usuń</th>
              <th>Edytuj</th>
          </tr>
        </thead>
        <tbody>
        @if(count($found)==0)
        <h4 class="text-center orange-text">Nie znaleziono faktur - spróbuj wyszukać ponownie.</h4>
       <br/>    <br/>    <br/>
        @else
       @foreach($found as $faktura)

       <div>
       <tr>
<td>{{$faktura->id}}</td> 
 <td>{{$faktura->number}}</td>
 <td>{{$faktura->kwota}}zł</td>
 <td>{{$faktura->klient_id}} - {{$faktura->klient->imie}}</td>
 <td><a href="{{route('faktura.usun',['id'=>$faktura->id])}}" class="btn btn-danger"  >Usuń fakture<a></td>
 <td><a href="{{route('faktura.edycja',['id'=>$faktura->id])}}" class="btn btn-default"  >Edytuj fakture<a></td>
</tr>
      
      
          </div>
        @endforeach
        </tbody>
      </table>
      </div><br/> <br/>
        @endif
@endsection