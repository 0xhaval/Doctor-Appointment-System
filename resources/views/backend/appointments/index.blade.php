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
                    <th>Type</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($appointments as $key => $appointment)
                <tr>
                    <td>{{ $key }}</td>
                    <td>
                        <a href="{{ route('admin.appointment.show', $appointment->id) }}">{{ $appointment->type }}</a>
                    </td>
                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $appointment->day)->format('l - m/d/Y')  }}</td>
                    <td>
                        <small style="font-size: 13px"><small class="badge {{ ($appointment->status==1) ? 'badge-success' : 'badge-danger'  }}">{{ ($appointment->status==1) ? 'Opened' : 'Closed' }}</small></small>
                    </td>
                    <td>
                        <a href="{{ route('admin.appointment.edit', $appointment->id) }}">
                            <button class="btn btn-primary dim" type="button"><i class="fa fa-edit"></i></button>
                        </a>
                        <a href="#" onclick="document.getElementById('delete-user-{{ $appointment->id }}').submit();">
                            <button class="btn btn-danger dim" type="button"><i class="fa fa-trash"></i></button>
                        </a>
                        <form action="{{ route('admin.appointment.destroy', $appointment->id) }}" method="POST" id="delete-user-{{ $appointment->id }}">
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
