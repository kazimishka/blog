<form class="form-signin" method="post" action="{{ route('register') }}">
     @csrf
      <img class="mb-4" src="http://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
      
      <label for="inputName" class="sr-only">Name</label>
      <input type="name" id="inputName" class="form-control" placeholder="Name">
       
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
        
      <br>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address">
      
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password">
      
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      
      <br>

      <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Register') }}</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>