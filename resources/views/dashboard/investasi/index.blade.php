@extends('layouts.dashboard')
@section('isidashboard')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <h3 class="m-0 text-center">List Lokasi Investasi</h3>
      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
      <div id="map" class="border border-warning"></div>
      <h4 class="text-center">List Peluang Investasi</h4>
      <a href="/dashboard/investasi/create" class="btn btn-primary mb-3">Baru</a>
        <table class="table table-sm table-hover table-striped table-bordered" style="width: 100%">
            <thead>
                <th scope="col" class="text-center text-light bg-info">ID</th>
                <th scope="col" class="text-center text-light bg-info">NAMA PROYEK</th>
                <th scope="col" class="text-center text-light bg-info">SEKTOR</th>
                <th scope="col" class="text-center text-light bg-info">PASAR</th>
                <th scope="col" class="text-center text-light bg-info">LOKASI</th>
                <th scope="col" class="text-center text-light bg-info">STATUS</th>
                <th scope="col" class="text-center text-light bg-info">NILAI</th>
                <th scope="col" class="text-center text-light bg-info">PAYBACK_PERIOD</th>
                <th scope="col" class="text-center text-light bg-info">PIC</th>
                <th scope="col" class="text-center text-light bg-info">AKSI</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td class="text-uppercase">
                            {{ $data->id }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->namaproyek }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->sektor }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->pasar }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->lokasi }}
                        </td >
                        <td class="text-uppercase">
                            {{ $data->status }}
                        </td >
                        <td class="text-uppercase">
                            {{ $data->nilai }}
                        </td >
                        <td class="text-uppercase">
                            {{ $data->payback_period }}
                        </td >
                        <td class="text-uppercase">
                            {{ $data->pic }}
                        </td >
                        <td class="text-uppercase">
                            <a href="/dashboard/investasi/{{ $data->id }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="badge bg-warning"><i class="far fa-edit"></i></a>
                            <a href="" class="badge bg-info"><i class="fas fa-trash-alt"></i></a>
                        </td >
                        @endforeach
                    </tr>                                            
                
            </tbody>
        </table>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->


<script>
var map = L.map('map').setView([-7.492276, 109.022849], 10);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Data oleh SIMPATIC',
  maxZoom: 18,
  id: 'mapbox/satellite-v9',
  tileSize: 512,
  zoomOffset: -1,
  accessToken: 'pk.eyJ1IjoibWFzbGFrb25lIiwiYSI6ImNrbGJlYzR3NDBxaGsydnRrYmU3YTUzdWcifQ.eCqIoeIhVWb-XOAWHrFy7A'
  }).addTo(map);
  
  var runLayer = omnivore.kml('/raw/cilacap.kml')
    .on('ready', function() {
        map.fitBounds(runLayer.getBounds());
    })
    .addTo(map);
  
</script>
@endsection