@extends('cms.parnet')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"> --}}
{{-- <link rel="stylesheet" href="{{ asset('cms/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"> --}}
<!-- Select2 -->
@endsection

@section('title','Roles')
@section('content')
<!-- Main content -->
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> اضافة أدوار</h4>
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
            <label>حارس</label>
            <select class="form-control guards" id="guards" style="width: 100%;">
                <option value="web">مستخدم</option>
                <option value="admin">مدير النظام</option>
            </select>
            </div>
          <div class="form-group">
            <label class="form-label" for="name">اسم </label>
            <input type="text" name="name" id="name"class="form-control"placeholder="أدخل الاسم ..."aria-label="Name"aria-describedby="basic-addon-name"required/>
          </div>

        </div>
            <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
            </div>

        </form>

      </div>
    </div>
<!-- /.content -->
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    //Initialize Select2 Elements
    $('.guards').select2({
        theme: 'bootstrap4'
    })

    function performStore(){
        let data = {
            // role_id: document.getElementById('roles').value,
            guard_name: document.getElementById('guards').value,
            name: document.getElementById('name').value,
        }
        store('/dashboard/roles',data);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
