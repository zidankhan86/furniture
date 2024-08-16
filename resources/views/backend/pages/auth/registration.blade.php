@extends('frontend.master')

@section('content')
    <!-- breedcrumb section start  -->
    <div class="section breedcrumb">
        <div class="breedcrumb__img-wrapper">
            <img src="{{ asset('frontend/src/images/banner/breedcrumb.jpg') }}" alt="breedcrumb" />
            <div class="container">
                <ul class="breedcrumb__content">
                    <li>
                        <a href="#">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 8L9 1L17 8V18H12V14C12 13.2044 11.6839 12.4413 11.1213 11.8787C10.5587 11.3161 9.79565 11 9 11C8.20435 11 7.44129 11.3161 6.87868 11.8787C6.31607 12.4413 6 13.2044 6 14V18H1V8Z"
                                    stroke="#808080" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span> > </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="create-account.html">Create Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breedcrumb section end   -->

    <!-- create account-in Section Start  -->
    <section class="create-account section section--xl">
        <div class="container">
            <div class="form-wrapper">
                <h6 class="font-title--sm">create account</h6>
                <form action="{{ route('registration.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-input">
                        <input type="text" class="input" name="name" value="{{ old('name') }}"
                            placeholder="Name" />

                    </div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-input">
                        <input type="email" class="input" name="email" value="{{ old('email') }}"
                            placeholder="Email" />

                    </div>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-input">
                        <input type="password" placeholder="Password" name="password" id="password" />


                    </div>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-input">
                        <input type="text" class="input" name="address" value="{{ old('address') }}"
                            placeholder="Address" />

                    </div>
                    @error('address')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-input">
                        <input type="number" class="input" name="phone" value="{{ old('phone') }}"
                            placeholder="Phone" />

                    </div>
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-button">
                        <button type="submit" class="button button--md w-100">Create Account</button>
                    </div>
                    <div class="form-register">
                        Already have account ? <a href="{{ url('login-frontend') }}">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- create account-in Section end  -->
@endsection
