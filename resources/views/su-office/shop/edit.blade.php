@extends('su-office.layout')
@php
  $title = 'Edit Level'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>Edit Shop G2000</h2>
  <form action="/su-office/shop/edit" class="ui form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="two fields">
      <div class="field">
        <label for="name">Name</label>
        <input name="name" type="text" value="G2000">
      </div>

    </div>


    <div class="ui divider"> </div>

    <div class="field">
      <div class="ui slider checkbox">
        <input type="checkbox" checked="checked">
        <label for="">Enable Smart Screen Interactive</label>
      </div>
    </div>
    <div class="two fields">
      <div class="field">
        <label for="theme"> Theme </label>
        <select name="theme" class="ui dropdown">
          <option value="1">Fashion T1</option>
        </select>
      </div>
      <div class="field">
        <label for="theme"> Color </label>
        <div class="ui icon input">
          <input name="name" type="text" value="#000000">
          <i class="paint brush icon"></i>
        </div>
      </div>
    </div>

    <div class="ui divider"> </div>

    <div class="field">
      <div class="ui slider checkbox">
        <input type="checkbox" checked="checked">
        <label for="">Enable Ola Lab Interactive</label>
      </div>
    </div>

    <button class="ui red button pulled right">Save</button>
    <a href="/su-office/shop/list/" class="ui basic button pulled right">Cancel</a>
    <div class="clear"></div>
  </form>
</div>
@endsection