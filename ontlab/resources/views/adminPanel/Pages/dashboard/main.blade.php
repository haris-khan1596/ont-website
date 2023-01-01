@extends('adminPanel.layouts.main')
@section('main-section')
<section class="section">
    <div class="card">
        <div class="card-body">
    @include($uri)
</div>
</section>
@endsection