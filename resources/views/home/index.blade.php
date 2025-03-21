@extends('layouts.app-labour')

@section('content')
    {{-- <div id="default-carousel" class="relative w-full" data-carousel="slide"> --}}
    <div id="animation-carousel"class="relative w-full mx-auto " data-carousel="slide">
        {{-- <div id="animation-carousel"class="relative w-full mx-auto max-w-screen-xl " data-carousel="slide"> --}}
        <!-- Carousel wrapper -->
        <div class="relative h-[1638px] overflow-hidden  md:h-[960px]">

            <!-- Item 1 -->
            <div class="hidden duration-200 ease-in-out" data-carousel-item>
                <img src="{{ url('carousel/banner-web-1.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-200 ease-in-out" data-carousel-item>
                <img src="{{ url('carousel/banner-web-2.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-200 ease-in-out" data-carousel-item>
                <img src="{{ url('carousel/banner-web-3.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden" src="./image-home/office.png" alt="dashboard image">

            <div class="mt-4 md:mt-0">
                <h4 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-800 dark:text-white">บริษัท อทิตยา 2017
                    จำกัด</h4>
                <h6 class="mb-4 text-lg tracking-tight font-extrabold text-gray-900 dark:text-white">
                    ผู้เชี่ยวชาญด้านการนำเข้าแรงงานต่างด้าว <i>MOU</i> อย่างถูกกฎหมาย</h6>
                <p class="mb-6 font-light text-gray-600 md:text-lg dark:text-gray-400">
                    ด้วยประสบการณ์กว่า 19 ปี ในการนำเข้าแรงงานต่างด้าวมาทำงานในประเทศไทย บริษัท อทิตยา 2017 จำกัด
                    เป็นผู้ให้บริการจัดหาและนำเข้าแรงงานต่างด้าว MOU ที่ได้รับอนุญาตตามกฎหมาย
                    โดยเรามีความเชี่ยวชาญในการนำเข้าแรงงานจาก 3 สัญชาติ ได้แก่ ลาว พม่า และกัมพูชา
                    เพื่อตอบสนองความต้องการของภาคอุตสาหกรรมต่างๆ
                    เราให้บริการแบบครบวงจร ตั้งแต่การจัดหาแรงงานที่เหมาะสม
                    ไปจนถึงการดำเนินการด้านเอกสารแรงงานต่างด้าวทั้งหมด
                    เพื่อให้ลูกค้าของเราได้รับความสะดวกสบายและมั่นใจในทุกขั้นตอน
                </p>
                <a href="#"
                    class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Get started
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>





    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto py-12 px-3">
            <h2 class="text-3xl font-bold text-center mb-8 text-blue-800">บริการนำเข้าแรงงานต่างด้าว 3 สัญชาติ </h2>

            <p class="text-center mb-8">
                <b> ดำเนินการตามใ้หนายจ้างทุกขั้นตอน ดูแลตลอดสัญญาจ้าง
                    นายจ้างและคนต่างด้าวได้รับสิทธิและหน้าที่ที่เป็นธรรมตามกฎหมาย</b>
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <img class="w-full h-[100] mx-auto mb-4" src="./image-home/นำเข้าแรงงานคนใหม่ (MOU).webp" alt="Jese Leos">
                    <h3 class="text-lg font-semibold">นำเข้าแรงงานคนใหม่ (MOU)</h3>
                    <p class="text-sm text-gray-600">(พม่า,กัมพูชา,ลาว)</p>
                    <p class="text-sm text-left">บริการนำเข้าแรงงานคนใหม่ตามระบบ MOU
                        ดำนเนิการให้นายจ้างทุกขั้นตอนตลอดระยะเวลาการนำเข้า</p>
                </div>

                <div class="text-center">
                    <img class="w-full h-[100]  mx-auto mb-4" src="./image-home/บริการต่ออายุเอกสารคนต่างด้าว.webp" alt="Jese Leos">
                    <h3 class="text-lg font-semibold">บริการต่ออายุเอกสารคนต่างด้าว</h3>
                    <p class="text-sm text-gray-600">(พม่า,กัมพูชา,ลาว)</p>
                    <p class="text-sm text-left">บริการต่ออายุเอกสารแรงงานต่างด้าว เช่น ต่อใบอนุญาตทำงาน รายงานตัว 90 วัน
                        แจ้งเข้า-แจ้งออก เปลี่ยนนายจ้าง ต่อวีซ่าทำงาน </p>
                </div>

                <div class="text-center">
                    <img class="w-full  h-[100]  mx-auto mb-4" src="./image-home/นำเข้าแรงงานต่างด้าวที่ครบวาระ 4 ปี และ 6 ปี.webp" alt="Jese Leos">
                    <h3 class="text-lg font-semibold">นำเข้าแรงงานต่างด้าวที่ครบวาระ 4 ปี และ 6 ปี </h3>
                    <p class="text-sm text-gray-600">(พม่า,กัมพูชา,ลาว)</p>
                    <p class="text-sm text-left">บริการนำเข้าแรงงานต่างด้าวที่ครบวาระ 4 ปี และ 6 ปี
                        จัดเตรียมเอกสารพร้อมยื่นแทนนายจ้างทุกขั้นตอน </p>
                </div>


            </div>
        </div>
    </section>
    <br>
    <br>
    <br>



    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="py-8 lg:py- mx-auto max-w-screen-xl px-6">
            <h2
                class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-blue-800 dark:text-white md:text-4xl">
                ลูกค้าที่ใช้งานบริการเรา</h2>
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                <a href="#" class="flex justify-center items-center">
                    <img src="{{ asset('logo-customers/1.png') }}" alt="">
                </a>
                <a href="#" class="flex justify-center items-center">
                    <img src="{{ asset('logo-customers/2.png') }}" alt="">
                </a>
                <a href="#" class="flex justify-center items-center">
                    <img src="{{ asset('logo-customers/3.png') }}" alt="">
                </a>

                <a href="#" class="flex justify-center items-center">
                    <img src="{{ asset('logo-customers/4.png') }}" alt="">
                </a>
                <a href="#" class="flex justify-center items-center">
                    <img src="{{ asset('logo-customers/5.png') }}" alt="">
                </a>
                <a href="#" class="flex justify-center items-center">
                    <img src="{{ asset('logo-customers/6.png') }}" alt="">
                </a>
            </div>
        </div>
    </section>


    <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">บริการของเรา</h2>
                <p class="text-gray-600">บริการด้านเอกสารแรงงานต่างด้าวถูกกฏหมายทุกประเภท ด้วยทีมงานมากประสบการ์ณ</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">นำเข้าแรงงานต่างด้าว MOU</h3>
                    </div>
                    <p class="text-gray-600">บริการนำเข้าแรงงานต่างด้าว 3 สัญชาติ พม่า,ลาว,กัมพูชา MOU ถูกต้องตามกฏหมาย พร้อมบริการตลอดสัญญาจ้างงาน </p>
                </div>

                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.042A8.967 8.967 0 006 11c0 5.105 4.116 9.21 9.226 9.21.807 0 1.598-.105 2.362-.305a.765.765 0 01.376-.025c.042.194.067.393.067.597 0 .204-.025.402-.067.597a.772 772 0 01-.376.025C15.802 20.805 15.01 21 14.226 21 9.116 21 5 16.895 5 11c0-4.084 2.532-7.585 6.042-8.958a8.967 8.967 0 016.338-2.368c.056.248.105.492.156.725a.765.765 0 01.237.468c.041.127.062.262.062.4a.772 772 0 01-.237.468c-.05.233-.111.458-.175.666a10.238 10.238 0 01-6.338 2.368z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">นำเข้าแรงงานต่างด้าว MOU RETURN </h3>
                    </div>
                    <p class="text-gray-600">MOU RETURN  ที่ครบการจ้าง 4 ปี  บริการนำเข้าแรงงานต่างด้าว MOU สัญชาติกัมพูชาม,สัญชาติลาว กรณีที่นายจ้างมีแรงงานเดิมอยู่แล้ว โดยแรงงานอยู่ที่ประเทศไทย</p>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-2">
                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">ขึ้นทะเบียนแรงงานต่างด้าวตามนโยบายของรัฐบาล</h3>
                    </div>
                    <p class="text-gray-600">บริการต่ออายุเอกสารแรงงานต่างด้าว ตาม มติคณะรัฐมนตรี ทุกมติ</p>
                </div>

                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg mt-2">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.042A8.967 8.967 0 006 11c0 5.105 4.116 9.21 9.226 9.21.807 0 1.598-.105 2.362-.305a.765.765 0 01.376-.025c.042.194.067.393.067.597 0 .204-.025.402-.067.597a.772 772 0 01-.376.025C15.802 20.805 15.01 21 14.226 21 9.116 21 5 16.895 5 11c0-4.084 2.532-7.585 6.042-8.958a8.967 8.967 0 016.338-2.368c.056.248.105.492.156.725a.765.765 0 01.237.468c.041.127.062.262.062.4a.772 772 0 01-.237.468c-.05.233-.111.458-.175.666a10.238 10.238 0 01-6.338 2.368z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">แจ้งเปลี่ยนนายจ้าง</h3>
                    </div>
                    <p class="text-gray-600">แจ้งเปลี่ยนนายจ้างตาม พระราชกำหนดการบริหารจัดการการทำงานของคนต่างด้าว พ.ศ.2560 (แก้ไขเพิ่มเติมฉบับที่ 2 พ.ศ. 2561) กำหนดให้แรงงานต่างด้าวสามารถเปลี่ยนนายจ้างได้</p>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-2">
                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">บริการต่ออายุเอกสารแรงงานต่างด้าว</h3>
                    </div>
                    <p class="text-gray-600">บริการต่ออายุเอกสารแรงงานต่างด้าว ทุกประเภท</p>
                </div>

                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg mt-2">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.042A8.967 8.967 0 006 11c0 5.105 4.116 9.21 9.226 9.21.807 0 1.598-.105 2.362-.305a.765.765 0 01.376-.025c.042.194.067.393.067.597 0 .204-.025.402-.067.597a.772 772 0 01-.376.025C15.802 20.805 15.01 21 14.226 21 9.116 21 5 16.895 5 11c0-4.084 2.532-7.585 6.042-8.958a8.967 8.967 0 016.338-2.368c.056.248.105.492.156.725a.765.765 0 01.237.468c.041.127.062.262.062.4a.772 772 0 01-.237.468c-.05.233-.111.458-.175.666a10.238 10.238 0 01-6.338 2.368z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">บริการทำหนังสือเดินทาง</h3>
                    </div>
                    <p class="text-gray-600">บริการทำหนังสือเดินทาง สำหรับแรงงานต่างด้าว สัญชาติ พม่า ลาว กัมพูชา อย่างมืออาชีพ</p>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-2">
                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">บริการรับต่อ VISA</h3>
                    </div>
                    <p class="text-gray-600">บริการรับต่อ VISA แรงงานต่างด้าว</p>
                </div>

                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg mt-2">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.042A8.967 8.967 0 006 11c0 5.105 4.116 9.21 9.226 9.21.807 0 1.598-.105 2.362-.305a.765.765 0 01.376-.025c.042.194.067.393.067.597 0 .204-.025.402-.067.597a.772 772 0 01-.376.025C15.802 20.805 15.01 21 14.226 21 9.116 21 5 16.895 5 11c0-4.084 2.532-7.585 6.042-8.958a8.967 8.967 0 016.338-2.368c.056.248.105.492.156.725a.765.765 0 01.237.468c.041.127.062.262.062.4a.772 772 0 01-.237.468c-.05.233-.111.458-.175.666a10.238 10.238 0 01-6.338 2.368z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">รายงานตัว 90 วัน</h3>
                    </div>
                    <p class="text-gray-600">บริการจัดการการ รายงานตัว 90 วัน ของแรงงานต่างด้าว</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-2">
                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">แจ้งแรงงานต่างด้าวเข้า – ออกจากงาน</h3>
                    </div>
                    <p class="text-gray-600">บริการแจ้งเข้า-แจ้งออก แรงงานต่างด้าวถูกต้องตามกฏหมาย</p>
                </div>

                <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg mt-2">
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.042A8.967 8.967 0 006 11c0 5.105 4.116 9.21 9.226 9.21.807 0 1.598-.105 2.362-.305a.765.765 0 01.376-.025c.042.194.067.393.067.597 0 .204-.025.402-.067.597a.772 772 0 01-.376.025C15.802 20.805 15.01 21 14.226 21 9.116 21 5 16.895 5 11c0-4.084 2.532-7.585 6.042-8.958a8.967 8.967 0 016.338-2.368c.056.248.105.492.156.725a.765.765 0 01.237.468c.041.127.062.262.062.4a.772 772 0 01-.237.468c-.05.233-.111.458-.175.666a10.238 10.238 0 01-6.338 2.368z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900">รับบริหารจัดการแรงงานต่างด้าวในโรงงานแทนฝ่ายบุคคล
                        </h3>
                    </div>
                    <p class="text-gray-600">บริการรับ บริหารจัดการแรงงานต่างด้าวแทนฝ่ายบุคคล ในโรงงาน ลดภาระนายจ้างเรื่องเอกสารแรงงานต่างด้าว</p>
                </div>
            </div>





        </div>
    </section>



    <section class="bg-gray-50  py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">ข่าวสาร และความรู้</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="border border-gray-200 rounded-lg p-6">
                    <div class="flex justify-center mb-4">
                        <img src="your-image-1.jpg" alt="Article 1" class="h-40 w-full object-cover rounded-md">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">แรงงานต่างด้าว MOU คืออะไร</h3>
                    <p class="text-gray-600 mb-4">Over the past year, Volosoft has undergone many changes! After months of
                        preparation.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read in 2 minutes</a>
                </div>
                <div class="border border-gray-200 rounded-lg p-6">
                    <div class="flex justify-center mb-4">
                        <img src="your-image-2.jpg" alt="Article 2" class="h-40 w-full object-cover rounded-md">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">สวัสดิการ และประกันสังคมแรงงานต่างด้าว</h3>
                    <p class="text-gray-600 mb-4">Over the past year, Volosoft has undergone many changes! After months of
                        preparation.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read in 12 minutes</a>
                </div>
                <div class="border border-gray-200 rounded-lg p-6">
                    <div class="flex justify-center mb-4">
                        <img src="your-image-3.jpg" alt="Article 3" class="h-40 w-full object-cover rounded-md">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">สิ่งที่นายจ้างต้องรู้ ก่อนจ้างแรงงานต่างด้าว</h3>
                    <p class="text-gray-600 mb-4">Over the past year, Volosoft has undergone many changes! After months of
                        preparation.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read in 8 minutes</a>
                </div>
                <div class="border border-gray-200 rounded-lg p-6">
                    <div class="flex justify-center mb-4">
                        <img src="your-image-4.jpg" alt="Article 4" class="h-40 w-full object-cover rounded-md">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">การจ้างแรงงานต่างด้าว</h3>
                    <p class="text-gray-600 mb-4">Over the past year, Volosoft has undergone many changes! After months of
                        preparation.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read in 4 minutes</a>
                </div>
            </div>
        </div>
    </section>

@endsection
