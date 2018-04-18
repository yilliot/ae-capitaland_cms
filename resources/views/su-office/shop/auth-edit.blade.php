@extends('su-office.layout')
@php
  $title = 'Edit Admin'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>Edit Admin G2000</h2>
  <form action="/su-office/shop/edit" class="ui form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="two fields">
      <div class="field">
        <label for="name">Email</label>
        <input name="name" type="text" value="admin@g2000.com">
      </div>
      <div class="field">
        <label for="theme"> Password </label>
        <input type="password">
      </div>
    </div>
    <button class="ui red button pulled right">Save</button>
    <a href="/su-office/shop/list/" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection