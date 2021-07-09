@extends('_layouts.documentation')

@section('navigation')
    @include('_partials.documentation-nav', ['version' => 'current'])
@endsection

@section('content')
    @yield('content')
@endsection