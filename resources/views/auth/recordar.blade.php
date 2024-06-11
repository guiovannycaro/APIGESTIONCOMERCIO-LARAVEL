  @extends('layouts.login')
  <h1>Remmember</h1>
  @section('content')
      <section class="vh-100 gradient-custom">
          <div class="container py-5 h-100">
              <div class="row justify-content-center align-items-center h-100">
                  <div class="col-12 col-lg-9 col-xl-7">
                      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                          <div class="card-body p-4 p-md-5">
                              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Remember Form</h3>
                              <form action="{{ route('recordar.recupdate') }}" method="Post">
                                  @csrf
                                  <div class="row">
                                      <div class="col-md-6 mb-4">


                                      </div>
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

                                  <div class="mt-4 pt-2">
                                      <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit"
                                          value="Submit" />
                                  </div>

                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endsection
