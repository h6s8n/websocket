@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Individual Verification') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('to access the websites you can begin the Individual Verification process by following the link.') }}
                    {{-- {{ __('If you did not receive the email') }}, --}}
                    <form class="d-inline" method="POST" action="{{ route('security.verify') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Get Started') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection