  @extends('layouts.login')

  @section('content')
      <section class="vh-100">
          <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-md-9 col-lg-6 col-xl-5">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                          class="img-fluid" alt="Sample image">
                  </div>
                  @error('invalid_credentials')
                      <div class="m-auto bg-white p-5 rounded-sm shadow-lg w-form">
                          <small>
                              {{ $message }}
                          </small>
                          <button type="button" clas="close" data-dismiss="alert" aria-label="Close">
                              <spam aria-hidden="true">&times;</spam>

                          </button>
                      </div>
                  @enderror


                  <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style=" border: 1px solid #2b0ae8;">
                      <form action="{{ route('authe.login') }}" method="post">
                          @csrf
                          <div style="width:100%;margin: 0% 0% 0% 0%">
                              <center>
                                  <b>Sistema De
                                      Logueo</b>

                              </center>
                          </div>

                          <div class="divider d-flex align-items-center my-4">
                              <p class="text-center fw-bold mx-3 mb-0"></p>
                          </div>

                          <!-- Email input -->
                          <div data-mdb-input-init class="form-outline mb-4">
                              <input type="email" name="email" class="form-control form-control-lg"
                                  placeholder="Enter a valid email address" />
                              <label class="form-label" for="form3Example3"><b>Email address</b></label>
                          </div>

                          <!-- Password input -->
                          <div data-mdb-input-init class="form-outline mb-3">
                              <input type="password" name="password" class="form-control form-control-lg"
                                  placeholder="Enter password" />
                              <label class="form-label" for="form3Example4"><b>Password</b></label>
                          </div>

                          <div class="d-flex justify-content-between align-items-center">
                              <!-- Checkbox -->
                              <div class="form-check mb-0">

                                  <label class="form-check-label" for="form2Example3">
                                      <a href="{{ route('register.index') }}" class="text-body"><b> Register</b></a>
                                  </label>
                              </div>
                              <a href="{{ route('recordar.index') }}" class="text-body"><b>Forgot password?</b></a>
                          </div>

                          <div class="text-center text-lg-start mt-4 pt-2">
                              <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                  class="btn btn-primary btn-lg"
                                  style="padding-left: 2.5rem; padding-right: 2.5rem;margin: 0% 0% 0% 70%;">Login</button>
                              <p class="small fw-bold mt-2 pt-1 mb-0"><a href="#!" class="link-danger"></a></p>
                          </div>

                      </form>
                  </div>
              </div>
          </div>
          <div
              class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
              <!-- Copyright -->
              <div class="text-white mb-3 mb-md-0">
                  Copyright © 2020. All rights reserved.
              </div>
              <!-- Copyright -->

              <!-- Right -->
              <div>
                  <a href="#!" class="text-white me-4">
                      <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#!" class="text-white me-4">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#!" class="text-white me-4">
                      <i class="fab fa-google"></i>
                  </a>
                  <a href="#!" class="text-white">
                      <i class="fab fa-linkedin-in"></i>
                  </a>
              </div>
              <!-- Right -->
          </div>
      </section>
  @endsection
