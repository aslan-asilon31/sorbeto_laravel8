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
                d.name = $('.searchName').val();
                d.email = $('.searchEmail').val();
                d.search = $('input[type="search"]').val();
            }
        },
        success: function (data) {
            console.log('Data adaa:', data);
            // Lakukan tindakan setelah data berhasil dimuat
        },
        error: function (xhr, error, thrown) {
            console.log('DataTables error:', error, thrown);
            // Handle error, jika diperlukan
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        drawCallback: function () {
            console.log('DataTables draw callbak');
            // Add any additional customization or logic after DataTables draws
        },
        initComplete: function () {
            console.log('DataTables initialized successfully');
        }
    });

    // Event handlers for search inputs
    $(".searchName, .searchEmail").keyup(function () {
        table.draw();
    });

    // Additional event handlers if needed

    // Handle custom actions (e.g., showUser, editUser, deleteUser)
    $('.yajra-datatable').on('click', '.btn-info', function () {
        var userId = $(this).data('userid');
        showUser(userId);
    });

    // Add similar handlers for edit and delete buttons

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