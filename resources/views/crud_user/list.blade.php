@extends('dashboard')

@section('content')
<link rel="stylesheet" href="/resources/css/list.css">
<main class="user-list">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header text-center py-4">
                        <h3 class="mb-0">LIST ACOUNTS</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Facebook</th>
                                    <th>Email</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->Age }}</td>
                                    <td>{{ $user->facebook }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('user.readUser', ['id' => $user->id]) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                        <a href="{{ route('user.updateUser', ['id' => $user->id]) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}"
                                            class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <p class="mb-0">Manage users efficiently with this interface</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection