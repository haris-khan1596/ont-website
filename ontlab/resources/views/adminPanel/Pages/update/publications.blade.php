<!-- Horizontal Form -->
<form>
    <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title">
        </div>
    </div>
    <div class="row mb-3">
        <label for="PublicationAuthors" class="col-sm-2 col-form-label">Authors</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="PublicationAuthors">
        </div>
    </div>
    <div class="row mb-3">
        <label for="PublicationLink" class="col-sm-2 col-form-label">link</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="PublicationLink">
        </div>
    </div>
    <div class="row mb-3">
        <label for="PublicationYear" class="col-sm-2 col-form-label">Year</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="PublicationYear">
        </div>
    </div>
    <div class="row mb-3">
        <label for="PublicationBibtex" class="col-sm-2 col-form-label">bibtex</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="PublicationBibtex">
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Type</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioJournal" id="radioJournal" value="option1" checked>
                <label class="form-check-label" for="radioJournal">
                    Journal
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioConference" id="radioConference" value="option2">
                <label class="form-check-label" for="radioConference">
                    Conference
                </label>
            </div>
        </div>
    </fieldset>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form><!-- End Horizontal Form -->