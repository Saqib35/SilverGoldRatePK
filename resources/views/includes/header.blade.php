<div class="topHeader">
<div class="container topHeader">
   <div class="row">
    <div class="col-md-12">
      <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light topHeader">
          <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="{{ url('/') }}">
              <img src="{{ asset('assets/logo.png') }}" style="margin-right: 130px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}">Silver Price in Pakistan Today - {{ \Carbon\Carbon::now()->format('F j, Y') }}</a>
                </li>
              
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{ url('gold-rate-in-pakistan') }}" id="navbarDropdown">
                    Gold Price in Pakistan Today - {{ \Carbon\Carbon::now()->format('F j, Y') }}
                  </a>
                  <div class="dropdown-menu w-100 topHeader" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item">Gold Ratee In Lahore</a>
                    <a class="dropdown-item">Gold Ratee In Islamabad</a>
                    <a class="dropdown-item">Gold Ratee In Karachi</a>
                    <a class="dropdown-item">Gold Ratee In Multan</a>
                    
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
     </div>
</div>
</div>
