
<h1 class="text-3xl">
    Hello world!
  </h1>
<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach ($formations as $formation)
            <tr>
                <td>{{ $formation->id }}</td>
                <td>{{ $formation->nom }}</td>
                <td><a href="{{ url('/formations/' . $formation->id) }}"><button>show</button></a></td>
                <td><a href="{{ url('/formations/' . $formation->id . '/edit') }}"><button>edit</button></a></td>
                <form action="{{ url('/formations/' . $formation->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" name="delete">delete</button></td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ url('/formations/create') }}"><button>create formation</button></a>
