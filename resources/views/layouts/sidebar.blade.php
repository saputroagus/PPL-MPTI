<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>ternak.in</title>

<meta name="viewport" content="width=device-width, initial-scale=10">
  <link rel="stylesheet" href="/css/styleku.css">
  <link href='logo.png' style="width: 32px;height: 32px;" rel='shortcut icon'>

</head>
<body>


<div class="all">
  <div id="kiri">
    <div id="logo">
      <img src="img/komunitas.png">
    </div>
    <div id="profil">
      <div id="hprofil">
        Profil
      </div>
      <div id="iprofil">
        <p><b>{{Auth::user()->name}}</b></p>
      
      </div>
    </div>
    <div id="halaman">
      <div id="hlaman">
        Halaman
      </div>
      <div id="ilaman">
        <div class="btn-group">
          <a href="{{ route('home') }} "> <button class="button">HOME</button> </a> 
         <a href="{{ route ('listhewan') }}"> <button class="button">Ternak</button> </a>
         <button class="button">Investasi</button>
        <!-- <a href="{{ route('logout') }}"> <button class="button"> Keluar </button> </a>  -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            <button class="button" type="submit"> Keluar </button>
                                        </form>
      </div>
      </div>
    </div>
  </div>
  

@yield('content')
</body>

</html> 
