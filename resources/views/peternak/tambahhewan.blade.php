
@extends('layouts.sidebar')

@section('content')
<div id="tengahhome">
<div id="htengah">
<center>
    FORM TAMBAH TERNAK
</center>
    
</div>

	 	<form id="fkform" method="POST" action="{{ route ('createhewan') }}">
                        {{ csrf_field() }}
                          <div class="form-group">
                        	<label for="foto" class="col-md-4 control-label">
                        		Tambahkan foto
                        	</label>
                        	<div class="col-md-6">
                        		<div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                   Browser<input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp">
                </span>
            </span>
       
			

        </div>
                        	</div>
                        </div>

                        <div class="form-group{{ $errors->has('jenisHewan') ? ' has-error' : '' }}">
                            <label for="jenis" class="col-md-4 control-label">Jenis : </label>

                            <div class="col-md-6">
                                <input id="jenisHewan" type="text" class="form-control" name="jenisHewan" value="{{ old('jenisHewan') }}" required autofocus>

                                @if ($errors->has('jenisHewan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenisHewan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                            <label for="harga" class="col-md-4 control-label">Harga : </label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control" name="harga" value="{{ old('harga') }}" required>

                                @if ($errors->has('harga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                      <div class="form-group{{ $errors->has('bobot') ? ' has-error' : '' }}">
                            <label for="bobot" class="col-md-4 control-label">Bobot: </label>

                            <div class="col-md-6">
                                <input id="bobot" type="text" class="form-control" name="bobot" value="{{ old('bobot') }}"required>

                                @if ($errors->has('bobot'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bobot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('umur') ? ' has-error' : '' }}">
                            <label for="umur" class="col-md-4 control-label">Umur: </label>

                            <div class="col-md-6">
                                <input id="umur" type="text" class="form-control" name="umur" value="{{old('umur') }}" required>

                                @if ($errors->has('umur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('umur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                            <label for="lokasi" class="col-md-4 control-label">Lokasi: </label>

                            <div class="col-md-6">
                                <input id="lokasi" type="text" class="form-control" name="lokasi" value="{{ old('lokasi') }}" required>

                                @if ($errors->has('bobot'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bobot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Deskripsi') ? ' has-error' : '' }}">
                            <label for="Deskripsi" class="col-md-4 control-label"> Deskripsi : </label>

                            <div class="col-md-6"> 
                            <textarea id="deskripsi" name="deskripsi" cols="45" class="form-control" value="{{ old('deskripsi') }}" required></textarea>
                                                     @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     
                         <div class="form-group{{ $errors->has('biayaperawatan') ? ' has-error' : '' }}">
                            <label for="biayaperawatan" class="col-md-4 control-label">Biaya Perawatan : </label>

                            <div class="col-md-6">
                                <input id="biayaperawatan" type="text" class="form-control" name="biayaperawatan" value="{{ old('biayaperawatan') }}" required>

                                @if ($errors->has('biayaperawatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('biayaperawatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('biayapakan') ? ' has-error' : '' }}">
                            <label for="biayapakan" class="col-md-4 control-label">Biaya Pakan  : </label>

                            <div class="col-md-6">
                                <input id="biayapakan" type="text" class="form-control" name="biayapakan" value="{{ old('biayapakan') }}" required>

                                @if ($errors->has('biayapakan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('biayapakan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Tambah
                                </button>
                            </div>
                        </div>

                    </form>
                    </div>
                    </div>

			
		
@endsection