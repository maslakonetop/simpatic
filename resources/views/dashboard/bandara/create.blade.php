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
        <h3 class="text-center mb-3">Entry Bandara Baru</h3>
        <hr class="new1">
        <form action="/dashboard/bandara" method="POST">
            @csrf
            <div class="row">
                <div class="col md-lg-8">
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Nama Bandara">
                        <label for="floatingInput">Nama Bandara</label>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-5">
                              <div class="form-floating">
                                <input type="text" name="latitude" class="form-control" id="floatingLattitude" placeholder="Lattitude">
                                <label for="FloatingInput">Lattitude</label>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="form-floating">
                                <input type="text" name="longitude" class="form-control" id="floatingLongitude" placeholder="Longitude">
                                <label for="FloatingInput">Longitude</label>
                              </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-5">
                              <div class="form-floating">
                                <input type="text" name="filekml" class="form-control" id="floatingFileKML" placeholder="FileKML">
                                <label for="FloatingInput">FileKML</label>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="form-floating">
                                <input type="text" name="detail" class="form-control" id="floatingDetail" placeholder="Detail">
                                <label for="FloatingInput">Detail</label>
                              </div>
                          </div>
                        </div>
                      <div class="row mb-3">
                          <div class="col-md-5">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection