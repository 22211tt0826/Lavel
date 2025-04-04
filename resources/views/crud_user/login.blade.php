@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header text-center bg-success text-white py-4">
                    <h3 class="mb-0" style="font-size: 2.2rem; font-weight: 600;">Chào Mừng Trở Lại</h3>
                    <p class="small" style="font-style: italic;">Vui lòng đăng nhập để tiếp tục</p>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('user.authUser') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control rounded-pill px-3" name="email" required
                                autofocus>
                            @if ($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" id="password" class="form-control rounded-pill px-3" name="password"
                                required>
                            @if ($errors->has('password'))
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div>

                        <div class="form-group d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label for="remember" class="form-check-label">Ghi nhớ</label>
                            </div>
                            <a href="#" class="text-success small">Quên mật khẩu?</a>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success rounded-pill btn-lg shadow-sm">
                                Đăng Nhập
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <p class="small mb-0">Chưa có tài khoản? <a href="create" class="text-success">Đăng
                            ký</a></p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection