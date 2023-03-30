<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<!-- component -->
<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- Slider Component Container -->a
<div class="flex flex-col items-center justify-center" x-cloak x-dta="appData()" x-init="appInit() ">
    <div class="flex flex-col mt-[4.5rem]">
        <!-- Page Scroll Progress -->
        <div class="fixed inset-x-0 top-0 z-50 h-0.5 mt-0.5
            bg-[#64F5AB]" :style="`width: ${percent}%`"></div>

        <!-- Navbar -->
        <nav class="flex justify-around py-4 bg-[#2D2E32]
            shadow-white backdrop-blur-md shadow-sm w-full
            fixed top-0 left-0 right-0 z-10">

            <!-- Logo Container -->
            <div class="flex items-center">
                <!-- Logo -->
                <a class="cursor-pointer">
                    <h3  class="font-['Config_Condensed'] text-[28px]" id="logo">
                        <span class="text-white">Sud</span> <span class="text-[#DADADA]">Ulam</span> <span class="text-white">Cahyana</span>
                    </h3>
                </a>
            </div>

            <!-- Links Section -->
            <div class="font-['Config_Condensed'] tracking-wider items-center hidden space-x-8 lg:flex">
                <a class="flex text-white hover:text-[#64F5AB]
                    cursor-pointer transition-colors duration-300">
                    HOME
                </a>
                <a class="flex text-white
                    cursor-pointer transition-colors duration-300
                     text-[#38F696]">
                    ABOUT
                </a>

                <a class="flex text-white hover:text-[#64F5AB]
                    cursor-pointer transition-colors duration-300">
                    WORK
                </a>

                <a class="flex text-white hover:text-[#64F5AB]
                    cursor-pointer transition-colors duration-300">
                    CONTACT
                </a>

            </div>

            <!-- Icon Menu Section -->
            <div class="flex items-center space-x-5">
                <!-- Register -->
                <a class="flex text-gray-600 hover:text-[#64F5AB]
                    cursor-pointer transition-colors duration-300">

                    <svg class="fill-current h-5 w-5 mr-2 mt-0.5" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.07671 15.9678C9.78147 17.2254 11.1407 18.0078 13.4331 18.2243C13.1059 18.4683 12.7128 18.9315 12.6586 19.4671C12.2472 19.7287 11.42 19.8148 10.7767 19.6155C9.87538 19.3359 9.53026 17.5821 8.18075 17.8318C7.88839 17.8861 7.94647 18.0754 8.19914 18.2362C8.61058 18.4978 8.99781 18.825 9.29646 19.5218C9.5259 20.0569 10.008 21.013 11.5327 21.013C12.1378 21.013 12.5618 20.9416 12.5618 20.9416C12.5618 20.9416 12.5734 22.3072 12.5734 22.8381C12.5734 23.4502 11.7326 23.6229 11.7326 23.9173C11.7326 24.0338 12.011 24.0448 12.2346 24.0448C12.6765 24.0448 13.5962 23.6823 13.5962 23.0459C13.5962 22.5403 13.6044 20.8403 13.6044 20.543C13.6044 19.8928 13.9592 19.6869 13.9592 19.6869C13.9592 19.6869 14.0033 23.1577 13.8745 23.6229C13.7235 24.1699 13.451 24.0923 13.451 24.3364C13.451 24.6993 14.558 24.4253 14.9249 23.6286C15.2085 23.0083 15.0846 19.6036 15.0846 19.6036L15.3872 19.5975C15.3872 19.5975 15.4041 21.1562 15.3939 21.8687C15.3833 22.6064 15.3325 23.5396 15.7783 23.9796C16.0711 24.2688 17.0208 24.7763 17.0208 24.3126C17.0208 24.0429 16.5005 23.8212 16.5005 23.0916V19.7344C16.9158 19.7344 16.8533 20.8384 16.8533 20.8384L16.8838 22.8894C16.8838 22.8894 16.7923 23.6367 17.7062 23.9496C18.0286 24.0605 18.7188 24.0904 18.7513 23.9045C18.7837 23.718 17.9202 23.4407 17.9124 22.8618C17.9076 22.5089 17.9284 22.303 17.9284 20.769C17.9284 19.235 17.7188 18.668 16.9884 18.2162C19.2426 17.9883 20.6376 17.4403 21.3176 15.9725C21.3707 15.9742 21.5945 15.2869 21.5655 15.2871C21.7179 14.733 21.8002 14.0775 21.8167 13.3013C21.8128 11.1965 20.7876 10.4521 20.5906 10.1025C20.881 8.50912 20.5422 7.78376 20.3849 7.53499C19.804 7.33189 18.364 8.05725 17.5775 8.56858C16.2947 8.19995 13.5841 8.23562 12.5676 8.66371C10.692 7.34378 9.69967 7.54593 9.69967 7.54593C9.69967 7.54593 9.05832 8.6756 9.53026 10.3285C8.9131 11.1014 8.45326 11.6484 8.45326 13.0982C8.45326 13.9149 8.55104 14.6459 8.77176 15.2843C8.7447 15.2842 9.06779 15.968 9.07671 15.9678Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30 15C30 23.2842 23.2843 30 15 30C11.9276 30 9.07086 29.0762 6.69257 27.4914L23.88 2.90967C27.5915 5.64029 30 10.0389 30 15Z" fill="black" fill-opacity="0.08"/>
                    </svg>


                    Github
                </a>
                <a class="flex text-gray-600 hover:text-[#64F5AB]
                    cursor-pointer transition-colors duration-300">

                    <svg class="fill-current h-5 w-5 mr-2 mt-0.5" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.6635 0.0906181C2.07145 0.231304 1.48526 0.565432 1.02217 1.02266C0.55322 1.49747 0.277711 1.96642 0.113578 2.58779C0.00806375 3.00398 0.00220185 3.39673 0.00220185 14.974C-0.00366005 27.9815 -0.0212458 27.2664 0.318744 27.9991C0.652873 28.7318 1.29768 29.3708 2.02456 29.6932C2.78074 30.0273 2.04214 30.0097 15.1494 29.9921L27.2249 29.9804L27.6 29.8515C28.6962 29.4646 29.4641 28.6967 29.851 27.6005L29.98 27.2253L29.9917 15.1498C30.0093 1.73781 30.0386 2.74019 29.6107 1.87263C29.3234 1.28058 28.7314 0.688532 28.1276 0.389576C27.2718 -0.0324802 28.2448 -0.00317001 14.9735 0.00269127C4.82655 0.00855255 2.96246 0.0202751 2.6635 0.0906181ZM26.029 3.66051C26.5097 4.0005 26.5214 4.03568 26.539 6.26906C26.5566 8.44382 26.5449 8.55519 26.1873 8.90104C25.8649 9.21759 25.7125 9.23517 23.5905 9.22931L21.6561 9.22345L21.3923 9.08276C21.2457 9.0007 21.0581 8.82484 20.9585 8.67243L20.7826 8.41451L20.7768 6.47422C20.7709 5.41322 20.7944 4.446 20.8237 4.33463C20.9057 4.00636 21.105 3.7543 21.4216 3.59603L21.7147 3.44948L23.7488 3.46707L25.777 3.48466L26.029 3.66051ZM16.1693 9.35241C18.4144 9.8155 20.1847 11.5975 20.6595 13.8661C20.7592 14.3409 20.7944 15.2964 20.724 15.7712C20.472 17.5766 19.3113 19.2356 17.7169 20.0855C17.2479 20.3376 16.5152 20.6072 16.1693 20.66C16.0579 20.6717 15.8235 20.7069 15.6476 20.7362C14.9207 20.8417 14.0356 20.7479 13.2208 20.4841C12.0719 20.109 11.134 19.4407 10.4188 18.497C8.80091 16.3515 8.84195 13.4792 10.5302 11.3748C11.4505 10.22 12.9394 9.41103 14.399 9.27034C14.9969 9.21172 15.6183 9.24104 16.1693 9.35241ZM5.96375 13.1568C5.54756 15.0912 5.83479 17.307 6.73753 19.1066C7.2182 20.0621 7.69302 20.7128 8.49023 21.5158C10.6122 23.6378 13.467 24.5699 16.4683 24.1185C19.9971 23.5968 23.0512 20.8183 23.9363 17.3187C24.2177 16.1932 24.2881 15.2729 24.1767 14.0361C24.1415 13.6199 23.995 12.8637 23.9363 12.7699C23.9188 12.7406 23.9246 12.7171 23.9539 12.7113C24.1767 12.6878 26.457 12.6937 26.498 12.723C26.5332 12.7406 26.5449 15.3433 26.539 19.2649L26.5214 25.7774L26.3456 26.0295C26.2459 26.1702 26.0583 26.3343 25.9059 26.4164L25.6422 26.5512L14.9383 26.5336L4.24036 26.5219L4.00002 26.3636C3.87106 26.2757 3.70106 26.1057 3.62486 25.9826L3.48417 25.7598L3.46659 19.2825C3.46072 15.7184 3.46072 12.7816 3.47831 12.7464C3.49003 12.7113 3.96485 12.6878 4.78551 12.6878H6.06927L5.96375 13.1568Z" fill="black"/>
                    </svg>


                    Instagram
                </a>
                <a class="flex text-gray-600 hover:text-[#64F5AB]
                    cursor-pointer transition-colors duration-300">

                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="20" fill="#25262A"/>
                        <path d="M31 14.8438L20 21.6797L9 14.8438V12.1094L20 18.9453L31 12.1094V14.8438ZM31 9.375H9C7.47375 9.375 6.25 10.5918 6.25 12.1094V28.5156C6.25 30.0258 7.48122 31.25 9 31.25H31C32.5188 31.25 33.75 30.0258 33.75 28.5156V12.1094C33.75 10.5918 32.5125 9.375 31 9.375Z" fill="#64F5AB"/>
                    </svg>
                </a>




            </div>
        </nav>
    </div>



</div>
<!-- Lhome -->
<div class="container-lg" id="home">
    <div class="w-full h-screen font-['Config_Condensed'] bg-[#2D2E32] flex flex-col md:flex-row items-center justify-between px-5 self-center ">
            <div class="w-full lg:w-1/2 mx-8">
                <div class="BE w-[190px] h-[30px] bg-[#38F696] rounded hover:w-[200px] hover:h-[40px] hover:justify-content-center">
                    <a class="px-4 py-3  text-black text-[20px] font-semibold " href="#">Back-End Developer</a>
                </div>
                <p class="text-[64px] font-bold font-['Cousine'] text-white">Talk is cheap.
                    <br>Show me the code</p>
                <p class="font-['Cousine'] mt-2 text-[#898A91]">I design and code beutifully simple things,
                    <br>and I love what I do. </p>
            </div>
            <div class="w-full lg:flex lg:justify-end lg:w-1/2 mx-[250px] my-12 justify-self-start" >
                <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
            </div>
        <div class="absolute absolute bottom-[0] flex justify-start place-content-center ">

            <div id="number" class="font-['Cousine'] text-white text-[72px] self-end hover:text-[75px] ">2</div>
            <div class="font-['Cousine'] text-[#898A91] text-[20px] self-end mb-[25px] ml-[10px] hover:text-[#38F696]">years
                <br>exprience</div>

            <div class="font-['Cousine'] text-white text-[72px] self-end ml-[100px] hover:text-[75px]">4</div>
            <div class="font-['Cousine'] text-[#898A91] text-[20px] self-end mb-[25px] mx-[10px] hover:text-[#38F696]">project completed
                <br>under construction</div>
        </div>

    </div>
</div>

<!-- riwayat hitup -->
<div class="container-lg">
    <div class="w-full h-screen font-['Config_Condensed'] bg-[#25262A] ">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">


            <div class="relative my-[170px]">
                <div class="flex flex-col gap-[17px]">
                    <div>
                        <a href="#" class="flex flex-col items-center bg-[#2D2E31] border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a></div>
                    <div>
                        <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a></div>
                    <div>
                        <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a></div>
                </div>



                <div class="flex justify-center lg:justify-start mt-6">
                    <p class="text-[64px] font-bold font-['Cousine'] text-white">Talk is cheap.
                        <br>Show me the code</p>
                    <p class="font-['Cousine'] mt-2 text-[#898A91]">I design and code beutifully simple things,
                        and I love what I do. </p>
                </div>

            </div>

        </div>
    </div>

</div>
<div class="container-lg">
    <div class="w-full h-screen font-['Config_Condensed'] bg-[#25262A] ">
    </div>

</div>
<div class="container-lg">
    <div class="w-full h-screen font-['Config_Condensed'] bg-[#2D2E32] ">

    </div>

</div>
<div class="container-lg h-[512px]">
    <div class="w-full h-full font-['Config_Condensed'] bg-[#2D2E32] ">

    </div>

</div>
<div class="container-lg">
    <div class="w-full h-screen font-['Config_Condensed'] bg-[#25262A] ">
    </div>

</div>

<script>
    const appData = () => {
        return {
            percent: 0,

            appInit() {
                // source: https://codepen.io/A_kamel/pen/qBmmGKJ
                window.addEventListener('scroll', () => {
                    let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
                        height = document.documentElement.scrollHeight - document.documentElement.clientHeight;

                    this.percent = Math.round((winScroll / height) * 100);
                });
            },
        };
    };
</script>
</body>
</html>
