<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Final Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-image: url('https://vinsautogroup.com.sg/wp-content/uploads/2021/07/002-VAuG-0014-Z7-scaled.jpg');
            background-size: cover;
        }
    </style>
</head>

<body>
    <div>
        <!-- Navbar Start -->
        <header id="header" class="bg-slate-800 shadow-md fixed top-0 left-0 w-full flex items-center z-10">
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="items-center p-5">
                        <a href="#"><img src="logo2.png" alt="" class="object-cover h-20"></a>
                    </div>
                    <div class="items-center p-5">
                        <a href="#" class="mx-6 font-semibold text-slate-200 hover:text-slate-800 duration-500 hover:bg-slate-200 p-3 rounded-lg">HOME</a>
                        <a href=" #daftar_layanan" class="mx-6 font-semibold text-slate-200 hover:text-slate-800 duration-500 hover:bg-slate-200 p-3 rounded-lg">LAYANAN</a>
                        <a href=" login.php" class="mx-6 font-semibold text-slate-200 border border-slate-200 hover:text-slate-800 duration-500 hover:bg-slate-200 p-3 rounded-lg"><i class="fa fa-right-from-bracket px-2"></i>LOGIN</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navbar End -->

        <section id="container" class="h-fit shadow-lg m-10 pb-12 bg-slate-200 mt-32">
            <!-- Hero Section Start -->

            <section class="bg-center bg-no-repeat bg-[url('https://autonetmagz.com/wp-content/uploads/2013/04/2013-Honda-Accord-Tampak-Depan.jpg')] bg-gray-700 bg-blend-multiply bg-cover">
                <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat Datang</h1>
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Percayakan mobil Anda kepada kami dan rasakan perbedaan dalam kinerja dan keamanannya.</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">

                        <a href="#footer" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                            Hubungi Kami!
                        </a>
                    </div>
                </div>
            </section>
            <!-- Hero Section End -->

            <!-- Portofolio Section Start -->
            <section id="daftar_layanan" class="m-12 pt-12 pb-16 bg-slate-200 mt-5">
                <div class="container ">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h1 class="m-8 font-bold text-3xl text-slate-800 mb-9 md:text-4xl  md:my-10 text-center">Layanan Kami</h1>
                        </div>
                    </div>

                    <div class="w-full px-5 flex flex-wrap  md:w-auto">
                        <div class="bg-slate-200 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://trevsautomotive.com/wp-content/uploads/2018/11/working_on_engine.jpg" alt="computer" width="w-full" class="h-400">
                            </div>
                            <h3 class="font-semibold text-xl text-slate-800 my-5">Checkup Mesin</h3>
                            <p class="font-medium text-base text-slate-800" style="text-align: justify;">Layanan check up mesin mobil kami memberikan pengecekan menyeluruh untuk memastikan kesehatan mesin kendaraan Anda. Tim teknisi berpengalaman akan melakukan pemeriksaan komponen kritis seperti sistem bahan bakar, sistem pendingin, sistem pelumasan, dan sistem pengapian. Kami akan mengidentifikasi masalah potensial, memberikan rekomendasi perbaikan, dan menjaga mesin mobil Anda beroperasi dengan efisien dan andal. Percayakan check up mesin mobil Anda kepada kami dan nikmati perjalanan tanpa khawatir.</p>
                        </div>
                        <div class="bg-slate-200 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://otodriver.com/image/load/800/0/gallery/cover-cara-ganti-oli-mobil-yang-benar-jangan-berdasarkan-jarak-tempuh-kilometer405.jpg" alt="electric vehicle" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-slate-800 my-5">Ganti Oli</h3>
                            <p class="font-medium text-base text-slate-800" style="text-align: justify;">Dapatkan performa mesin optimal dan penghematan bahan bakar dengan layanan ganti oli mobil profesional kami. Tim terlatih kami akan mengganti oli lama dengan oli berkualitas tinggi, mengurangi keausan dan memperpanjang masa pakai mesin Anda. Percayakan perawatan mesin mobil Anda pada kami dan saksikan keandalan dan performa yang mengagumkan.</p>
                        </div>
                        <div class="bg-slate-200 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://images.bisnis.com/posts/2019/05/23/926813/mobil-towing.jpg" alt="buildings" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-slate-800 my-5">Derek/Towing</h3>
                            <p class="font-medium text-base text-slate-800" style="text-align: justify;">Kami menyediakan layanan derek mobil cepat dan handal untuk membantu Anda dalam situasi darurat. Dengan armada derek modern dan tim profesional yang siap tanggap, kami dapat mengatasi kendala seperti mogok mesin, ban bocor, atau kecelakaan jalan. Kami berkomitmen untuk memberikan pelayanan terbaik, memastikan mobil Anda diangkut dengan aman dan efisien ke tujuan yang diinginkan. Tersedia 24/7, hubungi kami sekarang dan percayakan mobil Anda pada layanan derek terpercaya.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portofolio Section End -->

            <!-- Form Start -->
            <section id="form_layanan" class="pt-5 pb-32 px-40">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h1 class="m-8 font-bold text-3xl text-slate-800 mb-9 md:text-4xl  md:my-10 text-center">Reservasi Layanan</h1>
                    <p class="font-medium text-slate-800 text-center mb-10 leading-relaxed">Hubungi kami jika Anda ingin melakukan reservasi layanan kami!</p>
                </div>



            </section>
            <!-- Form End -->
        </section>

        <!-- Footer Start -->
        <footer id="footer" class="bg-slate-800 pt-6 pb-6">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 mb-2 text-slate-200 font-medium text-center text-xs">
                        <h3 class="font-bold text-sm text-center text-slate-200 mb-1"> Muhamad Azriel Alifiano 2023</h3>
                        <p>l200200027@student.ums.ac.id</p>
                        <p>Surakarta, Central Java, Indonesia.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->


    </div>
    </div>
</body>

</html>