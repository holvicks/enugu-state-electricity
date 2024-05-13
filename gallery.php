
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
        DEFAULT: '1rem',
        sm:'0.1' // Default padding for all breakpoints
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

<main class="border mt-16 bg-[#E8E8E8] pt-36 md:pt-52 pb-20  mx-auto">


<div class="app-container flex  flex-col sm:w-11/12 mx-auto px-5 pb-20 lg:px-0 ">
  <div class="text-black text-[30px] leading-[1.3] tracking-[-2.1px] md:text-2xl font-dortmund max-w-lg font-extrabold md:text-[50px] md:leading-[1.3] md:tracking-[-3.5px]">
    <p class="">Gallery</p>
  </div>
  <p class="max-w-[14rem] sm:max-w-[17rem] md:max-w-lg text-[16px]  font-red-hat md:text-[20px] md:leading-[1.7] md:tracking-[-0.20px] text-black mt-4">Dedicated to ensuring sustainable and reliable electricity for all</p>
  <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 bg-[#034539] py-4 md:py-7 md:px-5 mt-4 w-max hover:bg-[#13352f]">
    <img src="./assets/images/icons/more-icon.png" alt="">
  </button>
</div>


<!--=====THE INAUGURATION========-->
<section class="sm:w-11/12 mx-auto px-5 lg:px-0">
<div class="bg-[#F5FFEE] rounded-xl p-10 ">
  <p class="text-black text-[30px] leading-[1.7] tracking-[-2.1px] md:text-2xl font-dortmund max-w-lg font-extrabold md:text-[50px] md:leading-[1.7] md:tracking-[-3.5px]">The Inauguration</p>
  <p class="text-[16px] leading-[1.7] tracking-[-0.16px] font-red-hat md:text-[20px] md:leading-[1.7] md:tracking-[-0.20px] text-black/60 md:text-black mt-4">The Commissioners were inaugurated by the Enugu state House of Assembly in March 2023 at the State House of Assembly complex as provided in the Enugu State Electricity Law&nbsp;No.1&nbsp;of&nbsp;2023.</p>
</div>
</section>



<!--GALLERY -->
<section class="sm:w-11/12 mx-auto px-5 lg:px-0">
<div class="app-container mt-10">
  <div class="bg-white rounded-xl p-8 md:p-24">
    <h2 class="font-dortmund font-extrabold text-[24px] leading-[21.6px] tracking-[-1.44px] md:text-[40px] md:leading-[36px] md:tracking-[-2.4px]">Pictures</h2>
    <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
      <img src="./assets/images/gallery/gallery1-1.svg" alt="speaker" class="rounded-xl w-full h-full">
      <div class="flex flex-col gap-y-6">
        <img src="./assets/images/gallery/gallery1-2.svg" alt="speaker" class="rounded-xl h-2/5 w-full aspect-square">
        <img src="./assets/images/gallery/img1-4.jpg" alt="speaker" class="rounded-xl w-full hidden md:block h-3/5 object-cover"></div>
        <img src="./assets/images/gallery/gallery1-3.svg" alt="speaker" class="rounded-xl w-full aspect-video hidden md:inline-flex h-full">
        <img src="./assets/images/gallery/gallery1-4-mobile.svg" alt="speaker" class="rounded-xl w-full md:hidden">
      </div>
    </div>
  </div>
</section>

<section class="sm:w-11/12 mx-auto px-5 lg:px-0">
<div class="app-container mt-10">
  <div class="bg-white rounded-xl p-8 md:p-24">
    <h2 class="font-dortmund font-extrabold text-[24px] leading-[21.6px] tracking-[-1.44px] md:text-[40px] md:leading-[36px] md:tracking-[-2.4px]">Onboarding</h2>
    <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
      <img src="./assets/images/gallery/gallery2-1.svg" alt="speaker" class="rounded-xl w-full h-full">
      <div class="flex flex-col gap-y-6">
        <img src="./assets/images/gallery/img2-2.jpg" alt="speaker" class="rounded-xl h-2/5 w-full aspect-square object-cover">
        <img src="./assets/images/gallery/gallery2-3.svg" alt="speaker" class="rounded-xl h-3/5 w-full aspect-video hidden md:inline-flex">
        <img src="./assets/images/gallery/gallery2-4.svg" alt="speaker" class="rounded-xl w-full md:hidden"></div>
        <img src="./assets/images/gallery/gallery2-4.svg" alt="speaker" class="rounded-xl w-full hidden md:inline-flex">
        <img src="./assets/images/gallery/gallery2-4-mobile.svg" alt="speaker" class="rounded-xl w-full md:hidden">
      </div>
    </div>
  </div>
  </section>


  <div class="sm:w-11/12 mx-auto px-5 lg:px-0">
    <div class="app-container">
      <div class="md:hidden -translate-y-28 z-10">
        <section class="rounded-2xl overflow-hidden w-full bg-[#034539]">
          <img src="./assets/images/girl-smiling-DpfNMwUb.png" alt="A dark girl on braid smiling">
          <div class="w-[231px] mx-auto flex flex-col items-start gap-y-3 mb-24 mt-10">
            <h2 class="font-extrabold font-dortmund text-[39px] text-white leading-[0.9]">Enabling efficiency in power sector in Enugu&nbsp;State</h2>
            <a class="py-[18px] px-[32px] rounded-xl bg-[#FC6D06] leading-[1.3] font-red-hat font-bold inline-block text-white" href="/contact-us">Contact Us</a>
          </div>
        </section>
      </div>
      <div class="hidden md:flex items-center bg-[#034539] rounded-2xl mt-40">
        <div class="w-3/5 flex justify-center">
          <img src="./assets/images/girl-desktop.svg" class="">
        </div>
        <div class="flex justify-center">
          <div class="">
            <div class="text-white font-dortmund font-extrabold text-[50px] leading-[1.7] tracking-[-4.5px]"><p class="">Invest in</p>
            <p class="">efficiency &amp;</p>
            <p class="">adequacy</p>
          </div>
          <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-[#FC6d06] text-primary-foreground hover:bg-[#FC6d06]/90 h-10 mt-8 font-red-hat text-[16px] leading-[15.52px] tracking-[-0.64px] p-6 font-extrabold">Learn more</button>
        </div>
      </div>
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
