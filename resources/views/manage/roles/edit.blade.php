@extends('layouts.manage')
@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">Edit {{ $role->display_name }}</h1>
				<h3>{{ $role->name }}</h3>
			</div>
			<div class="level-right">
				<a href="{{ route('roles.edit', $role->id) }}" class="button is-primary">编辑当前角色</a>
			</div>
		</div>
		<form action="{{ route('roles.update', $role->id) }}" method="POST">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="columns">
				<div class="column">
					<div class="box">
						<div class="media">
							<div class="media-content">
								<div class="content">
									<h2 class="title">Role Details:</h1>
									<div class="field">
										<p class="control">
											<label for="display_name" class="label">名字:</label>
											<input type="text" class="input" name="display_name" value="{{ $role->display_name }}" id="display_name">
										</p>
									</div>

									<div class="field">
										<p class="control">
											<label for="name" class="label">Slug:</label>
											<input type="text" class="input" name="name" value="{{ $role->name }}" id="name" disabled>
										</p>
									</div>

									<div class="field">
										<p class="control">
											<label for="description" class="label">描述:</label>
											<input type="text" class="input" name="description" value="{{ $role->description }}" id="description">
										</p>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="columns">
				<div class="column">
					<div class="box">
						<div class="media">
							<div class="media-content">
								<div class="content">
									<h1 class="title">Permissions:</h1>
									<div class="content">
										@foreach($permissions as $permission)
										
											<div class="field">
												<b-checkbox native-value="{{ $permission->name }}" v-model="permissionsSelected">
													{{ $permission->name }} (<em>{{ $permission->description }}</em>)
												</b-checkbox>
											</div>	
										@endforeach										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection




