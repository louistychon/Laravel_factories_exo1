<form action="{{ url('formations') }}" method="post">
    @csrf
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="description" placeholder="Description">
    <button type="submit">save</button>
</form>
