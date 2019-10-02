@extends('layout.index_layout')
  @section('content')
    @include('component.JS_show_drop')
    <a id='add_elem' href="#">ADD NEW ENTITY +</a>
    <div class="drop-box">

      <form action={{ route('place.store') }} method="post">
        @csrf
        @method('POST')

        <label for="name">Name</label>
        <input type="text" name="name" value=""><br>
        <label for="address">Address</label>
        <input type="text" name="address"><br>
        <label for="city">City</label>
        <input type="text" name="city"><br>
        <label for="nation">Nation</label>
        <input type="text" name="nation"><br>
        <button type="submit" name="button">Create</button>
      </form>

    </div>
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
