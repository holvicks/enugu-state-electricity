
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
        'landing-opportunity': "url('./assets/images/backgrounds/opportunity-bg.svg')",
        'landing-describe': "url('./assets/images/backgrounds/describe.svg')",  
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

<!--======SECTION========-->
<section >
    <div class="video-background w-full relative  h-screen overflow-hidden" style="z-index: -1;">
        <video playsinline autoplay muted loop class="video-fill w-full h-full object-cover top-0 left-0" style="position:relative; z-index: -1;">
            <source src="./assets/videos/company.mp4" type="video/mp4">   
    </video>
    <div class="container py-20 text-overlay absolute inset-0 flex flex-col justify-center">
    <p class="text-white text-2xl font-dortmund max-w-lg font-extrabold text-[50px] leading-[1.3] tracking-[-3.5px]">Empowering Communities with Safe and Reliable Electricity</p>
    <p class="max-w-lg font-red-hat text-[20px] leading-[1.7] tracking-[-0.20px] text-white mt-4">Promoting transparency, fairness, and efficiency in the electricity sector.</p>
    </div>
    </div>
    </section>


<!--============Main section==============-->
<main class="bg-[#E7E7E7] pb-16">
    <div class="flex flex-col bg-no-repeat bg-left-top bg-cover w-full">
  <div class="mt-40 order-2 md:order-1 px-5 md:px-0">
          <div class="mx-auto text-center md:w-[60%]">
            <p class="text-black text-2xl font-dortmund  font-extrabold text-[40px] leading-[1.3] tracking-[-3.6px] md:text-[50px] md:leading-[1.3] md:tracking-[-4.5px]">Who we are</p>
            <p class="font-red-hat text-[16px] leading-[1.7] tracking-[-0.12px]  md:text-[20px] md:leading-[1.7] md:tracking-[-0.20px] text-black mt-5">The Enugu State Electricity Regulatory Commission (EERC) is an independent regulatory authority that is charged with the mandate for the regulation of electricity operations in Enugu State. The Commission was established under the Enugu State Electricity Law No. 1 of 2023, and has the responsibility for developing a commercially viable, sustainable and reliable electricity market that serves all the residents&nbsp;of&nbsp;Enugu&nbsp;State.
            </p>
          </div>
          <div class="container mt-11">
            <div class="bg-[#F2F2F2] rounded-2xl p-3 md:p-12 bg-landing-describe bg-no-repeat bg-left-top bg-cover w-full">
              <div class="grid grid-cols-1 rounded-2xl overflow-hidden md:grid-cols-2">
                <div class="min-h-[30rem] backdrop-blur-2xl p-10 pt-24 bg-[#FAFFF8E5] md:p-24">
                  <h3 class="font-dortmund font-extrabold text-[24px] leading-[1.3]">Governance</h3>
                  <p class="max-w-sm mt-4 font-red-hat font-normal text-[20px] leading-[1.7] tracking-[0.20px]">The Commission’s governance comprises four full time Commissioners and the Commission’s Secretary/ General&nbsp;Counsel.</p>
                  <div class="mt-4">
                    <div class="flex items-center space-x-2 p-0 cursor-pointer"><a class="font-bold font-red-hat text-[16px] leading-[1.7] tracking-[-0.16px]" href="/governance">Learn more</a><svg stroke="currentColor" fill="none" stroke-width="1px" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg"><path d="m9 18 6-6-6-6"></path></svg>
                    </div>
                  </div>
                </div>
                <div class="min-h-[30rem] backdrop-blur-2xl p-10 pt-24 bg-[#FFFFFFF2] md:p-24"><h3 class="font-dortmund font-extrabold text-[24px] leading-[1.3]">The History</h3>
                  <p class="max-w-sm mt-4 font-red-hat font-normal text-[20px] leading-[1.7] tracking-[0.20px]">In March 2023, former President Muhammadu Buhari signed 16 constitutional amendment bills into law, including the Constitution of the Federal Republic of Nigeria (Fifth Alteration) Bill, No. 33, 2022 (the Fifth&nbsp;Amendment).
                  </p>
                  <div class="mt-4">
                    <div class="flex items-center space-x-2 p-0 cursor-pointer">
                    <a class="font-bold font-red-hat text-[16px] leading-[1.7] tracking-[-0.16px]" href="/history">Learn more</a><svg stroke="currentColor" fill="none" stroke-width="1px" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg"><path d="m9 18 6-6-6-6"></path></svg>
                  </div>
                </div>
              </div>
              <div class="min-h-[30rem] backdrop-blur-2xl p-10 pt-24 bg-[#FFFFFFF2] md:p-24"><h3 class="font-dortmund font-extrabold text-[24px] leading-[1.3]">Our Mandate</h3>
                <p class="max-w-sm mt-4 font-red-hat font-normal text-[20px] leading-[1.7] tracking-[0.20px]">The Commission’s mandate is to establish a stable legal, commercial and technical regulatory framework for the provision of electricity to residents of the State by market participants that are licensed to operate in the Enugu State Electricity Market for the benefit of residents&nbsp;of&nbsp;the&nbsp;State.
                </p>
                <div class="mt-4">
                  <div class="flex items-center space-x-2 p-0 cursor-pointer">
                    <a class="font-bold font-red-hat text-[16px] leading-[16px] tracking-[-0.16px]" href="/mandate">Learn more</a><svg stroke="currentColor" fill="none" stroke-width="1px" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg"><path d="m9 18 6-6-6-6"></path></svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>
 
<div class="mt-40">
    <div class="container">
        <p class="text-black text-2xl font-dortmund max-w-lg font-extrabold text-[40px] leading-[1.3] tracking-[-3.6px] md:text-[50px] md:leading-[1.3] md:tracking-[-4.5px]" style="opacity: 1; transform: none;">Enugu State Electricity Regulatory Commission</p>
        <p class="max-w-lg font-red-hat text-[16px] leading-[1.7] tracking-[-0.12px]  md:text-[20px] md:leading-[1.7] text-black mt-5" style="opacity: 1; transform: none;">Explore the comprehensive set of regulations, codes, manuals and guidelines set forth by the Enugu State Electricity Regulatory Commission to ensure transparent and fair practices within the electricity sector.
        </p><div style="opacity: 1; transform: none;">
            <button class="inline-flex text-white items-center justify-center whitespace-nowrap rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-[#FC6d06] hover:bg-[#FC6d06]/90 h-10 mt-5 font-red-hat text-[16px] leading-[15.52px] tracking-[-0.64px] p-6 font-extrabold">Learn More
            </button>
        </div>
    
        <!--================code manual ============--->

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 lg:grid-cols-3 app-container mt-12">
                <div style="opacity: 1;"><div class="bg-white min-h-72 p-9 w-full rounded-xl relative">
                <div class="absolute bottom-12">
                    <img src="./assets/images/icons/barcode.svg" alt="codes" class=""><p class="font-dortmund font-extrabold text-[24px] leading-[1.7] tracking-[-1.68px] mt-4 max-w-44">Codes</p>
                </div>
                </div>
            </div>
            <div style="opacity: 1;"><div class="bg-white min-h-72 p-9 w-full rounded-xl relative">
            <div class="absolute bottom-12">
                <img src="./assets/images/icons/manual.svg" alt="codes" class="">
                <p class="font-dortmund font-extrabold text-[24px] leading-[1.7] tracking-[-1.68px] mt-4 max-w-44">Manual</p>
            </div>
            </div>
            </div>
            <div class="col-span-1 sm:col-span-2 md:col-span-1" style="opacity: 1;">
            <div class="bg-white min-h-72 p-9 w-full rounded-xl relative">
                <div class="absolute bottom-12">
                    <img src="./assets/images/icons/guideline.svg" alt="codes" class="">
                    <p class="font-dortmund font-extrabold text-[24px] leading-[1.7] tracking-[-1.68px] mt-4 max-w-44">Guidelines</p>
                </div>
            </div>
            </div>
        </div>
    
    
        <div class="grid grid-cols-1 md:grid-cols-2 app-container pt-6 gap-6">
        <div style="opacity: 1;">
            <div class="bg-white min-h-72 p-9 w-full rounded-xl relative">
            <div class="absolute bottom-12">
                <img src="./assets/images/icons/orders.svg" alt="codes" class="">
                <p class="font-dortmund font-extrabold text-[24px] leading-[1.7] tracking-[-1.68px] mt-4 max-w-44">Orders</p>
            </div>
            </div>
        </div>
        <div style="opacity: 1;"><div class="bg-white min-h-72 p-9 w-full rounded-xl relative">
            <div class="absolute bottom-12"><img src="./assets/images/icons/market.svg" alt="codes" class=""><p class="font-dortmund font-extrabold text-[24px] leading-[1.7] tracking-[-1.68px] mt-4 max-w-44">Market Documents</p>
            </div>
        </div>
        </div>
        </div>


        <!--=======Career========-->
<div class="mt-40 mx-auto w-full max-w-screen-2xl  ipad:px-12 mini:px-16 order-1 md:order-2">
  <div class="bg-landing-opportunity rounded-2xl bg-blend-soft-light bg-no-repeat bg-cover bg-center md:px-0">
    <div class="flex flex-col md:flex-row">
      <div class="w-full md:w-1/2 px-12 md:px-0">
        <div class="app-container pt-20 pb-9 md:py-44 md:pl-44">
          <p class="text-white text-2xl font-dortmund max-w-sm font-extrabold text-[40px] leading-[1.3] tracking-[-3.6px] md:text-[50px] md:leading-[1.3] md:tracking-[-4.5px]">Explore the vast opportunities</p>
          <p class="max-w-sm font-red-hat text-[16px] leading-[1.7] tracking-[-0.12px]  md:text-[20px] md:leading-[1.7] md:tracking-[-0.20px] text-white mt-5">At Enugu State Electricity Regulatory Commission (EERC), we are dedicated to ensuring the sustainable and reliable supply of electricity across the Enugu State</p>
          <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-[#FC6d06] text-primary-foreground hover:bg-[#FC6d06]/90 h-10 mt-5 font-red-hat text-[16px] leading-[15.52px] tracking-[-0.64px] p-6 font-extrabold">Contact Us</button>
        </div>
      </div>
      <div class="w-full md:w-1/2 relative">
      <img src="./assets/images/enginner.svg" alt="engneer" class="w-full md:absolute md:bottom-0 top-24 md:-left-20 hidden md:block">
      <img src="./assets/images/engineer-mobile.svg" alt="engineer" class="w-full md:-left-20 -top-16 md:hidden"/>
        <div class="absolute bottom-12 left-1/2 -translate-x-1/2 md:top-[45%] md:bottom-auto md:left-16 md:translate-x-0">
          <div class="backdrop-blur-md p-6 md:p-7 rounded-xl bg-white/10 w-max text-white font-dortmund text-[12.78px] leading-[11.5px] tracking-[−0.8946px]"><div class="text-white">
            <p class="">Efficient market</p>
            <p class="">structure</p>
          </div>
        </div>
      </div>
      <div class="absolute top-1/2 left-4 md:bottom-20 md:left-16 md:top-auto">
        <div class="backdrop-blur-md p-6 md:p-7 rounded-xl bg-white/10 w-max text-white font-dortmund text-[12.78px] leading-[11.5px] tracking-[−0.8946px]">
          <div class="text-white"><p class="">Investor-friendly</p>
            <p class="">framework</p>
          </div>
        </div>
      </div>
      <div class="absolute top-1/3 right-7 md:bottom-20 md:right-16 md:top-auto">
        <div class="backdrop-blur-md p-6 md:p-7 rounded-xl bg-white/10 w-max text-white font-dortmund text-[12.78px] leading-[11.5px] tracking-[−0.8946px]">
          <div class="text-white"><p class="">Safe and</p>
            <p class="">Adequate</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

        <!--======section=======-->

        <div class=" mt-10">
  <div class="app-container">
    <div class="md:hidden -translate-y-28 z-10">
      <section class="rounded-2xl overflow-hidden w-full bg-[#034539]">
     
      <img src="./assets/images/girl-smiling-DpfNMwUb.png" alt="A dark girl on braid smiling">
        <div class="w-[231px] mx-auto flex flex-col items-start gap-y-3 mb-24 mt-10">
          <h2 class="font-extrabold font-dortmund text-[40px] text-white leading-[0.9]">Enabling efficiency in power sector in Enugu State</h2><a class="py-[18px] px-[32px] rounded-xl bg-[#FC6D06] leading-[1.3] font-red-hat font-bold inline-block text-white" href="/contact-us">Contact Us</a>
        </div>
      </section>
    </div>
  </div>
  <div class="app-container">
    <div class="hidden md:block">
      <article class="bg-[#034539] rounded-xl relative">
        <div>
        <img src="./assets/images/girl-desktop.svg" alt="A confident young african builder crossing hands and wearing a helmet">
        </div>
        <div class="w-[315px] mx-auto flex flex-col items-start gap-y-3 absolute top-1/2 -translate-y-1/2 right-[7.814%]">
          <h2 class="font-extrabold font-dortmund text-[39px] text-white leading-[0.9]">Enabling efficiency in power sector in Enugu State</h2>
          <a class="py-[18px] px-[32px] rounded-xl bg-[#FC6D06] leading-[1.3] font-red-hat font-bold inline-block text-white" href="/contact-us">Contact Us</a>
        </div>
      </article>
    </div>
  </div>
</div>

    </div>
</div>
</main>

<?php include 'footer.php' ?>

<script src="index.js">
</script>

</body>
</html>
