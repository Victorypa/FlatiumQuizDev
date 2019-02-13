@extends('layouts.app')

@section('content')
    @include('panel.partials._navigation')

    <calculators :calculators="{{ $calculators }}" />
@endsection
