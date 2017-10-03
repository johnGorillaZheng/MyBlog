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
        <div class="columns">
            <div class="column">

            </div>
            <div class="column">

            </div>
        </div>
    </div>
@endsection