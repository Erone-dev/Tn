@extends('layouts/app')

@section('title')
{{$title}}
@endsection

@section('content')
    <div class="container-fluid p-0">
        @if ($main_img && file_exists(public_path($main_img)))
            <div class="w-100 backward sticky-top">
                <img class="" src="{{$main_img}}" alt="">
            </div>
        @endif
        <div class="content-fluid foreward px-4">
            @if ($name)
                <h1 class="pt-4 mb-4 border-bottom border-secondary">{{$name}}</h1>
            @endif
            @if (count($articles))
                @include('..\subcontent\artPreview',['pName'=>$name, 'articles'=>$articles, 'toArticle'=>$toArticle])
            @else
                
            @endif
        </div>
    </div>
@endsection