@extends('layouts.app')

{{-- set title --}}
@section('title', 'Users Data')

{{-- set menu --}}
@section('menu-superadmin-users', 'active')

@section('content')
    {{-- load from livewire folder--}}
    @livewire('superadmin.user.index')
@endsection