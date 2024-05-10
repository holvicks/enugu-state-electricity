
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

<header class="bg-[#E7E7E733] backdrop-blur-md fixed shadow-sm w-full absolute" style="position:fixed; z-index:1;"> 
    <div class="flex items-center font-medium justify-between w-full px-0 md:px-10">
        <div class="md:px-0 p-5 md:w-auto w-full flex justify-between">
            <img src="./assets/images/logo.svg" alt="logo" class="scale-110 md:cursor-pointer h-9" id="logo" />
            <div class="text-2xl md:hidden" id="menu-toggle">
                <ion-icon name="menu"></ion-icon>
            </div>
        </div>
        <ul class="md:flex hidden items-center  lg:gap-4 md:gap-2 sm:gap-0 font-[Poppins]">
            <li class="font-redhat">
                <a href="/" class="py-7 px-3 inline-block">Home</a>
            </li>
            
            <!-- Main Navigation Container -->
    <!-- Main Menu Item -->
    <li class="font-redhat py-3 flex  justify-between items-center group cursor-pointer relative" id="about-us-toggle">
    About us
    <span class="text-xl hidden md:inline chevron">
        <div class="group">
        <ion-icon id="chevron-icon" name="chevron-down" class="transform duration-200 rotate-0 group-hover:rotate-180 mt-2" aria-hidden="false"></ion-icon>
        </div>
   
    </span>
    <ul class="hidden absolute left-0 min-w-[200px] rounded-lg p-7 top-full bg-white flex flex-col gap-6 transition-opacity duration-300" id="about-us-menu">
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/about">About Us</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/mandate">Our Mandate</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/governance">Governance</a></li>
</ul>
</li>
<!-- 2nd li -->
<li class="font-redhat  flex items-center group cursor-pointer relative" id="regulatory-toggle">
    <p>Regulatory Instrument</p>
    <span class="text-xl hidden md:inline chevron ">
        <div class="group">
        <ion-icon id="chevron-icon" name="chevron-down" class="transform duration-200 rotate-0 group-hover:rotate-180 mt-2" aria-hidden="false"></ion-icon>
        </div>
    </span>
    <ul class="hidden absolute left-0 min-w-[200px] rounded-lg p-7 top-full bg-white flex flex-col gap-6 transition-opacity duration-300" id="regulatory-menu">
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/about">Regulations</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/mandate">Codes</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/governance">Manuals</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/governance">Orders</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/governance">Standard and Rules</a></li>
</ul>
</li>

<!--#rd list-->
<li class="font-redhat py-3 flex items-center group cursor-pointer relative word-wrap" id="regulatory-toggle">
    Legal Instrument
</li>

<!--======Media========-->
<li class="font-redhat py-3  flex justify-between items-center group cursor-pointer relative" id="media-toggle">
    Media
    <span class="text-xl hidden md:inline chevron">
        <div class="group">
        <ion-icon id="chevron-icon" name="chevron-down" class="transform duration-200 rotate-0 group-hover:rotate-180 mt-2" aria-hidden="false"></ion-icon>
        </div>
   
    </span>
    <ul class="bg-[#F8F8F8] hidden absolute left-0 min-w-[300px] rounded-lg p-7 top-full
    grid grid-cols-2"
     id="media-menu">
    <div class="flex flex-col gap-5 transition-opacity duration-300">
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/about">News</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/mandate">Gallery</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/governance">Reports</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/governance">Factsheets</a></li>
    <li class="w-full"><a class="block whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm w-full text-left" href="/governance">FAQS</a></li>
    </div>

    <div class="flex flex-col gap-5 rounded-2xl bg-white p-3">
    <img src="./assets/images/media-dropdown.png" class="w-full rounded-lg"/>

    <div class="flex flex-col gap-y-3 mt-5">
    <p class="font-dortmund font-extrabold tracking-[-0.98px] leading-[14.7px] text-[14px] max-w-44">Enugu State Electricity Regulatory Commission Event</p>

    <p class="font-red-hat font-bold leading-[15px] tracking-[-0.36px] text-[12px]">12th March 2024</p>

    <a class="whitespace-nowrap hover:bg-gray-100 hover:text-gray-800 px-2 py-2 rounded-sm" data-radix-collection-item="" href="/events"><button class="inline-flex items-center text-white justify-center whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-[#FC6d06] text-primary-foreground hover:bg-primary/90 h-10 py-2 px-4 w-max font-red-hat text-[14px] leading-[13.58px] rounded-xl">Read More</button></a>
    </div>

    </div>

</ul>
</li>


    <!-- Dropdown Menu -->
    <div id="menu1" class="hidden absolute bg-white p-5 grid grid-cols-3 gap-10 top-full left-0 w-full">
        <div>
            <h1 class="text-lg font-semibold">Submenu 1</h1>
            <a href="#" class="block text-sm text-gray-600 my-2.5 hover:text-primary">Link 1</a>
            <a href="#" class="block text-sm text-gray-600 my-2.5 hover:text-primary">Link 2</a>
        </div>
    </div>
        </ul>

        <div class="md:block hidden">
            <a href="/contact-us"><button class="inline-flex text-white items-center justify-center whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground hover:bg-primary/90 h-10 bg-[#FC6d06] cursor-pointer rounded-lg font-bold text-[16px] leading-[15.52px] tracking-[-0.64px] font-red-hat px-8 py-7">Contact us</button></a>
        </div>

        <!-- =================================Mobile nav -->

        
        <ul id="mobile-nav" class="md:hidden bg-white absolute h-screen fixed w-full top-0  h-full bottom-0 py-24 pl-4 duration-500 hidden">
        <div class="md:px-0 py-5 md:w-auto w-full flex justify-between">
            <img src="./assets/images/logo.svg" alt="logo" class="scale-110 md:cursor-pointer h-9" id="logo" />
            <div class="text-2xl md:hidden mr-2" id="close-toggle">
                <ion-icon name="close"></ion-icon>
            </div>
            </div>
           
            <div class="w-full font-red-hat font-medium flex flex-col gap-y-5">
            <div class=""><a class="w-1/2 py-2 text-[20px]" type="button" href="/">Home</a></div> 
                <div>
                    <h3 class="flex">
                    <button id="open-menu" type="button" class="flex flex-1 items-center gap-x-4 py-4 font-medium transition-all svg]:rotate-180 text-[20px]" >About us<svg stroke="currentColor" fill="none" stroke-width="2px" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 transition-transform duration-200 rotate-about" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m6 9 6 6 6-6"></path></svg></button></h3>

                        <div id="open-content" role="region"  data-orientation="vertical" class="about-content overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width); --radix-collapsible-content-height: 192px; --radix-collapsible-content-width: 830px;"><div class="pb-4 pt-0"><ul class="flex flex-col gap-y-5 text-[16px] mt-7"><a type="button" class="w-1/2 py-2" href="/about">About Us</a><a type="button" class=" w-1/2 py-2" href="/mandate">Our Mandate</a><a type="button" class=" w-1/2 py-2" href="/governance">Governance</a></ul></div></div>
                </div>
                
                <div>
                    <h3 class="flex">
                    <button id="open-menu2" type="button" class="flex flex-1 items-center gap-x-4 py-4 font-medium transition-all svg]:rotate-180 text-[20px]" >Regulatory Instruments<svg stroke="currentColor" fill="none" stroke-width="2px" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 transition-transform duration-200 rotate-regulation" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m6 9 6 6 6-6"></path></svg></button></h3>

                        <div id="open-content" role="region"  data-orientation="vertical" class="regulation-content overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width); --radix-collapsible-content-height: 192px; --radix-collapsible-content-width: 830px;"><div class="pb-4 pt-0"><ul class="flex flex-col gap-y-5 text-[16px] mt-7"><a type="button" class="w-1/2 py-2" href="/about">Regulations</a><a type="button" class=" w-1/2 py-2" href="/mandate">Codes</a><a type="button" class=" w-1/2 py-2" href="/governance">Manuals</a><a type="button" class=" w-1/2 py-2" href="/governance">Orders</a><a type="button" class=" w-1/2 py-2" href="/governance">Standards and Rules</a></ul></div></div>
                </div>

                <div>
                    <h3 class="flex">
                    <button id="" type="button" class="flex flex-1 items-center gap-x-4 py-4 font-medium transition-all svg]:rotate-180 text-[20px]" >Legal Instrument</button></h3>

                </div>
        
                
<!--=======Media===========-->
                <div>
                    <h3 class="flex">
                    <button id="open-menu3" type="button" class="flex flex-1 items-center gap-x-4 py-4 font-medium transition-all svg]:rotate-180 text-[20px]" >Media<svg stroke="currentColor" fill="none" stroke-width="2px" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 transition-transform duration-200 rotate-media" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m6 9 6 6 6-6"></path></svg></button></h3>

                        <div id="open-content" role="region"  data-orientation="vertical" class="media-content overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width); --radix-collapsible-content-height: 192px; --radix-collapsible-content-width: 830px;"><div class="pb-4 pt-0"><ul class="flex flex-col gap-y-5 text-[16px] mt-7"><a type="button" class="w-1/2 py-2" href="/about">News</a><a type="button" class=" w-1/2 py-2" href="/mandate">Codes</a><a type="button" class=" w-1/2 py-2" href="/governance">Gallery</a><a type="button" class=" w-1/2 py-2" href="/governance">Reports</a><a type="button" class=" w-1/2 py-2" href="/governance">Factsheets</a><a type="button" class=" w-1/2 py-2" href="/governance">FAQS</a></ul></div></div>
                </div>

            
        
            <!-- Additional mobile links can be dynamically inserted here -->
            <div class="py-0">
            <button class="text-white inline-flex items-center justify-center whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 bg-[#FC6d06] text-primary-foreground hover:bg-primary/90 h-10 px-4 border-b w-1/2 mx-0 mt-8 mb-10 font-bold text-[16px] leading-[15.52px] tracking-[-0.64px] py-4 rounded-lg font-red-hat" type="button">Contact us</button>
            </div>
</ul>
    </div>
</header>

<!--======SECTION========-->
<section>
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

