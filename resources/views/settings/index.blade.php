@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ __('Personal Settings') }}</div>

                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action active">
                            {{ __('Profile') }}
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            {{ __('Account') }}
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            {{ __('Organizations') }}
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            {{ __('Notifications') }}
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            {{ __('Sessions') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <h3 class="pb-2 border-bottom">{{ __('Public profile') }}</h3>

                <div class="form-group mt-4">
                    <label for="name">{{ __('Name') }}</label>
                    <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}">
                </div>

                <div class="form-group mt-2">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" disabled>
                </div>

                <button type="button" class="btn btn-success">{{ __('Update profile') }}</button>
            </div>
        </div>
    </div>
@endsection
