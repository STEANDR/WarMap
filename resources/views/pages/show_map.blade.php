@extends('layouts.main')

@section('description', $map->description)
@section('title', 'Карта'.' '.$map->title)


@section('content')

<link rel="stylesheet" href="{{asset('css/style_map_content.css')}}">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            <div class="content">
                <div class="single-content">
                    <p class="category"><a href="{{route('getMapsByCategory', $map->category['slug'])}}">{{$map->category['title']}}</a></p>
                    <h1>{{$map->title}}</h1>
                    <img class="single-img " src="{{$map->url_img}}" alt="mapImage">
                    <p class="text"></p>
                    <p>{{$map->description}}</p>
                    <div class="descript-wrap">
                        <span class="date"><i class="fas fa-calendar-alt"></i>{{$map->created_at->format('d . m . Y')}}</span>
                        <span class="downloads"><i class="fas fa-download"></i>{{$map->download_counter}}</span>
                    </div>
                    <a href="{{$map->url_download}}" target="_blank" class="btn btn-lg btn-success text-center"><i class="fas fa-download"></i>Скачать</a>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
