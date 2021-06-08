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

<h1 class="header center orange-text">Lista klientow</h1>
<div class="formularz" >
<table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Imie klienta</th>
              <th>Adres</th>
              <th>Pesel</th>
          </tr>
        </thead>

        <tbody>
       @foreach($klienci as $klient)
       <div>
       <tr>
<td>{{$klient->id}}</td> 
 <td>{{$klient->imie}}</td>
 <td>{{$klient->adres}}</td>
 <td>{{$klient->pesel}}</td>
      
      
          </div>
        @endforeach
        </tbody>
      </table>
      {{$klienci->links('vendor.pagination.bootstrap-4')}}
      </div><br/> <br/>
@endsection