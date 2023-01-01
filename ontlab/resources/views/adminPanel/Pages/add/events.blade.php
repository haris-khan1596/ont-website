<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Horizontal Form -->
<form action="{{url('ont-admin/events/add')}}" method="post">
    @csrf
    <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="domain"  class="col-sm-2 col-form-label">Research Domain</label>
        <div class="col-sm-10">
          <select class="form-select" name="domain" id="domain" aria-label="Default select example">
            <option selected>Select research domain</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
    </div>

    </div>
    <div class="row mb-3">
        <label for="location" class="col-sm-2 col-form-label">Location</label>
        <div class="col-sm-10">
            <input type="textl" class="form-control" id="location" name="location">
        </div>
    </div>
    <div class="row mb-3">
        <label for="timmings" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="timmings" name="timmings">
        </div>
    </div>
    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Images</label>
        <div class="col-sm-10">
                <input type="file" id="image" name="image" accept="image/*">
        </div>
    </div>
    <div class="row mb-3">
        <label for="EventDescription" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea id="summernote" name="editordata"></textarea>
        </div>
    </div>


    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form><!-- End Horizontal Form -->


<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>