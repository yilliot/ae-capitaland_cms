<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> {{$title or ''}} | CapitaLand CMS</title>
</head>
<body>
  <div class="ui bg-red no-corner mb-0 pl-5 inverted menu">
    <h1 class="pt-3"><a href="/shop-office/ola-lab/screen-saver/edit" class="text-white">CapitaLand Shop Office : G2000</a></h1>
    <div class="ui simple dropdown item" style="margin-left: 20px;">
      Ola-Lab Module
      <i class="dropdown icon"></i>
      <div class="menu">
        <a href="/shop-office/smart-screen/screen-saver/edit" class="item">Smart Screen Module</a>
        <a href="/shop-office/ola-lab/screen-saver/edit" class="item">Oola Lab Module</a>
      </div>
    </div>
    <div class="right menu">
      <div class="item modalcaller" data-modal-id='create_publish'>
        <i class="upload icon"></i>
        Publish
      </div>
      <div class="ui simple dropdown item">
        <i class="circular white inverted user icon"></i>
        {{ Auth::user() ? Auth::user()->name : '' }}
        <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="/back-office/user/update"><i class="edit icon"></i>Update Profile</a>

          {{ Form::open(['url' => route('logout'), 'method' => 'POST', 'class' => "item clicksubmit"]) }}
            @csrf
            <i class="sign out icon"></i>Logout
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
  <div class="ui inverted no-corner mt-0 menu">
    <div class="ui text container">
      <a href="/shop-office/ola-lab/screen-saver/edit" class="{{Request::is('shop-office/ola-lab/screen-saver*')?'active':''}} item">Screensaver</a>
      <a href="/shop-office/ola-lab/product-template/list" class="{{Request::is('shop-office/ola-lab/product-template*')?'active':''}} item">Product Template</a>
      <a href="/shop-office/ola-lab/product/list" class="{{Request::is('shop-office/ola-lab/product/*')?'active':''}} item">Products</a>
      {{-- <a href="/shop-office/ola-lab/category/list" class="{{Request::is('shop-office/ola-lab/category*')?'active':''}} item">Categories</a> --}}
    </div>
  </div>
  <div id="content-body">
    @section('content')
    @show
  </div>
  <link rel="stylesheet" href="/semantic/semantic.min.css">
  <link rel="stylesheet" href="/css/office.css">
  <script src="/js/office.js"></script>
  @yield('script')
</body>
</html>