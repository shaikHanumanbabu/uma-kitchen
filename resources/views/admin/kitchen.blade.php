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
    <div class="row">
        <a href="{{ route('kitchen.index') }}" class="btn btn-primary mr-2">All</a>
        <a href="{{ route('kitchen.index') }}?type=break_fast&value=1" class="btn btn-primary mr-2">Break Fast</a>
        <a href="{{ route('kitchen.index') }}?type=lunch&value=2" class="btn btn-primary mr-2">Lunch</a>
        <a href="{{ route('kitchen.index') }}?type=dinner&value=3" class="btn btn-primary mr-2">Dinner</a>
        <a href="{{ route('kitchen.create') }}" class="btn btn-primary mr-2">Add Kitchem Item</a>
        
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kitchen Information</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($kitchen_items as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>
                                    @if ($item->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">In - Active</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('kitchen.edit', ['kitchen' => $item->id]) }}" class="btn btn-primary">Edit</a>

                                    <form action="{{ route('kitchen.destroy', ['kitchen' => $item->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete
                                        </button>
                                        
                                    </form>

                                </td>
                                
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