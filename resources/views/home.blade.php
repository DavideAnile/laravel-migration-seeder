@extends('layouts/main')

@section('content')

<h1 class="text-center m-5">TRENI ODIERNI</h1>

<table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Orario di arrivo</th>
        <th scope="col">Codice treno</th>
        <th scope="col">Numero Carrozze</th>
        <th scope="col" class="text-center">In orario</th>
        <th scope="col">Cancellato</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
            
        <tr>
            <td>{{$train->azienda}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>{{$train->departure_time}}</td>
            <td>{{$train->arrival_time}}</td>
            <td class="text-center">{{$train->train_code}}</td>
            <td class="text-center">{{$train->carriages_number}}</td>
            <td class="text-center">{{$train->in_time == null ? 'Nessun ritardo' : $train->in_time}}' </td>
            <td class="text-center">{{$train->is_deleted == false ? 'NO' : 'SI'}}</td>
            
        </tr>

        @endforeach
      
    </tbody>
  </table>
    
@endsection