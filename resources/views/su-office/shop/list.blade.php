@extends('su-office.layout')
@php
  $title = 'Categories list'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <a href="/su-office/shop/create" 
    class="ui red button pulled right">New Shop
  </a>
  <h2>Shops</h2>
  <table class="ui table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Theme</th>
        <th>Colour</th>
        <th>Admin</th>
        <th class="right aligned">Action</th>
      </tr>
    </thead>
    {{-- @foreach ($categories as $category) --}}
      <tr>
        <td>1</td>
        <td>G2000</td>
        <td>Fashion T1</td>
        <td style="background-color: black"></td>
        <td>admin@g2000.com</td>
        <td class="right aligned">
          <a href='/su-office/shop/edit/1' class="ui mini icon button"> <i class="setting icon"></i> </a>
          <a href='/su-office/shop/auth/edit/1' class="ui red mini icon button"> <i class="user icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>TonkotsuRamen</td>
        <td>Food T1</td>
        <td style="background-color: red"></td>
        <td>admin@tonkotsu.com</td>
        <td class="right aligned">
          <a href='/su-office/shop/edit/1' class="ui mini icon button"> <i class="setting icon"></i> </a>
          <a href='/su-office/shop/auth/edit/1' class="ui red mini icon button"> <i class="user icon"></i> </a>
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
