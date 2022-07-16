<?php echo '
<div class="bg-gray-500 text-sm text-white shadow grid place-content-end pr-5">
        <a href="login.html">ADMIN LOGIN</a>
    </div>
    <div>
        <nav class="p-5 bg-white w-full shadow md:flex md:items-center md:justify-between">
            <div class="flex justify-between items-center">
                <span class="text-3xl text-gray-700 font-bold cursor-pointer">
                    <img class="h-10 inline" src="images/templogo.png">
                    VetCares
                </span>

                <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                    <button onclick="expandMenu()">
                        <ion-icon name="close-outline" class="mobileMenuBtn"></ion-icon>
                    </button>
                </span>

            </div>
            <div>
                <div class="hidden md:block">
                    <ul class="text-gray-900 flex md:items-center md:z-auto
                                bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7">
                        <li class="mx-5 mt-2 my-5 md:my-0">
                            <a href="index.php" class="
                            inline-block
                            relative
                            cursor-pointer
                            transition-all
                            duration-500
                            before:absolute
                            before:-bottom-2
                            before:left-1/2
                            before:-translate-x-1/2
                            before:w-0
                            before:h-0.5
                            before:rounded-full
                            before:opacity-0
                            before:transition-all
                            before:duration-500
                            before:bg-cyan-500
                            hover:before:w-full
                            hover:before:opacity-100">Home</a>
                        </li>
                        <li class="mx-5 my-5 md:my-0">
                            <a href="services.php" class="inline-block
                            relative
                            cursor-pointer
                            transition-all
                            duration-500
                            before:absolute
                            before:-bottom-2
                            before:left-1/2
                            before:-translate-x-1/2
                            before:w-0
                            before:h-0.5
                            before:rounded-full
                            before:opacity-0
                            before:transition-all
                            before:duration-500
                            before:bg-cyan-500
                            hover:before:w-full
                            hover:before:opacity-100">Services</a>
                        </li>
                        <li class="mx-5 my-5 md:my-0">
                            <a href="about.php" class="inline-block
                            relative
                            cursor-pointer
                            transition-all
                            duration-500
                            before:absolute
                            before:-bottom-2
                            before:left-1/2
                            before:-translate-x-1/2
                            before:w-0
                            before:h-0.5
                            before:rounded-full
                            before:opacity-0
                            before:transition-all
                            before:duration-500
                            before:bg-cyan-500
                            hover:before:w-full
                            hover:before:opacity-100">About Us</a>
                        </li>
                        <li class="mx-5 my-5 md:my-0">
                            <a href="contact.php" class="inline-block
                            relative
                            cursor-pointer
                            transition-all
                            duration-500
                            before:absolute
                            before:-bottom-2
                            before:left-1/2
                            before:-translate-x-1/2
                            before:w-0
                            before:h-0.5
                            before:rounded-full
                            before:opacity-0
                            before:transition-all
                            before:duration-500
                            before:bg-cyan-500
                            hover:before:w-full
                            hover:before:opacity-100">Contact Us</a>
                        </li>

                        <a href="appointment.html" target="_blank">
                            <button id="appointmentBtn" class="bg-slate-700 text-white px-6 py-1 mx-5 rounded hover:bg-gray-900 duration-500">
                                Book an Appointment
                            </button>
                        </a>
                    </ul>
                </div>
            </div>
            <!--Mobile Menu-->
            <div class="block md:hidden mobile-menu">
                <ul class="text-gray-900 bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7">
                    <li class="mx-5 mt-2 my-5 md:my-0">
                        <a href="index.php" class="
                        inline-block
                        relative
                        cursor-pointer
                        transition-all
                        duration-500
                        before:absolute
                        before:-bottom-2
                        before:left-1/2
                        before:-translate-x-1/2
                        before:w-0
                        before:h-0.5
                        before:rounded-full
                        before:opacity-0
                        before:transition-all
                        before:duration-500
                        before:bg-cyan-500
                        hover:before:w-full
                        hover:before:opacity-100">Home</a>
                    </li>
                    <li class="mx-5 my-5 md:my-0">
                        <a href="services.php" class="inline-block
                        relative
                        cursor-pointer
                        transition-all
                        duration-500
                        before:absolute
                        before:-bottom-2
                        before:left-1/2
                        before:-translate-x-1/2
                        before:w-0
                        before:h-0.5
                        before:rounded-full
                        before:opacity-0
                        before:transition-all
                        before:duration-500
                        before:bg-cyan-500
                        hover:before:w-full
                        hover:before:opacity-100">Services</a>
                    </li>
                    <li class="mx-5 my-5 md:my-0">
                        <a href="about.php" class="inline-block
                        relative
                        cursor-pointer
                        transition-all
                        duration-500
                        before:absolute
                        before:-bottom-2
                        before:left-1/2
                        before:-translate-x-1/2
                        before:w-0
                        before:h-0.5
                        before:rounded-full
                        before:opacity-0
                        before:transition-all
                        before:duration-500
                        before:bg-cyan-500
                        hover:before:w-full
                        hover:before:opacity-100">About Us</a>
                    </li>
                    <li class="mx-5 my-5 md:my-0">
                        <a href="contact.php" class="inline-block
                        relative
                        cursor-pointer
                        transition-all
                        duration-500
                        before:absolute
                        before:-bottom-2
                        before:left-1/2
                        before:-translate-x-1/2
                        before:w-0
                        before:h-0.5
                        before:rounded-full
                        before:opacity-0
                        before:transition-all
                        before:duration-500
                        before:bg-cyan-500
                        hover:before:w-full
                        hover:before:opacity-100">Contact Us</a>
                    </li>

                    <a href="appointment.html" target="_blank"> 
                        <button id="appointmentBtn" class="bg-slate-700 text-white px-6 py-1 mx-5 rounded hover:bg-gray-900 duration-500">
                            Book an Appointment
                        </button> 
                    </a>
                </ul>
            </div>
        </nav>
    </div>
'?>
