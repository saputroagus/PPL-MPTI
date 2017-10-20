@extends('layouts.sidebar')

@section('content')

<div class="container">
    <div class="row">
     <link rel="stylesheet" href="css/styleku.css">
        <div class="col-md-8 col-md-offset-2">
            
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
</div>
<body>
   <div id="tengahhome">
Selamat Datang di ternak.in
</div>
</body>


@endsection
