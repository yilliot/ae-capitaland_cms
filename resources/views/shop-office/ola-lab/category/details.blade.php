@extends('shop-office.ola-lab.layout')
@php
  $title = 'Product list of category'
@endphp
@section('content')
<div class="ui segment bg-grey text container px-5">
  <h2>Product of Top 10</h2>
  <table class="ui table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Photo</th>
        <th class="right aligned">Action</th>
      </tr>
    </thead>
    {{-- @foreach ($categories as $category) --}}
      <tr>
        <td>1</td>
        <td>High Cuff Striped Blouse</td>
        <td><img class="ui small image" src="/images/dummies/01.jpg" alt="Woman set 01"></td>
        <td class="right aligned">
          <a href='#' class="ui red mini icon button"> <i class="trash icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Asymmetric Striped</td>
        <td><img class="ui small image" src="/images/dummies/01.jpg" alt="Woman set 01"></td>
        <td class="right aligned">
          <a href='#' class="ui red mini icon button"> <i class="trash icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Jersey Top with Knotted</td>
        <td><img class="ui small image" src="/images/dummies/02.jpg" alt="Woman set 02"></td>
        <td class="right aligned">
          <a href='#' class="ui red mini icon button"> <i class="trash icon"></i> </a>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>Slit-Front Pencil Skirt</td>
        <td><img class="ui small image" src="/images/dummies/02.jpg" alt="Woman set 02"></td>

        <td class="right aligned">
          <a href='#' class="ui red mini icon button"> <i class="trash icon"></i> </a>
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