<footer class="bg-[#034539] grid gap-y-[46px] bg-gradient-to-b px-10 md:px-[10.417%] pb-[60px] pt-[90px]">
  <section class="flex flex-col gap-y-[98px] md:flex-row gap-x-[8.61%]">
    <div class="text-20 font-red-hat text-white grid gap-y-[14px] md:max-w-[377px]"><div class="bg-white w-fit"><img src="/images/logo.svg" alt="logo" class="scale-110">
    </div>
    <p>Enugu State Electricity Regulatory Commission (EERC), is ensuring reliable and sustainable energy for all residents in Enugu State. Together, we illuminate the path to a brighter&nbsp;future.</p>
    <p>You can contact us at: </p>
    <address class="not-italic grid gap-y-4">
      <p class="flex gap-x-2">
        <span class="w-6 h-6">
          <svg stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" class="mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21">
            </path>
          </svg>
        </span>
        <span>No 2 Forest Close, Off Forest Crescent, GRA, Enugu, Enugu State, Nigeria.</span>
      </p>
      <a class="underline hover:text-linen transition duration-150 w-fit flex gap-x-2 items-center" href="mailto:“info@eerc.en.gov.ng”">
        <span class="w-6 h-6">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.75 3h20.5c.966 0 1.75.784 1.75 1.75v14a1.75 1.75 0 0 1-1.75 1.75H1.75A1.75 1.75 0 0 1 0 18.75v-14C0 3.784.784 3 1.75 3ZM1.5 7.412V18.75c0 .138.112.25.25.25h20.5a.25.25 0 0 0 .25-.25V7.412l-9.52 6.433c-.592.4-1.368.4-1.96 0Zm0-2.662v.852l10.36 7a.25.25 0 0 0 .28 0l10.36-7V4.75a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25Z">
            </path>
          </svg>
        </span>info@eerc.en.gov.ng</a>
        <a class="flex gap-x-2" href="/">
          <span class="w-6 h-6">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="mt-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path fill="none" d="M0 0h24v24H0V0z"></path>
              <path d="M16 1H8C6.34 1 5 2.34 5 4v16c0 1.66 1.34 3 3 3h8c1.66 0 3-1.34 3-3V4c0-1.66-1.34-3-3-3zm1 17H7V4h10v14zm-3 3h-4v-1h4v1z">
              </path>
            </svg>
          </span>
          <span>07072051569</span>
        </a>
      </address>
    </div>
    <div class="flex flex-col gap-y-[57px] font-jakarta md:flex-row md:justify-between grow">
      <ul class="text-16 text-white flex flex-col gap-y-[23px]">
        <li class="font-bold text-[#ebc032]">Links</li>
        <li>
          <a class="hover:text-[#ebc032] transition duration-300" href="/">Home</a>
        </li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/resources">Resources</a></li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/gallery">Media</a></li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/regulatory-instrument">Regulatory Instruments</a></li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/contact-us">Contact Us</a></li>
      </ul>
      <ul class="text-16 text-white flex flex-col gap-y-[23px]">
        <li class="font-bold text-[#ebc032]">About us</li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/mandate">Our Mandate</a></li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/governance">Governance</a></li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/role">Our Role</a></li>
      </ul>
      <ul class="text-16 text-white flex flex-col gap-y-[23px]">
        <li class="font-bold text-[#ebc032]">Others</li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/legal-instruments">Legal Instruments</a></li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/blog">Blog</a></li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/news">News</a></li>
        <li><a class="hover:text-[#ebc032] transition duration-300" href="/events">Events</a></li>
      </ul>
    </div>
  </section>
  <div class="border-t border-white"></div>
  <section class="flex flex-col gap-y-[22px] text-white md:flex-row md:justify-between">
    <div>
      <div class="flex items-center gap-x-2">
        <a class="text-sm hover:underline duration-300 transition ease-out" href="https://eerc.en.gov.ng/eerc_assets/documents/Enugu-State-Electricity-Policy-Final.signed.pdf">Privacy Policy</a>
        <span>|</span>
        <p class="flex items-center gap-x-1 text-sm"><span>©</span><span>Copyright EERC 2024</span></p>
      </div>
      <p class="text-sm">All right reserved</p>
    </div>
    <div class="flex items-center gap-x-[22px] md:flex-row md:gap-x-[20.84px]">
      <svg width="12" height="21" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.4238 11.7208L11.0021 7.95015H7.38488V5.50256C7.35965 5.22119 7.39798 4.93776 7.49703 4.6732C7.59608 4.40864 7.75331 4.16971 7.95711 3.97409C8.16091 3.77847 8.40607 3.63115 8.67447 3.54301C8.94286 3.45488 9.22763 3.42819 9.50773 3.46491H11.1525V0.254581C10.1878 0.0987947 9.21295 0.0137077 8.23582 0C5.25601 0 3.30756 1.80412 3.30756 5.07559V7.95015H0V11.7208H3.30756V20.8416H7.38488V11.7208H10.4238Z" fill="white">
        </path>
      </svg>
      <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18.7963 4.21373C18.8093 4.39915 18.8093 4.58357 18.8093 4.769C18.8204 6.36774 18.5137 7.95274 17.9069 9.43193C17.3002 10.9111 16.4056 12.255 15.2751 13.3855C14.1446 14.516 12.8007 15.4106 11.3215 16.0173C9.84233 16.6241 8.25732 16.9308 6.65857 16.9197C4.33352 16.9257 2.05625 16.2598 0.100586 15.0024C0.443042 15.0402 0.787416 15.0579 1.13194 15.0555C3.05409 15.0605 4.92189 14.4179 6.43406 13.2313C5.54274 13.2151 4.67876 12.9209 3.96283 12.3897C3.24691 11.8585 2.71483 11.1169 2.44093 10.2685C2.70619 10.3106 2.97421 10.3327 3.24277 10.3347C3.62191 10.3336 3.9994 10.2848 4.36633 10.1894C3.40021 9.99293 2.53181 9.46829 1.90847 8.70447C1.28514 7.94065 0.945261 6.98469 0.946519 5.9988V5.94568C1.53828 6.276 2.19973 6.46179 2.87693 6.48792C1.97013 5.88337 1.32833 4.95544 1.08263 3.89365C0.836927 2.83185 1.00585 1.71632 1.55491 0.774879C2.6275 2.0952 3.96562 3.17534 5.4825 3.94526C6.99938 4.71518 8.66114 5.15768 10.36 5.24408C10.2913 4.92248 10.2557 4.5947 10.2538 4.26585C10.2556 3.4102 10.5141 2.57479 10.9959 1.86769C11.4777 1.16058 12.1606 0.614343 12.9563 0.299638C13.752 -0.0150665 14.6238 -0.0837514 15.4589 0.10247C16.294 0.288692 17.0541 0.721251 17.6407 1.34418C18.5956 1.1595 19.5112 0.810539 20.3469 0.312824C20.0285 1.29967 19.361 2.13644 18.4696 2.6662C19.3178 2.56956 20.1469 2.34659 20.9292 2.00469C20.3442 2.85486 19.6201 3.60032 18.7873 4.20972L18.7963 4.21373Z" fill="white">
        </path>
      </svg>
      <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.7928 0.82925C11.4602 0.826689 12.1276 0.833397 12.7947 0.84937L12.9721 0.855771C13.177 0.863087 13.3791 0.872232 13.6233 0.883207C14.5963 0.928932 15.2603 1.08257 15.8428 1.30846C16.4464 1.54074 16.9549 1.85534 17.4633 2.36381C17.9282 2.82071 18.2881 3.37339 18.5178 3.98342C18.7436 4.56596 18.8973 5.23082 18.943 6.20386C18.954 6.44712 18.9631 6.65015 18.9704 6.855L18.9759 7.03241C18.9922 7.69927 18.9992 8.36632 18.997 9.03337L18.9979 9.7156V10.9136C19.0001 11.581 18.9931 12.2483 18.9768 12.9155L18.9714 13.0929C18.964 13.2978 18.9549 13.4999 18.9439 13.744C18.8982 14.7171 18.7427 15.381 18.5178 15.9636C18.2888 16.5743 17.9289 17.1274 17.4633 17.5841C17.006 18.049 16.4531 18.4088 15.8428 18.6385C15.2603 18.8644 14.5963 19.0181 13.6233 19.0638C13.3791 19.0748 13.177 19.0839 12.9721 19.0912L12.7947 19.0967C12.1276 19.113 11.4602 19.12 10.7928 19.1177L10.1106 19.1187H8.91351C8.24615 19.1209 7.5788 19.1139 6.91164 19.0976L6.73422 19.0921C6.51712 19.0843 6.30007 19.0751 6.08308 19.0647C5.11004 19.019 4.4461 18.8635 3.86264 18.6385C3.25237 18.4093 2.69959 18.0494 2.24303 17.5841C1.77758 17.1271 1.41743 16.5741 1.18768 15.9636C0.961794 15.381 0.808156 14.7171 0.76243 13.744C0.752245 13.527 0.7431 13.31 0.734994 13.0929L0.730422 12.9155C0.713562 12.2483 0.70594 11.581 0.707559 10.9136V9.03337C0.705007 8.36633 0.711714 7.69928 0.727678 7.03241L0.73408 6.855C0.741396 6.65015 0.750541 6.44712 0.761515 6.20386C0.807241 5.2299 0.96088 4.56688 1.18677 3.98342C1.41665 3.37309 1.77751 2.82056 2.24395 2.36472C2.70019 1.89901 3.25262 1.53852 3.86264 1.30846C4.4461 1.08257 5.10912 0.928932 6.08308 0.883207L6.73422 0.855771L6.91164 0.851199C7.57849 0.834347 8.24554 0.826725 8.9126 0.828336L10.7928 0.82925ZM9.85272 5.40183C9.24686 5.39326 8.64534 5.50519 8.08311 5.73112C7.52088 5.95704 7.00917 6.29246 6.5777 6.71787C6.14623 7.14328 5.80361 7.6502 5.56975 8.20918C5.3359 8.76815 5.21548 9.36803 5.21548 9.97395C5.21548 10.5799 5.3359 11.1798 5.56975 11.7387C5.80361 12.2977 6.14623 12.8046 6.5777 13.23C7.00917 13.6554 7.52088 13.9909 8.08311 14.2168C8.64534 14.4427 9.24686 14.5546 9.85272 14.5461C11.0654 14.5461 12.2285 14.0643 13.086 13.2068C13.9435 12.3493 14.4253 11.1862 14.4253 9.9735C14.4253 8.76077 13.9435 7.59772 13.086 6.74019C12.2285 5.88267 11.0654 5.40183 9.85272 5.40183ZM9.85272 7.23086C10.2172 7.22415 10.5793 7.29012 10.9179 7.42493C11.2566 7.55974 11.565 7.76068 11.8251 8.01602C12.0853 8.27135 12.2919 8.57596 12.433 8.91206C12.5741 9.24815 12.6468 9.60898 12.6468 9.97349C12.6469 10.338 12.5743 10.6989 12.4333 11.035C12.2924 11.3711 12.0858 11.6758 11.8258 11.9312C11.5657 12.1867 11.2574 12.3877 10.9188 12.5226C10.5802 12.6575 10.2181 12.7236 9.85363 12.717C9.126 12.717 8.42817 12.428 7.91365 11.9135C7.39914 11.399 7.11009 10.7011 7.11009 9.9735C7.11009 9.24586 7.39914 8.54803 7.91365 8.03351C8.42817 7.519 9.126 7.22995 9.85363 7.22995L9.85272 7.23086ZM14.6539 4.03006C14.3589 4.04186 14.0799 4.16737 13.8753 4.38029C13.6707 4.59321 13.5565 4.87702 13.5565 5.17229C13.5565 5.46755 13.6707 5.75137 13.8753 5.96428C14.0799 6.1772 14.3589 6.30271 14.6539 6.31452C14.9571 6.31452 15.2479 6.19408 15.4623 5.9797C15.6766 5.76532 15.7971 5.47455 15.7971 5.17137C15.7971 4.86819 15.6766 4.57743 15.4623 4.36305C15.2479 4.14867 14.9571 4.02823 14.6539 4.02823V4.03006Z" fill="white">

        </path>
      </svg>
    </div>
  </section>
  commiy
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.getElementById('menu-toggle');
    var closeToggle = document.getElementById('close-toggle');
    var mobileNav = document.getElementById('mobile-nav');
    var menuIcon = menuToggle.querySelector('ion-icon');

    // Toggle the mobile navigation visibility and update icon
    function toggleNavigation() {
        mobileNav.classList.toggle('hidden');
        if (mobileNav.classList.contains('hidden')) {
            menuIcon.setAttribute('name', 'menu'); // Set icon to menu when hidden
        } else {
            menuIcon.setAttribute('name', 'close'); // Set icon to close when shown
        }
    }

    menuToggle.addEventListener('click', toggleNavigation);
    closeToggle.addEventListener('click', toggleNavigation);
});



document.addEventListener('DOMContentLoaded', function() {
    var aboutUsToggle = document.getElementById('about-us-toggle');
    var aboutUsMenu = document.getElementById('about-us-menu');
    var regulatoryToggle = document.getElementById('regulatory-toggle'); 
    var regulatoryMenu = document.getElementById('regulatory-menu');
    var mediaToggle = document.getElementById('media-toggle'); 
    var mediaMenu = document.getElementById('media-menu');

    aboutUsToggle.addEventListener('mouseover', function() {
        aboutUsMenu.classList.remove('hidden');
    });
    aboutUsToggle.addEventListener('mouseleave', function() {
        aboutUsMenu.classList.add('hidden');    
    });
    regulatoryToggle.addEventListener('mouseover', function() {
        regulatoryMenu.classList.remove('hidden');
    });
    regulatoryToggle.addEventListener('mouseleave', function() {
        regulatoryMenu.classList.add('hidden'); 
    });
    mediaToggle.addEventListener('mouseover', function() {
        mediaMenu.classList.remove('hidden');
    });
    mediaToggle.addEventListener('mouseleave', function() {
        mediaMenu.classList.add('hidden'); 
    });


});


let openMenu = false;
const rotateIcon = document.querySelector(".rotate-about");
const rotateIcon2 = document.querySelector(".rotate-regulation");
const rotateIcon3 = document.querySelector(".rotate-media");
const buttonMenu = document.getElementById("open-menu");
const buttonMenu2 = document.getElementById("open-menu2");
const buttonMenu3 = document.getElementById("open-menu3");

buttonMenu.addEventListener("click", function() {
    if (!openMenu) {
        document.querySelector(".about-content").style.display = "block";
        rotateIcon.style.transform = "rotate(-180deg)"; // Correctly applying a rotation transformation
        openMenu = true;
    } else {
        document.querySelector(".about-content").style.display = "none";
        rotateIcon.style.transform = "rotate(0deg)"; // Resetting the rotation
        openMenu = false;
    }
});

buttonMenu2.addEventListener("click", function() {
    if (!openMenu) {
        document.querySelector(".regulation-content").style.display = "block";
        rotateIcon2.style.transform = "rotate(-180deg)"; // Correctly applying a rotation transformation
        openMenu = true;
    } else {

        document.querySelector(".regulation-content").style.display = "none";
        rotateIcon2.style.transform = "rotate(0deg)"; // Resetting the rotation
        openMenu = false;
    }
});

buttonMenu3.addEventListener("click", function() {
    if (!openMenu) {
        document.querySelector(".media-content").style.display = "block";
        rotateIcon3.style.transform = "rotate(-180deg)"; // Correctly applying a rotation transformation
        openMenu = true;
    } else {

        document.querySelector(".media-content").style.display = "none";
        rotateIcon3.style.transform = "rotate(0deg)"; // Resetting the rotation
        openMenu = false;
    }
});
</script>

</body>
</html>
