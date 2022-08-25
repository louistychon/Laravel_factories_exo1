<form action="{{ url('typeformations') }}" method="post">
    @csrf
    <input type="text" name="nom">
    <button type="submit">save</button>
</form>
