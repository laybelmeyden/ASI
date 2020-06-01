    <!-- ################################################################################################ -->
    @extends('layouts.master')

    @section('content')
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <section>
      <div class="proj_solo_img">
      <img src="storage/{{ $solo->img }}" class="img6">
      </div>
      <div class="farton">
        <p class="p25">{{ $solo->titl }}</p>
        <div class="fart1">
          <p class="p19">О ПРОЕКТЕ</p>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col l6 s6 m12">
            <p class="p22">{!! $solo->body !!}</p>
          </div>
          <div class="col l6 s6 m12">

          </div>
        </div>
      </div>
    </section>

    @endsection