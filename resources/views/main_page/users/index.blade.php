@extends('templates/backend')

@section('title', ' User Page')
@section('titleslug', ' User Page / List User')

@section('content')

<section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
              <div class="col-lg-12">

                <button type="button" class="btn btn-primary btn-fw collapsible" style="width: 100%">Advanced Search</button>
                <div class="content" style="display: none; padding:20px; background-color:indigo;" >
                    <div class="row">
                        <div class="col-6" style="margin-top:10px">
                            <input type="text" name="name" class="form-control searchName" placeholder="Search for Name Only...">
                        </div>
                        <div class="col-6" style="margin-top:10px">
                            <input type="text" name="email" class="form-control searchEmail" placeholder="Search for Email Only...">
                        </div>
                    </div>
                </div>

                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <button class="btn btn-info" onclick="showUser({{ $user->id }})"> Log </button>
                                    <a class="btn btn-success" href="{{ route('users.edit', $user->id) }}"> Edit  </a>
                                    <button class="btn btn-danger" onclick="deleteUser({{ $user->id }})"> Delete </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   
          </div>
          <!-- /.row -->
    
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
</section>


@endsection


@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@push('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('users.list') }}",
                data: function (d) {
                    d.name = $('.searchName').val(),
                    d.email = $('.searchEmail').val(),
                    d.search = $('input[type="search"]').val()
            }
        },
        success: function (data) {
            // This function will be called upon successful data retrieval
            // console.log('Data loaded successfully:', data);
            alert('Data loaded successfully:', data);

            // Add your success handling logic here
            // For example, you can display a success message or perform additional actions
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'}
        ]
    });

    $(".searchName").keyup(function(){
        table.draw();
    });

    $(".searchEmail").keyup(function(){
        table.draw();
    });

    $(".searchRoleId").keyup(function(){
        table.draw();
    });

    $(".searchStatus").keyup(function(){
        table.draw();
    });

    
  });
</script>

{{-- //collapse --}}
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
</script>


<script>
</script>
    
@endpush