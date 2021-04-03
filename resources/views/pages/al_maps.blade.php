@extends('layouts.main')

@section('title', 'Карты Warcraft 3')

@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col-sm mt-3 mb-3">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-outline-primary">Новые</button>
                    <button type="button" class="btn btn-outline-primary">Старые</button>

                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Категории
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            @foreach($categories as $category)
                                <li><a class="dropdown-item" href="{{route('getMapsByCategory', $category->slug)}}">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid mt-3 mb-3">
            <div class="container">
                <div class="row text-center">
                    @foreach($maps as $map)
                    <div class="col-7 col-md-5 col-lg-3" id="map">
                        <h5>{{$map->title}}</h5>
                        <img class="img-fluid rounded w-100" src={{$map->url_img}} alt="mapImage"/>
                        <a href="{{route('getMapsByCategory', $map->category['slug'])}}" class="category text-left">Жанр: {{$map->category['title']}}</a>
                        <p class="text-left">{{Str::limit($map->description, 200)}}</p>
                        <div class="description-wrap text-left">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="date">Дата: {{$map->created_at}}</span>
                            <i class="fas fa-download"></i>
                            <span class="downloads">{{$map->download_counter}}</span>
                        </div>
                        <div class="text-left">
                            <a href="" target="_blank" class="btn  btn-success btn-block text-center">Скачать</a>
                            <a href="" class="btn  btn-info btn-block">Подробнее...</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
