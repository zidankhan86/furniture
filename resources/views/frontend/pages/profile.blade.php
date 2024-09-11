@extends('frontend.master')

@section('content')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Profile</h2>
                <div class="page_link">
                    <a href="{{ route('home') }}">Home</a>
                    
                </div>
            </div>
        </div>
    </div>
  </section>
  
  <!-- Dashboard Section Start -->
  <div class="dashboard section py-5">
    <div class="container">
      <div class="row">
        <!-- Sidebar Navigation -->
        <div class="col-lg-3 mb-4">
          <nav class="nav flex-column bg-light p-3 shadow-sm rounded">
            <h5 class="font-weight-bold mb-4">Navigation</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link active d-flex align-items-center">
                  <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link d-flex align-items-center">
                  <i class="fas fa-sign-out-alt mr-2"></i> Log out
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- Main Content -->
        <div class="col-lg-9">
          <!-- User Profile Card -->
          <div class="card mb-4 shadow-sm">
            <div class="card-body d-flex align-items-center">
              
              <div>
                <h5 class="card-title mb-1">{{ auth()->user()->name }}</h5>
                <p class="card-text text-muted mb-2">Customer</p>
                <p class="card-text">{{ auth()->user()->address }}</p>
              
              </div>
            </div>
          </div>
          <!-- Order History -->
          <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
              <h5 class="mb-0">Recent Order History</h5>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">Date</th>
                      <th scope="col">Price</th>
                      <th scope="col">Status</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (empty($order))
                    <tr>
                      <td colspan="5" class="text-center">No Order History</td>
                    </tr>
                    @else
                    @foreach ($order as $index => $item)
                    <tr>
                      <th scope="row">{{ $index + 1 }}</th>
                      <td>{{ $item->created_at }}</td>
                      <td>{{ $item->price }} Tk</td>
                      <td>{{ $item->status }}</td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dashboard Section End -->
  


@endsection
