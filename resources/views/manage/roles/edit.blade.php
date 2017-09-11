@extends('layouts.manage')
@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">Edit {{ $role->display_name }}</h1>
				<h3>{{ $role->name }}</h3>
			</div>
			<div class="level-right">
				<a href="{{ route('roles.edit', $role->id) }}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i> Edit this role</a>
			</div>
		</div>
		<hr class="m-t-5">
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
											<label for="display_name" class="label">Name:</label>
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
											<label for="description" class="label">Description:</label>
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

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection