@extends('layouts.manage')
@section('content')
@include('UEditor::head')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Writing A New Blog</h1>
            </div>
        </div>
        <hr class="m-t-5">
        <div class="columns">
            <div class="column">
                <form action="{{ route('articles.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="title" class="label">标题:</label>
                        <p class="control">
                            <input type="text" class="input" name="title" id="name">
                        </p>
                    </div>


                    <div class="field">
                        <label for="body">描述:</label>
                        <script id="container" name="body" style="height: 250px" type="text/plain">
                            写点啥吧
                        </script>
                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                        var ue = UE.getEditor('container');
                        ue.ready(function() {
                            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                        });
                        </script>
                    </div>
                    <button class="button is-success">Create User</button>
                </form>
            </div>
        </div>
    </div>


@endsection