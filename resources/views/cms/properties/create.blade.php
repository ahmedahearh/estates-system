@extends('cms.parnet')
@section('title','Property')
@section('styles')

@endsection
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> اضافة الممتلكات </h4>
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
            <label class="form-label" for="name">اسم الممتلك</label>
            <input type="text" name="name" id="name"class="form-control"placeholder="أدخل اسم الممتلك..."aria-label="Name"aria-describedby="basic-addon-name"required/>
          </div>
          <div class="form-group">
            <label for="description">الوصف</label>
            <textarea name="description" id="description" class="form-control" rows="3" placeholder="أدخل وصف الممتلك ...">{{old('description')}}</textarea>
        </div>
          <div class="form-group">
            <label class="form-label" for="addres"> العنوان</label>
            <input type="text" name="addres" id="addres"class="form-control"placeholder="أدخل عنوان الممتلك..."aria-label="Name"aria-describedby="basic-addon-name"required/>
          </div>
          <div class="input-group">
            <div class="input-group">
                <label for="total_price">السعر الكلي</label>
            </div>
          <div class="input-group-prepend">
            <span class="input-group-text">$</span>
          </div>
          <input type="text" class="form-control" name="total_price" id="total_price">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group">
                <label for="lowest_price">الحد الأدنى من السعر</label>
            </div>
          <input type="text" class="form-control" name="lowest_price" id="lowest_price">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div>
            <div class="form-group">
              <label for="number_of_months">عدد الاشهر</label>
              <input type="text" name="number_of_months" class="form-control" id="number_of_months">
            </div>

            <div class="form-group">
              <label for="the_total_area">المساحة الكلية </label>
              <input type="text" name="the_total_area" class="form-control" id="the_total_area">
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

    function performStore(){
        let data = {
            // role_id: document.getElementById('roles').value,
            // city_id: document.getElementById('cities').value,
            name: document.getElementById('name').value,
            description: document.getElementById('description').value,
            addres: document.getElementById('addres').value,
            total_price:document.getElementById('total_price').value,
            lowest_price:document.getElementById('lowest_price').value,
            number_of_months:document.getElementById('number_of_months').value,
            the_total_area:document.getElementById('the_total_area').value,
            active: document.getElementById('active').value,

        }
        store('/dashboard/property',data);
    }
</script>
@endsection
