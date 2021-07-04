@extends('cms.parnet')

@section('style')
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
{{-- <link rel="stylesheet" href="{{ asset('cms/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('cms/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('cms/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection

@section('title','Admins')
@section('content')
<!-- Main content -->
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> تعديل الادمن</h4>
      </div>
      <div class="card-body">
        <form class="needs-validation" id="create_form">
        @csrf
        {{-- <div class="form-group">
            <label class="form-label" for="basic-addon-name">Role</label>
            <select class="form-control roles" style="width: 100%;" id="roles">
                                  @foreach ($roles as $role)
                                  <option value="{{$role->id}}">{{$role->name}}</option>
                                  @endforeach
                              </select>
          </div> --}}
          <div class="form-group">
            <label class="form-label" for="first_name">الاسم الاول</label>
            <input type="text" name="first_name" id="first_name"class="form-control"placeholder="أدخل الاسم الاول..."aria-label="Name"aria-describedby="basic-addon-name"required value="{{$admin->first_name}}"/>
          </div>
          <div class="form-group">
            <label class="form-label" for="last_name">الاسم الثاني</label>
            <input type="text" name="last_name" id="last_name"class="form-control"placeholder="أدخل الاسم الثاني..."aria-label="Name"aria-describedby="basic-addon-name"required  value="{{$admin->last_name}}"/>
          </div>
          <div class="form-group">
            <label class="form-label" for="mobile">رقم الهاتف</label>
            <input type="text" name="mobile" id="mobile"class="form-control"placeholder="أدخل رقم الهاتف..."aria-label="Name"aria-describedby="basic-addon-name"required value="{{$admin->mobile}}"/>
          </div>
          <div class="form-group">
            <label class="form-label" for="email">الايميل</label>
            <input type="email" name="email" id="email"class="form-control"placeholder="أدخل البريد الألكتروني..."aria-label="Name"aria-describedby="basic-addon-name"required value="{{$admin->email}}"/>
          </div>
          <div class="form-group">
            <label class="form-label" for="birth_date">تاريخ الميلاد</label>
            <input type="date" name="birth_date" id="birth_date"class="form-control" aria-label="Name"aria-describedby="basic-addon-name"required value="{{$admin->birth_date}}"/>
          </div>
          <div class="form-group clearfix">
            <label for="last_name">الجنس</label>
            <br>
            <div class="icheck-primary d-inline">
                <input type="radio" id="male" name="gender" @if($admin->gender == 'M')
                checked
                @endif>
                <label for="male">
                    ذكر
                </label>
            </div>
            <div class="icheck-primary d-inline">
                <input type="radio" id="female" name="gender" @if($admin->gender == 'F')
                checked
                @endif>
                <label for="female">
                    أنثى
                </label>
            </div>
            </div>

        </div>
        <div class="card-footer">
            <button type="button" onclick="performUpdate({{$admin->id}})"
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
    $('.cities').select2({
        theme: 'bootstrap4'
    })

    $('#birth_date').datepicker({
        orientation: "auto left",
        maxViewMode: 2,
        todayBtn: "linked",
        clearBtn: true,
        language: "ar",
        daysOfWeekDisabled: "5",
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"
        // startDate: "today",
    });

    function performUpdate(id){
        let data = {
            // role_id: document.getElementById('roles').value,
            // city_id: document.getElementById('cities').value,
            first_name: document.getElementById('first_name').value,
            last_name: document.getElementById('last_name').value,
            mobile: document.getElementById('mobile').value,
            email: document.getElementById('email').value,
            birth_date: document.getElementById('birth_date').value,
            gender: document.getElementById('male').checked ? "M" : "F",
        }
        let redirectUrl = '/dashboard/admins'
        update('/dashboard/admins/'+id,data,redirectUrl);
    }
</script>
@endsection
