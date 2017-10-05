@extends('layouts.manage')

@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">用户管理</h1>
		</div>
		<div class="level-right">
			<a href="{{ route('users.create') }}" class="button is-primary">创建用户</a>
		</div>
	</div>
	<hr>
	<div class="card">
		<table class="table is-fullwidth">
			<thead>
				<tr>
					<th>ID</th>
					<th>用户名</th>
					<th>邮箱</th>
					<th>创建日期</th>
					<th>行为</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($users as $user)
					<tr>
						<th>{{ $user->id }}</th>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at }}</td>
						<td><a class="button is-outlined" href="{{ route('users.show',$user->id) }}">编辑</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>	
	</div>
	{{ $users->links() }}

</div>

@endsection