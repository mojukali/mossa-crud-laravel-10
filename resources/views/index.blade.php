@extends('layout.app')
@include('partials.navbar')
@section('content')
   <!--==================== HOME ====================-->
   <section class="home section" id="home">
      <div class="home__container container grid">
         <h1 class="home__name">
            Selamat Datang Di Data Post<span class="home__name" style="color: crimson">!</span>
         </h1>

         <div class="home__perfil">
            <div class="home__image">
               <div class="home__shadow"></div>
               <div class="geometric-box"></div>
            </div>

         </div>
      </div>

      <div class="row">
         <div class="col-6">
            <div class="home__info">
               <p class="home__description">
                  <b>Tambah Datamu</b>, klik tombol pada bagian
                  pojok kanan agar kamu dapat menambah datamu
               </p>
            </div>
         </div>
      </div>
      </div>
   </section>
@endsection
