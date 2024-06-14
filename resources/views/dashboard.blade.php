@extends('layouts.app')
@section('content')
    <div class="mt-3">
        @if (auth()->user()->hasRole('admin'))
            @include('devices.index')
            @include('devices.modals.create')
            @include('devices.modals.update')
            @include('devices.modals.report')
        @else
            @include('reports.index')
            @include('reports.modals.create')
        @endif
    </div>
@endsection
