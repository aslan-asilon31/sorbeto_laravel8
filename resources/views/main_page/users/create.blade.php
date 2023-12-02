@extends('templates/backend')

@section('title', ' User Add Page')
@section('titleslug', ' User Page / Add User')

@section('content')

<section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
              <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                      {{-- <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3> --}}
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('user.store') }}" method="POST">
                    {{-- <form action="" method="POST"> --}}
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Name </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" placeholder="Masukkan Nama">
                        
                            <!-- error message untuk name -->
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Email </label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" placeholder="Masukkan Email">
                        
                            <!-- error message untuk name -->
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                       
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->
                </div>
            </div>   
          </div>
          <!-- /.row -->
    
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
</section>


<script>
    // Open a new tab with the desired URL
</script>

@endsection

