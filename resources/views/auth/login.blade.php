@extends('layouts.app')

@section('content')
<!-- Header -->
<section id="header" class="dark">
    <header>
      <p>LOGIN</p>
       <p>EMAIL</p>
       <form method="POST" action="{{ route('login') }}">
           {{ csrf_field() }} 
           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">          
                  <div class="dark"><input type="email" name="email" value="{{ old('email') }}" required autofocus></div>
       <p>PASSWORD</p>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="content"><input id="password" type="password" name="password" required></div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        <br>
        
        
         <div class="dark">
                  
           <ul class="actions">
<li><input type="submit" class="button" value="Sign In"></li>
<br>
<br>
<br>
<li>
<a href="{{route('register')}}" class="button">Start a New Account</a>
</li>
                        </ul>
                    </div>
                </div>
            </form>
        

</section>

@endsection
