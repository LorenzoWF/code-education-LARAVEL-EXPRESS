@extends('template')

@section('titulo_pagina')
  Blog-Laravel
@stop

@section('titulo')
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Blog com Laravel</h1>
                    <hr class="small">
                    <span class="subheading">Exemplo de blog com Laravel 5</span>
                </div>
            </div>
        </div>
    </div>
</header>
@stop

@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @foreach($posts as $post)
        <div class="post-preview">
            <a href="{{$post['link']}}">
                <h2 class="post-title">
                    {{$post['titulo']}}
                </h2>
                <h3 class="post-subtitle">
                    {{$post['subtitulo']}}
                </h3>
            </a>
            <p class="post-meta">Postado por <a href="#">{{$post['autor']}}</a> em {{$post['data']}}</p>
        </div>
        <hr>
        @endforeach
        <!-- Pager  -->
        <ul class="pager">
            <li class="next">
                <a href="/">Outros Posts &rarr;</a>
            </li>
        </ul>
    </div>
</div>
@stop
