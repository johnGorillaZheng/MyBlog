@extends('layouts.manage')

@section('content')
	<div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Manage Articles</h1>
            </div>
            <div class="level-right">
                <a href="{{ route('articles.create') }}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i>Write New Articles</a>
            </div>
        </div>
        <hr class="m-t-5">
        <div class="columns is-multiline">
            @foreach($articles as $article)
                <div class="column is-one-quarter">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <h3 class="title">{{ $article->title }}</h3>
                                    <p>
                                        {{ $article->user_id }}
                                    </p>
                                </div>
                                <div class="columns is-mobile">
                                    <div class="column is-one-half">
                                        <a href="{{ route('articles.show',$article->id) }}" class="button is-primary is-fullwidth">Details</a>
                                    </div>
                                    <div class="column is-one-half">
                                        <a href="{{ route('articles.edit',$article->id) }}" class="button is-light is-fullwidth">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection