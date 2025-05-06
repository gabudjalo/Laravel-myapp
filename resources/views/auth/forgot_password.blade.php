@extends('base')

@section('title', 'Forgot password')


@section('content')

    <div class="conteiner">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h1 class="text-center text-muted mb-3 mt-5">Forgot password</h1>
                <p class="text-center text-muted mb-5">Please enter your email adrress. We will send you a link to reset your password.</p>


                <form action="{{ route('app_forgot_password') }}" method="post">
                    @csrf

                    @include('alerts.alert-message')

                    <label class="mb-1 form-label" for="email-send">Email</label>
                    <input type="email" name="email-send" id="email-send" class="form-control mb-3" placeholder="Please enter your email address">

                    <div class="d-grid grap-2">
                        <button class="btn btn-primary" type="submit">Reset password</button>
                    </div>

                    <p class="text-center text-muted mt-3">Back to <a href="{{ route('login') }}">login</a> </p>
                </form>
            </div>
        </div>
    </div>

@endsection
