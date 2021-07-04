@extends('cms.parnet')
@section('title','City')
@section('styles')

@endsection
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> اضافة المدن</h4>
      </div>
      <div class="card-body">
        <form class="needs-validation" id="create_form" >
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
            <label class="form-label" for="name_ar">اسم المدينة بالعربي</label>
            <input type="text" name="name_ar" id="name_ar"class="form-control"placeholder="ادخل اسم المدينة بالعربي">
          </div>
          <div class="card-footer">
            <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
         </div>
     </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    //Initialize Select2 Elements
    $('.roles').select2({
        theme: 'bootstrap4'
    });
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

    function performStore(){
        let data = {
            // role_id: document.getElementById('roles').value,
            name_ar: document.getElementById('name_ar').value
        }
        store('/dashboard/cities',data);
    }
</script>
@endsection
