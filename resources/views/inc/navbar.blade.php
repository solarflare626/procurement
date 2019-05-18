<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #800000">
    <a class="navbar-brand" href="/">{{config('app-demo', 'Bidding Records')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbars">
        <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item">
                <a class="nav-link" href="/">APP<span class="sr-only">(current)</span></a>
                    </li> --}}
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/invitation')}}">Invitation</a>
                    </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/bidderlist')}}">Bidders</a>
                    </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{ url('/postqual')}}">Qualification</a>
                    </li> -->
            {{-- <li class="nav-item">
                    <a class="nav-link" href="/purchaseorder">Purchase Order</a>
                    </li> --}}
        </ul>
    </div>
    {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div> --}}
</nav>

