@extends('layouts.manage')
@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">{{ $role->display_name }}</h1>
				<h3>{{ $role->name }}</h3>
			</div>
			<div class="level-right">
				<a href="{{ route('roles.edit', $role->id) }}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i> Edit this role</a>
			</div>
		</div>
		<hr class="m-t-5">

		<div class="columns">
			<div class="column">
				<div class="box">
					<div class="media">
						<div class="media-content">
							<div class="content">
								<h1 class="title">Permissions:</h1>
								<ul>
									@foreach($role->permissions as $permission)
										<li>{{ $permission->display_name }}: <em>{{ $permission->description }}</em></li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection