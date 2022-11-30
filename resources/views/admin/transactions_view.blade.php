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

    
      <!-- /.card -->
      <div class="card">
          <div class="card-header">
            <h3 class="card-title">Transaction Details</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Wallet Id</th>
                <th>Amount</th>
                <th>Dollar Rate</th>
              </tr>
              </thead>
              <tbody>
                @foreach($table_data as $key => $value)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $value->user->name}}</td>
                    <td>{{ $value->wallet_id}}</td>
                    <td>{{ 'LKR '.number_format($value->amount, 2)}}</td>
                    <td>{{ $value->doller_rate}}</td>
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