@extends('layouts.login')
@section('content') 


<form action="{{route('login')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" @error('ema') is-invalid @enderror value="{{old('email')}}" required>
        @error('email')
        <span class="glyphicon glyphicon-envelope form-control-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" @error('password') is-invalid @enderror  placeholder="Password" required >
        @error('password')
        <span class="glyphicon glyphicon-lock form-control-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


@endsection