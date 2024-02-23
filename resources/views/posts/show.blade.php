@extends('layout.app')
<title>Edit Data Post</title>
@section('content')
   <section>
      <br><br>
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded">
               <div class="card-body">
                  <h4 class="mb-3" style="text-decoration: underline; color: rgb(108, 108, 108);">Image Portal</h4>
                  <img src="{{ asset('storage/posts/' . $post->image) }}" class="w-100 rounded">
                  <hr>
                  <div class="border">
                     <h5 class="mb-3" style="color: rgb(108, 108, 108); text-decoration: underline">Judul</h5>
                     <h4>{{ $post->title }}</h4>
                  </div>
                  <p class="tmt-3">
                     {!! $post->content !!}
                  </p>
               </div>
            </div>
         </div>
      </div>
      </div>
   </section>
@endsection
