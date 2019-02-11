<template>
    <div class="result__card">
      <div class="result__title">
        <span>Ваш стиль</span>
      <div class="result__name">
        {{ data[0].title }}
      </div>
      </div>
      <div class="result__desc">
        <div class="result__info">
          {{ data[0].description }}
        </div>
      <!-- <div class="result__share">
        Покажи результат своим друзьям
        <div class="result__socials">
            <a class="result__link result__link--vk" href="#">VK</a>
            <a class="result__link result__link--tw" href="#">Twitter</a>
            <a class="result__link result__link--fb" href="#"></a>
        </div>
      </div> -->
      </div>
      <div class="card-button__wrapper">

        <!-- <div @click="redirect(data[0])">  -->
          <button type="button" class="card-button">
           <svg width="56px" height="36px" viewBox="0 0 112 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
               <defs></defs>
               <g id="Option-2---button-&amp;-talkback-screens" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                   <g id="Kind-of-Home" transform="translate(-306.000000, -370.000000)" stroke="#00afd8">
                       <g id="home-kinds" transform="translate(280.000000, 339.000000)">
                           <g id="Group-7">
                               <g id="House">
                                   <g transform="translate(27.000000, 32.000000)">
                                       <path d="M30.8466708,90.8055185 C32.9130798,90.8055185 34.5882353,92.3059664 34.5882353,94.1568627 L7.68627451,94.1568627 C7.67623132,92.6194741 8.35614952,91.1429022 9.57335988,90.0589408 C10.7905702,88.9749795 12.4429835,88.3745422 14.1592932,88.3925506" id="Shape"></path>
                                       <path d="M13.4509804,87.8620559 C14.685735,84.2933445 18.3910734,82.1208233 22.2054026,82.7291463 C26.0197319,83.3374693 28.8208761,86.5476677 28.8235294,90.3137255" id="Shape"></path>
                                       <path d="M101.934258,90.7856897 C104.006439,90.7856897 105.686275,92.2950153 105.686275,94.1568627 L78.7843137,94.1568627 C78.8048065,90.9807616 81.665355,88.4105695 85.2002625,88.3921569" id="Shape"></path>
                                       <path d="M84.5490196,87.8620559 C85.7837742,84.2933445 89.4891126,82.1208233 93.3034419,82.7291463 C97.1177711,83.3374693 99.9189153,86.5476677 99.9215686,90.3137255" id="Shape"></path>
                                       <path d="M11.5294118,88.3921569 L11.5294118,38.4313725" id="Shape"></path>
                                       <path d="M99.9215686,38.4313725 L99.9215686,84.5490196" id="Shape"></path>
                                       <rect id="Rectangle-path" x="38.4313725" y="86.4705882" width="32.6666667" height="7.68627451"></rect>
                                       <rect id="Rectangle-path" x="46.1176471" y="57.6470588" width="19.2156863" height="28.8235294"></rect>
                                       <rect id="Rectangle-path" x="21.1372549" y="57.6470588" width="15.372549" height="15.372549"></rect>
                                       <rect id="Rectangle-path" x="74.9411765" y="57.6470588" width="15.372549" height="15.372549"></rect>
                                       <rect id="Rectangle-path" x="48.0392157" y="26.9019608" width="15.372549" height="13.4509804"></rect>
                                       <path d="M55.7254902,1.92156863 L19.2156863,38.4313725" id="Shape"></path>
                                       <path d="M55.7254902,1.92156863 L92.2352941,38.4313725" id="Shape"></path>
                                       <path d="M82.627451,5.76470588 L59.5686275,5.76470588" id="Shape"></path>
                                       <polyline id="Shape" points="92.7530821 38.4313725 103.764706 38.4313725 103.764706 5.76470588 92.2352941 5.76470588"></polyline>
                                       <polyline id="Shape" points="19.2900186 38.4313725 7.68627451 38.4313725 7.68627451 5.76470588 51.8823529 5.76470588"></polyline>
                                       <rect id="Rectangle-path" x="82.627451" y="0" width="9.60784314" height="13.4509804"></rect>
                                       <path d="M80.7058824,0 L94.1568627,0" id="Shape"></path>
                                       <path d="M0,94.1568627 L109.529412,94.1568627" id="Shape"></path>
                                   </g>
                               </g>
                           </g>
                       </g>
                   </g>
               </g>
           </svg>
             <div class="card-button__info">
             Продолжить <br> и расчитать <br> ремонт
           </div>
        </button>

        <!-- <div onclick="window.location.href='https://flatium.ru/calculator '"> -->
          <button type="button" class="card-button">
                <svg width="56px" height="36px" viewBox="0 0 90 92" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                    <defs></defs>
                    <g id="Option-2---button-&amp;-talkback-screens" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g id="Kind-of-Home" transform="translate(-502.000000, -374.000000)" stroke="#00afd8">
                            <g id="home-kinds" transform="translate(280.000000, 339.000000)">
                                <g id="Group-7-Copy" transform="translate(185.000000, 0.000000)">
                                    <g id="Group-7">
                                        <g id="Townhome" transform="translate(37.000000, 35.000000)">
                                            <path d="M27.335,87.5 C29.2679966,87.5 30.835,89.0670034 30.835,91 L5.775,91 C5.77494371,87.708196 8.43325231,85.0342503 11.725,85.015" id="Shape"></path>
                                            <path d="M11.725,84.98 C12.9766056,81.2669936 16.7292634,79.0031881 20.5974644,79.627651 C24.4656654,80.2521139 27.3153433,83.5817674 27.335,87.5" id="Shape"></path>
                                            <path d="M81.655,87.5 C83.5879966,87.5 85.155,89.0670034 85.155,91 L60.06,91 C60.06,87.6945758 62.7395758,85.015 66.045,85.015" id="Shape"></path>
                                            <path d="M66.045,84.98 C67.2988271,81.2608781 71.0613998,78.9967918 74.9346468,79.6307538 C78.8078938,80.2647157 81.6523057,83.6102143 81.655,87.535" id="Shape"></path>
                                            <path d="M14.945,80.85 L14.945,25.025" id="Shape"></path>
                                            <path d="M74.585,25.025 L74.585,79.59" id="Shape"></path>
                                            <rect id="Rectangle-path" x="38.5" y="75.635" width="12.53" height="15.4"></rect>
                                            <rect id="Rectangle-path" x="39.9" y="16.59" width="9.73" height="9.73"></rect>
                                            <path d="M44.765,0.595 L19.985,25.025" id="Shape"></path>
                                            <path d="M44.765,0.595 L69.545,25.025" id="Shape"></path>
                                            <path d="M63.245,3.36 L47.6,3.36" id="Shape"></path>
                                            <polyline id="Shape" points="69.545 25.025 77.35 25.025 77.35 3.36 63.245 3.36"></polyline>
                                            <polyline id="Shape" points="19.985 25.025 12.18 25.025 12.18 3.36 41.93 3.36"></polyline>
                                            <rect id="Rectangle-path" x="25.97" y="35.245" width="14.56" height="11.865"></rect>
                                            <rect id="Rectangle-path" x="49.035" y="35.245" width="14.56" height="11.865"></rect>
                                            <rect id="Rectangle-path" x="25.97" y="54.565" width="14.56" height="11.865"></rect>
                                            <rect id="Rectangle-path" x="49.035" y="54.565" width="14.56" height="11.865"></rect>
                                            <path d="M88.935,91 L0.595,91" id="Shape"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <div class="card-button__info">
                Продолжить <br>и подобрать мебель <br> и декор
                </div>
        </button>
      </div>

    </div>
