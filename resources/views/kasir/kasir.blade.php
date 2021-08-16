@extends('frontend.layout-frontend.master')

@section('content')
<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
      <p class="lead text-gray-800 mb-1">selamat datang {{auth()->user()->name}}</p>
    </div>
  </div>
@endsection

