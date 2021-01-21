<?php use App\Helpers\linkHelper; ?>
@section('footer')
<footer class="bg-secondary container-fluid footer">
  <div class="container-fluid px-4 pt-4 d-flex m-0 justify-content-between row">
    <div class="d-flex justify-content-start f-links col-sm-6 col-12 mb-4">
      <div class="d-flex flex-column">
        <a class="link-light footer-link {{linkHelper::is_fl_active('home')}}" href="{{route('home')}}">Main</a>
        <a class="link-light footer-link {{linkHelper::is_fl_active('news')}}" href="{{route('news')}}">News</a>
        <a class="link-light footer-link {{linkHelper::is_fl_active('pop_arts')}}" href="{{route('pop_arts')}}">Popular articles</a>
        <a class="link-light footer-link {{linkHelper::is_fl_active('all')}}" href="{{route('all')}}">All publications</a>
        <a class="link-light footer-link" href="/sign_up">Sign up</a>
        <a class="link-light footer-link" href="/sign_in">Sign in</a>
      </div>
      <div class="d-flex flex-column ps-4">      
        <a class="link-light footer-link {{linkHelper::is_fl_active('sport')}}" aria-current="page" href="{{route('sport')}}">Sport</a>
        <a class="link-light footer-link {{linkHelper::is_fl_active('travels')}}" aria-current="page" href="{{route('travels')}}">Travels</a>
        <a class="link-light footer-link {{linkHelper::is_fl_active('art')}}" aria-current="page" href="{{route('art')}}">Art</a>
        <a class="link-light footer-link {{linkHelper::is_fl_active('science')}}" aria-current="page" href="{{route('science')}}">Science</a>
        <a class="link-light footer-link {{linkHelper::is_fl_active('business')}}" aria-current="page" href="{{route('business')}}">Business</a>
        <a class="link-light footer-link {{linkHelper::is_fl_active('tech')}}" aria-current="page" href="{{route('tech')}}">Tech</a>
      </div>
    </div>  
    <div class="d-flex flex-column col-sm-4 col-12 sub-footer-menu mb-4">
      <div class="lang-sw text-end">
        <a class="link-light footer-link" aria-current="page" href="?lang=en">en</a>
        <a class="link-light footer-link" aria-current="page" href="?lang=ru">ru</a>
      </div> 
      <div class="follow d-flex flex-fill justify-content-end">
        <div class="d-flex align-items-end">
          <a class="fl" href=""><img src="images\service\facebook.svg" alt=""></a>
          <a class="fl" href=""><img src="images\service\instagram.svg" alt=""></a>
          <a class="fl" href=""><img src="images\service\vk.svg" alt=""></a>
          <a class="fl" href=""><img src="images\service\github.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</footer>