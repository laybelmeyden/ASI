
  <!-- ################################################################################################ -->
@extends('layouts.master')

@section('content')
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
   <section>
    <div class="header-img__item">
    <img src="storage/{{ $solo->img }}" class="img6">  
    </div>  
                    <div class="farton">
                    <p class="p25">{{ $solo->titl }}</p>
                    </div>
      </section>

      <section>
      <div class="container">
        <div class="row">
        <div class="col l8 m12 s12">
        <div class="cht">
        <p class="p26">{{ $solo->zag }}</p>
        </div>
        </div>
          </div>
          </div>
      </section>
      <section>
      <div class="container">
        <div class="row">
        <div class="col l8 s12 s12">
        <p class="p27">{!! $solo->body !!}</p>
        </div>
        <div class="col l4 m12 s12">
        <div class="cht1">
        <img src="assets/img/i9.png" class="img7">
        <p class="p28">{{ $solo->prik }}</p>
        </div>
        </div>
        </div>  
        </div>
      </section>
      @endsection