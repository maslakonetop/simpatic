@extends('layouts.dashboard')
@section('isidashboard')
<script src='//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.3.1/leaflet-omnivore.min.js'></script>
<section class="content">
    <div class="container-fluid">
        <h3 class="text-center">Data Hotel di Cilacap</h3>
        <a href="/dashboard/hotel/create" class="btn btn-primary mb-3">Baru</a>
        <table class="table table-sm table-hover table-striped table-bordered" style="width: 100%">
            <thead>
                <th scope="col" class="text-center text-light bg-info">ID</th>
                <th scope="col" class="text-center text-light bg-info">NAMA HOTEL</th>
                <th scope="col" class="text-center text-light bg-info">ALAMAT</th>
                <th scope="col" class="text-center text-light bg-info">BINTANG</th>
                <th scope="col" class="text-center text-light bg-info">FASILITAS</th>
                <th scope="col" class="text-center text-light bg-info">AKSI</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td class="text-uppercase">
                            {{ $data->id }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->nama }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->alamat }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->bintang }}
                        </td>
                        <td class="text-uppercase">
                            {{ $data->fasilitas }}
                        </td >
                        <td class="text-uppercase">
                            <a href="/dashboard/bandara/{{ $data->id }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="badge bg-warning"><i class="far fa-edit"></i></a>
                            <a href="" class="badge bg-info"><i class="fas fa-trash-alt"></i></a>
                        </td >
                        @endforeach
                    </tr>                                            
                
            </tbody>
        </table>
        <div id="map" class="border border-warning"></div>
    </div>
</section>
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

    @foreach ($datas as $data )
        
    var hotelIcon = L.icon({
    iconUrl: '/image/hotel.png'
    });
    var marker = L.marker([<?php echo $data->latitude ?>, <?php echo $data->longitude ?>], {icon: hotelIcon})
        .addTo(map)
        .bindTooltip('<?php echo $data->nama ?>');
    @endforeach
        
</script>
@endsection