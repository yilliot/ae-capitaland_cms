@extends('shop-office.ola-lab.layout')
@php
  $title = 'New Product Template'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>New Product Template</h2>
  <form action="/shop-office/ola-lab/product-template/edit/1" class="ui form" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="field">
      <label for="name">Name</label>
      <input name="name" type="text" value="">
    </div>


    <button class="ui red button pulled right">Create</button>
    <a href="/shop-office/ola-lab/product-template/list" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection