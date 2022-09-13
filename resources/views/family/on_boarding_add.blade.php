
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
  
            <div class="w-[884px] bg-white h-full mx-auto mt-[104px] px-8 rounded-[10px] pb-6">
                <div class="mt-10 pt-10">
                    <span class="text-xl font-semibold text-colorFamilyText">Work Catergory</span>
                </div>
                <div class="flex mt-4">
                    <div class="w-[199px] bg-palet h-10 flex items-center text-white rounded-[5px] pl-4 text-base font-semibold">
                        Child care
                    </div>
                    <div class="w-[199px]  h-10 flex items-center text-neutral-900 rounded-[5px] pl-4 text-base font-normal">
                        Senior care
                    </div>
                    <div class="w-[199px]  h-10 flex items-center text-neutral-900 rounded-[5px] pl-4 text-base font-normal">
                        Home care
                    </div>
                    <div class="w-[199px]  h-10 flex items-center text-neutral-900 rounded-[5px] pl-4 text-base font-normal">
                        Other Services
                    </div>
                </div>
                <div class="px-5">
                    <div class="flex space-x-24 p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Nany/ Sitter</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('au_pair', old('chile_care')) ) checked @endif    value="au_pair" id="au-pair" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="au-pair" class="text-base text-[#404040] font-light hover:cursor-pointer">Au Pair</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('maternity_care', old('chile_care')) ) checked @endif value="maternity_care" id="maternity-care" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="maternity-care" class="text-base text-[#404040] font-light hover:cursor-pointer">Maternity Care</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('at_home_daycare', old('chile_care')) ) checked @endif value="at_home_daycare" id="at-home-daycare" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="at-home-daycare" class="text-base text-[#404040] font-light hover:cursor-pointer">At Home Daycare</label>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('at_home_daycare', old('chile_care')) ) checked @endif value="infant" id="infant" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="infant" class="text-base text-[#404040] font-light hover:cursor-pointer">Infant</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('young_baby', old('chile_care')) ) checked @endif  value="young_baby" id="young_baby" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="young_baby" class="text-base text-[#404040] font-light hover:cursor-pointer">Young Baby</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('toddler', old('chile_care')) ) checked @endif  value="toddler" id="toddler" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="toddler" class="text-base text-[#404040] font-light hover:cursor-pointer">Toddler</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('press_schooler', old('chile_care')) ) checked @endif value="press_schooler" id="press_schooler" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="press_schooler" class="text-base text-[#404040] font-light hover:cursor-pointer">Press Schooler</label>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('grade_schooler', old('chile_care')) ) checked @endif  value="grade_schooler" id="grade_schooler" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="grade_schooler" class="text-base text-[#404040] font-light hover:cursor-pointer">Grade Schooler</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('assist_bathing', old('chile_care')) ) checked @endif value="assist_bathing" id="assist_bathing" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="assist_bathing" class="text-base text-[#404040] font-light hover:cursor-pointer">Assist Bathing</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Times & Avaibility</span>
                </div>
                <div class="flex  space-x-[52px]">
                    <div>
                        <span class="text-sm font-normal text-[#171717]">Days</span>
                        <div class="flex space-x-4 mt-2">
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Mo</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Tu</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">We</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Th</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Fr</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Sa</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Su</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <div>
                            <label class="text-sm font-normal text-[#171717]">Start Date</label>
                            <div class="flex space-x-4 mt-2">
                                <div class="flex justify-center items-center space-x-2">
                                    <div class=" w-[100px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="ASAP" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm font-normal text-[#171717]">End Date</label>
                            <div class="flex space-x-4 mt-2">
                                <div class="flex justify-center items-center space-x-2">
                                    <div class=" w-[100px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="ASAP" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm font-normal text-[#171717]">Start Time</label>
                            <div class="flex space-x-4 mt-2">
                                <div class="flex justify-center items-center space-x-2">
                                    <div class=" w-[100px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="time" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="ASAP" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm font-normal text-[#171717]">End Time</label>
                            <div class="flex space-x-4 mt-2">
                                <div class="flex justify-center items-center space-x-2">
                                    <div class=" w-[100px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="time" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="ASAP" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Type</span>
                </div>
                <div class="flex space-x-4 mt-4">
                   <div>
                        <label class="text-sm font-normal text-[#171717]">Work Type</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Full Time</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Part Time</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Desired Living</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Live In</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Live Out</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Any</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">English Level</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Basic</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Conversational</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Fluent Native</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Languages</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">English</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="text-sm font-normal text-[#171717]" for="">Additional</label>
                    <div class="flex space-x-8">
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Comfortable with pets</label>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Has transportation</label>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Has driver license</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Salary</span>
                </div>
                <div class="flex space-x-4 mt-4">
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Rate</label>
                        <div class="flex space-x-4 mt-2">
                            <div class="flex justify-center items-center space-x-2">
                                <div class=" w-[193]  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="$25" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Type</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Hourly</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Daily</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Weekly</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Monthly</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Year</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Pay frequency</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Daily</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Weekly</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Monthly</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Pay With</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Any</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Check</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Cash</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Online Payment</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-2 mt-[10px] w-full">
                    <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                    <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Rate Negotiable</label>
                </div>
                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Care Informations</span>
                </div>
                <div class="bg-palet mt-4 hover:cursor-pointer text-white text-base font-medium w-[226px] h-10 flex items-center justify-center rounded-[5px]" href="#">
                    Add Care Informations
                </div>
                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Address</span>
                </div>
                <div class="flex  mt-2">
                   <div class="bg-neutral-50 w-full h-[38px] flex items-center rounded-tl rounded-bl">
                        <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="Add your locations" autocomplete="off">
                    </div>
                    <div class="w-[38px] h-[38px] bg-colorStatusCard1 rounded-tr-[5px] rounded-br-[5px] flex items-center justify-center">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.47396 0.446289L1.02409 2.22689C0.707422 2.35355 0.5 2.65917 0.5 3V14.6667C0.5 15.2558 1.09508 15.6589 1.64258 15.4398L5.52604 13.887L10.526 15.5537L14.9759 13.7731C15.2926 13.6464 15.5 13.3408 15.5 13V1.33333C15.5 0.744167 14.9049 0.341055 14.3574 0.560221L10.474 2.11296L5.47396 0.446289ZM6.33333 2.48893L9.66667 3.60059V13.5111L6.33333 12.3994V2.48893ZM4.66667 2.5638V12.4352L2.16667 13.4362V3.56478L4.66667 2.5638ZM13.8333 2.5638V12.4352L11.3333 13.4362V3.56478L13.8333 2.5638Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Add Notes</span>
                </div>
                <div class="{{ $errors->has('about_talent') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-full h-[148px] flex items-center justify-center border border-neutral-400 mt-2 rounded relative">
                    <textarea name="about_talent" rows="6" class="{{ $errors->has('address') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none" placeholder="">{{ old('about_talent') }}</textarea>
                </div>
                <div class="mt-10 flex space-x-6">
                    <button class="w-[124px] h-10 bg-palet rounded-[5px]">
                        <span class="text-base font-medium text-white">Add Job</span>
                    </button>
                    <button class="w-[254px] h-10 bg-colorStatusCard1 rounded-[5px]">
                        <span class="text-base font-medium text-white">Save and Add Another Job</span>
                    </button>
                </div>
            </div>
        </article>
    </main>
@endsection