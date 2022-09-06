@extends('family.layoutFamily.main')
@section('container')
    <main>
        <article class="pb-20">
            <nav class="bg-white h-20 flex items-center fixed w-[1400px] xl:w-full z-20 top-0 left-0 border-b border-gray-200">
                <div class="flex w-full px-20 flex-wrap justify-between items-center mx-auto">
                    <svg width="100" height="52" viewBox="0 0 100 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.58496 30.0165H5.41788V43.9072H2.58496V30.0165Z" fill="#394149"/>
                        <path d="M7.06077 39.1479C7.0589 38.1502 7.35305 37.1743 7.906 36.3438C8.45895 35.5133 9.24584 34.8655 10.1671 34.4824C11.0883 34.0993 12.1025 33.9981 13.0813 34.1916C14.0601 34.3851 14.9595 34.8646 15.6656 35.5695C16.3718 36.2743 16.853 37.1728 17.0483 38.1512C17.2437 39.1296 17.1444 40.144 16.763 41.066C16.3816 41.9879 15.7353 42.776 14.9058 43.3305C14.0764 43.8851 13.1011 44.181 12.1034 44.181C11.4398 44.1886 10.7815 44.0637 10.1669 43.8135C9.55232 43.5634 8.99383 43.1931 8.52419 42.7243C8.05455 42.2556 7.6832 41.6978 7.43191 41.0836C7.18062 40.4695 7.05444 39.8114 7.06077 39.1479ZM14.2941 39.1479C14.283 38.7172 14.1451 38.2993 13.8977 37.9466C13.6503 37.5938 13.3044 37.3219 12.9032 37.1647C12.502 37.0075 12.0634 36.9722 11.6423 37.063C11.2211 37.1538 10.8361 37.3668 10.5353 37.6753C10.2346 37.9838 10.0315 38.3742 9.95144 38.7976C9.87139 39.2209 9.91797 39.6585 10.0853 40.0555C10.2527 40.4525 10.5334 40.7914 10.8923 41.0297C11.2513 41.268 11.6725 41.3952 12.1034 41.3953C12.3981 41.4036 12.6914 41.3507 12.9647 41.2399C13.238 41.1291 13.4854 40.9629 13.6913 40.7517C13.8971 40.5405 14.057 40.289 14.1607 40.013C14.2645 39.7369 14.3099 39.4424 14.2941 39.1479Z" fill="#394149"/>
                        <path d="M28.5345 34.3886V43.435C28.5345 46.6362 26.0321 47.9866 23.5014 47.9866C22.6115 48.0528 21.7205 47.8728 20.926 47.4664C20.1315 47.06 19.4642 46.4428 18.9971 45.6825L21.4334 44.2755C21.6267 44.6651 21.9326 44.9878 22.3114 45.2016C22.6902 45.4154 23.1245 45.5106 23.5581 45.4747C23.8433 45.5223 24.1357 45.5037 24.4127 45.4203C24.6897 45.337 24.9438 45.1912 25.1555 44.9941C25.3671 44.797 25.5307 44.5539 25.6336 44.2836C25.7365 44.0133 25.7759 43.723 25.7488 43.435V42.5568C25.4158 42.9666 24.9908 43.2921 24.5085 43.507C24.0262 43.7219 23.5 43.8202 22.9726 43.7939C21.6903 43.7939 20.4606 43.2845 19.5538 42.3778C18.6471 41.4711 18.1377 40.2413 18.1377 38.959C18.1377 37.6767 18.6471 36.447 19.5538 35.5403C20.4606 34.6336 21.6903 34.1242 22.9726 34.1242C23.4997 34.1001 24.0251 34.1994 24.5071 34.4141C24.9891 34.6289 25.4143 34.9532 25.7488 35.3612V34.4169L28.5345 34.3886ZM25.7488 38.959C25.7677 38.4998 25.6487 38.0454 25.4073 37.6542C25.1658 37.2631 24.8129 36.9531 24.3939 36.7642C23.9749 36.5752 23.5089 36.5159 23.0559 36.5939C22.6029 36.6718 22.1836 36.8835 21.8519 37.2016C21.5201 37.5198 21.2911 37.9299 21.1943 38.3792C21.0974 38.8285 21.1372 39.2966 21.3085 39.7231C21.4798 40.1497 21.7747 40.5152 22.1554 40.7728C22.5361 41.0305 22.9851 41.1683 23.4447 41.1687C23.7448 41.1899 24.0459 41.1481 24.3287 41.0458C24.6116 40.9435 24.8699 40.7832 25.087 40.575C25.304 40.3668 25.4751 40.1154 25.5891 39.8371C25.7031 39.5588 25.7575 39.2597 25.7488 38.959Z" fill="#394149"/>
                        <path d="M30.1682 39.1479C30.1663 38.1502 30.4605 37.1743 31.0134 36.3438C31.5664 35.5133 32.3533 34.8655 33.2745 34.4824C34.1957 34.0993 35.2099 33.9981 36.1887 34.1916C37.1675 34.3851 38.0669 34.8646 38.7731 35.5695C39.4792 36.2743 39.9604 37.1728 40.1558 38.1512C40.3511 39.1296 40.2518 40.144 39.8704 41.066C39.489 41.9879 38.8427 42.776 38.0133 43.3305C37.1838 43.8851 36.2085 44.181 35.2108 44.181C34.5473 44.1886 33.8889 44.0637 33.2743 43.8135C32.6597 43.5634 32.1012 43.1931 31.6316 42.7243C31.162 42.2556 30.7906 41.6978 30.5393 41.0836C30.288 40.4695 30.1618 39.8114 30.1682 39.1479ZM37.4016 39.1479C37.3904 38.7172 37.2525 38.2993 37.0051 37.9466C36.7577 37.5938 36.4118 37.3219 36.0106 37.1647C35.6095 37.0075 35.1709 36.9722 34.7497 37.063C34.3285 37.1538 33.9435 37.3668 33.6427 37.6753C33.342 37.9838 33.1389 38.3742 33.0588 38.7976C32.9788 39.2209 33.0254 39.6585 33.1927 40.0555C33.3601 40.4525 33.6408 40.7914 33.9997 41.0297C34.3587 41.268 34.7799 41.3952 35.2108 41.3953C35.504 41.4009 35.7952 41.3461 36.0663 41.2341C36.3373 41.1221 36.5824 40.9555 36.7862 40.7446C36.99 40.5338 37.1481 40.2831 37.2508 40.0084C37.3534 39.7337 37.3983 39.4407 37.3827 39.1479H37.4016Z" fill="#394149"/>
                        <path d="M41.5664 31.839C41.5664 31.4991 41.6672 31.1668 41.856 30.8842C42.0449 30.6016 42.3133 30.3813 42.6273 30.2512C42.9414 30.1211 43.2869 30.0871 43.6203 30.1534C43.9537 30.2197 44.2599 30.3834 44.5003 30.6237C44.7407 30.8641 44.9043 31.1703 44.9706 31.5037C45.037 31.8371 45.0029 32.1827 44.8729 32.4967C44.7428 32.8107 44.5225 33.0792 44.2399 33.268C43.9572 33.4568 43.625 33.5576 43.285 33.5576C42.83 33.5552 42.3943 33.3733 42.0725 33.0515C41.7507 32.7298 41.5689 32.2941 41.5664 31.839ZM41.8591 34.3886H44.692V43.9072H41.8591V34.3886Z" fill="#394149"/>
                        <path d="M57.0429 39.1479C57.0772 39.7771 56.9868 40.4069 56.7768 41.001C56.5667 41.5951 56.2413 42.1418 55.8191 42.6096C55.3969 43.0774 54.8864 43.4571 54.3169 43.7268C53.7474 43.9965 53.1302 44.1509 52.5008 44.1811C51.9724 44.2064 51.4448 44.1156 50.9554 43.9149C50.4659 43.7142 50.0264 43.4086 49.6679 43.0196V47.7411H46.835V34.3886H49.6679V35.2857C50.0264 34.8967 50.4659 34.5911 50.9554 34.3904C51.4448 34.1897 51.9724 34.0989 52.5008 34.1242C53.1294 34.1544 53.7458 34.3085 54.3146 34.5776C54.8835 34.8468 55.3936 35.2256 55.8156 35.6924C56.2377 36.1592 56.5633 36.7047 56.7739 37.2977C56.9846 37.8907 57.076 38.5195 57.0429 39.1479ZM54.21 39.1479C54.1988 38.7047 54.0578 38.2745 53.8045 37.9106C53.5512 37.5468 53.1968 37.2651 52.7851 37.1007C52.3734 36.9362 51.9224 36.8961 51.4882 36.9854C51.0539 37.0746 50.6553 37.2893 50.3418 37.6028C50.0283 37.9163 49.8137 38.3148 49.7244 38.7491C49.6352 39.1834 49.6753 39.6343 49.8397 40.046C50.0042 40.4577 50.2858 40.8122 50.6497 41.0654C51.0136 41.3187 51.4438 41.4597 51.887 41.4709C52.1963 41.4906 52.5062 41.4438 52.796 41.3338C53.0857 41.2237 53.3485 41.0529 53.5668 40.8329C53.785 40.6128 53.9537 40.3486 54.0614 40.058C54.169 39.7674 54.2133 39.4571 54.1911 39.1479H54.21Z" fill="#394149"/>
                        <path d="M65.8625 41.0554C65.8625 43.2462 63.9739 44.181 61.8964 44.181C61.0665 44.2545 60.2336 44.0779 59.5049 43.674C58.7763 43.2701 58.1851 42.6574 57.8076 41.9147L60.2817 40.5077C60.3821 40.8512 60.5971 41.15 60.8908 41.3544C61.1846 41.5588 61.5394 41.6566 61.8964 41.6314C62.5858 41.6314 62.9257 41.4142 62.9257 41.0365C62.9257 39.9883 58.2042 40.5455 58.2042 37.2593C58.2042 35.1818 59.9606 34.1336 61.9814 34.1336C62.7271 34.111 63.4653 34.2881 64.1195 34.6468C64.7737 35.0054 65.32 35.5325 65.702 36.1733L63.2185 37.4765C63.1088 37.2271 62.929 37.0149 62.701 36.8657C62.473 36.7165 62.2067 36.6367 61.9342 36.636C61.4432 36.636 61.141 36.8249 61.141 37.1743C61.1788 38.2602 65.8625 37.5331 65.8625 41.0554Z" fill="#394149"/>
                        <path d="M76.2884 34.3886V43.9072H73.4554V43.0196C73.1259 43.414 72.7077 43.7248 72.235 43.9267C71.7624 44.1286 71.2486 44.2157 70.7358 44.1811C68.8472 44.1811 67.1758 42.8118 67.1758 40.2339V34.3886H70.0087V39.8184C69.9838 40.0498 70.0108 40.2838 70.0876 40.5035C70.1644 40.7232 70.2891 40.923 70.4528 41.0885C70.6164 41.254 70.8149 41.3809 71.0337 41.4601C71.2525 41.5394 71.4863 41.5688 71.7179 41.5465C72.7567 41.5465 73.4838 40.9421 73.4838 39.5918V34.3886H76.2884Z" fill="#394149"/>
                        <path d="M92.662 38.0713V43.9071H89.829V38.3169C89.829 37.3726 89.3663 36.7493 88.4598 36.7493C87.5533 36.7493 86.9678 37.4198 86.9678 38.5435V43.9071H84.1349V38.3169C84.1349 37.3726 83.6816 36.7493 82.7656 36.7493C81.8497 36.7493 81.2831 37.4198 81.2831 38.5435V43.9071H78.4502V34.3886H81.2831V35.2668C81.5792 34.8789 81.9675 34.5712 82.4128 34.3717C82.8581 34.1721 83.3462 34.087 83.8327 34.1242C84.3213 34.1004 84.8078 34.2037 85.2446 34.4237C85.6815 34.6438 86.0539 34.9733 86.3257 35.3801C86.6417 34.9548 87.0604 34.6165 87.5426 34.3969C88.0248 34.1773 88.5548 34.0834 89.083 34.1242C91.2361 34.1242 92.662 35.6917 92.662 38.0713Z" fill="#394149"/>
                        <path d="M95.0801 34.332C96.2483 34.332 97.1953 33.3849 97.1953 32.2167C97.1953 31.0485 96.2483 30.1015 95.0801 30.1015C93.9119 30.1015 92.9648 31.0485 92.9648 32.2167C92.9648 33.3849 93.9119 34.332 95.0801 34.332Z" fill="#394149"/>
                        <path d="M34.6441 22.8115C40.1149 22.8115 44.5498 18.3765 44.5498 12.9057C44.5498 7.43493 40.1149 2.99997 34.6441 2.99997C29.1733 2.99997 24.7383 7.43493 24.7383 12.9057C24.7383 18.3765 29.1733 22.8115 34.6441 22.8115Z" fill="#394149"/>
                        <path d="M56.7886 22.8115C62.2594 22.8115 66.6943 18.3765 66.6943 12.9057C66.6943 7.43493 62.2594 2.99997 56.7886 2.99997C51.3178 2.99997 46.8828 7.43493 46.8828 12.9057C46.8828 18.3765 51.3178 22.8115 56.7886 22.8115Z" fill="#394149"/>
                        <path d="M22.4065 2.99997H2.60449V22.802H22.4065V2.99997Z" fill="#394149"/>
                    </svg>
                    <div class="justify-between items-center flex w-auto " id="navbar-sticky">
                        <ul class="flex flex-row space-x-10 ">
                            <li>
                                <a href="#" class="text-xl text-neutral-900">Talents</a>
                            </li>
                            <li>
                            <a href="#" class="text-xl text-neutral-900">My Jobs</a>
                            </li>
                            <li>
                            <a href="#" class="text-xl text-neutral-900">Documents</a>
                            </li>
                            <li>
                            <a href="#" class="text-xl text-neutral-900">Payments</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-center space-x-8 ">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.1663 0.333336L0.833008 12.4525L22.0472 33.6667L34.1663 0.333336ZM28.5934 5.90625L20.7028 27.6087L15.1299 22.0358L23.5609 10.9388L12.4639 19.3698L6.89095 13.7969L28.5934 5.90625Z" fill="#4E4E4E"/>
                        </svg>
                        <svg width="27" height="34" viewBox="0 0 27 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5003 0.333336C12.1203 0.333336 11.0003 1.45334 11.0003 2.83334V3.99219C6.68896 5.10349 3.50033 9.008 3.50033 13.6667V23.6667L0.166992 27V28.6667H10.6162C10.3227 29.1731 10.1678 29.748 10.167 30.3333C10.167 31.2174 10.5182 32.0652 11.1433 32.6904C11.7684 33.3155 12.6163 33.6667 13.5003 33.6667C14.3844 33.6667 15.2322 33.3155 15.8573 32.6904C16.4825 32.0652 16.8337 31.2174 16.8337 30.3333C16.8319 29.7477 16.6758 29.1728 16.3812 28.6667H26.8337V27L23.5003 23.6667V13.6667C23.5003 9.008 20.3117 5.10349 16.0003 3.99219V2.83334C16.0003 1.45334 14.8803 0.333336 13.5003 0.333336ZM13.5003 7C17.177 7 20.167 9.99 20.167 13.6667V23.6667V25.0469L20.4534 25.3333H6.5472L6.83366 25.0469V23.6667V13.6667C6.83366 9.99 9.82366 7 13.5003 7Z" fill="#4E4E4E"/>
                        </svg>
                        <button type="button" class="flex  text-sm bg-gray-800 rounded-full  focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            
                            <img class="w-12 h-12 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="user photo">
                        </button>
                        
                    </div>
                   
                </div>
            </nav>
            <div class="mt-[120px] px-[72px] flex space-x-6">
                <div class="flex flex-col">
                    <img class="w-[526px] h-[382px]" src="{{ asset('images/family/home3.png') }}" alt="">
                    <span class="text-2xl font-semibold mt-8">Agency Branding Here</span>
                    <span class="text-base font-light mt-2">nannyagency@mail.com</span>
                    <div class="flex flex-col items-center justify-center mt-[100px]">
                        <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1110_11885)">
                            <path d="M56.25 1.25C56.25 1.94036 56.8096 2.5 57.5 2.5H58.75C59.4404 2.5 60 1.94036 60 1.25C60 0.559645 59.4404 0 58.75 0H57.5C56.8096 0 56.25 0.559645 56.25 1.25Z" fill="#212326"/>
                            <path d="M20 40H26.0723L24.3045 38.2322C23.8357 37.7634 23.1998 37.5 22.5368 37.5H20C10.335 37.5 2.5 29.665 2.5 20C2.5 10.335 10.335 2.50001 20 2.5H40C49.665 2.5 57.5 10.335 57.5 20C57.5 29.665 49.665 37.5 40 37.5H32.5184C31.5238 37.5 30.57 37.1049 29.8667 36.4017L27.7957 34.3306C26.6236 33.1585 25.0338 32.5 23.3762 32.5H20C13.0964 32.5 7.5 26.9036 7.5 20C7.5 13.0964 13.0964 7.5 20 7.5H40C46.9036 7.5 52.5 13.0964 52.5 20C52.5 26.9036 46.9036 32.5 40 32.5H35.1961C34.2015 32.5 33.2477 32.1049 32.5444 31.4017L30.4733 29.3306C29.3012 28.1585 27.7115 27.5 26.0539 27.5H20C15.8579 27.5 12.5 24.1421 12.5 20C12.5 15.8579 15.8579 12.5 20 12.5H40C44.1421 12.5 47.5 15.8579 47.5 20C47.5 24.0916 44.2235 27.418 40.1512 27.4985L40.1504 27.5H38.3211C37.3265 27.5 36.3727 27.1049 35.6694 26.4017L33.5983 24.3306C32.6366 23.3688 31.3937 22.7529 30.0628 22.5628L30 22.5H20C18.6193 22.5 17.5 21.3807 17.5 20C17.5 18.6193 18.6193 17.5 20 17.5H40C41.3807 17.5 42.5 18.6193 42.5 20C42.5 21.3807 41.3807 22.5 40 22.5H35L36.7678 24.2678C37.2366 24.7366 37.8725 25 38.5355 25H40C42.7614 25 45 22.7614 45 20C45 17.2386 42.7614 15 40 15H20C17.2386 15 15 17.2386 15 20C15 22.7614 17.2386 25 20 25H29.1789C30.1735 25 31.1273 25.3951 31.8306 26.0983L33.9017 28.1694C35.0738 29.3415 36.6635 30 38.3211 30H40.625V29.9808C45.8567 29.6582 50 25.3129 50 20C50 14.4772 45.5228 10 40 10H20C14.4772 10 10 14.4772 10 20C10 25.5229 14.4772 30 20 30H26.0539C27.0485 30 28.0023 30.3951 28.7056 31.0983L30.7767 33.1694C31.9488 34.3415 33.5385 35 35.1961 35H40C48.2843 35 55 28.2843 55 20C55 11.7157 48.2843 5 40 5H20C11.7157 5 5 11.7157 5 20C5 28.2843 11.7157 35 20 35H23.3762C24.3708 35 25.3246 35.3951 26.0279 36.0983L28.099 38.1694C29.2711 39.3415 30.8608 40 32.5184 40H40C51.0457 40 60 31.0457 60 20C60 8.9543 51.0457 -9.65645e-07 40 0L20 4.13264e-06C8.9543 5.09829e-06 -9.65645e-07 8.95431 0 20C9.65645e-07 31.0457 8.95431 40 20 40Z" fill="#212326"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_1110_11885">
                            <rect width="60" height="40" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span class="text-sm font-light">Powered by hirefact</span>
                    </div>
                </div>
                <div class="bg-white rounded-[10px] px-8 pb-8">
                    <span class="text-2xl font-semibold mt-6 flex">You can start here</span>
                    <span class="text-base font-light">We are here to help you find the perfect nanny for your family. Please fill out the application and we will be in touch shortly.</span>
                    <div class="mt-6">
                        <div>
                            <span class="text-base font-medium">Intended position *</span>
                            <div class="space-y-3 mt-[18px]">
                                <div class="flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                                    <label class="text-base font-light text-[#1C1C1E]" for="option_1">Service option 1</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_2" type="radio">
                                    <label class="text-base font-light text-[#1C1C1E]" for="option_2">Service option 2</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_3" type="radio">
                                    <label class="text-base font-light text-[#1C1C1E]" for="option_3">Service option 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <span class="text-base font-medium ">Personal Information</span>
                            <div class="mt-4 flex space-x-6">
                                <div>
                                    <label class="text-base font-normal" for="">Frist Name</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-base font-normal" for="">Last Name</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="text-base font-normal" for="">Date of birth</label>
                                <div class="w-full h-[42px] border border-[#373737] rounded-[5px]">
                                    <input type="date" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-4 flex space-x-6">
                                <div>
                                    <label class="text-base font-normal" for="">Email</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-base font-normal" for="">Phone</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <span class="text-base font-medium ">Language Spoken</span>
                            <div class="space-y-4 mt-[18px]">
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_1" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_1">Language option 1</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_2" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_2">Language option 2</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_3" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_3">Language option 3</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_4" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_4">Language option 4</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_5" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_5">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <span class="text-base font-medium ">Address</span>
                            <div class="mt-4">
                                <label class="text-base font-normal" for="">Address 1*</label>
                                <div class="w-full h-[42px] border border-[#373737] rounded-[5px]">
                                    <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="text-base font-normal" for="">Address 2</label>
                                <div class="w-full h-[42px] border border-[#373737] rounded-[5px]">
                                    <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-4 flex space-x-6">
                                <div>
                                    <label class="text-base font-normal" for="">City</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-base font-normal" for="">State</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex space-x-6">
                                <div>
                                    <label class="text-base font-normal" for="">Country</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-base font-normal" for="">Zip/Postal Code</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button class="bg-btnDefault w-[109px] h-10 text-sm font-medium text-white rounded-[5px]">Submit</button>
                        </div>
                    </div> 
                </div>
            </div>
        </article>
    </main>
@endsection