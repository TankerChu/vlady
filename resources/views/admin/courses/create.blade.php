@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.course.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.courses.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.course.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name', isset($course) ? $course->name : '') }}" required>
                @if($errors->has('name'))
                <p class="help-block">
                    {{ $errors->first('name') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('date_time') ? 'has-error' : '' }}">
                <label for="date_time">{{ trans('cruds.course.fields.date_time') }}*</label>
                <input type="text" id="date_time" name="date_time" class="form-control datetime"
                    value="{{ old('date_time', isset($course) ? $course->date_time : '') }}" required>
                @if($errors->has('date_time'))
                <p class="help-block">
                    {{ $errors->first('date_time') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.date_time_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">{{ trans('cruds.course.fields.address') }}*</label>
                <input type="text" id="address" name="address" class="form-control"
                    value="{{ old('address', isset($course) ? $course->address : '') }}" required>
                @if($errors->has('address'))
                <p class="help-block">
                    {{ $errors->first('address') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.address_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('introduction') ? 'has-error' : '' }}">
                <label for="introduction">{{ trans('cruds.course.fields.introduction') }}*</label>
                <textarea id="introduction" name="introduction"
                    class="form-control ckeditor">{{ old('introduction', isset($course) ? $course->introduction : '') }}</textarea>
                @if($errors->has('introduction'))
                <p class="help-block">
                    {{ $errors->first('introduction') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.introduction_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="content">{{ trans('cruds.course.fields.content') }}*</label>
                <textarea id="content" name="content"
                    class="form-control ckeditor">{{ old('content', isset($course) ? $course->content : '') }}</textarea>
                @if($errors->has('content'))
                <p class="help-block">
                    {{ $errors->first('content') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.content_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="slug">{{ trans('cruds.course.fields.slug') }}*</label>
                <input type="text" id="slug" name="slug" class="form-control" onkeyup="ChangeToSlug();"
                    value="{{ old('slug', isset($course) ? $course->slug : '') }}" required>
                @if($errors->has('slug'))
                <p class="help-block">
                    {{ $errors->first('slug') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.slug_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('is_featured') ? 'has-error' : '' }}">
                <label for="is_featured">{{ trans('cruds.course.fields.is_featured') }}</label>
                <input name="is_featured" type="hidden" value="0">
                <input value="1" type="checkbox" id="is_featured" name="is_featured"
                    {{ old('is_featured', 0) == 1 ? 'checked' : '' }}>
                @if($errors->has('is_featured'))
                <p class="help-block">
                    {{ $errors->first('is_featured') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.is_featured_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('courses_cover') ? 'has-error' : '' }}">
                <label for="courses_cover">{{ trans('cruds.course.fields.courses_cover') }}*</label>
                <div class="needsclick dropzone" id="courses_cover-dropzone">

                </div>
                @if($errors->has('courses_cover'))
                <p class="help-block">
                    {{ $errors->first('courses_cover') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.courses_cover_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('video_link') ? 'has-error' : '' }}">
                <label for="video_link">{{ trans('cruds.course.fields.video_link') }}</label>
                <textarea id="video_link" name="video_link"
                    class="form-control ">{{ old('video_link', isset($course) ? $course->video_link : '') }}</textarea>
                @if($errors->has('video_link'))
                <p class="help-block">
                    {{ $errors->first('video_link') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.video_link_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('courses_image') ? 'has-error' : '' }}">
                <label for="courses_image">{{ trans('cruds.course.fields.courses_image') }}*</label>
                <div class="needsclick dropzone" id="courses_image-dropzone">

                </div>
                @if($errors->has('courses_image'))
                <p class="help-block">
                    {{ $errors->first('courses_image') }}
                </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.course.fields.courses_image_helper') }}
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
    function ChangeToSlug()
    {
        var name, slug;

        //Lấy text từ thẻ input title 
        name = document.getElementById("name").value;

        //Đổi chữ hoa thành chữ thường
        slug = name.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>
<script>
    Dropzone.options.coursesCoverDropzone = {
    url: '{{ route('admin.courses.storeMedia') }}',
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
      $('form').find('input[name="courses_cover"]').remove()
      $('form').append('<input type="hidden" name="courses_cover" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="courses_cover"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($course) && $course->courses_cover)
      var file = {!! json_encode($course->courses_cover) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $course->courses_cover->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="courses_cover" value="' + file.file_name + '">')
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
    var uploadedCoursesImageMap = {}
Dropzone.options.coursesImageDropzone = {
    url: '{{ route('admin.courses.storeMedia') }}',
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
      $('form').append('<input type="hidden" name="courses_image[]" value="' + response.name + '">')
      uploadedCoursesImageMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedCoursesImageMap[file.name]
      }
      $('form').find('input[name="courses_image[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($course) && $course->courses_image)
      var files =
        {!! json_encode($course->courses_image) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="courses_image[]" value="' + file.file_name + '">')
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