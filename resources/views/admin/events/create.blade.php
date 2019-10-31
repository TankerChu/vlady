@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.event.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.events.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.event.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($event) ? $event->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('location_name') ? 'has-error' : '' }}">
                <label for="location_name">{{ trans('cruds.event.fields.location_name') }}*</label>
                <input type="text" id="location_name" name="location_name" class="form-control" value="{{ old('location_name', isset($event) ? $event->location_name : '') }}" required>
                @if($errors->has('location_name'))
                    <p class="help-block">
                        {{ $errors->first('location_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.location_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">{{ trans('cruds.event.fields.address') }}*</label>
                <textarea id="address" name="address" class="form-control " required>{{ old('address', isset($event) ? $event->address : '') }}</textarea>
                @if($errors->has('address'))
                    <p class="help-block">
                        {{ $errors->first('address') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.address_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                <label for="city">{{ trans('cruds.event.fields.city') }}*</label>
                <select id="city" name="city" class="form-control" required>
                    <option value="" disabled>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Event::CITY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('city', 1) === (string)$key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <p class="help-block">
                        {{ $errors->first('city') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
                <label for="time">{{ trans('cruds.event.fields.time') }}*</label>
                <input type="text" id="time" name="time" class="form-control datetime" value="{{ old('time', isset($event) ? $event->time : '') }}" required>
                @if($errors->has('time'))
                    <p class="help-block">
                        {{ $errors->first('time') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.time_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">{{ trans('cruds.event.fields.price') }}*</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($event) ? $event->price : '') }}" step="0.01" required>
                @if($errors->has('price'))
                    <p class="help-block">
                        {{ $errors->first('price') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.price_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('introduction') ? 'has-error' : '' }}">
                <label for="introduction">{{ trans('cruds.event.fields.introduction') }}*</label>
                <textarea id="introduction" name="introduction" class="form-control ckeditor">{{ old('introduction', isset($event) ? $event->introduction : '') }}</textarea>
                @if($errors->has('introduction'))
                    <p class="help-block">
                        {{ $errors->first('introduction') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.introduction_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="content">{{ trans('cruds.event.fields.content') }}*</label>
                <textarea id="content" name="content" class="form-control ckeditor">{{ old('content', isset($event) ? $event->content : '') }}</textarea>
                @if($errors->has('content'))
                    <p class="help-block">
                        {{ $errors->first('content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.content_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="slug">{{ trans('cruds.event.fields.slug') }}*</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', isset($event) ? $event->slug : '') }}" required>
                @if($errors->has('slug'))
                    <p class="help-block">
                        {{ $errors->first('slug') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.slug_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('event_cover') ? 'has-error' : '' }}">
                <label for="event_cover">{{ trans('cruds.event.fields.event_cover') }}*</label>
                <div class="needsclick dropzone" id="event_cover-dropzone">

                </div>
                @if($errors->has('event_cover'))
                    <p class="help-block">
                        {{ $errors->first('event_cover') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.event_cover_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('video_link') ? 'has-error' : '' }}">
                <label for="video_link">{{ trans('cruds.event.fields.video_link') }}</label>
                <textarea id="video_link" name="video_link" class="form-control ">{{ old('video_link', isset($event) ? $event->video_link : '') }}</textarea>
                @if($errors->has('video_link'))
                    <p class="help-block">
                        {{ $errors->first('video_link') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.video_link_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('event_image') ? 'has-error' : '' }}">
                <label for="event_image">{{ trans('cruds.event.fields.event_image') }}</label>
                <div class="needsclick dropzone" id="event_image-dropzone">

                </div>
                @if($errors->has('event_image'))
                    <p class="help-block">
                        {{ $errors->first('event_image') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.event_image_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    Dropzone.options.eventCoverDropzone = {
    url: '{{ route('admin.events.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="event_cover"]').remove()
      $('form').append('<input type="hidden" name="event_cover" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="event_cover"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($event) && $event->event_cover)
      var file = {!! json_encode($event->event_cover) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $event->event_cover->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="event_cover" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedEventImageMap = {}
Dropzone.options.eventImageDropzone = {
    url: '{{ route('admin.events.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="event_image[]" value="' + response.name + '">')
      uploadedEventImageMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedEventImageMap[file.name]
      }
      $('form').find('input[name="event_image[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($event) && $event->event_image)
      var files =
        {!! json_encode($event->event_image) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="event_image[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@stop