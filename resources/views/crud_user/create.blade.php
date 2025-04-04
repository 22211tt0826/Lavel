@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header bg-secondary text-white text-center py-3">
                        <h3 class="mb-0">Register New Account</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.postUser') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" placeholder="Enter your full name" id="name"
                                    class="form-control rounded-pill" name="name" required autofocus>
                                @if ($errors->has('name'))
                                <small class="text-danger">Error: {{ $errors->first('name') }}</small>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="email_address" class="form-label">Email Address</label>
                                <input type="email" placeholder="Enter your email address" id="email_address"
                                    class="form-control rounded-pill" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <small class="text-danger">Error: {{ $errors->first('email') }}</small>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" placeholder="Enter your password" id="password"
                                    class="form-control rounded-pill" name="password" required>
                                @if ($errors->has('password'))
                                <small class="text-danger">Error: {{ $errors->first('password') }}</small>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-secondary btn-lg rounded-pill">Complete
                                    Registration</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection