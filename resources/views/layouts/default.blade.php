<!doctype html>
<html>
<head>
  @include('includes.head')
  @yield('styles')
</head>
<body>


  @livewire('dynamic-navbar')


  @yield('content')



  @yield('scripts')
  @livewireScripts

</body>
</html>