</template>

<script>
    export default {
        props: ['data'],
        //
        // methods: {
        //     redirect (data) {
        //         window.location.href = data.link
        //     }
        // }
    }
</script>


<style lang="scss" scoped>
.result {
  &__wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    padding: 30px;
    background-image: url('/storage/results/Loft.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: auto;
  }

  &__card {
    max-width: 765px;
    width: 100%;

    text-align: center;

    background-color: #fff;

    padding: 50px 0;
    margin: 35px;
    box-shadow: 0 0 76px rgba(61,61,61,0.75);
    span {
      color: #00afd8;
      font-size: 18px;
      text-transform: uppercase;
    }
  }
  &__name {
    font-size: 36px;
    letter-spacing: 0px;
    line-height: 43px;
    // font-family: "Rubik";
    font-weight: 400;
    text-align: center;
  }
  &__desc {
    width: 65%;

    margin: 0 auto;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    font-size: 18px;

    color: #4b4b4b;
  }
  &__info {
      padding: 45px 0;
  }
  &__socials {
      padding: 20px 0;
  }
  &__link {
    content: '';
    width: 25px;
    height: 15px;
    fill: #a5a5a5;

    &--vk {
      content: url('/storage/results/vk-social-network-logo.svg');
    }
    &--tw {
      content: url('/storage/results/twitter-logo-silhouette.svg');
    }
    &--fb {
      content: url('/storage/results/vk-social-network-logo.svg');
    }
  }
}

.logo {
  position: absolute;

  width: 120px;
  margin-top: 10px;
  margin-left: 6%;

  &__img {
    width: 100%;
    height: 100%;
  }
}

.card-button {
  width: 115px;
  background-color: transparent;
  border: none;
  cursor: pointer;
  &__info {
    font-size: 10px;
    color: #4b4b4b;
    line-height: 16px;
    padding-top: 15px;
    &:hover {
      color: #00afd8;
    }
  }
  &:focus {
    outline: none;
  }
}

@media (max-width: 500px) {
  .result__name {
      font-size: 25px;
  }
}


</style>
