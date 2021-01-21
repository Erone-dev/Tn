@extends('layouts/app')

@section('title')
Main
@endsection

@section('content')
    @include('subcontent/subsearch')
    @if (count($Ndata))
        @include('..\subcontent\subcont',['pName'=>'News', 'place'=>'news', 'articles'=>$Ndata, 'toArticle'=>'article']) 
        <br>
    @else
        <h1>No</h1>
    @endif
    @if (count($Pdata))
        @include('..\subcontent\subcont',['pName'=>'Popular publications', 'place'=>'pop_arts', 'articles'=>$Pdata, 'toArticle'=>'article']) 
        <br>
    @else
        <h1>No</h1>
    @endif
@endsection
