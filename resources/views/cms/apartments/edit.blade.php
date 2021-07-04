@extends('cms.parnet')
@section('title','Apartments')
@section('styles')

@endsection
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> تعديل الشقق  </h4>
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
            <label class="form-label" for="which_floor">رقم الطابق</label>
            <input type="text" name="which_floor" id="which_floor"class="form-control"placeholder="أدخل رقم الطابق..."aria-label="Name"aria-describedby="basic-addon-name"required value="{{$apartments->which_floor}}"/>
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
            <input type="checkbox" name="active" class="form-check-input" id="active" value="1"
            @if ($apartments->active) checked

            @endif>
            <label class="form-check-label" for="active">الحالة</label>
          </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{$apartments->id}})" class="btn btn-primary">تعديل</button>
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
     //Initialize Select2 Elements
     $('.specialities').select2({
        theme: 'bootstrap4'
    })

    function performUpdate(id){
        let data = {
            property_id: document.getElementById('properties').value,
            which_floor: document.getElementById('which_floor').value,
            active: document.getElementById('active').value,
        }
        let redirectUrl = '/dashboard/apartments'
        update('/dashboard/apartments/'+id,data,redirectUrl);
    }
</script>


@endsection
