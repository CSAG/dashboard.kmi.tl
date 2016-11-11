<!doctype html>
<html lang="en">
@include('_layouts.header')
<body>
<div class="wrapper">
    @include('_layouts.sidebar')
    <div class="main-panel">
        @include('_layouts.nav')
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('_layouts.footer')
    </div>

</div>

</body>
@include('_layouts.js')
</html>
