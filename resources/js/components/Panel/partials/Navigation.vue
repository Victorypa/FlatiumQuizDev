<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/panel">Панель</a>


      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav mr-5">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Профиль
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/panel/clicks">Клики</a>
                <a class="dropdown-item" href="/panel/calculators">Калькулятор</a>
                <a class="dropdown-item" @click.prevent="logout">Выход</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
</template>

<script>
    export default {
        methods: {
            logout() {
                axios.post('/logout')
                     .then(response => {
                         window.location.href = '/login'
                     })
            }
        }
    }
</script>
