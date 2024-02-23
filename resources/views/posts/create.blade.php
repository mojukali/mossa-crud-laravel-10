@extends('layout.app')
@section('content')
   <section>
      <br><br>
      <title>Tambah Data Post</title>
      <div class="container mt-5 mb-5">
         <div class="row">
            <div class="col-md-12">
               <div class="card border-0 shadow-sm rounded">
                  <div class="card-body">
                     <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                           <div class="col">
                              <div class="form-group">
                                 <label class="font-weight-bold">GAMBAR</label>
                                 <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image">

                                 <!-- error message untuk title -->
                                 @error('image')
                                    <div class="alert alert-danger mt-2">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-group">
                                 <label class="font-weight-bold">JUDUL</label>
                                 <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                                 <!-- error message untuk title -->
                                 @error('title')
                                    <div class="alert alert-danger mt-2">
                                       {{ $message }}
                                    </div>
                                 @enderror
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="font-weight-bold">KONTEN</label>
                           <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                              placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                           <!-- error message untuk content -->
                           @error('content')
                              <div class="alert alert__color mt-2">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>

                        <button type="submit" class="btn btn-md mt-2 btn__simpan">SIMPAN</button>
                        <button type="reset" class="btn btn-md text-light mt-2 ms-1 btn__reset">RESET</button>

                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>
@endsection
