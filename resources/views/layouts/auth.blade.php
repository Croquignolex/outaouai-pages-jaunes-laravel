@extends('layouts.main', compact('title'))

@push('main.styles')

@endpush

@section('main.body')
    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->
@endsection

@push('master.scripts')

@endpush
