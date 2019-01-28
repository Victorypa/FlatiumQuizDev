<template>
    <div class="container">
        <Navigation></Navigation>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Статистика</div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Дата и время</th>
                                    <th>Имя</th>
                                    <th>E-mail</th>
                                    <th>Телефон</th>
                                    <th>Выбор по комнатам</th>
                                    <th>Результат</th>
                                    <th>Отправлено в AMO CRM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Navigation from '../../components/Panel/partials/Navigation'
    export default {
        components: {
            Navigation
        }
    }
</script>
