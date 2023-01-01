<div>
    <div class="card mb-5 mx-auto" style="width: 90%">
        <img
          class="card-img-top"
          src="{{url($img)}}"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title fw-bold">{{$title}}</h5>

          <div class="d-flex mb-2 fw-bold">
            <h6 class="card-title text-muted my-auto float-left">{{$date}}</h6>
            <a href="#" class="card-link float-left mx-2">{{($commentcount)}}</a>
          </div>
          <p class="card-text">{{($description)}}
          </p>
          <a href="{{url($blogurl)}}" class="card-link fw-bold">Read More.</a>
        </div>
      </div>
</div>