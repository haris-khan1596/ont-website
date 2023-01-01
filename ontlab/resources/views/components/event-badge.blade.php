<div class="swiper-slide">
  <article class="h-auto">
    <div class="event-img">
      <img src={{url($image)}} alt="" class="img-fluid">
    </div>
    <div class="h-auto">
      <p class="event-domain">{{$domain}}</p>
      <h2 class="title text-truncate">
        <a href={{url($eventurl)}}>{{$title}}</a>
      </h2>
      <div class="d-flex align-items-center">
        <div class="post-meta">
          <p class="event-venue">{{$location}}</p>
          <p class="event-date">
            <time datetime="2022-01-01">{{$time}}</time>
          </p>
        </div>
      </div>
    </div>
  </article>
</div><!-- End event list item -->