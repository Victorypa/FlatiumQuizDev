<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('panel.index') }}">Панель</a>
  <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav mr-5">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Профиль
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('clicks.index') }}">Клики</a>
            <a class="dropdown-item" href="{{ route('prices.index') }}">Цены</a>
            <a class="dropdown-item" href="{{ route('calculators.index') }}">Калькулятор</a>

            <a href="{{ route('logout') }}"
               class="dropdown-item"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               >
               Выход
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
