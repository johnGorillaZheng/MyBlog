@extends('layouts.manage')
@section('content')
    @include('UEditor::head')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">修改博文</h1>
            </div>
        </div>
        <hr class="m-t-5">
        <div class="columns">
            <div class="column">
                <form action="{{ route('articles.update', $article->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="field">
                        <label for="title" class="label">标题:</label>
                        <p class="control">
                            <input type="text" class="input" name="title" id="name" value="{{$article->title}}">
                        </p>
                    </div>


                    <div class="field">
                        <label for="body">描述:</label>
                        <script id="container" name="body" style="height: 250px" type="text/plain">
                            {!! $article->body !!}
                        </script>
                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                        var ue = UE.getEditor('container');
                        ue.ready(function() {
                            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                        });
                        </script>
                    </div>
                    <button class="button is-success">更新文章</button>
                </form>
            </div>
        </div>
    </div>
@endsection