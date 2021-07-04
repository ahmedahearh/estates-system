@extends('cms.parnet')

@section('style')

@endsection

@section('title','Roles')
@section('content')
<div class="table-responsive">
    <table class="table table-hover table-bordered table-striped text-nowrap">
        <thead>
          <tr>
            <th>رقم</th>
            <th>الاسم</th>
            <th>اسم الحارس</th>
            <th>الحالة</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($permissions as $permission)
          <tr>
            {{-- <span class="tag tag-success">Approved</span>s --}}
            <td>{{$permission->id}}</td>
            <td>{{$permission->name}}</td>
            <td>{{$permission->guard_name}}</td>
            <td>
              <div class="icheck-primary d-inline">
                <input type="checkbox" id="permission_{{$permission->id}}"
                  onchange="storeRolePermission({{$roleId}},{{$permission->id}})" @if($permission->active) checked
                @endif>
                <label for="permission_{{$permission->id}}">
                </label>
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
  function storeRolePermission(roleId, permissionId){
    let data = {
        role_id:roleId,
      permission_id: permissionId,
    };

    store('/dashboard/role/'+roleId+'/permission',data);
  }
</script>
@endsection

