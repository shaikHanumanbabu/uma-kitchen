@extends('layouts.admin_layout', ['page' => $page])

@section('page_level_styles')
    <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')

   
    <!-- Page Heading -->
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session( 'success' ) }}
    </div>
    @endif
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contact Us Information</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Date Created</th>
        
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Date Created</th>

                            
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->firstname }}</td>
                                <td>{{ $contact->lastname }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->created_at }}</td>
                                
                                
                                
                            </tr>
                        @endforeach
                        
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
    
@section('page_level_javascript')
     <!-- Page level plugins -->
     <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
     <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
 
     <!-- Page level custom scripts -->
     <script src="admin/js/demo/datatables-demo.js"></script>
@endsection