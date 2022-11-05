<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="min-vh-100 position-relative">
   @include('layouts.header')

   <main class="container h-100">
      @yield('section')
   </main>

   @include('layouts.footer')
</body>

</html>
