@extends('shop-office.smart-screen.layout')
@php
  $title = 'New Category'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>New Category</h2>
  <form action="#" class="ui form" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="field">
      <label for="name">Name</label>
      <input name="name" type="text" value="">
    </div>


    <button class="ui red button pulled right">Save</button>
    <a href="/shop-office/smart-screen/category/list" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection