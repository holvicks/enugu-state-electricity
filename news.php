
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      
    <script>
    tailwind.config = {
      theme: {
        container: {
      center: true,
      padding: {
        DEFAULT: '0rem', // Default padding for all breakpoints
            // Padding when the view is >= 1280px
      },
      screens: {
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1280px',
        },
        },
        extend: {
        backgroundImage: {
        'aboutHeroImage1': "url('./assets/images/backgrounds/lady_engineer-enugu-electricity.png')",
        'aboutHeroImage2': "url('./assets/images/backgrounds/power_pole-enugu-electricity.png')",  
        'lightbulb': "url('./assets/images/backgrounds/lightbulb.png')",  
        'smilinglady': "url('./assets/images/backgrounds/smiling_lady-Bp1HQix.png')", 
        'news1': "url('./assets/images/news/News1.webp')", 
        'news2': "url('./assets/images/news/News2.webp')", 
        
        },
          colors: {
            primary: '#FC6d06',
          },
          fontFamily:{
            'redhat': ['"Red Hat Display"', 'sans-serif'],
            'dortmund': ['Dortmund', 'sans-serif']
          }
        }
      }
    }
  </script>
</head>
<body class="font-redhat">

<?php include "header.php" ?>
<main class=" px-0  md:px-6">
<div class="app-container overflow-x-hidden border mt-16 bg-[#E8E8E8]">

<section class=" mt-16 mx-auto my-5  px-1 sm:px-14">
  <div class="grid grid-cols-1 items-center">
    <div class=""><div class="space-y-4 p-3 md:p-0">
      <h4 class="text-4xl md:text-5xl font-dortmund font-bold">News</h4>
      <p class="font-red-hat"><span class="block leading-none">Dedicated to ensuring sustainable and</span>
        <span class="block leading-none">reliable electricity for all</span>
      </p>
      <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 bg-[#034539] py-6 my-5 hover:bg-[#13352f]">
        <img src="./assets/images/icons/more-icon.png" alt="">
      </button>
    </div>
  </div>
</div>
</section>

<div class=" px-1 sm:px-14">
<section class="mt-16 md:mt-24 mx-auto my-5 overflow-hidden px-0 md:bg-white md:rounded-xl md:p-16">
  <div class="grid grid-cols-1 md:grid-cols-1 space-y-10 md:space-y-28 items-center">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center">
      <div class="w-[290px] mx-auto shadow-lg md:w-full h-max space-y-5 py-[25px] md:py-[40px] px-[55px] md:px-[93px] rounded-[12px] bg-white leading-none z-30">
        <span class="bg-[#034539] rounded-[10px] px-[15px] py-[10px] text-white text-[16px]">2 weeks ago</span>
        <h4 class="font-bold leading-none text-[20px] md:text-[30px] font-dortmund">NERC cedes regulatory oversight of Enugu electricity market to state government</h4>
        <p class="leading-[18px] md:leading-[25px]">The Nigerian Electricity Regulatory Commission (NERC) has officially transferred regulatory oversight of the Enugu electricity market to the Enugu Electricity Regulatory Commission (EERC).</p>
        <a class="font-bold leading-[20px] md:leading-[25px] text-black font-red-hat" href="https://nairametrics.com/2024/04/22/breaking-nerc-cedes-regulatory-oversight-of-enugu-electricity-market-to-state-government-commission/">Read More<img src="./assets/images/icons/read-more.png" class="inline-block  ms-3" alt="arrow right">
        </a>
      </div>
      <div class=" h-[379px] md:h-[500px] ms-0 md:-ms-28 -mb-40 md:mb-0 rounded-[12px] bg-news1 bg-center bg-cover bg-no-repeat order-first md:order-2"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 items-center">
      <div class=" h-[379px] md:h-[500px] me-0 md:-me-28 -mb-40 md:mb-0 rounded-[12px] bg-news2 bg-cover bg-no-repeat"></div>
      <div class="w-[290px] mx-auto shadow-lg md:w-full h-max space-y-5 py-[25px] md:py-[40px] px-[55px] md:px-[93px] rounded-[12px] bg-white leading-none z-30">
        <span class="bg-[#034539] rounded-[10px] px-[15px] py-[10px] text-white text-[16px]">October 25, 2023</span>
        <h4 class="font-bold leading-none text-[20px] md:text-[30px] font-dortmund">Enugu targets 690MW, 20-hour power supply by 2030</h4>
        <p class="leading-[18px] md:leading-[25px]">Enugu State Government says it plans to transition from an energy poor state to a commercially viable electricity market generating over 690 megawatts of electricity and at least 20-hour per day...</p><a class="font-bold leading-[20px] md:leading-[25px] text-black font-red-hat" href="https://www.vanguardngr.com/2023/10/enugu-targets-690mw-20-hour-power-supply-by-2030/">Read More<img src="./assets/images/icons/read-more.png" class="inline-block  ms-3" alt="arrow right"></a>
      </div>
    </div>
  </div>
</section>

<!-- Video section -->
<section class="md:mt-24">
  <div class="w-full">
    <div class="mt-16 mx-auto my-5 overflow-hidden">
      <h4 class="font-bold leading-none text-[20px] md:text-[30px] font-dortmund mb-16 mt-12">Governor Peter Mbah Signs Enugu Electricity Bill into law</h4>
      <iframe class="border-none h-[400px] md:h-[688px]" width="100%" src="https://www.youtube.com/embed/dG6mZqIneNw" title="Governor Peter Mbah Signs Enugu Electricity Bill Into Law" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
    </div>
  </div>
</section>

<!--======MORE CONTENT======-->
<section class="mt-16 mx-auto my-5 px-0 md:bg-white md:rounded-xl md:p-16 md:mt-24">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 my-16">
    <div class="h-max md:h-[550px] rounded-[16px] relative">
      <img src="./assets/images/manviewing-B0APInvr.png" alt="" class="h-full w-full rounded-[16px] object-cover">
      <div class="top-1/2 -translate-y-1/2 absolute left-10 md:top-[350px] md:left-[70px] text-white w-[371px]  space-y-4">
        <span class="bg-[#034539] rounded-[10px] px-[15px] py-[10px] text-white text-[16px]">Sep 15, 2023</span>
        <h4 class="font-[700] leading-[16px] text-[20px] md:text-[16px] font-red-hat">The Easterner</h4>
        <p class="leading-[18px] md:leading-[21px] max-w-60 text-[20px] font-dortmund font-[800]">Enugu governor, Mbah signs electricity bill into law</p>
        <a class="font-[700] leading-[16px] font-red-hat text-white" href="https://theeasterner.com/enugu-governor-mbah-signs-electricity-bill-into-law/" target="_blank">Read More<img src="./assets/images/icons/read-more.png" class="inline-block ms-3" alt="arrow right"></a>
      </div>
    </div>

    <div class="h-max md:h-[550px] rounded-[16px] relative">
      <img src="./assets/images/news/morenews2.jpg" alt="" class="h-full w-full rounded-[16px] object-cover">
      <div class="top-1/2 -translate-y-1/2 absolute left-10 md:top-[350px] md:left-[70px] text-white w-[371px]  space-y-4">
        <span class="bg-[#034539] rounded-[10px] px-[15px] py-[10px] text-white text-[16px]">2 Days ago</span>
        <h4 class="font-[700] leading-[16px] text-[20px] md:text-[16px] font-red-hat">This Day</h4>
        <p class="leading-[18px] md:leading-[21px] max-w-60 text-[20px] font-dortmund font-[800]">Devolution in Electricity Regulation</p>
        <a class="font-[700] leading-[16px] font-red-hat text-white" href="https://thisdaylive.com/index.php/2024/05/06/devolution-in-electricity-regulation" target="_blank">Read More<img src="./assets/images/icons/read-more.png" class="inline-block ms-3" alt="arrow right">
        </a>
      </div>
    </div>
    <a class="font-[700] text-[16px]" href="/news">See more news</a>
  </div>
</section>


<div class="hidden md:grid grid-cols-1 my-10">
  <article class="bg-[#1D1D1D] rounded-xl relative">
    <div>
      <img src="./assets/images/girl-desktop.svg" alt="A confident young african builder crossing hands and wearing a helmet"></div>
      <div class="w-[315px] mx-auto flex flex-col items-start gap-y-3 absolute top-1/2 -translate-y-1/2 right-[7.814%]">
        <h2 class="font-extrabold font-dortmund text-[39px] leading-[1.3] text-white">Invest in efficiency &amp; adequacy</h2>
        <a class="py-[18px] px-[32px] rounded-xl bg-[#034539] leading-[1.3] font-red-hat font-bold inline-block text-white" href="/news">Contact Us</a>
      </div>
    </article>
  </div>




</div>

</div>
  </main>


<!--=========FIND US ===========--->

<?php include 'footer.php' ?>

<script src="index.js">
</script>

</body>
</html>
