@extends('layouts.app')

@section('content')
    @include('panel.partials._navigation')

    <clicks :clicks="{{ $clicks }}" />
@endsection
