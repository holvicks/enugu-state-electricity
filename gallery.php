
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
<section>
<div class="app-container mt-10">
  <div class="bg-white rounded-xl p-8 md:p-24">
    <h2 class="font-dortmund font-extrabold text-[24px] leading-[21.6px] tracking-[-1.44px] md:text-[40px] md:leading-[36px] md:tracking-[-2.4px]">Pictures</h2>
    <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
      <img src="/images/gallery/gallery1-1.svg" alt="speaker" class="rounded-xl w-full h-full">
      <div class="flex flex-col gap-y-6">
        <img src="/images/gallery/gallery1-2.svg" alt="speaker" class="rounded-xl h-2/5 w-full aspect-square">
        <img src="/images/gallery/img1-4.jpg" alt="speaker" class="rounded-xl w-full hidden md:block h-3/5 object-cover"></div>
        <img src="/images/gallery/gallery1-3.svg" alt="speaker" class="rounded-xl w-full aspect-video hidden md:inline-flex h-full">
        <img src="/images/gallery/gallery1-4-mobile.svg" alt="speaker" class="rounded-xl w-full md:hidden">
      </div>
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
