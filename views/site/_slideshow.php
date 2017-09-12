<?php

use yii\helpers\Url;

?>

<section>
  
  <div class="tp-banner-container">
    <div class="fullscreenbanner tp-banner">      
      <ul>	<!-- SLIDE  -->
        <li data-transition="fade" data-slotamount="6" data-delay="5000">
        <!-- MAIN IMAGE -->
       	 <img  src="images/slide1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center">
        
           <!-- LAYER NR. 1 -->
           <p class="tp-caption sft tp-resizeme"
           data-x="center"
           data-y="150" 
           data-speed="500"
           data-start="1000"
           data-easing="Power3.easeInOut"
           data-elementdelay="0.1"
           data-endelementdelay="0.1"
           style="z-index: 5;">SIPEKA
           </p>
        <!-- LAYER NR. 2 -->
           <h2 class="tp-caption sft tp-resizeme text-center"
           data-x="center"
           data-y="190" 
           data-speed="500"
           data-start="1500"
           data-easing="Power3.easeInOut"
           data-elementdelay="0.05"
           data-endelementdelay="0.1"
           style="z-index: 9;">
           SIPEKA<br>LAN JAKARTA
           </h2>
            <!-- LAYER NR. 3 --> 
           <p class="tp-caption sft tp-resizeme"
           data-x="center"
           data-y="330" 
           data-speed="500"
           data-start="2000"
           data-easing="Power3.easeInOut"
           data-elementdelay="0.1"
           data-endelementdelay="0.1"
           style="z-index: 5;">Sistem Permohonan dan Monitoring Layanan LAN JAKARTA
           </p>
           
           
        <!-- LAYER NR. 4 -->
           <div class="tp-caption sft tp-resizeme"
           data-x="center"
           data-y="440" 
           data-speed="500"
           data-start="2500"
           data-easing="Power3.easeInOut"
           data-elementdelay="0.1"
           data-endelementdelay="0.1"
           data-linktoslide="next"
           style="z-index: 12;">
           <a href="<?= Url::to(['site/login']); ?>" class="btn btn-flat btn-app btn-blue bounce-white" style="border-radius:0px !important">Login Aplikasi SIPEKA</a>
           </div>
        
        </li>
      </ul>
    </div>
  </div>
</section>
