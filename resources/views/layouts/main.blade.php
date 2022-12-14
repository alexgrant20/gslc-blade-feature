<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="min-vh-100 position-relative bg-dark text-white">
   @include('layouts.header')

   <main class="container h-100 py-5">
      @yield('section')
   </main>

   @include('layouts.footer')
</body>

</html>
