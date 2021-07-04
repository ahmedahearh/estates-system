@extends('cms.parnet')
@section('title','Rents')
@section('styles')

@endsection
@section('content')
<div class="table-responsive">
    <table class="table">
      <thead class="thead-dark">
        <tr>
            {{-- <th>#</th> --}}
            <th>رقم</th>
            <th>اسم العقود</th>
            <th>السعر الكلي</th>
            <th>اسم الممتلكات</th>
            <th> تاريخ بداية الحجز</th>
            <th> تاريخ نهاية الحجز</th>
            <th>وقت الانشاء</th>
            <th>وقت التعديل</th>
            <th>العمليات</th>
        </tr>
      </thead>
      <tbody>
        {{-- <span hidden>{{$counter = 0}}</span> --}}
        @foreach ($rents as $rent )
        <tr>
            <td>{{$rent->id}}</td>
            <td>{{$rent->name}}</td>
            <td>{{$rent->price}}</td>
            <td><span class="badge bg-info">{{$rent->property->name}}</span></td>
            <td>{{$rent->start_date}}</td>
            <td>{{$rent->end_date}}</td>
            <td>{{$rent->created_at}}</td>
            <td>{{$rent->updated_at}}</td>
            <td>
                <div class="btn-group">
                    <a href="{{route('rent.edit',$rent->id)}}" class="btn btn-info">
                    <i class="fas fa-edit"></i>
                    </a>
                    {{-- <form action="{{route('cities.destroy',$City->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i>
                    </button>
                    </form> --}}
                    <a href="#" onclick="performDestroy({{$rent->id}}, this)" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                      </a>
                </div>
            </td>


            {{-- <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                      <a href="{{route('admins.edit',$admin->id)}}">Edit</a>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                      <a href="#" onclick="performDestroy({{$admin->id}}, this)">Delete</a>
                    </a>
                  </div>
                </div>
              </td> --}}
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
@section('scripts')
<script>
    function performDestroy(id, reference){
      let url = '/dashboard/rent/'+id;
      confirmDestroy(url, reference);
    }
  </script>
@endsection
