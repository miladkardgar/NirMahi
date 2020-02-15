<?php
$active_sidebar = ['setting','userList']
?>
@extends('panel.adminLayout.main')
@section('main')
    <div class="container-fluid disable-text-selection">
        @yield('content')
    </div>
@endsection
