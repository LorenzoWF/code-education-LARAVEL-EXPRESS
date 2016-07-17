@extends('template')

@section('titulo_pagina')
  Blog-Laravel
@stop

@section('titulo')
<header class="intro-header" style="background-image: url('img/post-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{$post['titulo']}}</h1>
                    <h2 class="subheading">{{$post['subtitulo']}}</h2>
                    <span class="meta">Postado por <a href="#">{{$post['autor']}}</a> em {{$post['data']}}</span>
                </div>
            </div>
        </div>
    </div>
</header>
@stop

<article>
  @section('content')
  <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        {{$post['texto']}}
      </div>
  </div>
  @stop
</article>
