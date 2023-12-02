@extends('templates/backend')

@section('title', ' User History Log Page')
@section('titleslug', ' User History Log  Page / List User')

@section('content')

<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-12">

                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Module</th>
                            <th>Key ID</th>
                            <th>Created By</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->module }}</td>
                                <td>{{ $row->key_id }}</td>
                                <td>{{ $row->user_create }}</td>
                                <td>{{ $row->updated_at }}</td>
                            </tr>
                        @endforeach
                    
                    </tbody>
                </table>

            </div>   
        </div>
        <!-- /.row -->

    </div>
          <!-- /.row -->
</section>


@endsection

