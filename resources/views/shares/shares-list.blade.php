@extends('main.index')
@section('main')
    <div class="container-lg">
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Загаловок</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Скидка</th>
                    <th scope="col">Тип</th>
                </tr>
            </thead>
            <tbody>
                @include('shares.share-item')
            </tbody>
        </table>
    </div>
@endsection
