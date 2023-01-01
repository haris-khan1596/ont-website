@extends('adminPanel.member.layouts.main')
@section('main-section')
<section class="section">
<div class="container">
<div class="card">
    <div class="card-body">
      <br>
      <h2>Member Information</h2>
      <h5 class="card-title">General</h5>

      @include('adminPanel.member.main.addinfo')
      <h5 class="card-title">Education</h5>
      @include('adminPanel.member.main.viewEducation')
      <h5 class="card-title">Professional Experience</h5>
      @include('adminPanel.member.main.viewExperience')
      <h5 class="card-title">Awards</h5>
      @include('adminPanel.member.main.viewAwards')

          
  </div>
</div>
</div>
</section>
</main>
@endsection