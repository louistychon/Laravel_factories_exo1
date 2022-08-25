<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach ($eleves as $eleve)
            <tr>
                <td>{{ $eleve->id }}</td>
                <td>{{ $eleve->nom }}</td>
                <td>{{ $eleve->prenom }}</td>
                <td>{{ $eleve->age }}</td>
                <td><a href="{{ url('/eleves/' . $eleve->id) }}"><button>show</button></a></td>
                <td><a href="{{ url('/eleves/' . $eleve->id . '/edit') }}"><button>edit</button></a></td>
                <form action="{{ url('/eleves/' . $eleve->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" name="delete">delete</button></td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ url('/eleves/create') }}"><button>create eleve</button></a>
