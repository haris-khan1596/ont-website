@extends('layouts.main')
<head>
  <title>Blogs</title>
</head>
@section('main-section')

<section>

  <div class="container-fluid">
    <div class="blog">
      <div class="row">
        <div class=" col-lg-8 col-md-8">

          <x-blog-badge img="assets/img/blog/blog-1.jpg" 
          title="Culpa qui officia deserunt mollit anim laboris"
            date="September 28, 2018" 
            commentcount="No comments" 
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua." 
            blogurl="blogs\hi"></x-blog-badge>
          <x-blog-badge img="assets/img/blog/blog-2.jpg" 
          title="Culpa qui officia deserunt mollit anim laboris"
            date="September 28, 2018" 
            commentcount="No comments" 
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua." 
            blogurl="blogs\hi"></x-blog-badge>
          <x-blog-badge img="assets/img/blog/blog-3.jpg" 
          title="Culpa qui officia deserunt mollit anim laboris"
            date="September 28, 2018" 
            commentcount="No comments" 
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua." 
            blogurl="blogs\hi"></x-blog-badge>

        </div>


        <div class="col-lg-4 col-md-4">
          <div class="sidebar shadow-lg rounded-4">

            <div class="sidebar-item categories mb-4 ps-3">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="mt-3 list-group">
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->

            <div class="sidebar-item tags mb-4 ps-3">
              <h3 class="sidebar-title">Tags</h3>
              <ul class="mt-3">
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div><!-- End sidebar tags-->
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
@endsection