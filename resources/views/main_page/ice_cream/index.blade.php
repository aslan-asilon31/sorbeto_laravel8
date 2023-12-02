@extends('templates/backend')

@section('title', ' Ice Cream Page')
@section('titleslug', ' Ice Cream Page / List Ice Cream')

@section('content')


<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
              <div class="col-lg-12">

                <div class="modal" id="progressModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4>Loading ...</h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">

                                <div class="progress" style="z-index: 99;">
                                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" id="myBar"></div>
                                </div>
                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <!-- Add any footer content if needed -->
                            </div>

                        </div>
                    </div>
                </div>



                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Stock</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($icecreams as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->statud_id_name }}</td>
                                <td>{{ $row->stock }}</td>
                                <td>{{ $row->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $statusmasters->links() }} --}}
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



<script>

$(document).ready(function () {
    $('.yajra-datatable').hide();
    $('#progressModal').modal('show');
    move();
});

    function move() {
        var elem = document.getElementById("myBar");
        var width = 0;
        var id = setInterval(frame, 10);

        function frame() {
            if (width >= 100) {
                clearInterval(id);
                setTimeout(function () {
                    $('#progressModal').modal('hide');
                    $('.yajra-datatable').show();

                }, 2000);
            } else {
                width++;
                elem.style.width = width + "%";
                elem.innerHTML = width + "%";
            }
        }

    }

</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
{{-- <script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('user.list') }}",
                data: function (d) {
                    d.name = $('.searchName').val(),
                    d.email = $('.searchEmail').val(),
                    d.search = $('input[type="search"]').val()
            }
        },
        
        order: [
            [1, 'desc'] // Adjust the sorting based on your requirement
        ],
        success: function (data) {
            alert('Data loaded successfully:', data);
        },
        // pageLength: 10,
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name', searchable: true},
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
</script> --}}

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