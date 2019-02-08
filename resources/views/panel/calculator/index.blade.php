@extends('layouts.app')

@section('content')
    <calculators :calculators="{{ $calculators }}"></calculators>
@endsection
