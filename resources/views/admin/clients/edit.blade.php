@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.client.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.clients.update", [$client->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.client.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($client) ? $client->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.client.fields.email') }}*</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email', isset($client) ? $client->email : '') }}" required>
                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="phone">{{ trans('cruds.client.fields.phone') }}*</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($client) ? $client->phone : '') }}" required>
                @if($errors->has('phone'))
                    <p class="help-block">
                        {{ $errors->first('phone') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.phone_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                <label for="city">{{ trans('cruds.client.fields.city') }}*</label>
                <input type="text" id="city" name="city" class="form-control" value="{{ old('city', isset($client) ? $client->city : '') }}" required>
                @if($errors->has('city'))
                    <p class="help-block">
                        {{ $errors->first('city') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.city_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('course') ? 'has-error' : '' }}">
                <label for="course">{{ trans('cruds.client.fields.course') }}</label>
                <input type="text" id="course" name="course" class="form-control" value="{{ old('course', isset($client) ? $client->course : '') }}">
                @if($errors->has('course'))
                    <p class="help-block">
                        {{ $errors->first('course') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.course_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                <label for="message">{{ trans('cruds.client.fields.message') }}</label>
                <textarea id="message" name="message" class="form-control ">{{ old('message', isset($client) ? $client->message : '') }}</textarea>
                @if($errors->has('message'))
                    <p class="help-block">
                        {{ $errors->first('message') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.message_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('event') ? 'has-error' : '' }}">
                <label for="event">{{ trans('cruds.client.fields.event') }}</label>
                <input type="text" id="event" name="event" class="form-control" value="{{ old('event', isset($client) ? $client->event : '') }}">
                @if($errors->has('event'))
                    <p class="help-block">
                        {{ $errors->first('event') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.event_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection