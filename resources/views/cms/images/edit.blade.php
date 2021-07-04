@extends('cms.parnet')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
{{-- <link rel="stylesheet" href="{{ asset('cms/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"> --}}
<!-- Select2 -->
@endsection

@section('title','Images')
@section('content')
<!-- Main content -->
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> تعديل صور</h4>
      </div>
      <div class="card-body">
        <form class="needs-validation" id="create_form" enctype="multipart/form-data">
        @csrf
        {{-- <div class="form-group">
            <label class="form-label" for="basic-addon-name">Role</label>
            <select class="form-control roles" style="width: 100%;" id="roles">
                                  @foreach ($roles as $role)
                                  <option value="{{$role->id}}">{{$role->name}}</option>
                                  @endforeach
                              </select>
          </div> --}}

          {{  csrf_field()  }}

          <div class="row">
            <div class="col-sm-9">
                <!-- text input -->
                <div class="form-group">
                    <label for="text">عنوان الصورة</label>
                    <input name="title" id="title" value="{{$image->title}}"
                           type="text" class="form-control"
                           placeholder="أدخل عنوان الصورة ...">
                </div>

                <div class="row">
                    <div class="col-sm-9">
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="caption">الشرح الصغير</label>
                            <textarea name="caption" id="caption" class="form-control" rows="3"
                                      placeholder="أدخل الشرح الصغير عن الصورة ...">{{$image->caption}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-9">
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="full_description">الوصف الكامل</label>
                            <textarea name="full_description" id="full_description" class="form-control" rows="3"
                                      placeholder="أدخل الوصف الكامل عن الصورة...">{{$image->full_description}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>اسم الممتلكات</label>
                    <select class="form-control properties" id="properties" style="width: 100%;">
                        @foreach ($properties as $property)
                        <option value="{{$property->id}}">{{$property->name}}</option>
                        @endforeach
                    </select>
                    </div>

                <div class="row">
                    <div class="col-sm-9">
                        <div class="form-group">
                            <label for="image">الصورة</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"
                                       @if(old('image')) value="{{{$image->image}}}" @endif
                                       name="image" id="image">
                                <label class="custom-file-label" for="image">Choose
                                    file</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input name="visibility_status" type="checkbox"
                        @if($image->visibility_status == "Visible")
                        checked
                        @endif
                               class="custom-control-input" id="visibility_status">
                        <label class="custom-control-label" for="visibility_status">
                            الحالة
                        </label>
                    </div>
                </div>

            </div>

        </div>
        </form>
        </div>
        <div class="card-footer">
            <button type="button" onclick="performUpdate({{$image->id}})"
                class="btn btn-primary">تعديل</button>
        </div>

    </form>

</div>
</div>
<!-- /.content -->
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    //Initialize Select2 Elements
    $('.roles').select2({
        theme: 'bootstrap4'
    });


    function performUpdate(id){

        let redirectUrl = '/dashboard/images'
        update('/dashboard/images/'+id,data,redirectUrl);
    }
</script>
@endsection
