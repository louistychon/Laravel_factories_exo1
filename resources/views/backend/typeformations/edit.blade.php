<div class="card">
  <div class="card-header">Edit one student</div>
  <div class="card-body">

      <form action="{{ url('typeformations/' .$typeformations->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{$typeformations->id}}" id="id" />
        <label>Name</label>
        <input type="text" name="nom" value="{{$typeformations->nom}}" class="form-control">
        <input type="submit" value="Update" class="btn btn-success">
    </form>

  </div>
</div>
