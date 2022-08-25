<form action="{{ url('eleves') }}" method="post">
    @csrf
    <input type="text" name="nom">
    <input type="text" name="prenom">
    <input type="number" name="age">
    <select name="etat" id="">
        <option value="0">En formation</option>
        <option value="1">Hors formation</option>
    </select>
    <button type="submit">save</button>

</form>
