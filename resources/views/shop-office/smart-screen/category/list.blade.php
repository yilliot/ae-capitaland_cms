@extends('shop-office.smart-screen.layout')
@php
  $title = 'Category list'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <a href="/shop-office/smart-screen/category/create" 
    class="ui red button pulled right">New Category
  </a>
  <h2>Categories</h2>
  <table class="ui table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Product Count</th>
        <th class="right aligned">Action</th>
      </tr>
    </thead>
    {{-- @foreach ($categories as $category) --}}
      <tr>
        <td>1</td>
        <td>Cuts</td>
        <td>130</td>
        <td class="right aligned">
          <a href='/shop-office/smart-screen/category/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
          <a href='/shop-office/smart-screen/category/details/1' class="ui mini icon button"> <i class="eye icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Black</td>
        <td>319</td>
        <td class="right aligned">
          <a href='/shop-office/smart-screen/category/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
          <a href='/shop-office/smart-screen/category/details/1' class="ui mini icon button"> <i class="eye icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Classic</td>
        <td>32</td>
        <td class="right aligned">
          <a href='/shop-office/smart-screen/category/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
          <a href='/shop-office/smart-screen/category/details/1' class="ui mini icon button"> <i class="eye icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>New</td>
        <td>30</td>
        <td class="right aligned">
          <a href='/shop-office/smart-screen/category/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
          <a href='/shop-office/smart-screen/category/details/1' class="ui mini icon button"> <i class="eye icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>5</td>
        <td>Top 10</td>
        <td>8</td>
        <td class="right aligned">
          <a href='/shop-office/smart-screen/category/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
          <a href='/shop-office/smart-screen/category/details/1' class="ui mini icon button"> <i class="eye icon"></i> </a>
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
