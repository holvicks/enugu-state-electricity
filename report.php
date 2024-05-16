
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

<main class="pt-36 md:pt-52 pb-20 bg-[#E8E8E8] mx-auto">



<section class="sm:w-11/12 mx-auto px-5 lg:px-0">
<header class="bg-white  rounded-[7px] mb-10 relative h-[493px] md:h-[334px]">
  <img src="./assets/images/mobile-network-poles.png" alt="" class="right-0 absolute z-1 top-[218px] md:hidden">
  <img src="./assets/images/mobile-cut-network-poles.png" alt="" class="bottom-0 absolute z-1 md:hidden right-[147.82px]">
  <img src=" ./assets/images/network-poles.png" alt="" class="absolute z-1 hidden md:block top-0 right-[67px]">
 
  <img src="./assets/images/cut-3-network-poles.png" alt="" class="absolute z-1 hidden md:block bottom-0 right-0">
  <div class="md:w-[89px] h-[33.25px] w-[41.68px] md:h-[71px] bg-[#F9D003] z-1 absolute md:top-0 md:right-[481px] top-[300px] right-[169.36px]"></div>
  <div class="w-[89px] h-[71px]  absolute right-[481px] top-0 z-10"></div>
  <h1 class="absolute left-[59px] text-[2rem] md:left-[106px] font-extrabold md:text-[60px] md:top-[154px] top-[70px] leading-[1.3] font-dortmund z-1"><span>REPORTS</span>
</h1>
</header>




<div class="mx-auto">
    <div class="border md:font-black md:text-[36px] leading-[56.88px] md:pt-[71px] md:pb-[65px] py-[40px] bg-white md:mb-40 mb-20 text-center font-bold text-[30px]">Coming Soon...</div>
    <div class="md:hidden">
        <section class="rounded-2xl overflow-hidden w-full bg-[#034539]">
            <img src="./assets/images/girl-smiling-DpfNMwUb.png" alt="A dark girl on braid smiling" class="">
            <div class="flex flex-col items-center w-full px-6 sm:px-4 mb-24 mt-10">
                <div class="max-w-sm flex flex-col gap-y-8">
                    <h2 class="font-extrabold font-dortmund text-[40px] text-white leading-[0.9]">Enabling efficiency in power sector in Enugu State</h2>
                    <a class="py-[18px] px-[32px] rounded-xl bg-[#FC6D06] w-max leading-[1.3] font-red-hat font-bold inline-block text-white" href="/contact-us">Contact Us</a>
                </div>
            </div>
        </section>
    </div>
    <div class="hidden md:block">
        <article class="bg-[#034539] rounded-xl relative border flex flex-col md:flex-row">
            <div class="" style="opacity: 1; transform: none;">
                <img src="./assets/images/guy-wearing-helmet.png" alt="A confident young african builder crossing hands and wearing a helmet"></div>
                <div class="max-w-sm mx-auto flex flex-col items-start gap-y-6 justify-center">
                    <h2 class="font-extrabold font-dortmund text-[40px] text-white leading-[0.9]" style="opacity: 1; transform: none;">Enabling efficiency in power sector in Enugu State</h2>
                    <div style="opacity: 1;">
                        <a class="py-[18px] px-[32px] rounded-xl bg-[#FC6D06] leading-[1.3] font-red-hat font-bold inline-block text-white" href="/contact-us">Contact Us</a>
                    </div>
                </div>
            </article>
        </div>
    </div>

</section>
</main>



<!--=========FIND US ===========--->


<?php include 'footer.php' ?>

<script src="index.js">
</script>

</body>
</html>
