@extends('layouts.app')

@section('content')
    @include('panel.partials._navigation')

    <calculator-prices :prices="{{ $prices }}" />
@endsection
