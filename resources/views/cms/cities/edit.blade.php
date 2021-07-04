@extends('cms.parnet')
@section('title','City')
@section('styles')

@endsection
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> تعديل المدن</h4>
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
            <label class="form-label" for="name_ar">اسم المدينة بالعربي</label>
            <input type="text" name="name_ar" id="name_ar"class="form-control"placeholder="ادخل اسم المدينة بالعربي" value="{{$city->name_ar}}">
          </div>

          <div class="card-footer">
            <button type="button" onclick="performUpdate({{$city->id}})" class="btn btn-primary">تعديل</button>
        </div>

        </form>

      </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    //Initialize Select2 Elements
    $('.specialities').select2({
        theme: 'bootstrap4'
    })

    function performUpdate(id){
        let data = {
            name_ar: document.getElementById('name_ar').value,
        }
        let redirectUrl = '/dashboard/cities'
        update('/dashboard/cities/'+id,data,redirectUrl);
    }
</script>

@endsection

