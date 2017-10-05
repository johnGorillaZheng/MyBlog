@extends('layouts.manage')
@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">编辑用户</h1>
			</div>
		</div>
		<hr class="m-t-5">
		<div class="columns">
			<div class="column">
				<form action="{{ route('users.update',$user->id) }}" method="POST">
					{{ method_field('PUT') }}
					{{ csrf_field() }}
					<div class="field">
						<label for="name" class="label">姓名</label>
						<p class="control">
							<input type="text" class="input" name="name" id="name" value="{{ $user->name }}">
						</p>
					</div>

					<div class="field">
						<label for="email" class="label">邮箱</label>
						<p class="control">
							<input type="text" class="input" name="email" id="email" value="{{ $user->email }}">
						</p>
					</div>

					<div class="field">
						<label for="password" class="label">密码</label>
						<div>
							<div class="field">
								<b-radio native-value="keep" v-model="password_options">Do not change password</b-radio>
							</div>
							<div class="field">
								<b-radio native-value="auto" v-model="password_options">Auto-generate New Password</b-radio>
							</div>
							<div class="field">
								<b-radio native-value="manual" v-model="password_options">Manually Set New Password</b-radio>
								<p class="control">
									<input type="password" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually input the password here">
								</p>
							</div>
						</div>
							

					</div>
					<button class="button is-primary">Edit User</button>	
				</form>
			</div>
		</div>	
	</div>
@endsection