@extends('layouts.layout')

@section('content')
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Fakturomat</h1>
      <div class="row center">
        <h5 class="header col s12 light">Wszystkie Twoje faktury w jednym miejscu</h5>
      </div>
      <div class="row center">
      <a href="{{route('faktury')}}" id="download-button" class="btn-large waves-effect waves-light orange">Lista wszystkich faktur</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Cos ciekawego o fakturach</h5>

            <p class="light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi harum placeat culpa beatae enim, vel iste sit doloremque quo mollitia obcaecati quisquam possimus? Voluptatem nihil facere pariatur nisi officia laborum, iure aspernatur expedita sunt. Perspiciatis temporibus veritatis ab? Suscipit quos ipsum consequuntur. Pariatur a deleniti illo laboriosam cum, magni est?</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Cos madrego o fakturach</h5>

            <p class="light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi harum placeat culpa beatae enim, vel iste sit doloremque quo mollitia obcaecati quisquam possimus? Voluptatem nihil facere pariatur nisi officia laborum, iure aspernatur expedita sunt. Perspiciatis temporibus veritatis ab? Suscipit quos ipsum consequuntur. Pariatur a deleniti illo laboriosam cum, magni est?</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Faktury</h5>

            <p class="light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi harum placeat culpa beatae enim, vel iste sit doloremque quo mollitia obcaecati quisquam possimus? Voluptatem nihil facere pariatur nisi officia laborum, iure aspernatur expedita sunt. Perspiciatis temporibus veritatis ab? Suscipit quos ipsum consequuntur. Pariatur a deleniti illo laboriosam cum, magni est?</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>
@endsection