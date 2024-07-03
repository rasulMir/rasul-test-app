@extends('main.index')

@section('main')
    <div class="container-lg py-5">
        <form method="POST" action="{{ route('shares.store') }}">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Загаловок</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" placeholder="Акция">
                        <small id="emailHelp" class="form-text text-muted">
                            Введите загаловок акций.
                        </small>
                        @error('title')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            cols="15" rows="5">

                        </textarea>
                        <small id="phone" class="form-text text-muted">
                            Введите описание акций.
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
                        <label for="discount">Скидка</label>
                        <input type="number" class="form-control @error('discount') is-invalid @enderror" id="points"
                            name="discount" placeholder="100">
                        <small id="points" class="form-text text-muted">
                            Введите скидку в процентах.
                        </small>
                        @error('discount')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="share_type">Example select</label>
                        <select class="form-control @error('discount') is-invalid @enderror" id="share_type"
                            name="share_type">
                            @foreach ($shareTypes as $key => $type)
                                <option value="{{ $key }}">{{ $type }}</option>
                            @endforeach
                        </select>

                        @error('share_type')
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
