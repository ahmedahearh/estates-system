@extends('cms.parnet')
@section('title','Rents')
@section('styles')

@endsection
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> تعديل عقود الأيجار </h4>
      </div>
      <div class="card-body">
        <form class="needs-validation" id="create_form" novalidate>
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
            <label class="form-label" for="name">اسم العقد</label>
            <input type="text" name="name" id="name"class="form-control"placeholder="أدخل اسم العقد..."aria-label="Name"aria-describedby="basic-addon-name"required value="{{$rents->name}}"/>
          </div>
          <div class="input-group">
            <div class="input-group">
                <label for="price">السعر الكلي</label>
            </div>
          <div class="input-group-prepend">
            <span class="input-group-text">$</span>
          </div>
          <input type="text" class="form-control" name="price" id="price" value="{{$rents->price}}">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
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

        <div class="form-group">
            <label class="form-label" for="start_date">تاريخ بداية الحجز</label>
            <input type="date" name="start_date" id="start_date"class="form-control" aria-label="Name"aria-describedby="basic-addon-name"required value="{{$rents->start_date}}"/>
          </div>
          <div class="form-group">
            <label class="form-label" for="end_date">تاريخ نهاية الحجز</label>
            <input type="date" name="end_date" id="end_date"class="form-control" aria-label="Name"aria-describedby="basic-addon-name"required value="{{$rents->end_date}}"/>
          </div>

          <div class="card-footer">
            <button type="button" onclick="performUpdate({{$rents->id}})"
                class="btn btn-primary">تعديل</button>
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
            property_id: document.getElementById('properties').value,
            name: document.getElementById('name').value,
            price:document.getElementById('price').value,
            start_date: document.getElementById('start_date').value,
            end_date: document.getElementById('end_date').value,

        }
        let redirectUrl = '/dashboard/rent'
        update('/dashboard/rent/'+id,data,redirectUrl);
    }
</script>
@endsection
