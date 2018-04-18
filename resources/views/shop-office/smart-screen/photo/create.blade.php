@extends('shop-office.smart-screen.layout')
@php
  $title = 'New Photo'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>New Photo</h2>
  <form action="/shop-office/smart-screen/photo/edit/1" class="ui form" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="field">
      <label for="name">Name</label>
      <input name="name" type="text" value="">
    </div>
    <div class="field">
      <label for="">photo</label>
      <button class="ui red button">upload photo</button>
    </div>


    <button class="ui red button pulled right">Create</button>
    <a href="/shop-office/smart-screen/photo/list" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection