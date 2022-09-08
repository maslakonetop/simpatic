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
                        @endforeach
                    </tr>                                            
                
            </tbody>
        </table>
    </div>
    <div id="map" class="border border-warning"></div>
</section>
@endsection