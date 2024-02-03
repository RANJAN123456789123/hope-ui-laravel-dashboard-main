<x-guest-layout>
   <section class="login-content">
      <div class="row m-0 align-items-center vh-100">
         <div class="col-md-12">
            <div class="row justify-content-center">
               <div class="col-md-4">
                  <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                     <div class="card-body">

                        <h2 class="mb-2 text-center">Log In</h2>

                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('login') }}" data-toggle="validator">
                            {{csrf_field()}}
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input id="email" type="email" name="email"  value="{{env('IS_DEMO') ? 'admin@example.com' : old('email')}}"   class="form-control"  placeholder="Email Address" required autofocus>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" placeholder="Password"  name="password" value="{{ env('IS_DEMO') ? 'password' : '' }}" required autocomplete="current-password">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <!-- <input type="checkbox" class="custom-control-input" id="customCheck1"> -->
                                    <label class="form-check-label" for="customCheck1">Stay logged in</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <a href="{{route('auth.recoverpw')}}"  class="float-end">Forgot Password?</a>
                              </div>
                           </div>
                           <div class="d-flex justify-content-center">
                              <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button>
                           </div>
                           {{-- <p class="text-center my-3">or sign in with other accounts?</p>
                           <div class="d-flex justify-content-center">
                              <ul class="list-group list-group-horizontal list-group-flush">
                                 <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{asset('images/brands/fb.svg')}}" alt="fb"></a>
                                 </li>
                                 <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{asset('images/brands/gm.svg')}}" alt="gm"></a>
                                 </li>
                                 <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{asset('images/brands/im.svg')}}" alt="im"></a>
                                 </li>
                                 <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{asset('images/brands/li.svg')}}" alt="li"></a>
                                 </li>
                              </ul>
                           </div> --}}
                           <p class="mt-3 text-center">
                              Don’t have an account? <a href="{{route('auth.signup')}}" class="text-underline">Click here to sign up.</a>
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>

         </div>

      </div>
   </section>
</x-guest-layout>
