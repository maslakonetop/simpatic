@extends('layouts.dashboard')
@section('isidashboard')
<script src='//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.3.1/leaflet-omnivore.min.js'></script>
<section class="content">
    <div class="container-fluid">
        <h3 class="text-center">Data Bandara di Cilacap</h3>
        <a href="/dashboard/bandara/create" class="btn btn-primary mb-3">Baru</a>
        <table class="table table-sm table-hover table-striped table-bordered" style="width: 100%">
            <thead>
                <th scope="col" class="text-center text-light bg-info">ID</th>
                <th scope="col" class="text-center text-light bg-info">NAMA BANDARA</th>
                <th scope="col" class="text-center text-light bg-info">LATITUDE</th>
                <th scope="col" class="text-center text-light bg-info">LONGITUDE</th>
                <th scope="col" class="text-center text-light bg-info">DETAIL</th>
                <th scope="col" class="text-center text-light bg-info">AKSI</th>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td class="text-uppercase">
                            {{ $data->id }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->nama }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->latitude }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->longitude }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->detail }}
                        </td >
                        <td class="text-uppercase">
                            <a href="/dashboard/bandara/{{ $data->id }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="badge bg-warning"><i class="far fa-edit"></i></a>
                            <a href="" class="badge bg-info"><i class="fas fa-trash-alt"></i></a>
                        </td >

                    </tr>                                            
                
            </tbody>
        </table>
    </div>
    <div id="map" class="border border-warning"></div>
</section>
<script>
    var map = L.map('map').setView([<?php echo $data->latitude ?>, <?php echo $data->longitude ?>], 20);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Data oleh SIMPATIC',
      maxZoom: 18,
      id: 'mapbox/satellite-v9',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1IjoibWFzbGFrb25lIiwiYSI6ImNrbGJlYzR3NDBxaGsydnRrYmU3YTUzdWcifQ.eCqIoeIhVWb-XOAWHrFy7A'
      }).addTo(map);
    var runLayer = omnivore.kml('raw/$data->filekml')
        .on('ready', function() {
            map.fitBounds(runLayer.getBounds());
        })
        .addTo(map);
        var marker = L.marker([<?php echo $data->latitude ?>, <?php echo $data->longitude ?>])
        .addTo(map)
        .bindTooltip('<?php echo $data->nama ?>');
    @endforeach
  </script>
@endsection