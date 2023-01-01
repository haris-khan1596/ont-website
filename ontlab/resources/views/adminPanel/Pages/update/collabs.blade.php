<section class="section">

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add new Collaborators</h5>
<!-- Horizontal Form -->
<form action="{{url('ont-admin/publications/edit')}}" method="POST">
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Collaborator Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{$name}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="icon" class="col-sm-2 col-form-label">Image Icon</label>
        <div class="col-sm-10">
                <input type="file" id="icon" name="icon" accept="image/*" >
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>
        </div>
    </div>
</section>