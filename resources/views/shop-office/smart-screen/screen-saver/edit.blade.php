@extends('shop-office.smart-screen.layout')
@php
  $title = 'Edit Level'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>Edit Screensaver</h2>
  <form action="/su-office/shop/edit" class="ui form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="two fields">
      <div class="field">
        <label for="name">Video 1</label>
        <div class="ui card">
          <video src="#" poster="imgs/g2000.png" width="100%;"></video>
          <button class="ui bottom attached red button">delete video</button>
        </div>
      </div>
    </div>
    <div class="two fields">
      <div class="field">
        <label for="name">Photo</label>
        <div class="ui card">
          <img src="/images/dummies/g2000.png" width="100%;">
          <button class="ui bottom attached red button">delete photo</button>
        </div>
      </div>
    </div>
    <div class="two fields">
      <div class="field">
        <label for="name">Video 2</label>
        <button class="ui red button">upload video</button>
      </div>
    </div>
    <div class="clear"></div>
  </form>
</div>
@endsection