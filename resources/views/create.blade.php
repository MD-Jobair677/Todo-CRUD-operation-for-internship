@extends("app.app_layout")

@section("contant")
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
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
                            <label for="name" class="form-label">Todo Title</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter todo name" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Todo Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter todo title" required>
                        </div>                        <div class="mb-3">
                            <label for="details" class="form-label">Todo Title</label>
                            <input type="text" name="details" class="form-control" id="details" placeholder="Enter todo details" required>
                        </div>
                        <button type="submit" class="btn btn-success">Add Todo</button>
                    </form>
                    <button class="btn btn-warning my-2">All Todo</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection