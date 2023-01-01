<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Horizontal Form -->
<form>
    <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title">
        </div>
    </div>
    <div class="row mb-3">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea id="summernote" name="description"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="goal" class="col-sm-2 col-form-label">Goal</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="goal" name="goal">
        </div>
    </div>
    <div class="row mb-3">
        <label for="data" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="data" name="data">
        </div>
    </div>
    <div class="row mb-3">
        <label for="domain" class="col-sm-2 col-form-label">Domain</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="domain" name="domain">
        </div>
        <div id="extension-container"></div>
        <button type="button" onclick="addCopy()">Add Domain title</button>
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