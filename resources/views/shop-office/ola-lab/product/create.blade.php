@extends('shop-office.ola-lab.layout')
@php
  $title = 'New Product'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>New Product</h2>
  <form action="/shop-office/ola-lab/product/edit/1" class="ui form" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="field">
      <label for="name">Name</label>
      <input name="name" type="text" value="">
    </div>

    <div class="field">
      <label for="name">Template</label>
      <select name="template" class="ui dropdown">
        <option value="1">Product set 01</option>
        <option value="2">Product set 02</option>
        <option value="3">Simple Text</option>
        <option value="4">Images Gallery</option>
      </select>
    </div>


    <button class="ui red button pulled right">Create</button>
    <a href="/shop-office/ola-lab/product/list" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection