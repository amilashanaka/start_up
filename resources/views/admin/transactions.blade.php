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
            &nbsp;
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Upload CSV</h3>
        </div>
        <div class="card-body">
           <div class="row">
              <div class="col-md-12">

              
              <form action="{{ url('admin/transactions') }}" method="post" enctype="multipart/form-data" >
              @csrf

              @include('admin.layouts.errors')

                <div class="form-group">
                  <label>CSV File</label>
                   <input type="file" name="file" class="form-control">
                </div>

                <hr>
                <div class="form-group">
                  <button class="btn btn-md btn-dark px-5"><i class="fa fa-save"></i> Import Data</button>
                </div>
                
                
              </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <div class="card">
          <div class="card-header">
            <h3 class="card-title">Transaction List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Transaction Id</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($table_data as $key => $value)
                  <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->transaction_id}}</td>
                    <td>{{ $value->created_at}}</td>
                    <td>
                      <a class="btn btn-md btn-success" href="{{ url('admin/transactions/'.$value->transaction_id) }}">View</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection