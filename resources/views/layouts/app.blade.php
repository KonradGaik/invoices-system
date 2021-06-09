<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Fakturomat</title>

  <!-- CSS  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{url('/welcome')}}" class="brand-logo">Fakturomat</a>
      <ul class="right hide-on-med-and-down">
      <li>  Witaj @Auth{{ Auth::user()->name }}@endAuth
            @guest gość @endguest
      </li>
     <li><a href="{{route('faktury')}}">Lista faktur</a></li>
        <li><a href="{{route('utworz')}}">Utworz fakture</a></li>
        <li><a href="{{route('klienci.index')}}">Lista klientów</a></li>
        <li><a href="{{route('klienci.create')}}">Dodaj klienta</a></li> 
        @guest<li><a href="#">Zaloguj</a></li>@endguest
        @Auth<li><a href="#">Wyloguj</a></li>@endAuth
      </ul>

      <ul id="nav-mobile" class="sidenav">
      <li>  Witaj @Auth{{ Auth::user()->name }}@endAuth
            @guest gość @endguest
      </li>
      <li><a href="#">Zaloguj</a></li>
        <li><a href="#">Wyloguj</a></li>
       li><a href="{{route('faktury')}}">Twoje faktury</a></li>
        <li><a href="{{route('utworz')}}">Utworz fakture</a></li>
        <li><a href="{{route('klienci.index')}}">Lista klientów</a></li>
        <li><a href="{{route('klienci.create')}}">Dodaj klienta</a></li> 
        @guest<li><a href="#">Zaloguj</a></li>@endguest
        @Auth<li><a href="#">Wyloguj</a></li>@endAuth
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">Menu</i></a>
    </div>
  </nav>


  @yield('content')

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Invoices system</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, blanditiis voluptatum! Magni amet cum ipsam expedita recusandae nulla consectetur a non, facilis obcaecati magnam omnis qui, itaque praesentium eligendi voluptatem ea dolorum! Labore nulla voluptatem dolore soluta dolorum facilis, odit magni cumque quibusdam! Deserunt officiis alias deleniti veritatis! Provident, quaerat.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('js/materialize.js')}}"></script>
  <script src="{{asset('js/init.js')}}"></script>

  </body>
</html>
