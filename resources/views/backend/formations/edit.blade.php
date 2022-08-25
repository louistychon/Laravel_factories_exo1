<div class="card">
  <div class="card-header">Modifier une formation</div>
  <div class="card-body">

      <form action="{{ url('formations/' .$formations->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{$formations->id}}" id="id" />
        <label>Name</label>
        <input type="text" name="nom" value="{{$formations->nom}}" class="form-control">
        <label>Description</label>
        <input type="text" name="description" value="{{$formations->description}}" class="form-control">
        <input type="submit" value="Update" class="btn btn-success">
    </form>

  </div>
</div>
