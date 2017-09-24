@extends('layouts.manage')
@section('content')
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
                        <label for="name" class="label">Name</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name">
                        </p>
                    </div>

                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                            <input type="text" class="input" name="email" id="email">
                        </p>
                    </div>

                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input type="password" class="input" name="password" id="password" v-if="!auto_password" placeholder="Manually input the password here">
                            <b-checkbox class="m-t-15" name="auto_generate" :checked="true" v-model="auto_password">Auto Generate Password</b-checkbox>
                        </p>
                    </div>

                    <button class="button is-success">Create User</button>
                </form>
            </div>
        </div>
    </div>
@endsection