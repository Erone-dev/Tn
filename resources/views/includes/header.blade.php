<?php use App\Helpers\linkHelper; ?>
@section('header')

<header class="container-fluid sticky-top p-0 header">
    <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-white px-4 py-2 d-flex flex-column">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href="#">
                <img src="images\service\logo.svg" alt="" width="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <div id="marker" class="n-items">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link p-0 hl {{linkHelper::is_hl_active('home')}}" aria-current="page" href="{{route('home')}}">Main</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link p-0 hl {{linkHelper::is_hl_active('news')}}" aria-current="page" href="{{route('news')}}">News</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link p-0 hl {{linkHelper::is_hl_active('pop_arts')}}" aria-current="page" href="{{route('pop_arts')}}">Popular articles</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link p-0 hl {{linkHelper::is_hl_active('all')}}" aria-current="page" href="{{route('all')}}">All publications</a>
                        </li>
                        <li class="d-inline-flex nav-item">
                            <a class="nav-link d-inline-flex accordion-button p-0 more collapsed" id="more" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">More</a>
                        </li>
                    </ul>
                </div>
                <div class="ms-auto d-flex n-items">
                    <button class="form-control btn-outline-info" data-bs-toggle="modal" data-bs-target="#sign">sign up/sign in</button>
                </div>
            </div>
        </div>
        <div class="collapse w-100" id="collapseExample">
                <ul class="navbar-nav border-top border-dark pb-1 pt-2 d-flex justify-content-between">
                    <li class="nav-item">
                    <a class="nav-link p-0 hl {{linkHelper::is_hl_active('sport')}}" aria-current="page" href="{{route('sport')}}">Sport</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link p-0 hl {{linkHelper::is_hl_active('travels')}}" aria-current="page" href="{{route('travels')}}">Travels</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link p-0 hl {{linkHelper::is_hl_active('art')}}" aria-current="page" href="{{route('art')}}">Art</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link p-0 hl {{linkHelper::is_hl_active('science')}}" aria-current="page" href="{{route('science')}}">Science</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link p-0 hl {{linkHelper::is_hl_active('business')}}" aria-current="page" href="{{route('business')}}">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-0 hl {{linkHelper::is_hl_active('tech')}}" aria-current="page" href="{{route('tech')}}">Tech</a>
                    </li>
                </ul>
        </div>
    </nav>
</header>