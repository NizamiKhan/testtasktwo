@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="col-sm-offset-2 col-sm-8">
                        @foreach($news as $new)
                            <div class="panel panel-default">
                                <h4>[{{$new->id}}] {{$new->name}}</h4><br>
                                {{$new->announcement}}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-9">Категории новостей</div>
            </div>
        </div>


    </div>
@endsection