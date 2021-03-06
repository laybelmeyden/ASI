@extends('layouts.master')

@section('content') 
            <section>
        <div class="container">
        <div class="row">
        @foreach ($news as $new)
        <div class="col l4 m12 s12">
        <div class="card card1">
            <div class="card-image">
                <div class="data1">
                <p class="p12">{{ $new->data }}</p>
                </div>
              <img class="carg" src="storage/{{ $new->img }}">
            </div>
            <div class="card-content card-content1">
            <div class="i1">
            <p class="p10 ha1">{{ $new->titl }}</p>
            </div>
              <div class="ha2">
                  <p class="p11">{!! $new->body !!}</p>
              </div>
            </div>
            <div class="card-action act1">
              <a class="a2" href="/new{{ $new->id }}">ПОДРОБНЕЕ</a>
            </div>
          </div>
        </div>
        @endforeach
        </div>
        </div>
      </section>
      
      @endsection