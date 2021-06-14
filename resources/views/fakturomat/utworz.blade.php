@extends('layouts.layout')

@section('content')
<h1 class="header center orange-text">Utwórz fakture</h1>
<div class="row">
    <form action="{{route('faktura.zapisz')}}" method="POST" class="col s12">
    {{csrf_field()}}

<label for="">Wybierz klienta</label>
    <select name="klient" class="form-select" aria-label="Default select example">
  <option selected>Wybierz klienta z listy</option>
  @foreach(\App\Models\Klient::all() as $klient)
  <option value="{{$klient->id}}">{{$klient->imie}}</option>
 @endforeach
</select> <br>


      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Numer faktury" id="number" name="number" type="text" class="validate" required="required">
          <label for="first_name">Numer faktury</label>
        </div>
        <div class="input-field col s6">
          <input id="date" name="date" type="text" class="validate" required="required">
          <label for="date">Data</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="kwota" type="text" name="kwota" class="validate" required="required">
          <label for="Kwota">Kwota</label><br/> <br/>
        </div>
        <div >
        <input class="waves-effect waves-light btn"   type="submit" value="utwórz">
      </div>
    </form>
  </div>
        
@endsection