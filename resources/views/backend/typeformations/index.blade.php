<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach ($typeformations as $typeformation)
            <tr>
                <td>{{ $typeformation->id }}</td>
                <td>{{ $typeformation->nom }}</td>
                <td><a href="{{ url('/typeformations/' . $typeformation->id) }}"><button>show</button></a></td>
                <td><a href="{{ url('/typeformations/' . $typeformation->id . '/edit') }}"><button>edit</button></a></td>
                <form action="{{ url('/typeformations/' . $typeformation->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" name="delete">delete</button></td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ url('/typeformations/create') }}"><button>create typeformation</button></a>
