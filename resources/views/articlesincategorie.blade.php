@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to the article page!

                    @if(count($articlesincategorie)> 1)
                        @foreach($articlesincategorie as $articleincategorie)
                            <h3><a href="/article/{{$articleincategorie->id}}">{{$articleincategorie->name}}</a></h3>
                             <small>{{$articleincategorie->description}}</small>
                        @endforeach
                    @else
                        <p>geen article gevonden</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
