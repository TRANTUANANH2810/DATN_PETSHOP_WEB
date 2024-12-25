@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Xác thực địa chỉ Email') }}</div>

                <div class="card-body">
                    @if (session('verified'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Xác thực tài khoản thành công! Bạn có thể đăng nhập.') }}
                        </div>
                    @endif

                    {{ __('Trước khi truy cập, vui lòng xác thực gửi qua email của bạn.') }}
                    {{ __('Nếu không nhận được email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click vào đây để thử lại') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
