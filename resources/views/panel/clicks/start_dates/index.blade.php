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
                                    Срочно. Хотелось сделать это еще вчера.
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    В ближайщее ремя но не более 2 недель.
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    С определенной даты. Получение ключей, отпуск и т.д.
                                </strong>
                            </th>
                            <th>
                                <strong>
                                    Когда-нибудь в будущем.
                                </strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>
                                    {{ $one }}
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    {{ $two }}
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    {{ $three }}
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    {{ $four }}
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
