<!-- Horizontal Form -->
<form action="{{url('ont-admin/collabs/add')}}" method="POST">
    @csrf
    <div class="row mb-3">
        <label for="CollabTitle" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="CollabTitle">
        </div>
    </div>
    <div class="row mb-3">
        <label for="CollabLocation" class="col-sm-2 col-form-label">Location</label>
        <div class="col-sm-10">
            <input type="textl" class="form-control" id="CollabLocation">
        </div>
    </div>
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Collaborator Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>
    <div class="row mb-3">
        <label for="icon" class="col-sm-2 col-form-label">Image Icon</label>
        <div class="col-sm-10">
                <input type="file" id="icon" name="icon" accept="image/*">
        </div>
    </div>