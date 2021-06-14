@extends('layouts.layout')

@section('content')
<h1 class="header center orange-text">Edytuj fakture id:{{$faktura->id}}</h1>
<div class="row">
    <form action="{{route('faktura.aktualizacja',['id'=>$faktura->id])}}" method="PUT" class="col s12">
    {{csrf_field()}}
      <div class="row">
        <div class="input-field col s6">
          <input value="{{$faktura->number}}" placeholder="Numer faktury" id="number" name="number" type="text" class="validate" required="required">
          <label for="first_name">Numer faktury</label>
        </div>
        <div class="input-field col s6">
          <input value="{{$faktura->date}}" id="date" name="date" type="text" class="validate" required="required">
          <label for="date">Data</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input value="{{$faktura->kwota}}" id="kwota" type="text" name="kwota" class="validate" required="required">
          <label for="Kwota">Kwota</label>
        </div>
        <input class="waves-effect waves-light btn"  type="submit" value="edytuj">
      </div>
    </form>
    
  </div>
        
@endsection