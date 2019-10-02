@extends('layout.index_layout')
  @section('content')

    <div class="box-wrapper">

      @foreach ($places as $place)
        <div class="box">
          <p>{{ $place-> name }}</p><br>
          <p>{{ $place-> address }}</p><br>
          <p>{{ $place-> city }}</p><br>
          <p>{{ $place-> nation }}</p>
        </div>
      @endforeach

    </div>





  @endsection
