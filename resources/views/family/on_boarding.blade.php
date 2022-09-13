
@extends('family.layoutFamily.main')
@section('container')
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <main>
        <article class="pb-[207px]">
            <nav class="bg-white h-16 flex items-center fixed w-[1400px] xl:w-full z-20 top-0 left-0 border-b border-gray-200">
                <div class="flex w-full px-20 flex-wrap justify-between items-center mx-auto">
                    <svg width="64" height="32" viewBox="0 0 64 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.6543 18.5202H3.46737V27.2359H1.6543V18.5202Z" fill="#394149"/>
                        <path d="M4.5187 24.2497C4.5175 23.6237 4.70576 23.0113 5.05965 22.4902C5.41354 21.9691 5.91714 21.5627 6.50675 21.3223C7.09632 21.0819 7.74541 21.0184 8.37184 21.1398C8.99827 21.2612 9.57389 21.5621 10.0258 22.0044C10.4778 22.4466 10.7857 23.0104 10.9107 23.6243C11.0358 24.2382 10.9722 24.8747 10.7281 25.4532C10.484 26.0316 10.0704 26.5261 9.53952 26.874C9.0087 27.222 8.38451 27.4077 7.74598 27.4077C7.32128 27.4125 6.89997 27.3341 6.50662 27.1771C6.11329 27.0202 5.75586 26.7878 5.45529 26.4937C5.15472 26.1996 4.91706 25.8496 4.75623 25.4642C4.5954 25.0789 4.51465 24.666 4.5187 24.2497ZM9.14803 24.2497C9.14093 23.9794 9.05267 23.7172 8.89433 23.4959C8.736 23.2745 8.51462 23.1039 8.25785 23.0053C8.00109 22.9067 7.72038 22.8845 7.45088 22.9415C7.18131 22.9985 6.93491 23.1321 6.7424 23.3257C6.54995 23.5192 6.41997 23.7642 6.36873 24.0299C6.3175 24.2955 6.34731 24.57 6.4544 24.8191C6.56154 25.0682 6.74118 25.2809 6.97088 25.4304C7.20064 25.5799 7.47021 25.6597 7.74598 25.6598C7.93459 25.665 8.1223 25.6318 8.29722 25.5623C8.47213 25.4928 8.63046 25.3885 8.76224 25.256C8.89395 25.1235 8.99629 24.9656 9.06266 24.7925C9.12909 24.6192 9.15814 24.4344 9.14803 24.2497Z" fill="#394149"/>
                        <path d="M18.2624 21.2634V26.9396C18.2624 28.9482 16.6608 29.7955 15.0412 29.7955C14.4716 29.8371 13.9014 29.7241 13.3929 29.4691C12.8844 29.2141 12.4574 28.8269 12.1584 28.3498L13.7176 27.467C13.8414 27.7114 14.0371 27.9139 14.2796 28.0481C14.522 28.1822 14.8 28.2419 15.0775 28.2194C15.26 28.2493 15.4471 28.2376 15.6244 28.1853C15.8017 28.133 15.9643 28.0415 16.0998 27.9179C16.2352 27.7942 16.3399 27.6417 16.4058 27.4721C16.4716 27.3025 16.4968 27.1203 16.4795 26.9396V26.3886C16.2664 26.6457 15.9944 26.8499 15.6857 26.9848C15.377 27.1196 15.0403 27.1813 14.7027 27.1648C13.8821 27.1648 13.0951 26.8452 12.5147 26.2763C11.9344 25.7074 11.6084 24.9357 11.6084 24.1311C11.6084 23.3266 11.9344 22.555 12.5147 21.9861C13.0951 21.4172 13.8821 21.0975 14.7027 21.0975C15.0401 21.0824 15.3763 21.1447 15.6848 21.2794C15.9933 21.4142 16.2654 21.6177 16.4795 21.8737V21.2812L18.2624 21.2634ZM16.4795 24.1311C16.4916 23.843 16.4154 23.5579 16.2609 23.3124C16.1064 23.067 15.8805 22.8725 15.6124 22.754C15.3442 22.6354 15.046 22.5982 14.756 22.6472C14.4661 22.696 14.1978 22.8289 13.9855 23.0285C13.7731 23.2281 13.6266 23.4854 13.5646 23.7673C13.5026 24.0493 13.5281 24.343 13.6377 24.6106C13.7473 24.8782 13.9361 25.1076 14.1797 25.2692C14.4234 25.4309 14.7107 25.5174 15.0049 25.5176C15.1969 25.5309 15.3896 25.5047 15.5706 25.4405C15.7517 25.3763 15.917 25.2757 16.056 25.1451C16.1948 25.0145 16.3043 24.8567 16.3773 24.6821C16.4503 24.5075 16.4851 24.3198 16.4795 24.1311Z" fill="#394149"/>
                        <path d="M19.3078 24.2497C19.3065 23.6237 19.4948 23.0113 19.8487 22.4902C20.2026 21.9691 20.7062 21.5627 21.2958 21.3223C21.8854 21.0819 22.5345 21.0184 23.1609 21.1398C23.7873 21.2612 24.3629 21.5621 24.8149 22.0044C25.2668 22.4466 25.5748 23.0104 25.6998 23.6243C25.8248 24.2382 25.7613 24.8747 25.5172 25.4532C25.2731 26.0316 24.8594 26.5261 24.3286 26.874C23.7977 27.222 23.1736 27.4077 22.535 27.4077C22.1104 27.4125 21.689 27.3341 21.2957 27.1771C20.9023 27.0202 20.5449 26.7878 20.2443 26.4937C19.9438 26.1996 19.7061 25.8496 19.5453 25.4642C19.3844 25.0789 19.3037 24.666 19.3078 24.2497ZM23.9371 24.2497C23.93 23.9794 23.8417 23.7172 23.6834 23.4959C23.525 23.2745 23.3037 23.1039 23.0469 23.0053C22.7902 22.9067 22.5095 22.8845 22.2399 22.9415C21.9704 22.9985 21.724 23.1321 21.5314 23.3257C21.339 23.5192 21.209 23.7642 21.1577 24.0299C21.1065 24.2955 21.1364 24.57 21.2434 24.8191C21.3506 25.0682 21.5302 25.2809 21.7599 25.4304C21.9897 25.5799 22.2593 25.6597 22.535 25.6598C22.7227 25.6633 22.909 25.6289 23.0825 25.5587C23.256 25.4884 23.4129 25.3838 23.5433 25.2515C23.6737 25.1192 23.7749 24.9619 23.8406 24.7896C23.9063 24.6172 23.935 24.4334 23.925 24.2497H23.9371Z" fill="#394149"/>
                        <path d="M26.6025 19.6637C26.6025 19.4504 26.6671 19.2419 26.7879 19.0646C26.9088 18.8873 27.0806 18.7491 27.2815 18.6674C27.4825 18.5858 27.7037 18.5645 27.917 18.6061C28.1304 18.6477 28.3264 18.7504 28.4802 18.9011C28.6341 19.052 28.7388 19.2441 28.7812 19.4533C28.8237 19.6625 28.8019 19.8793 28.7187 20.0764C28.6354 20.2734 28.4944 20.4419 28.3136 20.5603C28.1327 20.6788 27.92 20.742 27.7024 20.742C27.4112 20.7405 27.1324 20.6264 26.9264 20.4245C26.7205 20.2226 26.6041 19.9492 26.6025 19.6637ZM26.7899 21.2634H28.6029V27.2359H26.7899V21.2634Z" fill="#394149"/>
                        <path d="M36.5077 24.2497C36.5296 24.6445 36.4718 25.0396 36.3374 25.4124C36.2029 25.7852 35.9946 26.1282 35.7244 26.4217C35.4542 26.7152 35.1275 26.9535 34.763 27.1227C34.3985 27.2919 34.0035 27.3888 33.6007 27.4078C33.2625 27.4236 32.9249 27.3667 32.6117 27.2407C32.2984 27.1148 32.0171 26.923 31.7877 26.679V29.6415H29.9746V21.2634H31.7877V21.8263C32.0171 21.5822 32.2984 21.3905 32.6117 21.2646C32.9249 21.1386 33.2625 21.0817 33.6007 21.0975C34.003 21.1165 34.3975 21.2132 34.7616 21.382C35.1256 21.5509 35.4521 21.7886 35.7222 22.0815C35.9923 22.3744 36.2007 22.7167 36.3355 23.0888C36.4704 23.4608 36.5288 23.8554 36.5077 24.2497ZM34.6946 24.2497C34.6874 23.9716 34.5972 23.7016 34.4351 23.4733C34.273 23.2451 34.0462 23.0683 33.7827 22.9651C33.5192 22.8619 33.2305 22.8368 32.9527 22.8928C32.6747 22.9488 32.4196 23.0835 32.219 23.2802C32.0183 23.4769 31.881 23.7269 31.8238 23.9994C31.7667 24.2719 31.7924 24.5549 31.8976 24.8132C32.0029 25.0715 32.1831 25.2939 32.416 25.4528C32.6489 25.6117 32.9242 25.7002 33.2079 25.7072C33.4058 25.7196 33.6042 25.6902 33.7896 25.6212C33.9751 25.5521 34.1432 25.445 34.283 25.3069C34.4226 25.1688 34.5306 25.003 34.5995 24.8207C34.6684 24.6384 34.6967 24.4437 34.6825 24.2497H34.6946Z" fill="#394149"/>
                        <path d="M42.1522 25.4465C42.1522 26.8211 40.9435 27.4077 39.6139 27.4077C39.0828 27.4538 38.5497 27.343 38.0833 27.0896C37.617 26.8361 37.2387 26.4517 36.9971 25.9857L38.5805 25.1029C38.6447 25.3184 38.7823 25.5059 38.9703 25.6341C39.1583 25.7624 39.3854 25.8237 39.6139 25.8079C40.0551 25.8079 40.2727 25.6717 40.2727 25.4347C40.2727 24.777 37.2509 25.1266 37.2509 23.0647C37.2509 21.7611 38.375 21.1034 39.6683 21.1034C40.1455 21.0893 40.618 21.2004 41.0367 21.4254C41.4554 21.6504 41.805 21.9812 42.0495 22.3832L40.46 23.2009C40.3898 23.0445 40.2748 22.9113 40.1288 22.8177C39.9829 22.7241 39.8125 22.674 39.6381 22.6736C39.3239 22.6736 39.1304 22.7921 39.1304 23.0113C39.1546 23.6927 42.1522 23.2365 42.1522 25.4465Z" fill="#394149"/>
                        <path d="M48.8243 21.2634V27.2359H47.0111V26.679C46.8003 26.9264 46.5326 27.1214 46.2301 27.2481C45.9276 27.3748 45.5988 27.4295 45.2706 27.4077C44.0619 27.4077 42.9922 26.5486 42.9922 24.9311V21.2634H44.8052V24.6704C44.7893 24.8156 44.8066 24.9624 44.8557 25.1002C44.9049 25.2381 44.9847 25.3635 45.0895 25.4673C45.1942 25.5711 45.3212 25.6508 45.4612 25.7005C45.6013 25.7502 45.7509 25.7687 45.8991 25.7547C46.564 25.7547 47.0293 25.3754 47.0293 24.5282V21.2634H48.8243Z" fill="#394149"/>
                        <path d="M59.3036 23.5742V27.2358H57.4904V23.7283C57.4904 23.1358 57.1943 22.7447 56.6142 22.7447C56.034 22.7447 55.6593 23.1654 55.6593 23.8704V27.2358H53.8462V23.7283C53.8462 23.1358 53.5561 22.7447 52.9699 22.7447C52.3837 22.7447 52.0211 23.1654 52.0211 23.8704V27.2358H50.208V21.2634H52.0211V21.8145C52.2106 21.5711 52.4591 21.378 52.7441 21.2528C53.0291 21.1276 53.3414 21.0742 53.6528 21.0975C53.9655 21.0826 54.2769 21.1474 54.5564 21.2855C54.836 21.4236 55.0744 21.6303 55.2483 21.8856C55.4506 21.6187 55.7185 21.4064 56.0271 21.2686C56.3358 21.1309 56.675 21.0719 57.013 21.0975C58.391 21.0975 59.3036 22.0811 59.3036 23.5742Z" fill="#394149"/>
                        <path d="M60.8509 21.2279C61.5985 21.2279 62.2046 20.6337 62.2046 19.9007C62.2046 19.1677 61.5985 18.5735 60.8509 18.5735C60.1032 18.5735 59.4971 19.1677 59.4971 19.9007C59.4971 20.6337 60.1032 21.2279 60.8509 21.2279Z" fill="#394149"/>
                        <path d="M22.1727 13.9994C25.674 13.9994 28.5124 11.2166 28.5124 7.78397C28.5124 4.35133 25.674 1.56861 22.1727 1.56861C18.6714 1.56861 15.833 4.35133 15.833 7.78397C15.833 11.2166 18.6714 13.9994 22.1727 13.9994Z" fill="#394149"/>
                        <path d="M36.3446 13.9994C39.8459 13.9994 42.6842 11.2166 42.6842 7.78397C42.6842 4.35133 39.8459 1.56861 36.3446 1.56861C32.8433 1.56861 30.0049 4.35133 30.0049 7.78397C30.0049 11.2166 32.8433 13.9994 36.3446 13.9994Z" fill="#394149"/>
                        <path d="M14.3403 1.56861H1.66699V13.9934H14.3403V1.56861Z" fill="#394149"/>
                    </svg>
                    <div class="justify-between items-center flex w-auto " id="navbar-sticky">
                        <ul class="flex flex-row space-x-10 ">
                            <li>
                                <a href="#" class="text-base text-neutral-700">Talents</a>
                            </li>
                            <li>
                            <a href="#" class="text-base text-neutral-700">My Jobs</a>
                            </li>
                            <li>
                            <a href="#" class="text-base text-neutral-700">Documents</a>
                            </li>
                            <li>
                            <a href="#" class="text-base text-neutral-700">Payments</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-center space-x-8 ">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 2L2 9.27148L14.7285 22L22 2ZM18.6562 5.34375L13.9219 18.3652L10.5781 15.0215L15.6367 8.36328L8.97852 13.4219L5.63477 10.0781L18.6562 5.34375Z" fill="#4E4E4E"/>
                        </svg>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C11.172 2 10.5 2.672 10.5 3.5V4.19531C7.91318 4.86209 6 7.2048 6 10V16L4 18V19H10.2695C10.0934 19.3039 10.0005 19.6488 10 20C10 20.5304 10.2107 21.0391 10.5858 21.4142C10.9609 21.7893 11.4696 22 12 22C12.5304 22 13.0391 21.7893 13.4142 21.4142C13.7893 21.0391 14 20.5304 14 20C13.9989 19.6486 13.9053 19.3037 13.7285 19H20V18L18 16V10C18 7.2048 16.0868 4.86209 13.5 4.19531V3.5C13.5 2.672 12.828 2 12 2ZM12 6C14.206 6 16 7.794 16 10V16V16.8281L16.1719 17H7.82812L8 16.8281V16V10C8 7.794 9.794 6 12 6Z" fill="#4E4E4E"/>
                        </svg>
                        <button type="button" class="flex  text-sm bg-gray-800 rounded-full  focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="user photo">
                        </button>
                        
                    </div>
                   
                </div>
            </nav>
  
            <div class="w-[1237px]  mt-[104px] mx-auto ">
                <div class="bg-palet py-12 rounded-[10px] px-8 ">
                    <div class="flex flex-col text-white space-y-2">
                        <span class="text-xl font-normal">Monday, August 15th</span>
                        <span class="text-5xl font-medium ">Good Morning,  Edward Zhang</span>
                        <span class="text-xl font-light">Please complete your information to help us find best talent near you</span>
                    </div>
                </div>
                <div class="flex mt-5 space-x-[19px]">
                    <div>
                        <div class="w-[294px] bg-white shadow rounded-[10px]">
                            <div class="bg-palet flex items-center space-x-[10px] h-[78px] px-8 rounded-t-[10px]">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 0.5C6.11125 0.5 0.5 6.11125 0.5 13C0.5 19.8888 6.11125 25.5 13 25.5C19.8888 25.5 25.5 19.8888 25.5 13C25.5 6.11125 19.8888 0.5 13 0.5ZM13 3C18.5377 3 23 7.46235 23 13C23 18.5377 18.5377 23 13 23C7.46235 23 3 18.5377 3 13C3 7.46235 7.46235 3 13 3ZM18.3662 8.36621L10.5 16.2324L7.63379 13.3662L5.86621 15.1338L10.5 19.7676L20.1338 10.1338L18.3662 8.36621Z" fill="white"/>
                                    </svg>
                                </div>
                                <div class="text-white tex-base font-medium">Family Information</div>
                            </div>
                            <div class="flex items-center space-x-[10px] h-[78px] px-8">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 13C0.5 6.11125 6.11125 0.5 13 0.5C19.8888 0.5 25.5 6.11125 25.5 13C25.5 19.8888 19.8888 25.5 13 25.5C6.11125 25.5 0.5 19.8888 0.5 13ZM23 13C23 7.46235 18.5377 3 13 3C7.46235 3 3 7.46235 3 13C3 18.5377 7.46235 23 13 23C18.5377 23 23 18.5377 23 13Z" fill="#A3A3A3"/>
                                    </svg>
                                </div>
                                <div class="text-neutral-400 text-base font-medium">Care Information</div>
                            </div>
                            <div class="flex items-center space-x-[10px] h-[78px] px-8">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 13C0.5 6.11125 6.11125 0.5 13 0.5C19.8888 0.5 25.5 6.11125 25.5 13C25.5 19.8888 19.8888 25.5 13 25.5C6.11125 25.5 0.5 19.8888 0.5 13ZM23 13C23 7.46235 18.5377 3 13 3C7.46235 3 3 7.46235 3 13C3 18.5377 7.46235 23 13 23C18.5377 23 23 18.5377 23 13Z" fill="#A3A3A3"/>
                                    </svg>
                                </div>
                                <div class="text-neutral-400 text-base font-medium">Documents</div>
                            </div>
                            <div class="flex items-center space-x-[10px] h-[78px] px-8">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 13C0.5 6.11125 6.11125 0.5 13 0.5C19.8888 0.5 25.5 6.11125 25.5 13C25.5 19.8888 19.8888 25.5 13 25.5C6.11125 25.5 0.5 19.8888 0.5 13ZM23 13C23 7.46235 18.5377 3 13 3C7.46235 3 3 7.46235 3 13C3 18.5377 7.46235 23 13 23C18.5377 23 23 18.5377 23 13Z" fill="#A3A3A3"/>
                                    </svg>
                                </div>
                                <div class="text-neutral-400 text-base font-medium">Payment</div>
                            </div>
                        </div>
                        <div class="w-[294px] h-14 bg-white rounded-[10px] px-6 flex items-center justify-between mt-[25px]">
                            <span class="text-base text-neutral-700">Create Job</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 3V11H3V13H11V21H13V13H21V11H13V3H11Z" fill="#404040"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full">
                        <div data-accordion="open">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left bg-white border border-b-0 border-gray-200 rounded-t-[10px] " data-accordion-target="#familiy_information" aria-expanded="true" aria-controls="familiy_information">
                                <span class="flex items-center text-neutral-700 text-xl">
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    Family Information
                                </span>
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4141 0C15.1581 0 14.902 0.0979687 14.707 0.292969L12.707 2.29297L11.293 3.70703L0 15V19H4L18.707 4.29297C19.098 3.90197 19.098 3.26891 18.707 2.87891L16.1211 0.292969C15.9261 0.0979687 15.6701 0 15.4141 0ZM15.4141 2.41406L16.5859 3.58594L15.293 4.87891L14.1211 3.70703L15.4141 2.41406ZM12.707 5.12109L13.8789 6.29297L3.17188 17H2V15.8281L12.707 5.12109Z" fill="#404040"/>
                                </svg>
                            </button>
                        
                            <div id="familiy_information" class="hidden" aria-labelledby="family_information-1">
                              <div class="flex space-x-16 border border-b-0 border-gray-200 bg-gray-50 px-10 pb-8 rounded-b-[10px]">
                                    <div class="w-1/2">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Family 1</span>
                                            <span class="text-neutral-700 text-sm font-light">Muhammad Luthfi Dzulfiqor</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Email</span>
                                            <span class="text-neutral-700 text-sm font-light">mluthfi2014@gmail.com</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Home Address</span>
                                            <div class="flex mt-2 justify-between">
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Street Adress</span>
                                                    <span class="text-neutral-700 text-sm font-light">Jalan Cisitu Indah 5 Dalam No 78</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">City</span>
                                                    <span class="text-neutral-700 text-sm font-light">Bandung</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 space-y-2">
                                            <span class="text-neutral-800 text-base font-medium">Profile Pictures</span>
                                            <button class="w-[129px] h-10 rounded-[5px] bg-palet text-white">Add Pictures</button>
                                        </div>
                                    </div>
                                    <div class="w-1/2">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Family 2</span>
                                            <span class="text-neutral-700 text-sm font-light">Muhammad Luthfi Dzulfiqor Wife</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Phone Number</span>
                                            <span class="text-neutral-700 text-sm font-light">+6282315620798</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium invisible">Home Address</span>
                                            <div class="flex mt-2 justify-between">
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">States</span>
                                                    <span class="text-neutral-700 text-sm font-light">West Java</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Zip Code</span>
                                                    <span class="text-neutral-700 text-sm font-light">40123</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Country</span>
                                                    <span class="text-neutral-700 text-sm font-light">Indonesia</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 space-y-2">
                                            <span class="text-neutral-800 text-base font-medium">Introduction Video (Optional)</span>
                                            <button class="w-[129px] h-10 rounded-[5px] bg-palet text-white">Add Video</button>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>
                        
                        <div class="mt-4" data-accordion="open">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left bg-white border border-b-0 border-gray-200 rounded-t-[10px] " data-accordion-target="#care_information" aria-expanded="false" aria-controls="care_information">
                                <span class="flex items-center text-neutral-700 text-xl">
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    Care Information
                                </span>
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4141 0C15.1581 0 14.902 0.0979687 14.707 0.292969L12.707 2.29297L11.293 3.70703L0 15V19H4L18.707 4.29297C19.098 3.90197 19.098 3.26891 18.707 2.87891L16.1211 0.292969C15.9261 0.0979687 15.6701 0 15.4141 0ZM15.4141 2.41406L16.5859 3.58594L15.293 4.87891L14.1211 3.70703L15.4141 2.41406ZM12.707 5.12109L13.8789 6.29297L3.17188 17H2V15.8281L12.707 5.12109Z" fill="#404040"/>
                                </svg>
                            </button>
                        
                            <div id="care_information" class="hidden" aria-labelledby="care_information-1">
                              <div class="flex space-x-16 border border-b-0 border-gray-200 bg-gray-50 px-10 pb-8 rounded-b-[10px]">
                                    <div class="w-1/2">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Family 1</span>
                                            <span class="text-neutral-700 text-sm font-light">Muhammad Luthfi Dzulfiqor</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Email</span>
                                            <span class="text-neutral-700 text-sm font-light">mluthfi2014@gmail.com</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Home Address</span>
                                            <div class="flex mt-2 justify-between">
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Street Adress</span>
                                                    <span class="text-neutral-700 text-sm font-light">Jalan Cisitu Indah 5 Dalam No 78</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">City</span>
                                                    <span class="text-neutral-700 text-sm font-light">Bandung</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 space-y-2">
                                            <span class="text-neutral-800 text-base font-medium">Profile Pictures</span>
                                            <button class="w-[129px] h-10 rounded-[5px] bg-palet text-white">Add Pictures</button>
                                        </div>
                                    </div>
                                    <div class="w-1/2">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Family 2</span>
                                            <span class="text-neutral-700 text-sm font-light">Muhammad Luthfi Dzulfiqor Wife</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Phone Number</span>
                                            <span class="text-neutral-700 text-sm font-light">+6282315620798</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium invisible">Home Address</span>
                                            <div class="flex mt-2 justify-between">
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">States</span>
                                                    <span class="text-neutral-700 text-sm font-light">West Java</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Zip Code</span>
                                                    <span class="text-neutral-700 text-sm font-light">40123</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Country</span>
                                                    <span class="text-neutral-700 text-sm font-light">Indonesia</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 space-y-2">
                                            <span class="text-neutral-800 text-base font-medium">Introduction Video (Optional)</span>
                                            <button class="w-[129px] h-10 rounded-[5px] bg-palet text-white">Add Video</button>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>

                        <div class="mt-4" data-accordion="open">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left bg-white border border-b-0 border-gray-200 rounded-t-[10px] " data-accordion-target="#document" aria-expanded="true" aria-controls="document">
                                <span class="flex items-center text-neutral-700 text-xl">
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    Document
                                </span>
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4141 0C15.1581 0 14.902 0.0979687 14.707 0.292969L12.707 2.29297L11.293 3.70703L0 15V19H4L18.707 4.29297C19.098 3.90197 19.098 3.26891 18.707 2.87891L16.1211 0.292969C15.9261 0.0979687 15.6701 0 15.4141 0ZM15.4141 2.41406L16.5859 3.58594L15.293 4.87891L14.1211 3.70703L15.4141 2.41406ZM12.707 5.12109L13.8789 6.29297L3.17188 17H2V15.8281L12.707 5.12109Z" fill="#404040"/>
                                </svg>
                            </button>
                        
                            <div id="document" class="hidden" aria-labelledby="payment-1">
                              <div class="flex space-x-16 border border-b-0 border-gray-200 bg-gray-50 px-10 pb-8 rounded-b-[10px]">
                                    <div class="flex items-center w-11/12 justify-between">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-700 text-base font-medium">Documents to Sign</span>
                                            <div class="w-[295px] bg-[#FFF6F1] p-6 mt-4">
                                                <span class="text-colorFamilyText text-sm font-light">Client Contract - Referral Fee Agreement </span>
                                                <button class="text-white mt-2 bg-palet py-[6px] px-8 rounded-[5px]">Sign</button>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 ">
                                            <span class="text-neutral-700 text-base font-medium">Additional Documents</span>
                                            <button class="text-sm font-normal  text-white bg-palet  p-3 rounded-[5px]">Upload Additional Documents</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    

                        <div class="mt-4" data-accordion="open">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left bg-white border border-b-0 border-gray-200 rounded-t-[10px] " data-accordion-target="#payment" aria-expanded="true" aria-controls="payment">
                                <span class="flex items-center text-neutral-700 text-xl">
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    Payment
                                </span>
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4141 0C15.1581 0 14.902 0.0979687 14.707 0.292969L12.707 2.29297L11.293 3.70703L0 15V19H4L18.707 4.29297C19.098 3.90197 19.098 3.26891 18.707 2.87891L16.1211 0.292969C15.9261 0.0979687 15.6701 0 15.4141 0ZM15.4141 2.41406L16.5859 3.58594L15.293 4.87891L14.1211 3.70703L15.4141 2.41406ZM12.707 5.12109L13.8789 6.29297L3.17188 17H2V15.8281L12.707 5.12109Z" fill="#404040"/>
                                </svg>
                            </button>
                        
                            <div id="payment" class="hidden" aria-labelledby="payment-1">
                              <div class="flex space-x-16 border border-b-0 border-gray-200 bg-gray-50 px-10 pb-8 rounded-b-[10px]">
                                    <div class="flex items-center w-11/12 justify-between">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Billing Methods</span>
                                            <span class="text-neutral-700 text-sm font-light">Add, update, or remove your billing methods</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <button class="text-sm font-normal text-white bg-palet  p-3 rounded-[5px]">Add New Billing Method</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
            
        </article>
    </main>
@endsection