<?php
$active_sidebar = ['setting','userList']
?>
@extends('adminLayout.main')
@section('main')
    <div class="container-fluid disable-text-selection">
        @yield('content')
    </div>
@endsection
