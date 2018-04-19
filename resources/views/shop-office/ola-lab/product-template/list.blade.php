@extends('shop-office.ola-lab.layout')
@php
  $title = 'Template list'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <a href="/shop-office/ola-lab/product-template/create" 
    class="ui red button pulled right">New Template
  </a>
  <h2>Templates</h2>
  <table class="ui table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Product count</th>
        <th class="right aligned">Action</th>
      </tr>
    </thead>
    {{-- @foreach ($categories as $category) --}}
      <tr>
        <td>1</td>
        <td>Product set 01</td>
        <td>31</td>
        <td class="right aligned">
          <a href='/shop-office/ola-lab/product-template/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Product set 02</td>
        <td>0</td>
        <td class="right aligned">
          <a href='/shop-office/ola-lab/product-template/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Simple Text</td>
        <td>223</td>
        <td class="right aligned">
          <a href='/shop-office/ola-lab/product-template/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>Images Gallery</td>
        <td>3</td>
        <td class="right aligned">
          <a href='/shop-office/ola-lab/product-template/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
    {{-- @endforeach --}}
  </table>
@include('part.mock-pagination')
</div>
@endsection

@section('script')
<script>
</script>
@endsection
