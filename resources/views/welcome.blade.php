<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ternak.in</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/cols.css">
    <script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
       
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <div id="loading"></div>
       <nav>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a> 
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
       </nav>
    <div id="main">
        <section id="box1" class="box">
            <div id="wrapper">
                <div class="titlehome">
                        
          
                    <h1>ternak.in</h1>
                    <h4>Your Steps Change The World</h4>
                    <center id="link2"><a href="#"><button class="learn">Selengkapnya</button></a></center>
                    
                </div>
                    
                </div>
        </section>
        <section id="box2" class="box">
            <div class="content">
                <div class="section group">
                    <div class="col span_2_of_6">
                        <h1>ternak.in?</h1>
                    </div>
                    <div class="col span_4_of_6">
                        <p>ternak.in adalah platform beternak online yang memudahkan pengguna untuk beternak secara online melalui website, tanpa harus memiliki lahan, ketrampilan dan waktu untuk merawat hewan ternak berupa sapi, Ternak.in menghubungkan peternak rakyat, dan investor peternak</p>
                    </div>
                </div>
               
            </div>
        </section>
        <section id="box3" class="box">
            <div class="content">
                <div class="section group">
                    <div class="col span_2_of_6">
                        <h1>TIM <i class="fa fa-bell"></i></h1>
                    </div>
                    <div class="col span_4_of_6">
                  
                    </div>
                </div>
                <div class="section group">
                    <div class="col span_1_of_5">
                        <div class="detail">
                            <div class="title"><i class="fa fa-edit"></i> ANALYST</div>
                            <div class="isi"><img src="abbi.jpg" width="190px"; height="180px"><br>
                            </div>
                            <div class="web">Abbi Nizar Muhammad</div>
                        </div>
                    </div>
                    <div class="col span_1_of_5">
                        <div class="detail">
                           <div class="title"><i class="fa fa-bullhorn"></i> ANALYST</div>
                          <div class="isi"><img src="abbi.jpg" width="190px"; height="180px"><br>
                            </div>
                            <div class="web">Abbi Nizar Muhammad</div>
                        </div>
                    </div>
                    <div class="col span_1_of_5">
                        <div class="detail">
                           <div class="title"><i class="fa fa-lightbulb-o"></i> DESIGNER</div>
                            <div class="isi"><img src="regio.jpeg" width="190px"; height="180px"><br>
                            </div>
                           <div class="web">Dwiky Bagas Regio</div>
                        </div>
                    </div>
                    <div class="col span_1_of_5">
                        <div class="detail">
                         <div class="title"><i class="fa fa-android"></i> PROGRAMMER</div>
                             <div class="isi"><img src="laras.jpeg" width="190px"; height="180px"><br>
                            </div>
                           <div class="web">Laras Aprilyanti Santoso</div>
                        </div>
                    </div>
                    <div class="col span_1_of_5">
                        <div class="detail">
                         <div class="title"><i class="fa fa-puzzle-piece"></i> TESTER</div>
                            <div class="isi"><img src="agus.jpeg" width="190px"; height="180px"><br>
                            </div>
                            <div class="web">Agus Adi Saputro</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section id="box4" class="box"> 
            <div class="content">
                <div class="section group">
                    <div class="none">
                    <div class="col span_1_of_2">
                        <h3><i class="fa fa-envelope"></i><CENTER>
                            DAFTAR
                        </CENTER> </h3>
                        <div class="contact">
                            <form method="post" action="#">
                                <input maxlength="20" type="text" name="nama" placeholder="Nama" required="">
                                <input maxlength="14" type="text" name="telp" placeholder="Telp" required="">
                                <input 
                                <textarea maxlength="50" name="pesan" required=""></textarea>
                                <input id="kirim" type="submit" name="kirim" value="Kirim">
                            </form>

                        </div>
                    </div>
                    </div>
                
        </section>
    </div>
<div class="bottom">
    <div class="copy">&#169; ternak.in Selection 2017</div>
   </div>
</div>
 <script type="text/javascript" src="js/scrollbottom.js"></script>
    <script type="text/javascript">
        $(window).load(function() { $("#loading").fadeOut("slow"); })
    </script>
    </body>
</html>
