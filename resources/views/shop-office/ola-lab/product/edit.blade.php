@extends('shop-office.ola-lab.layout')
@php
  $title = 'Edit Product'
@endphp
@section('content')
<div class="ui segment bg-grey container px-5">
  <h2>Edit Product</h2>
  <form action="#" class="ui form" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="ui horizontal divider">Basic Field</div>
    <div class="field">
      <label for="name">Name</label>
      <input name="name" type="text" value="High Cuff Striped Blouse">
    </div>
    <div class="field">
      <label for="name">Activate</label>
      <div class="ui toggle checkbox">
        <input type="checkbox" checked="checked">
      </div>
    </tr>

    <div class="ui horizontal divider">Template : Simple Text Field</div>
    
    <div class="field">
      <table class="ui very compact table">
        <tr>
          <th>Name</th>
          <td>
            <input type="text">
          </td>
        </tr>
        <tr><th>Description</th><td><textarea name="" id="" cols="30" rows="10"></textarea></td></tr>
        <tr>
          <th>Background</th>
          <td>
            <button class="ui red button">Upload Image</button>
          </td>
        </tr>
      </table>
    </div>


    <button class="ui red button pulled right">Save</button>
    <a href="/shop-office/ola-lab/product/list" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection