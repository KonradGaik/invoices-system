@extends('layouts.layout')

@section('content')
<h1 class="header center orange-text">Dodaj klienta</h1>
<div class="row">
    <form action="{{route('klienci.store')}}" method="POST" class="col s12">
    {{csrf_field()}}
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nazwa klienta" id="imie" name="imie" type="text" class="validate" required="required">
          <label for="first_name">Nazwa klienta</label>
        </div>

        <div class="input-field col s6">
          <input id="adres" name="adres" type="text" class="validate" required="required">
          <label for="date">Adres</label>
        </div>
      </div>

          <div class="row">
        <div class="input-field col s12">
          <input id="pesel" type="text" name="pesel" class="validate" required="required">
          <label for="Pesel">Pesel</label>
          
          <br/> <br/>
        </div>
        <input class="waves-effect waves-light btn"   type="submit" value="utworz">
      </div>
    </form>
  </div>
        
@endsection