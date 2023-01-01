<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>without bootstrap</title>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>

  <section class="section">

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add new Blogs</h5>
  <form action="{{url('ont-admin/blogs/add')}}" method="post">
    @csrf
    <textarea id="summernote" name="data"></textarea>
    <br>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Save</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
  </form>

        </div>
      </div>
  </section>
  <script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
</body>

</html>