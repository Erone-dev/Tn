@extends('layouts/app')

@section('title')
Search
@endsection

@section('content')
<?php 
    use App\Helpers\dateHelper; 
    use App\Helpers\createPreview;
?>
    <div class="container-fluid p-0 bg-secondary search">
        <div class="container-fluid p-4 d-flex justify-content-between flex-column flex-lg-row">
            <form class="search-form" action="{{ route('search') }}" method="get">
                <div class="form-group d-flex">
                    <input class="form-control me-4" type="text" value="{{$sData}}" name="search_input" id="search_input" placeholder="" autocomplete="off">
                    <button class="btn btn-light" type="submit">Search</button>
                </div>
            </form>
            <h2 class="date">{{dateHelper::showDate()}}</h2>
        </div>
    </div> 
    <div class="search-block py-4">
        @if (count($art))
            @include('subcontent/artPreview',['articles'=>$art, 'toArticle'=>$toArticle])
        @endif
    </div>
@endsection