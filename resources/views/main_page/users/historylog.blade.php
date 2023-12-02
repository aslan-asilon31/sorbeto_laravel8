@extends('templates/backend')

@section('title', ' User History Log Page')
@section('titleslug', ' User History Log  Page / List User')

@section('content')

<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Before</th>
                                <th>After</th>
                                <th>Created By</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ explode(':', $row->txt)[0] }}</td>
                                    <td>
                                        @php
                                            // Split the string using '#' as the delimiter
                                            $parts = explode('#', $row->txt);
                    
                                            // Extract the value after ':' in the first part
                                            $value = explode(':', $parts[0])[1];
                                        @endphp
                    
                                        {{ $value }}
                                    </td>
                                    <td>{{ explode('#', $row->txt)[1] }}</td>
                                    <td>{{ $row->user_create ?: '-' }}</td>
                                    <td>{{ $row->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                    

            </div>   
        </div>
        <!-- /.row -->

    </div>
          <!-- /.row -->
</section>


@endsection

