@extends('layout.index_layout')
  @section('content')
    @include('component.JS_show_drop')

    <aside>

      <div id='add_elem' class="bg_{{ $bg_col }}">

        <p>ADD NEW ENTITY</p>
        <span class="add_btn">+</span>

        <div class="drop-box">
          @include('elements.form_place')
        </div>

      </div>

    </aside>

    <div class="box-wrapper">

      @foreach ($places as $place)
        <div class="box bg_{{ $bg_col }}">
          <p>{{ $place-> name }}</p><br>
          <p>{{ $place-> address }}</p><br>
          <p>{{ $place-> city }}</p><br>
          <p>{{ $place-> nation }}</p>
        </div>
      @endforeach

    </div>

  @endsection
