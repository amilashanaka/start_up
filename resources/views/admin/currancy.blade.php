 <!-- import header -->
@extends('admin.layouts.master')
<!-- import header -->

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->

        <div class="card-header">
          <h3 class="card-title">Update Dollar Rate</h3>

          
        </div>
        <div class="card-body">
          <div class="row">
              <div class="col-md-12">

              
              <form action="{{ url('admin/currancy') }}" method="post">
              
              @csrf

              @include('admin.layouts.errors')

                <div class="form-group col-sm-6">
                  <label>Dollar Rate </label>
                  <input type="number" class="form-control" name="amount" value="{{ $form_data->amount}}" required="">
                </div>

                <div class="form-group">
                  <button class="btn btn-lg btn-dark rounded px-5">Submit</button>
                </div>
                
                
              </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection
