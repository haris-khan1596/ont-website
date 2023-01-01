<section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add new Member</h5>
<!-- Horizontal Form -->
<form action="{{url('/ont-admin/members/add')}}" method="POST">
@csrf
<div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="name" name="name">
    </div>
</div>
<div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="email" name="email">
    </div>
</div>
<div class="row mb-3">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
    <input type="password" class="form-control" id="password" name="password">
    </div>
</div>

<fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Role</legend>
    <div class="col-sm-10">

    <div class="form-check">
        <input class="form-check-input" type="radio" name="designation" id="radioFaculty" value="Faculty">
        <label class="form-check-label" for="radioFaculty">
            Faculty
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="designation" id="radioPhd" value="PhD and Post Doc">
        <label class="form-check-label" for="radioPhd">
            Phd
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="designation" id="radioMS" value="Masters">
        <label class="form-check-label" for="radioMS">
            MS
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="designation" id="radioUG" value="Bachelors">
        <label class="form-check-label" for="radioUG">
            UG
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="designation" id="radioIntern" value="Intern">
        <label class="form-check-label" for="radioIntern">
            Interns
        </label>
    </div>

    </div>
</fieldset>

<div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</div>
</form><!-- End Horizontal Form -->
        </div>
    </div>
</section>