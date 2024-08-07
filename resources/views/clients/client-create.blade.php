@extends('main.index')

@section('main')
    <div class="container-lg py-5">
        <form method="POST" action="{{ route('clients.store') }}">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Иван">
                        <small id="emailHelp" class="form-text text-muted">
                            Введите имя клиента.
                        </small>
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="surname">Фамилия</label>
                        <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname"
                            name="surname" placeholder="Иванов">
                        <small id="surname" class="form-text text-muted">
                            Введите фамилию клиента.
                        </small>
                        @error('surname')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Номер телефона</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone"
                            name="phone" placeholder="998337117135">
                        <small id="phone" class="form-text text-muted">
                            Введите номер телефона клиента.
                        </small>
                        @error('phone')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="points">Баллы</label>
                        <input type="number" class="form-control @error('points') is-invalid @enderror" id="points"
                            name="points" placeholder="100">
                        <small id="points" class="form-text text-muted">
                            Введите кол-во баллов клиента.
                        </small>
                        @error('points')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Почта</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="test@example.com">
                        <small id="points" class="form-text text-muted">
                            Введите почту клиента.
                        </small>
                        @error('email')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="birth_date">Дата рождения</label>
                        <input type="date" class="form-control @error('birth_date') is-invalid @enderror"
                            id="birth_date" name="birth_date" placeholder="25.09.1997">
                        <small id="birth_date" class="form-text text-muted">
                            Введите дату рождения клиента.
                        </small>
                        @error('birth_date')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Создать</button>
        </form>
    </div>
@endsection
