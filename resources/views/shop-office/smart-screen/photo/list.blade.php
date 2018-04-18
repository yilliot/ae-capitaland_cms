@extends('shop-office.smart-screen.layout')
@php
  $title = 'Categories list'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <a href="/shop-office/smart-screen/photo/create" 
    class="ui red button pulled right">New Photo
  </a>
  <h2>Photos</h2>
  <table class="ui table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>image</th>
        <th>Products</th>
        <th class="right aligned">Action</th>
      </tr>
    </thead>
    {{-- @foreach ($categories as $category) --}}
      <tr>
        <td>1</td>
        <td>Woman set 01</td>
        <td><img class="ui small image" src="/images/dummies/01.jpg" alt=""></td>
        <td>
          <ul class="ui list">
            <li><a href="/shop-office/smart-screen/product/edit/1">High Cuff Striped Blouse</a></li>
            <li><a href="/shop-office/smart-screen/product/edit/1">Asymmetric Striped</a></li>
          </ul>
        </td>
        <td class="right aligned">
          <a href='/shop-office/smart-screen/photo/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Woman set 02</td>
        <td><img class="ui small image" src="/images/dummies/02.jpg" alt=""></td>
        <td>
          <ul class="ui list">
            <li><a href="/shop-office/smart-screen/product/edit/1">Jersey Top with Knotted</a></li>
            <li><a href="/shop-office/smart-screen/product/edit/1">Slit-Front Pencil Skirt</a></li>
          </ul>
        </td>
        <td class="right aligned">
          <a href='/shop-office/smart-screen/photo/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Lace Dress</td>
        <td><img class="ui small image" src="/images/dummies/03.jpg" alt=""></td>
        <td>
          <ul class="ui list">
            <li><a href="/shop-office/smart-screen/product/edit/1">Lace Dress</a></li>
          </ul>
        </td>
        <td class="right aligned">
          <a href='/shop-office/smart-screen/photo/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>Men set 01</td>
        <td><img class="ui small image" src="/images/dummies/04.jpg" alt=""></td>
        <td>
          <ul class="ui list">
            <li><a href="/shop-office/smart-screen/product/edit/1">TR Unconstructed Check Suit</a></li>
            <li><a href="/shop-office/smart-screen/product/edit/1">CVC Pattern Shirt</a></li>
            <li><a href="/shop-office/smart-screen/product/edit/1">Silk Tie</a></li>
            <li><a href="/shop-office/smart-screen/product/edit/1">Poly Formal Pants</a></li>
          </ul>
        </td>
        <td class="right aligned">
          <a href='/shop-office/smart-screen/photo/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
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
