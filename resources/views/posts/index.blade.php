@extends('layout.app')
@section('content')
   <section>
      <br><br><br><br>

      <title>Data Post</title>
      <div class="row">
         <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
               <div class="card-body">
                  <div class="ms-auto">
                     <a href="{{ route('posts.create') }}" class="btn btn-md nav__link-btn mb-3">
                        <i class="bi bi-plus-circle"></i>
                        <span class="visually-hidden "> </span>
                        TAMBAH POST
                     </a>
                  </div>
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th scope="col">GAMBAR</th>
                           <th scope="col">JUDUL</th>
                           <th scope="col">CONTENT</th>
                           <th scope="col">AKSI</th>
                        </tr>
                     </thead>
                     <tbody>
                        @forelse ($posts as $post)
                           <tr>
                              <td class="text-center">
                                 <img src="{{ asset('/storage/posts/' . $post->image) }}" class="rounded"
                                    style="width: 150px">
                              </td>
                              <td>{{ $post->title }}</td>
                              <td>{!! $post->content !!}</td>
                              <td>
                                 <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    <div class="btn btn-sm btn__show">
                                       <i class="bi bi-eye"></i>
                                       <a href="{{ route('posts.show', $post->id) }}" class="ms-2 text-decoration-none "
                                          style="color: inherit">SHOW</a>
                                    </div>
                                    <div class="btn btn-sm btn__edit">
                                       <i class="bi bi-pencil-square "></i>
                                       <a href="{{ route('posts.edit', $post->id) }}" class="ms-2 text-decoration-none"
                                          style="color: inherit">EDIT</a>
                                    </div>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn__hapus"><i
                                          class="bi bi-trash3 me-2 text-decoration-none"
                                          style="color: inherit"></i>HAPUS</button>
               </div>
               </form>
               </td>
               </tr>
            @empty
               <div class="alert alert__color">
                  Data Post belum Tersedia.
               </div>
               @endforelse
               </tbody>
               </table>
               {{ $posts->links() }}
            </div>
         </div>
      </div>
      </div>
      </div>
   </section>
@endsection
