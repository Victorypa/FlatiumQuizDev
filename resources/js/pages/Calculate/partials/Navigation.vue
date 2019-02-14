<template>
    <nav>
      <div class="nav nav-tabs" role="tablist">
        <a class="nav-item nav-link"
           :class="{ 'active': selected === 'result' ? true : false }"
           data-toggle="tab"
           href="#nav-result"
           role="tab"
           aria-controls="nav-result"
           >
           Ваш стиль
       </a>

        <a class="nav-item nav-link"
           :class="{ 'active': selected === 'calculator' ? true : false }"
           data-toggle="tab"
           href="#nav-needs"
           role="tab"
           aria-controls="nav-needs"
           >
            Рассчёт ремонта
        </a>
      </div>
    </nav>
</template>

<script>
    export default {
        props: ['selected']
    }
</script>
