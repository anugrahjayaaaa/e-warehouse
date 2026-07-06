@extends('layouts.app')

{{-- set title --}}
@section('title', 'User Data')

{{-- set menu --}}
@section('menu-superadmin-users', 'active')

@section('content')
    {{-- load from livewire folder--}}
    @livewire('superadmin.user.index')
@endsection

{{-- call livewire from views --}}
{{-- @livewire("superadmin.user.index") --}}