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

<h1 class="header center orange-text">Twoje faktury</h1>
<div class="formularz" >
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
       @foreach($faktury as $faktura)
       <div>
       <tr>
<td>{{$faktura->id}}</td> 
 <td>{{$faktura->number}}</td>
 <td>{{$faktura->kwota}}zł</td>
 <td>{{$klient->imie}}</td>
 <td><a href="{{route('faktura.usun',['id'=>$faktura->id])}}" class="btn btn-danger"  >Usuń fakture<a></td>
 <td><a href="{{route('faktura.edycja',['id'=>$faktura->id])}}" class="btn btn-default"  >Edytuj fakture<a></td>
</tr>
      
      
          </div>
        @endforeach
        </tbody>
      </table>
      {{$faktury->links('vendor.pagination.bootstrap-4')}}
      </div><br/> <br/>
@endsection