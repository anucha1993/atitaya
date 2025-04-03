@extends('layouts.app-labour')

@section('content')
<div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
            <img src="./about/importer-about-0.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
</div>


<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-900 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-900 dark:text-white">เกี่ยวกับเรา</h2>
            <p><b>WHO WE ARE</b></p>
            <p class="mb-2">ด้วยประสบการณ์เข้าสู่ปีที่ 19 บริษัท นำคนต่างด้าวมาทำทางานในประเทศ
                อทิตยา 2017 จำกัด เราเป็นผู้ให้บริการจัดหา นำเข้าแรงงานต่างด้าว MOU
                ถูกกฎหมาย ในภาคอุตสาหกรรมตามระบบการนำเข้าแรงงานระหว่างประเทศ
                แรงงานต่างด้าว 3 สัญชาติ ได้แก่ คนงานลาว คนงานพม่า และคนงานกัมพูชา
                พร้อมบริการดำเนินการด้านเอกสารแรงงานต่างด้าวครบวงจร
                </p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-4 ml-4">
            <img class="w-full rounded-lg" src="./about/office-1.jpg" alt="office content 1" style="width: 750px">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="./about/office-2.jpg" alt="office content 2">
        </div>
    </div>
</section>



  <section class="bg-white dark:bg-gray-900">
    <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full dark:hidden" src="./about/license.jpg" alt="dashboard image" >
        {{-- <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image"> --}}
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">พันธกิจ : Mission</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                บริษัท อทิตยา 2017 จำกัด มุ่งมั่นที่จะเป็นผู้นำในการจัดหาแรงงานต่างด้าวที่มีคุณภาพและถูกต้องตามกฎหมาย เพื่อตอบสนองความต้องการของภาคธุรกิจในประเทศไทย เรามุ่งเน้นการสร้างความสัมพันธ์ที่ดีระหว่างนายจ้างและลูกจ้าง โดยมีพันธกิจหลักดังนี้:
                <ul>
                    <li><b>จัดหาแรงงานที่มีคุณภาพ: </b> เราคัดสรรแรงงานต่างด้าวที่มีทักษะและความสามารถตรงตามความต้องการของนายจ้าง เพื่อสนับสนุนการเติบโตของธุรกิจในประเทศไทย</li>
                    <li><b>ดำเนินการอย่างถูกต้องตามกฎหมาย: </b> เราให้ความสำคัญกับการดำเนินการทุกขั้นตอนตามกฎหมายและระเบียบข้อบังคับที่เกี่ยวข้อง เพื่อสร้างความมั่นใจและความน่าเชื่อถือให้กับนายจ้างและลูกจ้าง</li>
                    <li><b>สร้างความสัมพันธ์ที่ดี: </b> เรามุ่งมั่นที่จะสร้างความสัมพันธ์ที่ดีและยั่งยืนระหว่างนายจ้างและลูกจ้าง โดยให้ความสำคัญกับการสื่อสารและการแก้ไขปัญหาอย่างมีประสิทธิภาพ</li>
                    <li><b>พัฒนาคุณภาพชีวิตแรงงาน: </b>เราให้ความสำคัญกับการดูแลและพัฒนาคุณภาพชีวิตของแรงงานต่างด้าว โดยส่งเสริมสิทธิและสวัสดิการที่เหมาะสม</li>
                    <li><b>บริการที่ครบวงจรและเป็นเลิศ: </b>เราให้บริการที่ครบวงจรและเป็นเลิศ ตั้งแต่การจัดหาแรงงาน การดำเนินการด้านเอกสาร ไปจนถึงการดูแลและให้คำปรึกษาตลอดระยะเวลาการจ้างงาน</li>
                </ul>
            </p>
            บริษัท อทิตยา 2017 จำกัด มุ่งมั่นที่จะเป็นส่วนหนึ่งในการขับเคลื่อนเศรษฐกิจของประเทศไทย โดยการจัดหาแรงงานต่างด้าวที่มีคุณภาพและสร้างความสัมพันธ์ที่ดีระหว่างนายจ้างและลูกจ้าง
        </div>
    </div>
</section>

{{-- <section class="bg-white dark:bg-gray-900">
    <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        
    </div>
</section> --}}



  <br>
  <br>
  <br>

@endsection