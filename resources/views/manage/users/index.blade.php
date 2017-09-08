@extends('layouts.manage')

@section('content')
<div class="flex-container">
	<div class="columns">
		<div class="column">
			<h1 class="title">Manage User</h1>
		</div>
		<div class="level-right">
			<a href="{{ route('users.create') }}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i> Create New User</a>
		</div>
	</div>
	<hr>
	<div class="card">
		<table class="table is-fullwidth">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Date Created</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($users as $user)
					<tr>
						<th>{{ $user->id }}</th>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at }}</td>
						<td><a class="button is-outlined" href="{{ route('users.edit',$user->id) }}">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>	
	</div>
	{{ $users->links() }}

</div>

@endsection