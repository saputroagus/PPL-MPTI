@extends('layouts.sidebar')

@section('content')


@endsection


<body>
   <div id="tengah">

    <div id="htengah">
    <center>PETERNAK </center>
    </div>
  <div id="konten">
  <a href="{{route ('tambahhewan')}}"> <div id="tambah"><p>Tambah Ternak</div> </a>
    <section id="section-1"> <!-- ini nanti buat nulis berita nya loooooping   --> 
      <div class="konten">
       
        <div id="bgBawah"> 
         
      </div>
    </section>

    <section id="section-2"> <!-- ini nanti buat nulis berita nya   --> 
      <div class="konten">
        <div id="bgAtas">
          <div id="logokecil"><img src="img/mahasiswa.png"></div>
          <div id="komunitas"><p><b>Nama mahasiswa</b></div>
          <div id="nmkomunitas"><p>asal Perguruan Tinggi</div> <!-- ganti nama sesuai asal komunitasnya -->
          <div id="statusberita"><p>Statusnya?</div>
        </div>
        <div id="bgBawah"> 
          <div id="foto"><img src=""></div> <!-- isi sesuai yang sudah diupload pada form  -->
          <div id="isiberita"><p>
             <h2>ini judulnya</h2> 
              <p>isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini
                isi paragraf ini visi paragraf ini v isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini</p> <!-- isi sesuai konten  yang ada pada form -->
                <b><a href="">Lanjutkan..</a></b>
          </div>
        </div>
        
      </div>
    </section>
    </div>
  </div>
 
</div>
</body>

