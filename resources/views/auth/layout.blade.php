<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Authentication | CapitaLand CMS</title>
</head>
<body>
  <div class="ui bg-red no-corner mb-0 pl-5 inverted menu">
    <h1 class="pt-3"><a href="/back-office" class="text-white">CapitaLand CMS</a></h1>
  </div>
  <div id="content-body">
    @section('content')
    @show
  </div>
  <link rel="stylesheet" href="/semantic/semantic.min.css">
  <link rel="stylesheet" href="/css/office.css">
  @yield('script')
</body>
</html>