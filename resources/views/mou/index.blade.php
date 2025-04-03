@extends('layouts.app-labour')

@section('content')
   <br>
    <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="./carousel/mou.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
        </div>
        </di>
    </div>

   

    <section class="bg-white py-5 ">
        <div class="container mx-auto px-4 max-w-screen-lg">
            <div class="text-center">
                <h2 class=" font-bold text-blue-800" style="font-size: 160px">MOU</h2>
                <p class="text-xl font-bold text-blue-800 mt-0">(Memorandum of Understanding)</p>
                <p class="text-xl  mt-0">การนำเข้าแรงงานจากประเทศเพื่อนบ้าน โดยเฉพาะในกลุ่มคนงานที่เข้ามาภายใต้
                    MOU (Memorandum of Understanding) เป็นกระบวนการที่มีระเบียบและกฎเกณฑ์ชัดเจน
                    " เพื่อให้มั่นใจว่าแรงงานที่เข้ามาทำงานในประเทศไทยมีคุณภาพและถูกต้องตามกฎหมาย "
                </p>
            </div>
        </div>
    </section>
    <div id="animation-carousel" class="relative w-800px h-600px mx-auto max-w-screen-xl">
        <div class="relative overflow-hidden rounded-lg">
            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="./image-mou/mou-0.png" class="block w-full h-full object-contain" alt="...">
            </div>
        </div>
    </div>


    <aside aria-label="Related articles" class="py-8 lg:py-12 bg-white dark:bg-gray-800 mx-full ">
        <div class="px-4 mx-auto max-w-screen-xl ">
            <div class="grid gap-12 sm:grid-cols-3 lg:grid-cols-3 justify-center">
                <article class="max-w-xs">
                    <img src="./image-mou/mou-1.jpg" class="mb-5 rounded-lg" alt="Image 1">
                </article>
                <article class="max-w-xs">
                    <img src="./image-mou/mou-2.jpg" class="mb-5 rounded-lg" alt="Image 1">
                </article>
                <article class="max-w-xs">
                    <img src="./image-mou/mou-3.jpg" class="mb-5 rounded-lg" alt="Image 1">
                </article>
            </div>
        </div>

    </aside>


    <aside aria-label="Related articles" class="py-8 lg:py-12 bg-gray-100 dark:bg-gray-800 mx-full ">
        <div class="px-4 mx-auto max-w-screen-xl ">
            <h2 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white ">การอบรมก่อนเริ่มงาน:</h2>
            <p class="text-xl  mt-0">
                อบรมด้านความปลอดภัย (Safety Training): เพื่อให้แรงงานมีความรู้และทักษะด้านความปลอดภัยในการทำงาน
                อบรมด้านกฎหมายและสิทธิแรงงาน: ให้แรงงานเข้าใจถึงสิทธิและหน้าที่ของตนเองตามคฎหมายแรงงานไทย
                อบรมด้านวัฒนธรรมและการปรับตัว:
                เพื่อช่วยให้แรงงานสามารดปรับตัวเข้ากับวัฒนธรรมและสภาพแวดล้อมการทำงานในประเทศไทยได้ดีขึ้น
            </p>
        </div>
    </aside>

    <aside aria-label="Related articles" class="py-8 lg:py-12 bg-white dark:bg-gray-800 mx-full ">
        <div class="px-8 mx-auto max-w-screen-xl ">
            <div class="grid gap-12 sm:grid-cols-4 lg:grid-cols-3 justify-center">
                <article class="max-w-xs">
                    <img src="./image-mou/mou-4.jpg" class="mb-5 rounded-lg" alt="Image 1">
                </article>
                <article class="max-w-xs">
                    <img src="./image-mou/mou-5.jpg" class="mb-5 rounded-lg" alt="Image 1">
                </article>
                <article class="max-w-xs">
                    <img src="./image-mou/mou-6.jpg" class="mb-5 rounded-lg" alt="Image 1">
                </article>
            </div>
        </div>

    </aside>
<hr>


@endsection
