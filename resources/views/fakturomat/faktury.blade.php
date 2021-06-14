@extends('layouts.layout')

@section('content')
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session()->get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<h1 class="header center orange-text">Wszystkie faktury</h1>
<div class="formularz" >
<h5 class="text-left orange-text">Wyszukaj faktury</h5>
<form action="{{route('search')}}" method="GET" role="search">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="form-control" name="q"
            placeholder="Podaj dane faktury"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Szukaj</span>
            </button>
        </span>
    </div>
</form>
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
 <td>{{$faktura->klient_id}} - {{$faktura->klient->imie}}</td>
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