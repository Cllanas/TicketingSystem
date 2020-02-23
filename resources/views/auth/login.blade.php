@extends('layouts.app')


<style>
  
html {
    height:100% !important; 
}
/*Nav display*/


.head{
    height: 100%;
   min-height:100vh !important; 
}
body{
  
    height: 100vh !important;
}

.search{
    border-color: #F0E68C !important;
    color:#F0E68C !important;
}
.search:hover{
    background-color: #F0E68C !important;
    color: #464646 !important;
}

.font{
    font: 14pt;
    color: #f2f2f2;
    font-style: none;
}
.font:hover{
    color: #F0E68C !important;
    font-style: none;
}
.login-container{
 
    top: 25%;
    left: 0;
    right: 0;
    position: absolute;
    margin: 0 auto;
}
.btn-color{
   border: 3px solid #2F4F4F !important;
    color: #2F4F4F !important;
}
.btn-color:hover{
    background-color: #2F4F4F;
    color: #F0E68C !important;
}

  .card-color{
    font-size: 14pt;
    color: #F0E68C;
    background-color:#2F4F4F !important;
 
  }
  .btn-link{
      color: black !important;
  }
.title-font{
    visibility: hidden !important;
}
</style>

@section('content')

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-color">{{ __('Login') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-color">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection






