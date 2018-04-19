@extends('shop-office.ola-lab.layout')
@php
  $title = 'Edit Product Template'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>Edit Product Template</h2>
  <form action="#" class="ui form" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="field">
      <label for="name">Name</label>
      <input name="name" type="text" value="Simple text">
    </div>
    <div class="field">
      
    </div>
    <div class="field">
      <h4 class="ui header">Fields</h4>
      <table class="ui table">
        <tr><td>No.</td><td>Label</td><td>Type</td></tr>
        <tr>
          <td>1.</td>
          <td><input type="text" value="Name"></td>
          <td>@include('part.mock-field-type', ['selected' => 1])</td>
        </tr>
        <tr>
          <td>2.</td>
          <td><input type="text" value="Description"></td>
          <td>@include('part.mock-field-type', ['selected' => 2])</td>
        </tr>
        <tr>
          <td>3.</td>
          <td><input type="text" value="Background"></td>
          <td>@include('part.mock-field-type', ['selected' => 3])</td>
        </tr>
        <tfoot>
          <tr>
            <th colspan="3"><button type="button" class="ui small red button">Add Field</button></th>
          </tr>
        </tfoot>
      </table>
    </div>


    <button class="ui red button pulled right">Save</button>
    <a href="/shop-office/ola-lab/product-template/list" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection