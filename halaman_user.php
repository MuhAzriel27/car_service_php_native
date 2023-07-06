<?php
session_start();
?>
<!-- <br>
Silakan Logout dengan klik link <a href="logout.php">Di sini</a> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Final Project</title>
    <style>
        body {
            background: #DCE35B;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #45B649, #DCE35B);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #45B649, #DCE35B);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</head>

<body>
    <div>
        <!-- Navbar Start -->
        <header id="header" class="bg-white shadow-md fixed top-0 left-0 w-full flex items-center z-10">
            <div class="container">
                <div class="items-center justify-between relative md:flex md:justify-between md:items-baseline">
                    <div class="px-4">
                        <a href="#" class="font-extrabold text-3xl text-emerald-300 block py-6 md:text-2xl">Final Project</a>
                    </div>
                    <div class="flex items-center px-4">
                        <ul class="flex mb-5 md:flex md:visible md:items-center md:mt-0 justify-end">
                            <li><a href="#" class="ml-0 mx-6 font-semibold text-gray-600 md:text-lg md:font-semibold hover:text-white duration-500 hover:bg-emerald-400 p-3 rounded-lg">HOME</a></li>
                            <li><a href="#daftar_layanan" class="mx-6 font-semibold text-gray-600 md:text-lg md:font-semibold hover:text-white duration-500 hover:bg-emerald-400 p-3 rounded-lg">LAYANAN</a></li>
                            <li><a href="#form_layanan" class="mx-6 font-semibold text-gray-600 md:text-lg md:font-semibold hover:text-white duration-500 hover:bg-emerald-400 p-3 rounded-lg">RESERVASI</a></li>
                            <li><a href="logout.php" class="mx-6 font-semibold text-emerald-400 border border-emerald-400  md:text-lg md:font-semibold hover:text-white duration-500 hover:bg-emerald-400 p-3 rounded-lg">LOGOUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navbar End -->

        <section id="container" class="shadow-lg m-12 pt-[28px] pb-12 bg-gray-100 mt-36 rounded-xl">
            <!-- Hero Section Start -->
            <div id="hero" class="container flex flex-wrap">
                <div class="w-full px-4 flex flex-wrap">
                    <div class="px-4 flex flex-wrap">
                        <div class="max-w-xl mx-auto pt-10  mb-16 md:w-1/2 md:px-2 md:pt-2 md:justify-between md:mt-4">
                            <h1 class="font-bold text-4xl text-emerald-400 mb-2 text-center md:text-left">Selamat Datang,</h1>
                            <h2 class="font-semibold text-gray-700 text-4xl mb-4 text-center md:text-left"><?php echo $_SESSION['nama']; ?></h2>
                            <p class="font-medium text-gray-500 text-center mb-10 leading-relaxed md:text-left" style="text-align:justify;">Selamat datang di halaman website kami, bengkel mobil terpercaya untuk kebutuhan perawatan dan perbaikan kendaraan Anda! Kami dengan bangga menyediakan layanan profesional dan berkualitas tinggi untuk memastikan mobil Anda beroperasi dengan optimal. Dengan tim mekanik berpengalaman dan peralatan modern, kami siap mengatasi berbagai masalah mekanis dan elektrikal yang mungkin terjadi pada kendaraan Anda. Percayakan mobil Anda kepada kami dan rasakan perbedaan dalam kinerja dan keamanannya. Terima kasih telah mengunjungi halaman website kami, kami sangat berharap dapat melayani Anda dengan yang terbaik!</p>
                            <a href="#" class="mx-24 bg-emerald-400 p-3 rounded-full font-semibold text-white  md:text-lg md:font-semibold md:ml-0 hover:bg-white hover:border hover:border-emerald-400 hover:text-emerald-400 duration-300">Contact Us !</a>
                        </div>
                        <div class="w-full justify-end  px-4 md:w-1/2">
                            <div class="mt-3 pt-5 bg-gray-200 rounded-t-full md:rounded-none md:bg-gray-100 md:w-auto">
                                <img src="https://autonetmagz.com/wp-content/uploads/2013/04/2013-Honda-Accord-Tampak-Depan.jpg" alt="foto profil" class="h-400 w-500 mb-16 mx-auto bg-gradient-to-r  md:pr-0 md:bg-gradient-to-r from-emerald-500 to-lime-500  max-w-full w-auto rounded-xl md:mx-[1px]">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="container bg-gray-200 w-full px-1 mx-5 rounded-xl  mb-5">
                        <h1 class="m-8 font-bold text-3xl text-emerald-400 mb-9 md:text-3xl  md:my-10 text-center">Educational Background</h1>
                        <h2 class="font-medium text-gray-500 text-center mb-10 leading-relaxed">My Latest Educational History</h2>
                        <div class="flex-col rounded-2xl justify-between pt-5 gap-3 md:flex md:flex-row  md:w-auto">
                            <div class="m-5 p-3 md:rounded-2xl md:mx-8 md:px-12 md:pt-9 hover:p-5 md:hover:scale-125 ease-in-out duration-300">
                                <h2 class="text-lg font-bold text-gray-700">Al-Islam 2 Elementary Jamsaren Surakarta</h2>
                                <p>(2008 - 2014)</p>
                            </div>
                            <div class="m-5 p-3 md:rounded-2x md:mx-8 md:px-12 md:pt-9 hover:p-5  md:hover:scale-125 ease-in-out duration-300">
                                <h2 class="text-lg font-bold text-gray-700">State Junior High 10 Surakarta</h2>
                                <p>(2014 - 2017)</p>
                            </div>
                            <div class="m-5 p-3 md:rounded-2xl md:mx-8 md:px-12 md:pt-9 hover:p-5  md:hover:scale-125 ease-in-out duration-300">
                                <h2 class="text-lg font-bold text-gray-700">State High 2 Surakarta</h2>
                                <p class="w-full">(2017 - 2020)</p>
                            </div>
                            <div class="m-5 p-3 md:rounded-2xl md:mx-8 md:px-12 md:pt-7 hover:p-5  md:hover:scale-125 ease-in-out duration-300">
                                <h2 class="text-lg font-bold text-gray-700">University of Muhammadiyah Surakarta</h2>
                                <p class="w-auto">(2020 - Now)</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- Hero Section End -->

            <!-- Portofolio Section Start -->
            <section id="daftar_layanan" class="m-12 pt-12 pb-16 bg-gray-100 mt-5 rounded-xl">
                <div class="container ">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h1 class="m-8 font-bold text-3xl text-emerald-400 mb-9 md:text-4xl  md:my-10 text-center">Layanan Kami</h1>
                            <!-- <h2 class="font-bold text-gray-700 text-2xl mb-4">Latest Portofolio</h2>
                            <p class="font-medium text-gray-500 text-center mb-10 leading-relaxed">These are not real portofolios! It's just a dummy portos!</p> -->
                        </div>
                    </div>

                    <div class="w-full px-5 flex flex-wrap  md:w-auto">
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://trevsautomotive.com/wp-content/uploads/2018/11/working_on_engine.jpg" alt="computer" width="w-full" class="h-400">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 my-5">Checkup Mesin</h3>
                            <p class="font-medium text-base text-gray-500" style="text-align: justify;">Layanan check up mesin mobil kami memberikan pengecekan menyeluruh untuk memastikan kesehatan mesin kendaraan Anda. Tim teknisi berpengalaman akan melakukan pemeriksaan komponen kritis seperti sistem bahan bakar, sistem pendingin, sistem pelumasan, dan sistem pengapian. Kami akan mengidentifikasi masalah potensial, memberikan rekomendasi perbaikan, dan menjaga mesin mobil Anda beroperasi dengan efisien dan andal. Percayakan check up mesin mobil Anda kepada kami dan nikmati perjalanan tanpa khawatir.</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://otodriver.com/image/load/800/0/gallery/cover-cara-ganti-oli-mobil-yang-benar-jangan-berdasarkan-jarak-tempuh-kilometer405.jpg" alt="electric vehicle" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 my-5">Ganti Oli</h3>
                            <p class="font-medium text-base text-gray-500" style="text-align: justify;">Dapatkan performa mesin optimal dan penghematan bahan bakar dengan layanan ganti oli mobil profesional kami. Tim terlatih kami akan mengganti oli lama dengan oli berkualitas tinggi, mengurangi keausan dan memperpanjang masa pakai mesin Anda. Percayakan perawatan mesin mobil Anda pada kami dan saksikan keandalan dan performa yang mengagumkan.</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://images.bisnis.com/posts/2019/05/23/926813/mobil-towing.jpg" alt="buildings" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 my-5">Derek/Towing</h3>
                            <p class="font-medium text-base text-gray-500" style="text-align: justify;">Kami menyediakan layanan derek mobil cepat dan handal untuk membantu Anda dalam situasi darurat. Dengan armada derek modern dan tim profesional yang siap tanggap, kami dapat mengatasi kendala seperti mogok mesin, ban bocor, atau kecelakaan jalan. Kami berkomitmen untuk memberikan pelayanan terbaik, memastikan mobil Anda diangkut dengan aman dan efisien ke tujuan yang diinginkan. Tersedia 24/7, hubungi kami sekarang dan percayakan mobil Anda pada layanan derek terpercaya.</p>
                        </div>
                        <!-- <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://source.unsplash.com/600x400?shoes" alt="shoes" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 mt-5">Simplicity of Shoes</h3>
                            <p class="font-medium text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laborum ipsam quam tempora voluptatum! Aliquid reiciendis deleniti quam similique illo, vel at voluptatem consequuntur consectetur animi corporis quae ipsa odit!</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://source.unsplash.com/600x400?movies" alt="movies" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 mt-5">New Upcoming Movies 2023!</h3>
                            <p class="font-medium text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laborum ipsam quam tempora voluptatum! Aliquid reiciendis deleniti quam similique illo, vel at voluptatem consequuntur consectetur animi corporis quae ipsa odit!</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://source.unsplash.com/600x400?social+media" alt="social media" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 mt-5">Portofolios for Social Media</h3>
                            <p class="font-medium text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laborum ipsam quam tempora voluptatum! Aliquid reiciendis deleniti quam similique illo, vel at voluptatem consequuntur consectetur animi corporis quae ipsa odit!</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://source.unsplash.com/600x400?food" alt="food" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 mt-5">Simple 2 Ingredients Food List</h3>
                            <p class="font-medium text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laborum ipsam quam tempora voluptatum! Aliquid reiciendis deleniti quam similique illo, vel at voluptatem consequuntur consectetur animi corporis quae ipsa odit!</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://source.unsplash.com/600x400?music" alt="music" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 mt-5">Knowing Music from Around The World!</h3>
                            <p class="font-medium text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laborum ipsam quam tempora voluptatum! Aliquid reiciendis deleniti quam similique illo, vel at voluptatem consequuntur consectetur animi corporis quae ipsa odit!</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://source.unsplash.com/600x400?sport" alt="sport" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 mt-5">Sports for Beginners</h3>
                            <p class="font-medium text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laborum ipsam quam tempora voluptatum! Aliquid reiciendis deleniti quam similique illo, vel at voluptatem consequuntur consectetur animi corporis quae ipsa odit!</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://source.unsplash.com/600x400?beach" alt="traveling" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 mt-5">Underrated Places You Need to Visit!</h3>
                            <p class="font-medium text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laborum ipsam quam tempora voluptatum! Aliquid reiciendis deleniti quam similique illo, vel at voluptatem consequuntur consectetur animi corporis quae ipsa odit!</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://source.unsplash.com/600x400?cigarrete" alt="health" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 mt-5">The Dangers of Vaping for Health</h3>
                            <p class="font-medium text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laborum ipsam quam tempora voluptatum! Aliquid reiciendis deleniti quam similique illo, vel at voluptatem consequuntur consectetur animi corporis quae ipsa odit!</p>
                        </div>
                        <div class="bg-gray-100 shadow-lg mb-12 p-4 md:w-1/3 hover:scale-110 ease-in-out duration-300">
                            <div class="rounded-md shadow md overflow-hidden">
                                <img src="https://source.unsplash.com/600x400?art" alt="art" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-700 mt-5">Philosophy of Arts</h3>
                            <p class="font-medium text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laborum ipsam quam tempora voluptatum! Aliquid reiciendis deleniti quam similique illo, vel at voluptatem consequuntur consectetur animi corporis quae ipsa odit!</p>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- Portofolio Section End -->

            <!-- Form Start -->
            <section id="form_layanan" class="pt-5 pb-32 px-40">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h1 class="m-8 font-bold text-3xl text-emerald-400 mb-9 md:text-4xl  md:my-10 text-center">Reservasi Layanan</h1>
                    <p class="font-medium text-gray-500 text-center mb-10 leading-relaxed">Silakan mengisi form di bawah ini jika Anda ingin melakukan reservasi layanan kami!</p>
                </div>
                <div class="bg-gray-100 shadow-lg p-10 rounded">

                    <form>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-black-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-emerald-400 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-emerald-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-emerald-400 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-emerald-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-emerald-400 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-emerald-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-emerald-400 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-emerald-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon (1234567890)</label>
                            </div>
                        </div>
                        <div>
                            <label>Tipe Layanan</label>
                            <div class="flex my-10">
                                <div class="flex items-center mr-5">
                                    <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-emerald-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-black-900 dark:text-black-300">Check Up Mesin</label>
                                </div>
                                <div class="flex items-center mx-5">
                                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-black-100 border-black-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-black-800 focus:ring-2 dark:bg-black-700 dark:border-black-600">
                                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-black-900 dark:text-black-300">Ganti Oli</label>
                                </div>
                                <div class="flex items-center mx-5">
                                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-black-100 border-black-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-black-800 focus:ring-2 dark:bg-black-700 dark:border-black-600">
                                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-black-900 dark:text-black-300">Towing</label>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="mx-24 px-10 bg-emerald-400 p-3 rounded-full font-semibold text-white  md:text-lg md:font-semibold md:ml-0 hover:bg-white hover:border hover:border-emerald-400 hover:text-emerald-400 duration-300">Submit</button>
                    </form>
                </div>



            </section>
            <!-- Form End -->
        </section>

        <!-- Footer Start -->
        <footer class="bg-gray-300 pt-6 pb-6">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 mb-2 text-gray-700 font-medium text-center text-xs">
                        <h3 class="font-bold text-sm text-center text-gray-700 mb-1">2022 Muhamad Azriel Alifiano ©</h3>
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