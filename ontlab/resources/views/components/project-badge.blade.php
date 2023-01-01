<div class="col-xl-6 col-md-6">
    <article>
    <div class="project-img">
        <img src="{{url($img)}}" alt="" class="img-fluid">
        <div class="overlay">
        <div class="text">
            {{$description}}
        </div>
        </div>
    </div>
    
    <p class="project-domain">{{$domains}}</p>

    <h2 class="title">
        <a href={{url($projecturl)}}>{{$title}}</a>
    </h2>
    </article>
</div>