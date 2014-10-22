<div class="navbar">
  <div class="navbar-inner">
    {{ link_to_route('home', 'ToDo', [],['class' => 'brand']) }}
    <ul class="nav">
        @if(Auth::check())
            <li>{{ link_to_route('tasks', 'Tâches') }}</li>
            <li>{{ link_to_route('logout', 'Logout') }}</li>
        @else
            <li>{{ link_to_route('login','Login') }}</li>
            <li>{{ link_to_route('register', 'Register') }}</li>
        @endif
    </ul>
  </div>
</div>
