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
        <h3 class="text-center mb-3">Entry Hotel Baru</h3>
        <hr class="new1">
        <form action="/dashboard/hotel" method="POST">
            @csrf
            <div class="row">
                <div class="col md-lg-8">
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" id="floatingInput @error('nama') is-invalid @enderror" placeholder="Nama Hotel">
                        <label for="floatingInput">Nama Hotel</label>
                        @error('nama')                  
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-5">
                              <div class="form-floating">
                                <input type="text" name="latitude" class="form-control @error('latitude') is-invalid @enderror" id="floatingLattitude" placeholder="Lattitude">
                                <label for="FloatingInput">Lattitude</label>
                              </div>
                              @error('latitude')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-5">
                              <div class="form-floating">
                                <input type="text" name="longitude" class="form-control @error('longitude') is-invalid @enderror" id="floatingLongitude" placeholder="Longitude">
                                <label for="FloatingInput">Longitude</label>
                              </div>
                              @error('longitude')                  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-5">
                              <div class="form-floating">
                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="floatingalamat" placeholder="alamat">
                                <label for="FloatingInput">Alamat</label>
                              </div>
                              @error('alamat')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-5">
                              <div class="form-floating">
                                <input type="text" name="bintang" class="form-control @error('bintang') is-invalid @enderror" id="floatingbintang" placeholder="bintang">
                                <label for="FloatingInput">Bintang</label>
                              </div>
                          </div>
                          @error('bintang')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                      <div class="row mb-3">
                          <div class="col-md-5">
                            <div class="form-floating">
                            <textarea class="form-control" name="detail" class="@error('latitude') is-invalid @enderror" placeholder="Detail" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Detail</label>
                            </div>
                            @error('detail')                  
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="col-md-5">
                              <div class="col-md-5">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection