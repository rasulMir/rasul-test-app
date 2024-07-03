@foreach ($shares as $share)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $share->title }}</td>
        <td>{{ $share->description }}</td>
        <td>{{ $share->discount }}</td>
        <td>{{ $share->share_type->title() }}</td>
    </tr>
@endforeach
