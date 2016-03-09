<!DOCTYPE html>
<html>
    <head>
      @include('partials._head')
    </head>
    <body>
      <div id="sfLoader"></div>
      @include('partials._nav')
      
      @include('partials._messages')
      
        @yield('content')
      
      @include('partials._footer')
      
      @include('partials._js')

      @yield('scripts')
    </body>
</html>