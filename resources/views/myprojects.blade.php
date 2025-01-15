@extends('app') 

@section('content')
<div class="container mt-4">
    <h1>My Projects</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('/myprojects.store') }}">
        @csrf
        <div class="mb-3">
            <label for="projectTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="projectTitle" name="title" required>
        </div>
        <div class="mb-3">
            <label for="projectDescription" class="form-label">Description</label>
            <textarea class="form-control" id="projectDescription" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="projectStatus" class="form-label">Status</label>
            <select id="projectStatus" class="form-select" name="status" required>
                <option value="Active">Active</option>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="projectBudget" class="form-label">Budget</label>
            <input type="number" class="form-control" id="projectBudget" name="budget" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Project</button>
    </form>

    <hr>

    <h2>Project List</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Budget</th>
            </tr>
        </thead>
        <tbody>
            @foreach($myprojects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->stitle }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->status }}</td>
                <td>{{ $project->budget }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
