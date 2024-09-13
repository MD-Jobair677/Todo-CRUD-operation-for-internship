@extends("app.app_layout")

@section("contant")
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
{{-- show success message --}}
            @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


                 <!-- Todo Card -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Add New Todo</h4>
                </div>
                <div class="card-body">
                    <!-- Form for Adding Todo Title -->
                     <form action="{{ route('todos.store') }}" method="POST"> 
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Todo name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter todo name" >
                                                  </div>

                                                  @error('name')
                                                  <p class="alert alert-danger">{{$message }}</p>
                                                  @enderror 

                        <div class="mb-3">
                            <label for="title" class="form-label">Todo Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter todo title" >
                        </div> 

                        @error('title')
                        <p class="alert alert-danger">{{$message }}</p>
                        @enderror 
                        
                        <label for="editor" class="form-label">Todo details</label>
                        <textarea name="details" id="editor">{{ old('description') }}</textarea>

                        @error('details')
                        <p class="alert alert-danger">{{$message }}</p>
                        @enderror 
                        <button type="submit" class="btn btn-success my-2">Add Todo</button>
                    </form>
                    <a href="{{route("all.todos")}}" class="btn btn-warning my-2">All Todo</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection