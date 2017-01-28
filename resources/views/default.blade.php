@include('partials.head')

@include('partials.navigation')

  <div class="container">
    @include('partials.alert')
    @yield('content')
 </div>

 @include('partials.foot')
