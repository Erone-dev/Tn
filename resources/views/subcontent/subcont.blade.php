<div class="container-fluid px-4">
  <h1 class="my-4 border-bottom border-secondary">{{$pName}}</h1>
  <div class="container-fluid p-0 d-flex flex-wrap">
    <div class="container-fluid p-0 d-flex justify-content-evenly cards flex-wrap">
      @foreach($articles as $art)
      @if ($art->preview)
      <?php
        $img_pre = '/images/test/'.$art->preview;
      ?>
        <div class="card mb-3">
          <img src="{{$img_pre}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$art->name}}</h5>
            <p class="card-text">{{substr($art->content, 0, 100).'...'}}</p>
            @if ($art->author)
            <div class="blockquote-footer"><cite title="Source Title">{{$art->author}}</cite></div>
            @endif
            <a href="{{route($toArticle, ['id'=>$art->id])}}" class="btn btn-info">read the publication</a>
          </div>
        </div>
      @else
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">{{$art->name}}</h5>
            <p class="card-text">{{substr($art->content, 0, 150).'...'}}</p>
            @if ($art->author)
            <div class="blockquote-footer"><cite title="Source Title">{{$art->author}}</cite></div>
            @endif
            <a href="{{route($toArticle, ['id'=>$art->id])}}" class="btn btn-info">read the publication</a>
          </div>
        </div>
      @endif
      @endforeach
    </div> 
  </div>
  <div class="container-fluid p-0 d-flex justify-content-center">
    <a class="arr-link d-flex align-items-center" href="{{route($place)}}">more</a>
  </div>
</div>
