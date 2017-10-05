@extends('layouts.manage')
@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">所有角色</h1>
			</div>
			<div class="level-right">
				<a href="{{ route('roles.create') }}" class="button is-primary">创建新角色</a>
			</div>
		</div>
		<hr class="m-t-5">
		<div class="columns is-multiline">
			@foreach($roles as $role)
				<div class="column is-one-quarter">
					<div class="box">
						<article class="media">
							<div class="media-content">
								<div class="content">
									<h3 class="title">{{ $role->name }}</h3>
									<p>
										{{ $role->description }}
									</p>
								</div>
								<div class="columns is-mobile">
									<div class="column is-one-half">
										<a href="{{ route('roles.show',$role->id) }}" class="button is-primary is-fullwidth">细节</a>
									</div>
									<div class="column is-one-half">
										<a href="{{ route('roles.edit',$role->id) }}" class="button is-light is-fullwidth">编辑</a>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection