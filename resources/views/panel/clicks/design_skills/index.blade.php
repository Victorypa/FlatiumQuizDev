@extends('layouts.app')

@section('content')
    @include('panel.partials._navigation')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                <strong>
                                    Совсем не разбираюсь.
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    Кое-что понимаю.
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    Эксперт.
                                </strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>
                                    {{ $junior }}
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    {{ $middle }}
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    {{ $senior }}
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
