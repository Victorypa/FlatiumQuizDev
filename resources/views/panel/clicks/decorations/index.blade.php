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
                                    Новостройка с белыми стенами
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    Новостройка без отделки
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    Вторичное жилье со старой отделкой
                                </strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>
                                    {{ $new }}
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    {{ $total_new }}
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    {{ $old }}
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
