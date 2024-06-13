  @extends('layouts.login')
  <h1>Remmember</h1>
  @section('content')
      <section class="vh-100 gradient-custom">
          <div class="container py-5 h-100">
              <div class="row justify-content-center align-items-center h-100">
                  <div class="col-12 col-lg-9 col-xl-7">
                      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                          <div class="card-body p-4 p-md-5">
                              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Forgot Password</h3>
                              <form action="{{ route('recordar.recupdate') }}" method="Post">
                                  @csrf
                                  <div class="row">
                                      <div class="col-md-12 mb-4">

                                          <div data-mdb-input-init class="form-outline">
                                              <input type="email" id="email" name="email"
                                                  class="form-control form-control-lg" />
                                              <label class="form-label" for="emailAddress">Email</label>
                                              @error('email')
                                                  <small class="text-danger mt-1">
                                                      <strong>{{ $message }}</strong>
                                                  </small>
                                              @enderror
                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-md-12 mb-4">
                                      <div class="col-md-12 mb-4">
                                          <div data-mdb-input-init class="form-outline">
                                              <input type="password" id="password" name="password"
                                                  class="form-control form-control-lg" />
                                              <label class="form-label" for="emailAddress">Contraseña</label>
                                              @error('email')
                                                  <small class="text-danger mt-1">
                                                      <strong>{{ $message }}</strong>
                                                  </small>
                                              @enderror
                                          </div>

                                      </div>
                                  </div>

                                  <div class="col-md-12 mb-4">
                                      <div data-mdb-input-init class="form-outline">
                                          <input type="password" id="confpassword" name="confpassword"
                                              class="form-control form-control-lg" />
                                          <label class="form-label" for="emailAddress">Confirmar Contraseña</label>
                                          @error('email')
                                              <small class="text-danger mt-1">
                                                  <strong>{{ $message }}</strong>
                                              </small>
                                          @enderror
                                      </div>

                                  </div>


                                  <div class="col-md-12 mb-4">
                                      <div class="mt-4 pt-2">
                                          <input data-mdb-ripple-init
                                              class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit"
                                              value="Submit" />



                                          <a class="btn btn-info  btn-block btn-lg shadow-lg mt-5"
                                              href="{{ route('authe') }}" role="button">Regresar</a>
                                      </div>

                                  </div>

                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endsection
