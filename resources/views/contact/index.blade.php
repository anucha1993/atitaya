@extends('layouts.app-labour')

@section('content')
    <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="./carousel/ธัญพิมล.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
    </div>

    <!-- Hero -->
    <section class="bg-gray-900">
        <div class="max-w-screen-xl px-4 py-20 mx-auto text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">ติดต่อเรา</h1>
            <p class="mt-4 text-lg text-gray-300">สอบถามข้อมูลเพิ่มเติม หรือติดต่อฝ่ายบริการลูกค้าได้ทุกช่องทาง</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="max-w-screen-xl px-4 py-12 mx-auto">
        

        <div class="grid gap-8 md:grid-cols-2">
            <!-- Google Map -->
            <div>
                <h2 class="mb-4 text-2xl font-bold">แผนที่ตั้งบริษัท</h2>
                <iframe class="w-full h-96 border-0 rounded-lg shadow" loading="lazy" allowfullscreen
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.961660016907!2d100.56085781535061!3d13.730078501282226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f77e9ab31b1%3A0x4c4c8922d8fa592b!2z4LiB4Liy4LiH4LmA4LiE4LmJ4Liy4Lij4LiH4LmJ4Lit4Li44LiX4LiB4LmI4Liy4LiZ4LiE4LmB4LiB4LmH4LiE4Lia4LiZ4Lia4LmA4LiB4LmJ4LiZ4LiH4LiE4Lij4LiE4Lij4Lix4LiV!5e0!3m2!1sth!2sth!4v1620200000000!5m2!1sth!2sth"></iframe>
            </div>

            <!-- Company Photo -->
            <div>
                <h2 class="mb-4 text-2xl font-bold">บริษัท อทิตยา 2017 จำกัด</h2>
                <img src="{{ asset('images/contact/office.jpg') }}" alt="บริษัท อทิตยา 2017 จำกัด"
                    class="object-cover w-full h-96 rounded-lg shadow">
            </div>
        </div>
    </section>

    <br>
    <br>
@endsection
