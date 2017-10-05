@extends('layouts.manage')
@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">话题管理</h1>
            </div>
            <div class="level-right">
                <form action="{{route('topics.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="field has-addons">
                        <div class="control">
                            <input type="text" placeholder="输入新话题" class="input" name="name">
                        </div>
                        <div class="control">
                            <button class="button is-primary">新话题</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <hr>
        <div class="card">
            <table class="table is-fullwidth">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>话题名称</th>
                    <th>创建日期</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($topics as $topic)
                    <tr>
                        <th>{{ $topic->id }}</th>
                        <td>{{ $topic->name }}</td>
                        <td>{{ $topic->updated_at }}</td>
                        <td><a class="button is-outlined" href="{{ route('users.show',$topic->id) }}">编辑</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection