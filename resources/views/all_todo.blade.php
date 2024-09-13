@extends("app.app_layout")


@section("contant")
  <!-- Todo Table -->
  <div class="card">
    <div class="card-header bg-primary text-white">
        <h4>Todo List</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $key => $todo)
                    <tr>
                        <td>{{$todos->firstItem()+ $key }}</td>
                        <td>{{ $todo->name }}</td>
                        <td>{{ $todo->title }}</td>
                        <td>{!! $todo->details !!}</td> 
                        <td>
                            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        
                        </td>
                    </tr>
                @endforeach
            </tbody>
           
        </table>
        {{ $todos->links() }}
    </div>
</div>
</div>
</div>
</div>
@endsection