@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تسجيل الدخول</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">إسم المستخدم</label>

                            <div class="col-md-6">
                                <input id="username" maxlength="50" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">كلمة المرور</label>

                            <div class="col-md-6">
                                <input id="password" maxlength="50" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row mb-0">
                            <div class="col-md-3 offset-md-4">
                                <button type="submit" class="btn btn-primary my-2">
                                  تسجيل دخول
                                </button>
                            </div>
                                <div class="col-md-4 ">
                                    <button type="reset" class="btn btn-danger px-4 my-2">
                                     إلغاء
                                    </button>
                                </div>
                                @if(Session::has('error'))

                                <div class="alert alert-danger alert-dismissible fade show mt-2" style="direction: rtl" role="alert">
                                    <strong>خطأ ! </strong>إسم المستخدم او كلمة المرور غير صحيحة.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                               @endif

                               @if(count($errors) > 0 )
                               <div class="alert alert-danger alert-dismissible fade show mt-2" style="direction: rtl" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                      </button>
                      <ul class="p-0 m-0" style="list-style: none;">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
                            {{-- </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
