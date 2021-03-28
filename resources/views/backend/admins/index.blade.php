@extends('backend.layouts.app')
@section('content')
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
<div class="ibox ">
    <div class="ibox-title">
        @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <h5>Border Table </h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
            <a class="close-link">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">

        <input class="form-control mb-3" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $key => $user)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('admin.user.edit', $user->id) }}">
                            <button class="btn btn-primary dim" type="button"><i class="fa fa-edit"></i></button>
                        </a>
                        <a href="#" onclick="document.getElementById('delete-user-{{ $user->id }}').submit();">
                            <button class="btn btn-danger dim" type="button"><i class="fa fa-trash"></i></button>
                        </a>
                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" id="delete-user-{{ $user->id }}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @empty
                <div>
                    <p>No result</p>
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

<script>
    function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

    </script>
