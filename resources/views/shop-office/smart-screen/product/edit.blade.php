@extends('shop-office.smart-screen.layout')
@php
  $title = 'Edit Product'
@endphp
@section('content')
<div class="ui segment bg-grey container px-5">
  <h2>Edit Product</h2>
  <form action="#" class="ui form" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="field">
      <label for="name">Name</label>
      <input name="name" type="text" value="High Cuff Striped Blouse">
    </div>
    <div class="inline fields">
      <div class="five wide field">
        <div class="ui card">
          <div class="point" style="position: absolute; top: 75px; left: 170px;"><i style="color:red" class="circle icon"></i></div>
          <img src="/images/dummies/01.jpg" width="100%;" >
        </div>
      </div>
      <div class="eleven wide field">
        <table class="ui very compact table">
          <tr>
            <th colspan="2"><h4 class="ui header">More details</h4></th>
          </tr>
          <tr><th>Description</th><td><textarea name="" id="" cols="30" rows="10"></textarea></td></tr>
          <tr>
            <th>Show Mirror Button</th>
            <td>
              <div class="ui slider checkbox">
                <input type="checkbox" checked="checked">
              </div>
            </td>
          </tr>
          <tr>
            <th>Show Checkout Cart</th>
            <td>
              <div class="ui slider checkbox">
                <input type="checkbox">
              </div>
            </td>
          </tr>
          <tr>
            <th>Activate</th>
            <td>
              <div class="ui toggle checkbox">
                <input type="checkbox" checked="checked">
              </div>
            </td>
          </tr>
          <tr>
            <th>Categories</th>
            <td>
              <select class="ui fluid search dropdown" multiple="">
                <option value="">Categories</option>
                <option value="AL">Cuts</option>
                <option value="AK">Black</option>
                <option value="AZ">Classic</option>
                <option value="AR">New</option>
                <option value="CA">Top 10</option>
                <option value="CO">Treding</option>
                <option value="CT">White</option>
              </select>
            </td>
          </tr>
        </table>
      </div>
    </div>


    <button class="ui red button pulled right">Save</button>
    <a href="/shop-office/smart-screen/product/list" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection