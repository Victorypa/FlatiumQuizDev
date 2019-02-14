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
                                    Стандарт
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    Комфорт
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    Премиум
                                </strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>
                                    {{ $standard }}
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    {{ $comfort }}
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    {{ $premium }}
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
