@extends('frontend.master')

@section('content')
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image"
            style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 300px;
          ">
        </div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary"
            style="
          margin-top: -100px;
          backdrop-filter: blur(30px);
          ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Sign up now</h2>
                        <form action="{{ route('registration.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input name="name" value="{{ old('name') }}" type="text" id="form3Example1"
                                            class="form-control" />
                                        <label class="form-label" for="form3Example1"> Name</label>
                                    </div>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="tel" name="phone" value="{{ old('phone') }}" id="form3Example2"
                                            class="form-control" />
                                        <label class="form-label" for="form3Example2">Phone</label>
                                    </div>
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" name="address" value="{{ old('address') }}" id="form3Example2"
                                        class="form-control" />
                                    <label class="form-label" for="form3Example2">Address</label>
                                </div>
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" name="email" value="{{ old('email') }}" id="form3Example3"
                                    class="form-control" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" name="password" id="form3Example4" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <!-- Submit button -->
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-block mb-4">
                                Sign up
                            </button>


                        </form>
                        <p><a href="{{ url('login-frontend') }}">Already have account ?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- Section: Design Block -->
@endsection
