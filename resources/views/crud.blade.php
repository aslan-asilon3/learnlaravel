@extends('layouts.app1')

@push('script-yajra')

<script type="text/javascript">

    $(function () {
  
      
  
      var table = $('.data-table').DataTable({
  
          processing: true,
  
          serverSide: true,
  
          ajax: "{{ route('crud-index') }}",
  
          columns: [
  
              {data: 'id', name: 'id'},
  
              {data: 'name', name: 'name'},
  
              {data: 'email', name: 'email'},
  
              {data: 'action', name: 'action', orderable: false, searchable: false},
  
          ]
  
      });
  
      
  
    });
  
  </script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
@endpush



@section('content')

<main class="h-full pb-16 overflow-y-auto ">
    <div class="container grid px-6 mx-auto">

      <!-- CTA -->
      <a
        class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="{{ route('crud-index') }}"
      >
        <div class="flex items-center">
          <svg
            class="w-5 h-5 mr-2"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
            ></path>
          </svg>
          <span><h1>CRUD</h1></span>
        </div>
      </a>

      <div>


        
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="btn-group" role="group">
                <a id="btnGroupDrop1"  class="btn btn-warning dropdown-toggle" style="color:white;" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-file-import fa-beat  " style="color:purple;"></i> Import
                </a>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <li><button type="submit" class="dropdown-item" href="#" >Import Excel</button></li>
                  <li><a class="dropdown-item" href="#">Import CSV</a></li>
                </ul>
            </div>
        
            <div class="btn-group" role="group">
                <a id="btnGroupDrop1"  class="btn btn-success dropdown-toggle" style="color:white;" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-file-export fa-beat" style="color:purple;"></i> Export
                </a>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <li><a class="dropdown-item" href="" id="export_excel">Export Excel</a></li>
                  <li><a class="dropdown-item" href="#">Export PDF</a></li>
                  <li><a class="dropdown-item" href="#">Export CSV</a></li>
                </ul>
                <input type="file" name="file" class="form-control ml-1" style="color:purple;">
            </div>
    
              
        
            {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
        </form>


            <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">

            <table class="table table-bordered data-table">

                
        
                <thead class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        
                    <tr>
        
                        <th>No</th>
        
                        <th>Name</th>
        
                        <th>Email</th>
        
                        <th width="100px">Action</th>
        
                    </tr>
        
                </thead>
        
                <tbody>
        
                </tbody>
        
            </table>
            </div>
            </div>
      </div>


    </div>
  </main>

@endsection
