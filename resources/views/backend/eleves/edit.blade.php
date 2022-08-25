<div class="card">
  <div class="card-header">Edit one student</div>
  <div class="card-body">

      <form action="{{ url('eleves/' .$eleves->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{$eleves->id}}" id="id" />
        <label>Name</label>
        <input type="text" name="nom" value="{{$eleves->nom}}" class="form-control">
        <label>Prenom</label>
        <input type="text" name="prenom" value="{{$eleves->prenom}}" class="form-control">
        <label>Age</label>
        <input type="number" name="age" value="{{$eleves->age}}" class="form-control">
        <input type="submit" value="Update" class="btn btn-success">
    </form>

  </div>
</div>
