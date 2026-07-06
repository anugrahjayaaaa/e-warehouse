@extends('layouts.app')

{{-- set title --}}
@section('title', 'Categories Data')

{{-- set menu --}}
@section('menu-superadmin-categories', 'active')

@section('content')
    {{-- load from livewire folder--}}
    @livewire('superadmin.category.index')
@endsection

{{-- call livewire from views --}}
{{-- @livewire("superadmin.user.index") --}}