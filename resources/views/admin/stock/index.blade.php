@extends('layouts.app')

{{-- set title --}}
@section('title', 'Stocks Data')

{{-- set menu --}}
@section('menu-admin-stocks', 'active')

@section('content')
    {{-- load from livewire folder--}}
    @livewire('admin.stock.index')
@endsection

{{-- call livewire from views --}}
{{-- @livewire("admin.stock.index") --}}