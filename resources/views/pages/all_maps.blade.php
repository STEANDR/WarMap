@extends('layouts.main')

@section('description', 'У нас на сайте вы можете скачать карты для Warcraft 3 и Reforged, а также узнать много нового про игры Blizzard и последние новости, связанные с ними.')
@section('title', 'Карты Warcraft 3')


@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col-sm mt-3 mb-3">
                <div class="btn-group" role="group" aria-label="Группа кнопок с вложенным раскрывающимся списком">
                    <a href="{{route('allMaps')}}" type="button" class="btn btn-secondary">Показать все карты</a>

                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Категории
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            @foreach($categories as $category)
                                <a class="dropdown-item"
                                   href="{{route('getMapsByCategory', $category->slug)}}">{{$category->title}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid mt-3 mb-3">
            <div class="container">
                <div class="row ">
                    @foreach($maps as $map)
                        <div class="col-7 col-md-5 col-lg-3" id="map">
                            <h5 class="text-center">{{$map->title}}</h5>
                            <img alt="mapImage" class="img-fluid rounded w-100" src={{$map->url_img}} />
                            <a class="category"
                               href="{{route('getMapsByCategory', $map->category['slug'])}}">Жанр: {{$map->category['title']}}</a>
                            <p class="text-left">{{Str::limit($map->description, 200)}}</p>
                            <div class="description-wrap text-left">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="date">Дата: {{$map->created_at->format('d . m . Y')}}</span>
                                <i class="fas fa-download"></i>
                                <span class="downloads">{{$map->download_counter}}</span>
                            </div>
                            <div class="text-left">
                                <a href="{{$map->url_download}}" target="_blank"
                                   class="btn  btn-success btn-block text-light">Скачать</a>
                                <a href="{{route('getMap', $map->slug)}}" class="btn  btn-info btn-block text-light">Подробнее...</a>
                            </div>
                        </div>
                    @endforeach
                    <div class="container mb-5">
                        {{$maps->links('vendor.pagination.bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
