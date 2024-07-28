
<!-- dashboard Secton Start  -->
<div class="dashboard section">
    <div class="container">
      <div class="row dashboard__content">
        <div class="col-lg-3">
          <nav class="dashboard__nav">
            <h5 class="dashboard__nav-title font-body--xxl-500">
              navigation
            </h5>
            <ul class="dashboard__nav-item">
              <li class="dashboard__nav-item-link active">
                <a href="user-dashboard.html" class="font-body--lg-400">
                  <span class="icon">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21 21H13V15H21V21ZM11 21H3V11H11V21ZM21 13H13V3H21V13ZM11 9H3V3H11V9Z"
                        fill="currentColor"
                      />
                    </svg>
                  </span>
                  <span class="name">Dashboard</span>
                </a>
              </li>
            
            
              <!--  Log out    -->
              <li class="dashboard__nav-item-link">
                <a href="{{ route('logout') }}" class="font-body--lg-400">
                  <span class="icon">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M19 21H10C9.46957 21 8.96086 20.7893 8.58579 20.4142C8.21071 20.0391 8 19.5304 8 19V15H10V19H19V5H10V9H8V5C8 4.46957 8.21071 3.96086 8.58579 3.58579C8.96086 3.21071 9.46957 3 10 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z"
                        fill="currentColor"
                      />
                    </svg>
                  </span>

                  <span class="name"> Log out </span>
                  
                </a>
              </li>
            </ul>
            <button class="filter-icon">
              <svg
                width="22"
                height="19"
                viewBox="0 0 22 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18 5.75C18.4142 5.75 18.75 5.41421 18.75 5C18.75 4.58579 18.4142 4.25 18 4.25V5.75ZM9 4.25C8.58579 4.25 8.25 4.58579 8.25 5C8.25 5.41421 8.58579 5.75 9 5.75V4.25ZM18 4.25H9V5.75H18V4.25Z"
                  fill="white"
                />
                <path
                  d="M13 14.75C13.4142 14.75 13.75 14.4142 13.75 14C13.75 13.5858 13.4142 13.25 13 13.25V14.75ZM4 13.25C3.58579 13.25 3.25 13.5858 3.25 14C3.25 14.4142 3.58579 14.75 4 14.75V13.25ZM13 13.25H4V14.75H13V13.25Z"
                  fill="white"
                />
                <circle
                  cx="5"
                  cy="5"
                  r="4"
                  stroke="white"
                  stroke-width="1.5"
                />
                <circle
                  cx="17"
                  cy="14"
                  r="4"
                  stroke="white"
                  stroke-width="1.5"
                />
              </svg>
            </button>
          </nav>
        </div>
        <div class="col-lg-9 section--xl pt-0">
          <div class="container">
            <!-- User Info -->
            <div class="row">
              <!-- User Profile  -->
              <div class="col-lg-12">
                <div class="dashboard__user-profile dashboard-card">
                  <div class="dashboard__user-profile-img">
                    <img src="src/images/user/img-07.png" alt="userImg" />
                  </div>
                  <div class="dashboard__user-profile-info">
                    <h5 class="font-body--xxl-500 name">{{ auth()->user()->name }}</h5>
                    <p class="font-body--md-400 designation">Customer</p>
                    <a
                      href="account-setting.html"
                      class="edit font-body--lg-500"
                    >
                    {{ auth()->user()->address }}
                    </a>
                  </div>
                </div>
              </div>
              <!-- User Billing Address -->
              
            </div>
            <!-- Order History  -->
            <div class="dashboard__order-history" style="margin-top: 24px">
              <div class="dashboard__order-history-title">
                <h2 class="font-body--xxl-500">Recent Order History</h2>
                
              </div>
              <div class="dashboard__order-history-table">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th
                          scope="col"
                          class="dashboard__order-history-table-title"
                        >
                          Order Id
                        </th>
                        <th
                          scope="col"
                          class="dashboard__order-history-table-title"
                        >
                          Date
                        </th>
                        <th
                          scope="col"
                          class="dashboard__order-history-table-title"
                        >
                          Total
                        </th>
                        <th
                          scope="col"
                          class="dashboard__order-history-table-title"
                        >
                          Status
                        </th>
                        <th
                          scope="col"
                          class="dashboard__order-history-table-title"
                        ></th>
                      </tr>
                    </thead>
                    <tbody>

                        @if (empty($order))
                        <tr>
                            <td colspan="8">No Order History</td>
                        </tr>
                        @else
                        @foreach ($order as $index => $item)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $item->first_name }}</td>
                            <td>#{{ $item->total_price }}{{ $item->id }}67890</td>
                            <td>BDT {{ $item->total_price }}</td>
                            <td>{{ $item->created_at }}</td>
                           
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
  </div>
  <!-- dashboard Secton  End  -->