@extends('main.index')
@section('main')
    <div class="container-lg">
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Полное имя</th>
                    <th scope="col">Номер телефона</th>
                    <th scope="col">Дата рождения</th>
                    <th scope="col">Баллы</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Действия</th>
                </tr>
            </thead>
            <tbody>
                @include('clients.client-item')
            </tbody>
        </table>
    </div>
@endsection
