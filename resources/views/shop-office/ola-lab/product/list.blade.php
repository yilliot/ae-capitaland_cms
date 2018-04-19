@extends('shop-office.ola-lab.layout')
@php
  $title = 'Product list'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <a href="/shop-office/ola-lab/product/create" 
    class="ui red button pulled right">New Product
  </a>
  <h2>Products</h2>
  <table class="ui table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Template</th>
        <th class="right aligned">Action</th>
      </tr>
    </thead>
    {{-- @foreach ($categories as $category) --}}
      <tr>
        <td>1</td>
        <td>High Cuff Striped Blouse</td>
        <td>Simple Text</td>
        <td class="right aligned">
          <a href='/shop-office/ola-lab/product/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Asymmetric Striped</td>
        <td>Simple Text</td>
        <td class="right aligned">
          <a href='/shop-office/ola-lab/product/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Jersey Top with Knotted</td>
        <td>Simple Text</td>
        <td class="right aligned">
          <a href='/shop-office/ola-lab/product/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>Slit-Front Pencil Skirt</td>
        <td>Simple Text</td>
        <td class="right aligned">
          <a href='/shop-office/ola-lab/product/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>5</td>
        <td>Lace Dress</td>
        <td>Simple Text</td>
        <td class="right aligned">
          <a href='/shop-office/ola-lab/product/edit/1' class="ui red mini icon button"> <i class="pencil icon"></i> </a>
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
