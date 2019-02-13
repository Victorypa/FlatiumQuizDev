@extends('layouts.app')

@section('content')
    @include('panel.partials._navigation')

    <panel :cards="{{ $cards }}"></panel>
@endsection
