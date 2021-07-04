@extends('cms.parnet')
@section('title','Chalets')
@section('styles')

@endsection
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> اضافة شاليهات</h4>
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
          {{--  <div class="form-group">
            <label class="form-label" for="basic-addon-name">City</label>
            <select class="form-control cities" id="cities" style="width: 100%;">
                                  @foreach ($cities as $city)
                                  <option value="{{$city->id}}">{{$city->name_en}}</option>
                                  @endforeach
                              </select>
          </div>--}}
          <div class="form-group">
            <label class="form-label" for="type">نوع الشاليه</label>
            <input type="text" name="type" id="type"class="form-control"placeholder="أدخل نوع الشاليه..."aria-label="Name"aria-describedby="basic-addon-name"required/>
          </div>
          <div class="form-group">
            <label>اسم الممتلكات</label>
            <select class="form-control properties" id="properties" style="width: 100%;">
                @foreach ($properties as $property)
                <option value="{{$property->id}}">{{$property->name}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-check">
          <input type="checkbox" name="active" class="form-check-input" id="active" value="1">
          <label class="form-check-label" for="active">الحالة</label>
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
    $('.specialities').select2({
    theme: 'bootstrap4'
    })

    function performStore(){
        let data = {
            property_id: document.getElementById('properties').value,
            type: document.getElementById('type').value,
            active: document.getElementById('active').value,

        }
        store('/dashboard/chalet/',data);
    }
</script>
@endsection
