@extends('layouts.manage')
@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">{{ $user->name }}</h1>
				<h4 class="subtitle">用户资料</h4>
			</div>

			<div class="column">
				<a href="{{ route('users.edit',$user->id) }}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10">修改用户</i></a>
			</div>
		</div>
		<hr class="m-t-5">
		<div class="columns">
			<div class="column">
				<div class="field">
					<label for="name" class="label">姓名</label>
					<pre>{{ $user->name }}</pre>
				</div>

				<div class="field">
					<label for="email" class="label">邮箱</label>
					<pre>{{ $user->email }}</pre>
				</div>
			</div>
		</div>
	</div>
@endsection