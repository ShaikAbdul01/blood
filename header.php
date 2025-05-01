<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>

<body>
    <header class="md:container md:mx-auto">
        <nav>
            <div class="navbar bg-base-100">
                <div class="flex-1 ">
                    <div class="dropdown">
                        <label tabindex="0" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </label>
                        <ul tabindex="0"
                            class="menu menu-sm dropdown-content mt-3 z-[1] p-2 text-base shadow bg-base-100 rounded-box w-52">
                            <li><a href="http://localhost/Projects/Blood%20Bank/index.php">Home</a></li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/why_should.php">Why Donate
                                    Blood</a></li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/donate_blood.php">Become a
                                    Donar</a></li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/need_blood.php">Need
                                    Blood</a></li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/contact_us.php">Contact</a>
                            </li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/admin/login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-ghost normal-case text-sm lg:text-3xl">Blood Bank And Donation</a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu text-base menu-horizontal px-1">
                    <li><a href="http://localhost/Projects/Blood%20Bank/index.php">Home</a></li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/why_should.php">Why Donate
                                    Blood</a></li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/donate_blood.php">Become a
                                    Donar</a></li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/need_blood.php">Need
                                    Blood</a></li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/contact_us.php">Contact</a>
                            </li>
                            <li><a href="http://localhost/Projects/Blood%20Bank/admin/login.php">Login</a>
                            </li>


                    </ul>
                </div>
                <div class="">
                    <!-- <a class="btn bg-blood-primary text-white">Login</a> -->
                </div>
            </div>
        </nav>
        <!-- slider or carousel -->
        <div class="carousel w-full lg:h-[550px] bg-blood-primary-bg">
            <!-- slide 1 -->
            <div id="slide1" class="carousel-item relative w-full">
                <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24">
                    <div class="space-y-7 flex-1">
                        <h2 class="text-xl lg:text-4xl font-bold">
                            Join Our Community of
                            <br>
                            Lifesaving Blood Donors
                        </h2>
                        <p>
                            Heroes come in all forms. By donating blood, you join a dedicated community committed to
                            saving lives. Your single donation can help multiple patients in need, making you a hero in
                            their eyes.
                        </p>
                        <button class="btn bg-blood-primary text-white">Purchase</button>
                    </div>
                    <div class="flex-1">
                        <img src="image/blood1.jpg" class="w-[400px]" />
                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide4" class="btn btn-circle">❮</a>
                    <a href="#slide2" class="btn btn-circle">❯</a>
                </div>
            </div>
            <!-- slide 2 -->
            <div id="slide2" class="carousel-item relative w-full">
                <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24">
                    <div class="space-y-7 flex-1">
                        <h2 class="text-xl lg:text-4xl font-bold">

                            Small Act, Big Impact
                            <br>
                            – Donate Blood and Save Lives
                        </h2>
                        <p>
                            No matter how small it may seem, your blood donation has the power to create a significant
                            impact. Each drop can contribute to saving lives, whether it’s for a child battling cancer,
                            a mother during childbirth, or a patient undergoing surgery.
                        </p>
                        <button class="btn bg-blood-primary text-white">Purchase</button>
                    </div>
                    <div class="flex-1">
                        <img src="image/blood2.jpg" class="w-[400px]" />

                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide1" class="btn btn-circle">❮</a>
                    <a href="#slide3" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide3" class="carousel-item relative w-full">
                <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24">
                    <div class="space-y-7 flex-1">
                        <h2 class="text-xl lg:text-4xl font-bold">

                            Your Blood Donation is Crucial During Emergency Situations

                            <br>
                            During Emergency Situations
                        </h2>
                        <p>
                            During emergencies and natural disasters, the demand for blood increases dramatically. Your
                            timely donation ensures that hospitals and clinics are well-equipped to handle crises and
                            save lives when every second counts.

                        </p>
                        <button class="btn bg-blood-primary text-white">Purchase</button>
                    </div>
                    <div class="flex-1">
                        <img src="image/blood3.jpg" class="w-[400px]" />

                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide2" class="btn btn-circle">❮</a>
                    <a href="#slide4" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide4" class="carousel-item relative w-full">
                <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24">
                    <div class="space-y-7 flex-1">
                        <h2 class="text-xl lg:text-4xl font-bold">

                            Transform Lives by
                            <br>
                            Donating Blood Regularly
                        </h2>
                        <p>
                            Regular blood donations are vital to maintaining a steady supply for those in need. By
                            making blood donation a regular habit, you continuously contribute to the well-being of
                            patients and help build a healthier community.

                        </p>
                        <button class="btn bg-blood-primary text-white">Purchase</button>
                    </div>
                    <div class="flex-1">
                        <img src="image/blood4.jpg" class="w-[400px]" />

                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide3" class="btn btn-circle">❮</a>
                    <a href="#slide1" class="btn btn-circle">❯</a>
                </div>
            </div>
        </div>
    </header>
</body>

</html>