@extends('layouts.dashboard')
@section('isidashboard')
<style>
    /* Red border */
hr.new1 {
  border-top: 1px solid rgb(0, 17, 255);
}

/* Dashed red border */
hr.new2 {
  border-top: 1px dashed red;
}

/* Dotted red border */
hr.new3 {
  border-top: 1px dotted red;
}

/* Thick red border */
hr.new4 {
  border: 1px solid red;
}

/* Large rounded green border */
hr.new5 {
  border: 10px solid green;
  border-radius: 5px;
}
</style>
<section class="content">
    <div class="container-fluid">
        @if (session()->has('berhasil'))
        <div class="alert alert-succes alert-dismissable fade show" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>            
        @endif
        <h3 class="text-center mb-3">FORMULIR ISIAN PROYEK INVESTASI KAB/KOTA CILACAP</h3>
        <hr class="new1">
        <form action="/dashboard/investasi" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col md-lg-8">
                    <div class="form-floating mb-3">
                        <input type="text" name="namaproyek" class="form-control" id="floatingInput @error('namaproyek') is-invalid @enderror" placeholder="Nama Hotel">
                        <label for="floatingInput">Nama Proyek</label>
                        @error('namaproyek')                  
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <div class="form-floating">
                            <select name="sektor" id="sektor" class="custom-select text-uppercase">
                                <option value="" >--Pilih Sektor--</option>
                                @foreach ($sektors as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>                                        
                                @endforeach
                            </select>
                            </div>
                            @error('sektor')                  
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                                <select name="kategori_pasar" id="kategori_pasar"
                                    class="custom-select text-uppercase" required="">
                                    <option value="Pilih Kategori Pasar">--Pilih Kategori Pasar--</option>
                                    <option value="Lpro">Lpro</option>
                                    <option value="Prospektif">Prospektif</option>
                                    <option value="Potensial">Potensial</option>
                                </select>
                            </div>
                            @error('kategori_pasar')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <div class="form-floating">
                                    <textarea class="form-control" name="latarbelakang" class="@error('latarbelakang') is-invalid @enderror" placeholder="latarbelakang" id="floatingTextarea2" style="height: 100px"></textarea>
                                    {{-- <input type="text" name="latarbelakang" class="form-control @error('latarbelakang') is-invalid @enderror" id="floatinglatarbelakang" placeholder="latarbelakang"> --}}
                                    <label for="FloatingInput">Latar Belakang</label>
                                    </div>
                                    @error('latarbelakang')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating">
                                    <textarea class="form-control" name="existing" class="@error('existing') is-invalid @enderror" placeholder="existing" id="floatingTextarea2" style="height: 100px"></textarea>
                                    {{-- <input type="text" name="bintang" class="form-control @error('bintang') is-invalid @enderror" id="floatingbintang" placeholder="bintang"> --}}
                                    <label for="FloatingInput">Kondisi sekarang / existing</label>
                                    </div>
                                </div>
                                @error('existing')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <div class="form-floating">
                                        <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" id="floatinglokasi" placeholder="lokasi">
                                        <label for="floatingTextarea2">Titik Lokasi / Alamat</label>
                                    </div>
                                    @error('latarbelakang')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating">
                                        <select name="kecamatan" id="kecamatan" class="custom-select text-uppercase">
                                            <option value="" >--Pilih Kecamatan--</option>
                                            @foreach ($kecamatans as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>                                        
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('kecamatan')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <div class="form-floating">
                                    <input type="text" name="latitude" class="form-control @error('latitude') is-invalid @enderror" id="floatinglatitude" placeholder="latitude">
                                    <label for="FloatingInput">Latitude</label>
                                    </div>
                                    @error('latitude')                  
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating">
                                    <input type="text" name="longitude" class="form-control @error('longitude') is-invalid @enderror" id="floatinglongitude" placeholder="Longitude">
                                    <label for="FloatingInput">Longitude</label>
                                    </div>
                                </div>
                                @error('longitude')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <div class="form-floating">
                                    <input type="text" name="luas" class="form-control @error('luas') is-invalid @enderror" id="floatingluas" placeholder="luas">
                                    <label for="FloatingInput">Luas Lahan</label>
                                    </div>
                                    @error('luas')                  
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="desk_luas" class="@error('desk_luas') is-invalid @enderror" placeholder="desk_luas" id="floatingTextarea2" style="height: 100px"></textarea>
                                        {{-- <input type="text" name="desk_luas" class="form-control @error('desk_luas') is-invalid @enderror" id="floatingdesk_luas" placeholder="desk_luas"> --}}
                                        <label for="FloatingInput">Deskripsi Luas Lahan</label>
                                    </div>
                                </div>
                                @error('desk_luas')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-md-5">
                                <div class="form-floating">
                                <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" id="floatingstatus" placeholder="status">
                                <label for="FloatingInput">Status Kepemilikan</label>
                                </div>
                                @error('status')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating">
                                <input type="text" name="lingk_kerja" class="form-control @error('lingk_kerja') is-invalid @enderror" id="floatinglingk_kerja" placeholder="lingk_kerja">
                                <label for="FloatingInput">Lingkup Kerja</label>
                                </div>
                            </div>
                            @error('lingk_kerja')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <div class="form-floating">
                                <textarea class="form-control" name="sedia_pasar" class="@error('sedia_pasar') is-invalid @enderror" placeholder="sedia_pasar" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="FloatingInput">Ketersediaan Pasar</label>
                                </div>
                                @error('sedia_pasar')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating">
                                <textarea class="form-control" name="sedia_sumber" class="@error('sedia_sumber') is-invalid @enderror" placeholder="sedia_sumber" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="FloatingInput">Ketersediaan Sumber Daya</label>
                                </div>
                            </div>
                            @error('sedia_sumber')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <div class="form-floating">
                                <input type="text" name="nilai" class="form-control @error('nilai') is-invalid @enderror" id="floatingnilai" placeholder="nilai">
                                <label for="FloatingInput">Nilai Investasi</label>
                                </div>
                                @error('nilai')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating">
                                    <textarea class="form-control" name="rincian_investasi" class="@error('rincian_investasi') is-invalid @enderror" placeholder="rincian_investasi" id="floatingTextarea2" style="height: 100px"></textarea>
                                    {{-- <input type="text" name="rincian_investasi" class="form-control @error('rincian_investasi') is-invalid @enderror" id="floatingrincian_investasi" placeholder="rincian_investasi"> --}}
                                    <label for="FloatingInput">Rincian Ivestasi</label>
                                </div>
                            </div>
                            @error('rincian_investasi')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <div class="form-floating">
                                {{-- <input type="text" name="layout" class="form-control @error('layout') is-invalid @enderror" id="floatinglayout" placeholder="layout"> --}}
                                
                                <input class="form-control" name="layout" type="file" id="layout">
                                <label for="FloatingInput">Desain Layout Proyek (foto)</label>
                                </div>
                                @error('layout')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating">
                                <input type="text" name="skema" class="form-control @error('skema') is-invalid @enderror" id="floatingskema" placeholder="skema">
                                <label for="FloatingInput">Skema Investasi</label>
                                </div>
                            </div>
                            @error('skema')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <div class="form-floating">
                                <textarea class="form-control" name="npv" class="@error('npv') is-invalid @enderror" placeholder="npv" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="FloatingInput">NPV</label>
                                </div>
                                @error('npv')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating">
                                <textarea class="form-control" name="irr" class="@error('irr') is-invalid @enderror" placeholder="irr" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="FloatingInput">IRR</label>
                                </div>
                            </div>
                            @error('irr')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <div class="form-floating">
                            <textarea class="form-control" name="bc_ratio" class="@error('bc_ratio') is-invalid @enderror" placeholder="bc_ratio" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="FloatingInput">BC Ratio</label>
                            </div>
                            @error('bc_ratio')                  
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                            <textarea class="form-control" name="payback_period" class="@error('payback_period') is-invalid @enderror" placeholder="payback_period" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="FloatingInput">Payback Period</label>
                            </div>
                        </div>
                        @error('payback_period')                  
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <div class="form-floating">
                            <input type="text" name="pic" class="form-control @error('pic') is-invalid @enderror" id="floatingpic" placeholder="pic">
                            <label for="FloatingInput">Narahubung</label>
                            </div>
                            @error('pic')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                            <input type="text" name="nomor_hp" class="form-control @error('nomor_hp') is-invalid @enderror" id="floatingnomor_hp" placeholder="nomor_hp">
                            <label for="FloatingInput">Nomor HP</label>
                            </div>
                        </div>
                        @error('nomor_hp')                  
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingemail" placeholder="email">
                            <label for="FloatingInput">email</label>
                            </div>
                            @error('email')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="floatingalamat" placeholder="alamat">
                            <label for="FloatingInput">Alamat</label>
                            </div>
                        </div>
                        @error('alamat')                  
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <div class="form-floating">                            
                                <input class="form-control" name="photo" type="file" id="formFile">
                                <label for="FloatingPhoto">Foto 1</label>
                            </div>
                            @error('photo')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                                <input class="form-control" name="photo1" type="file" id="formFile">
                                <label for="FloatingPhoto1">Foto 2</label>
                            </div>
                        </div>
                        @error('photo1')                  
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <div class="form-floating">                            
                                <input class="form-control" name="photo2" type="file" id="formFile">
                                <label for="FloatingPhoto2">Foto 3</label>
                            </div>
                            @error('photo2')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                                <input class="form-control" name="video" type="file" id="formFile">
                                <label for="Floatingvideo">Video</label>
                            </div>
                        </div>
                        @error('video')                  
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <a href="/dashboard/investasi" class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                        </div>
                        <div class="col-md-5">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection