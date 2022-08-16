@extends('layouts.authBase')

@section('content')
<div class="container">
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
        <div class="auth-box row">
            <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(' {{ asset('assets/images/big/fundo.png') }}');">
            </div>
            <div class="col-lg-5 col-md-7 bg-white">
                <div class="p-3">
                    <h2 class="mt-3 text-center">Aplicação</h2>
                    <p class="text-center">Digite login e senha para acessar o painel de administração.</p>
                    {{-- form --}}
                    <form method="POST" action="{{route('login')}}">
                        <div class="row">
                            {{-- csrf --}}
                            @csrf
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12  mt-3">
                                <div class="form-group">

                                    <label class="text-dark" for="email">Senha</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mt-5">
                                <button type="submit" class="btn btn-block btn-dark">Login</button>
                            </div>
                        </div>
                    </form>
                    {{-- /form --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
