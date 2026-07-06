@extends('layouts.app')

{{-- set title --}}
@section('title', 'Stocks Data')

{{-- set menu --}}
@section('menu-superadmin-stocks', 'active')

@section('content')
    {{-- load from livewire folder--}}
    @livewire('superadmin.stock.index')
@endsection

{{-- call livewire from views --}}
{{-- @livewire("superadmin.stock.index") --}}