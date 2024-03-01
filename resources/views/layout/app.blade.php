<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="/css/style.css">
</head>

<body>
   @include('partials.navbar')
   <div class="container mt-5 mb-5 min-vh-100">
      @yield('content')
   </div>

   {{-- Script --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <script>
      CKEDITOR.replace('content');
   </script>
   <script>
      //message with toastr
      @if (session()->has('success'))

         toastr.success('{{ session('success') }}', 'BERHASIL!');
      @elseif (session()->has('error'))

         toastr.error('{{ session('error') }}', 'GAGAL!');
      @endif
   </script>
   @include('partials.footer')
</body>

</html>
