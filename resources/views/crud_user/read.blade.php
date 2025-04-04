@extends('dashboard')

@section('content')
<link rel="stylesheet" href="/resources/css/read.css">

<main class="user-info">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header py-3">
                        <h3 class="mb-0 card-title text-center">User Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $messi->id }}</td>
                                    <td>{{ $messi->name }}</td>
                                    <td>{{ $messi->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('user.updateUser', ['id' => $messi->id]) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('user.deleteUser', ['id' => $messi->id]) }}" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection