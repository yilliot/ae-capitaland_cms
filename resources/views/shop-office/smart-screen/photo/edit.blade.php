@extends('shop-office.smart-screen.layout')
@php
  $title = 'Edit Photo'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>Edit Photo</h2>
  <form action="#" class="ui form" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="field">
      <label for="name">Name</label>
      <input name="name" type="text" value="Woman set 01">
    </div>
    <div class="two fields">
      <div class="field">
        <div class="ui card">
          <div class="point" style="position: absolute; top: 75px; left: 170px;"><i style="color:red" class="circle icon"></i></div>
          <div class="point" style="position: absolute; top: 210px; left: 175px;"><i style="color:red" class="circle icon"></i></div>
          <img src="/images/dummies/01.jpg" width="100%;" >
          <button class="ui bottom attached red button">delete photo</button>
        </div>
      </div>
      <div class="field">
        <h4 class="ui header">Products</h4>
        <table class="ui table">
          <tr><td>No.</td><td>Name</td><td>Point</td></tr>
          <tr><td>1.</td><td><input type="text" value="High Cuff Striped Blouse"></td><td><button type="button" class="ui mini icon button"><i class="circle icon"></i></button></td></tr>
          <tr><td>2.</td><td><input type="text" value="Asymmetric Striped"></td><td><button type="button" class="ui mini icon button"><i class="circle icon"></i></button></td></tr>
          <tfoot>
            <tr>
              <th colspan="3"><button type="button" class="ui small red button">Add Product</button></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>


    <button class="ui red button pulled right">Save</button>
    <a href="/shop-office/smart-screen/photo/list" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection