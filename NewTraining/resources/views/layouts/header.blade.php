{{-- <header>
    @if(\Auth::check())
        <div class="headerCntr">
            <div class="logo">
                <img src="/images/4.jpeg" alt="123">
            </div>
            <div class="logout">
                <img src="{{ \Auth::user()->images }}" alt="123" style="height: 50px;">
                {{ \Auth::user()->name }}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button>logout</button>
                    </form>
            </div>
        </div>
    @endif
</header> --}}
@include('layouts.head')
@if(\Auth::check())
    <header class="headerCntr">
        <div class="headerBox">
                <div class="logo">
                    <a href="http://localhost:8000/home">
                        <img src="/images/4.jpeg" alt="123">
                    </a>
                </div>
            <div class="actionsBox">
                <img src="{{ \Auth::user()->images }}" alt="123" style="height: 50px;">
                <span>{{ \Auth::user()->name }}</span>
                <i class="dropdown fas fa-chevron-circle-down">
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="{{ route('post.index') }}">Post</a></li>
                            <li><a href="{{ route('update.index') }}">Update Information</a></li>
                            <li><a href="{{ route('change.index') }}">Change Password</a></li>                                
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </i>
            </div>
        </div>
    </header>
@endif



