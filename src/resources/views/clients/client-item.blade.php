@foreach ($clients as $client)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $client->surname }} {{ $client->name }}</td>
        <td>{{ $client->phone }}</td>
        <td>{{ $client->birth_date->format('d-m-Y') }}</td>
        <td>{{ $client->points }}</td>
        <td>{{ $client->email }}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <form action="{{ route('clients.delete', ['client' => $client->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">
                        Удалить
                    </button>
                </form>
                <a class="btn btn-primary ml-2" href="{{ route('clients.edit', ['client' => $client->id]) }}">
                    Редактировать
                </a>
            </div>
        </td>
    </tr>
@endforeach
