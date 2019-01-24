<template>
<div>
<div class="container">
    <h1 class="main-caption">
    Я бы описал свой стиль как ...
    </h1>
    <div class="image-wrapper">
      <a class="image-card" href="#">
        <img alt="Более классический" src="/storage/quiz/A/A1.jpg">
        <h4 class="image-text">Более классический</h4>
      </a>
      <a class="image-card" href="#">
        <img alt="Что-то между" src="/storage/quiz/A/A2.jpg">
        <h4 class="image-text">Что-то между</h4>
      </a>
      <a class="image-card" href="#">
        <img alt="Более современный" src="/storage/quiz/A/A3.jpg">
        <h4 class="image-text">Более современный</h4>
      </a>
    </div>
  </div>
</div>
</template>

<script>
  export default {
      data () {
          return {
              
          }
      }
  }
</script>

<style lang="css">
.body {
min-width: 320px;

}

.container {
max-width: 1150px;

margin: 0 auto;
}

.main-caption {
text-align: center;
font-weight: 400;

    line-height: 1.5;
    font-size: 20px;

}

.image-wrapper {
display: flex;
max-height: 330px;

}

.image-card {
width: 90%;
height: 100%;

display: block;
border: 2px solid #eee;


padding: 18px;
margin-left: 30px;

font-size: 14px;
text-decoration: none;

outline: none;
transition-duration: .6s;

}

.image-card:hover {
border: 2px solid #000;
/* box-shadow: 2px 15px 22px rgba(0,0,0,.13); */
}

.image-text {
margin: 0;
padding: 0;
font-size: 12px;
color: #1c2233;
letter-spacing: 2px;
line-height: 1.9;
margin-top: 14px;

text-align: center;
text-transform: uppercase;
}



.image-card img {
height: auto;
width: 100%;

}


@media (max-width: 700px) {
  .image-wrapper  {
    flex-wrap: wrap;
  }

  .image-card {
    margin-bottom: 20px;
    margin-left: 0px;
  }

}

</style>
