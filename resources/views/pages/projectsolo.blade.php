    <!-- ################################################################################################ -->
@extends('layouts.master')

@section('content')
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->   
      <section>
    <img src="storage/{{ $solo->img }}" class="img6">    
                    <div class="farton">
                    <p class="p25">{{ $solo->titl }}</p>
                    </div>
      </section>

      <section>
      <div class="container">
        <div class="row">
        <div class="col l6 s6 m6">
        <!--<p class="p31">-->
        <!--Проект реализуется с 2015 года. В 2016 году соорганизатором проекта стала АНО "АСИ". Премия призвана отметить людей, которые внесли весомый вклад в развитие региона, а также тех, чьи поступки должны служить примером для подражания. -->
        <!--</p>-->
            <!--<div class="fack">-->
            <!--<p class="p31 center">Миссия проекта:</p>-->
            <!--<p class="p32">Каждый житель России должен знать своих героев, видеть примеры для подражания и раскрывать свой потенциал. Показывая на примерах простых людей, что героями не рождаются, а становятся, Премия дает стимул миллионам россиян стать лучше не только для самих себя, но и для окружающих. </p>-->
            <!--</div>-->
        <!--<p class="p31"><b>Лозунг проекта: Герои среди нас!</b> </p>-->
        <p class="p22">{{ $solo->body }}</p>
        </div>
        <div class="col l6 s6 m6">
        <div class="fart1">
            <p class="p19">О ПРОЕКТЕ</p>
        </div>
        </div>
        </div>
        </div>
      </section>
      
        @endsection