 <!-- import header -->
@extends('admin.layouts.master')
<!-- import header -->

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h3>Payments List</h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->

                        <div class="card">
                          
                            <div class="card-header">
                            </div>
                         
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Name</th>
                                      <th>Phone</th>
                                      <th>Wallet ID</th>
                                      <th>Payment Slip</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody class="brand-table-body">
                                    @foreach($table_data as $key => $value)
                                      <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $value->user->name }}</td>
                                        <td>{{ $value->user->phone }}</td>
                                        <td>{{ $value->user->wallet_id }}</td>
                                        <td><a target="_blank" href="{{ $value->payment_slip }}"><img style="width: 75px;" src="{{ $value->payment_slip }}"></a></td> 
                                        <td>
                                          <a href="{{ url('admin/payments/'.$value->id)}}" class="btn btn-sm btn-success">Approve</a>
                                          <a href="{{ url('admin/payments/reject/'.$value->id)}}" class="btn btn-sm btn-danger">Reject</a>
                                        </td>
                                      </tr>
                                    @endforeach
                                  
                                  </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
    <!-- /.content -->
  </div>

@endsection