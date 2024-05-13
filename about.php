
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
        DEFAULT: '1rem', // Default padding for all breakpoints
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


<div class="border mt-16 bg-[#E8E8E8]">
  <section class="sm:w-11/12 app-container mt-16 mx-auto my-5">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-5 space-y-5 md:space-y-0 items-center">
      <div class=""><div class="space-y-4 p-3 md:p-0">
        <h4 class="text-4xl md:text-5xl font-dortmund font-bold md:leading-[1.3]" style="opacity: 1; transform: none;">Shaping the <br>Future of <br>Electricity <br>Regulation in <br> Enugu State</h4>
        <p class="font-red-hat font-2xl md:leading-[1.7]" style="opacity: 1; transform: none;">
          Dedicated to ensuring sustainable and reliable electricity to the served, underserved and unserved communities in Enugu State.</p><div style="opacity: 1; transform: none;">
            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2  disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 bg-[#034539] hover:bg-[#13352f]">
              <img src="./assets/images/icons/more-icon.png" alt="">
            </button>
          </div>
        </div>
      </div>
      <div class="h-[350px] md:h-[600px]" style="opacity: 1; transform: none;">
        <div class="h-[450px] relative w-full">
          <div class="absolute sm:-top-20 md:top-2 left-0 md:left-0 bg-aboutHeroImage2 bg-cover bg-no-repeat h-[191.9px] md:h-[370.75px] w-[194.2px] md:w-[375.19px]"></div>
          <div class="absolute z-2 top-20 md:top-32 right-10 md:right-20 bg-aboutHeroImage1 bg-cover bg-no-repeat h-[191.9px] md:h-[370.75px] w-[194.2px] md:w-[375.19px]"></div>
          <span class="absolute top-12 md:top-28 bg-white z-2 p-4 rounded-full left-20 md:left-40">
            <img src="./assets/images/icons/power.png" class="w-11 h-12" alt="">
          </span>
          <span class="absolute right-0 w-32 left-12 md:left-28 bottom-48 md:bottom-0 z-40" style="margin-left:30px;">
            <img src="./assets/images/icons/power-sketch-enugu-state.png" alt="">
          </span>
        </div>
      </div>
    </div>
  </section>


  <section class="sm:w-11/12 app-container mx-auto my-5">
    <div class="mt-10 md:my-32 rounded-[7px] bg-white relative">
      <div class="px-5 md:px-32 py-20 md:py-28 ">


        <div class="space-y-5 z-50" style="transform: translateY(100px) translateZ(0px);">
          <h4 class="font-bold text-black text-4xl md:text-5xl font-dortmund leading-[1.3]">About Us</h4>
          <p class=" text-2xl font-red-hat leading-[1.7]">Enugu State Electricity Regulatory Commission (EERC) is an independent body established in 2023 by Enugu State Electricity Law. Its mission is to regulate electricity supply and develop a robust electricity market within Enugu State.</p>
        </div>


    <div class="grid grid-cols-1 md:grid-cols-2 space-y-10 md:space-y-20 items-center space-x-0 md:space-x-reverse md:space-x-10  my-24">
      <div class="space-y-5 md:space-x-reverse md:space-x-4" style="opacity: 1; transform: none;">
      <h4 class="font-bold text-4xl md:text-5xl font-dortmund leading-[1.3]">Our Mission</h4>
      <p class=" text-2xl font-red-hat leading-[1.7]">To promote a commercially viable electricity market in Enugu State.</p>
    </div>
    <div class="p-4 bg-black relative h-[414px]" style="opacity: 1; transform: none;">
    <img src="./assets/images/map.png" alt="" class="h-full w-full">
    <span class="absolute bottom-0 left-28 z-10">
      <img src="" alt="">
    </span>
  </div>
  <div class="p-4 bg-black relative" style="opacity: 1; transform: none;">
  <div class="bg-lightbulb bg-cover bg-no-repeat h-[414px]">

  </div><span class="absolute bottom-0 left-28 z-10">
    <img src="" alt="">
  </span>
</div>
<div class="space-y-5" style="opacity: 1; transform: none;">
<h4 class="font-bold text-4xl md:text-5xl font-dortmund leading-[1.3]">Our Vision</h4>
<p class=" text-2xl font-red-hat leading-[1.7]">To ensure universal access to electricity in Enugu State.</p>
</div>
</div>


    <!--==========Core Value ============-->
    <div class="space-y-5 mt-48">
  <span class="px-5 py-3 rounded-md bg-[#F1FFE9] text-[#034539] font-semibold font-dortmund">Our Commitment to excellence</span>
  <h4 class="font-bold font-dortmund text-4xl md:text-5xl leading-[1.7]">Core Values</h4>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    <div class="px-10 py-14 bg-[#F0F0F0] rounded-[9px] h-[346px]" style="opacity: 1; transform: none;">
      <div class="space-y-4">
        <img src="./assets/images/icons/core-value-box.png" alt="">
        <h4 class="font-bold font-dortmund text-2xl leading-[1.3]">Integrity</h4>
        <p class="font-red-hat leading-[1.7]">Upholding the highest ethical standards in all our actions and decisions</p>
      </div>
    </div>


    <div class="px-10 py-14 bg-[#F5FFEE] rounded-[9px] h-[346px]" style="transform: none;">
      <div class="space-y-4">
      <img src="./assets/images/icons/core-value-box.png" alt="">
        <h4 class="font-bold font-dortmund text-2xl leading-[1.3]">Transparency</h4>
        <p class="font-red-hat leading-[1.7]">Unwavering commitment to fair and open processes in our decision making and regulatory&nbsp;practices.</p></div>
      </div>
      <div class="px-10 py-14 bg-[#F0F0F0] rounded-[9px] h-[346px]" style="opacity: 1; transform: none;">
        <div class="space-y-4">
        <img src="./assets/images/icons/core-value-box.png" alt="">
          <h4 class="font-bold font-dortmund text-2xl leading-[1.3]">Consumer Focus</h4>
          <p class="font-red-hat leading-[1.7]">Putting the interests of consumers at the forefront of our regulations.</p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
      <div class="px-10 py-14 bg-[#F5FFEE] rounded-[9px] h-[346px]" style=" transform: translateX(-10px) rotate(0deg) translateZ(0px);"><div class="space-y-4">
      <img src="./assets/images/icons/core-value-box.png" alt="">
        <h4 class="font-bold font-dortmund text-2xl leading-[1.3]">Innovation</h4>
        <p class="font-red-hat leading-[1.7]">Embracing innovation and technology to drive progress and efficiency in the energy sector.</p></div>
      </div>
        <div class="px-10 py-14 bg-[#F0F0F0] rounded-[9px] h-[346px]" style=" transform: translateX(-10px) rotate(0deg) translateZ(0px);">
          <div class="space-y-4">
          <img src="./assets/images/icons/core-value-box.png" alt="">
            <h4 class="font-bold font-dortmund text-2xl leading-[1.3]">Sustainability</h4>
            <p class="font-red-hat leading-[1.7]">Promoting environmentally sustainable practices and supporting the transition to clean energy solutions.</p>
          </div>
        </div>
      </div>
    </div>

    </div>

    <!--=========ENd Of Core Values========-->
      <div class="w-[90%] md:w-[93%] absolute -top-2 left-5 md:left-10 h-5 bg-[#034539] z-[100] rounded-lg"></div>
      <div class="z-20 text-center">
        <button class=" text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 -m-52 font-red-hat bg-[#034539] hover:bg-[#296a5e]">Learn More
        </button>
      </div>
    </div>    
  </section>




  <section class="sm:w-11/12 app-container mx-auto my-5">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-3 my-10">
    <div class="col-span-2 bg-[#034539] text-white py-20 px-6 md:px-32 space-y-5 rounded-lg hidden md:block" style="opacity: 1; transform: none;">
  <img src="./assets/images/icons/location.png" alt="">
  <h4 class=" font-bold text-3xl md:text-5xl leading-[1.7]">Find us</h4>
  <p class="text-lg font-normal leading-[1.3]">Enugu State Electricity Regulatory Commission is located at:</p>
  <p class="text-lg font-semibold leading-[1.3]">No 2 Forest Close, Off Forest Crescent, GRA, Enugu, Enugu State, Nigeria.</p><div class=""><p class="text-lg font-semibold leading-[1.3]">
    <address class="not-italic grid gap-y-4">
      <a class="underline hover:text-linen transition duration-150 w-fit flex gap-x-2 items-center" href="mailto:“info@eerc.en.gov.ng”"><span class="w-6 h-6">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.75 3h20.5c.966 0 1.75.784 1.75 1.75v14a1.75 1.75 0 0 1-1.75 1.75H1.75A1.75 1.75 0 0 1 0 18.75v-14C0 3.784.784 3 1.75 3ZM1.5 7.412V18.75c0 .138.112.25.25.25h20.5a.25.25 0 0 0 .25-.25V7.412l-9.52 6.433c-.592.4-1.368.4-1.96 0Zm0-2.662v.852l10.36 7a.25.25 0 0 0 .28 0l10.36-7V4.75a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25Z"></path>
        </svg>
      </span>info@eerc.en.gov.ng</a>
      <a class="flex gap-x-2" href="tel:07072051569">
        <span class="w-6 h-6">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path fill="none" d="M0 0h24v24H0V0z"></path>
            <path d="M16 1H8C6.34 1 5 2.34 5 4v16c0 1.66 1.34 3 3 3h8c1.66 0 3-1.34 3-3V4c0-1.66-1.34-3-3-3zm1 17H7V4h10v14zm-3 3h-4v-1h4v1z"></path>
          </svg>
        </span>
        <span>07072051569</span>
      </a></address></p>
    </div>
  </div>
  <div class="rounded-lg bg-gradient-to-t from-black to-black/70 " style="opacity: 1; transform: none;">
    <div class="bg-smilinglady bg-center bg-cover bg-no-repeat h-full z-20"></div>
  </div>
</div>
<div class="hidden md:grid grid-cols-1 ">
  <article class="bg-[#034539] rounded-xl relative">
    <div style="opacity: 1; transform: none;">
      <img src="./assets/images/backgrounds/guy-wearing-helmet.png" alt="A confident young african builder crossing hands and wearing a helmet"></div>
      <div class="w-[315px] mx-auto flex flex-col items-start gap-y-3 absolute top-1/2 -translate-y-1/2 right-[7.814%]">
        <h2 class="font-extrabold font-dortmund text-[39px] text-white leading-[0.9]" style="opacity: 1; transform: none;">Enabling efficiency in power sector in Enugu&nbsp;State</h2>
        <div style="">
          <a class="py-[18px] px-[32px] rounded-xl bg-[#FC6D06] leading-[1.3] font-red-hat font-bold inline-block text-white" href="/contact-us">Contact Us</a>
        </div>
      </div>
    </article>
  </div>
  <div class="grid md:hidden grid-cols-1 ">
    <section class="rounded-2xl overflow-hidden w-full bg-[#034539]">
      <img src="./assets/images/icons/core-value-box.png" alt="A dark girl on braid smiling">
      <div class="w-[231px] mx-auto flex flex-col items-start gap-y-3 mb-24 mt-10">
        <h2 class="font-extrabold font-dortmund text-40 text-white leading-[1.3]">Enabling efficiency in power sector in Enugu&nbsp;State</h2>
        <a class="py-[18px] px-[32px] rounded-xl bg-[#FC6D06] leading-[1.3] font-red-hat font-bold inline-block text-white" href="/contact-us">Contact Us</a>
      </div>
    </section>
  </div>
</section>
</div>


<!--=========FIND US ===========--->

<?php include 'footer.php' ?>

<script src="index.js">
</script>

</body>
</html>
