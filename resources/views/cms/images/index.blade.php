@extends('cms.parnet')

@section('style')

@endsection

@section('title','Images')
@section('content')
<div class="table-responsive">
    <table class="table">
      <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>رقم</th>
            <th>عنوان الصورة</th>
            <th>الشرح الصغير</th>
            <th>الوصف الكامل</th>
            <th>اسم الممتلكات</th>
            <th>الصورة</th>
            <th>الحالة</th>
            <th>وقت الانشاء</th>
            <th>وقت التعديل</th>
            <th>العمليات</th>
        </tr>
      </thead>
      <tbody>
        <span hidden>{{$counter = 0}}</span>
        @foreach ($images as $image)
        <tr>
          {{-- <span class="tag tag-success">Approved</span>s --}}
          <td><span class="badge bg-info">#{{++$counter}}</span></td>
          <td>{{$image->id}}</td>
          <td>{{$image->title}}</td>
          <td>{{$image->caption}}</td>
          <td>{{$image->full_description}}</td>
          <td><span class="badge bg-info">{{$image->property->name}}</span></td>
          <td><img width="100" height="100" src="{{asset('images/'.$image->image)}}"></td>
          {{-- <td>{{$image->image}}</td> --}}
          {{-- <td>
            <img src="{{asset('images/'.$image->image)}}" class="card-img-top">
          </td> --}}
          <td>
            @if ($image->visibility_status)
            <span class="badge bg-success">{{$image->active_status}}</span>
            @else
            <span class="badge bg-danger">{{$image->active_status}}</span>
             @endif
        </td>
          <td>{{$image->created_at->format('Y-m-d H:i')}}</td>
          <td>{{$image->updated_at->format('Y-m-d H:i')}}</td>
            <td>
            <div class="btn-group">
              <a href="{{route('images.edit',$image->id)}}" class="btn btn-info">
                <i class="fas fa-edit"></i>
              </a>
              <a href="#" onclick="performDestroy({{$image->id}}, this)" class="btn btn-danger">
                <i class="fas fa-trash"></i>
              </a>
            </div>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection

@section('scripts')

<script>
  function performDestroy(id, reference){
    let url = '/dashboard/images/'+id;
    confirmDestroy(url, reference);
  }
</script>
@endsection
NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION
