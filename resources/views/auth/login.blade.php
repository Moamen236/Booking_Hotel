@extends('web.layout')

@section('title', 'Login')

@section('content')
    
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6" style="background: url({{ asset("web/images/breadcrumb.jpg") }}); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>Login</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Login</li>
            </ol>
          </div>
        </div>
    </div>
      <!-- ========== MAIN ========== -->
      <main class="login-page">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="section-title">
                <h4>login</h4>
                <p class="section-subtitle">go to your account </p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus sit, fugiat at in assumenda corrupti autem iste eveniet eaque vitae beatae tenetur, voluptatem eius. Numquam.</p>
              <!-- login FORM -->
              @include('includes.messages')
              <form action="{{ url('/login') }}" method="POST" class="login-form">
                @csrf
                <div class="form-group">
                  <input class="form-control" name="email" placeholder="Your Email" type="text">
                </div>
                <div class="form-group">
                  <input class="form-control" name="password" placeholder="password" type="password">
                </div>
                <div class="form-check pl-0">
                    <input class="orm-check-input" name="remember" type="checkbox" id="loginCheck">
                    <label class="form-check-label" for="loginCheck">
                        Remember me
                    </label>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn mt30">Login Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>

@endsection