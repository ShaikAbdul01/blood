<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank And Donation</title>
    <!-- tailwind and daisy ui cdn -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- tailwind custom classes -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                        'blood-primary': '#DE3163',
                        'blood-primary-bg': 'rgba(235, 115, 81, 0.10)',
                    }
                }
            }
        }
    </script>

    <!-- custom styles -->
    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="font-poppins">
    <?php include('header.php'); ?>

    <main class="md:container md:mx-auto">
        <section class="bg-white px-4 py-12 md:py-24">
            <h3 class="text-5xl mb-12 font-semibold text-center">Contact <span class="text-blood-primary">Us</span></h3>
            <div class="max-w-6xl mx-auto relative bg-white rounded-lg py-6">
                <div class="grid lg:grid-cols-3 items-center">
                    <!-- Contact Info Section -->
                    <div class="grid sm:grid-cols-2 gap-4 z-20 relative lg:left-16 max-lg:px-4">
                        <div
                            class="flex flex-col items-center justify-center rounded-lg w-full h-44 p-4 text-center bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)]">
                            <h4 class="text-gray-800 text-base font-bold mt-4">Visit office</h4>
                            <p class="text-sm text-gray-600 mt-2">123 Main Street, City, Bangladesh</p>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center rounded-lg w-full h-44 p-4 text-center bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)]">
                            <h4 class="text-gray-800 text-base font-bold mt-4">Call us</h4>
                            <p class="text-sm text-gray-600 mt-2">018642762700</p>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center rounded-lg w-full h-44 p-4 text-center bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)]">
                            <h4 class="text-gray-800 text-base font-bold mt-4">Chat to us</h4>
                            <p class="text-sm text-gray-600 mt-2">info@shaik.com</p>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center rounded-lg w-full h-44 p-4 text-center bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)]">
                            <h4 class="text-gray-800 text-base font-bold mt-4">Fax</h4>
                            <p class="text-sm text-gray-600 mt-2">+15682342</p>
                        </div>
                    </div>

                    <!-- Form Section -->
                    <div class="lg:col-span-2 bg-blood-primary rounded-lg sm:p-10 p-4 z-10 max-lg:-order-1 max-lg:mb-8">
                        <h2 class="text-3xl text-white text-center font-bold mb-6">Contact us</h2>
                        <form action="contact_us.php" method="POST">
                            <div class="max-w-md mx-auto space-y-3">
                                <input type="text" name="name" placeholder="Name"
                                    class="w-full bg-gray-100 rounded-lg py-3 px-6 text-sm outline-none" required />
                                <input type="email" name="email" placeholder="Email"
                                    class="w-full bg-gray-100 rounded-lg py-3 px-6 text-sm outline-none" required />
                                <input type="text" name="phone" placeholder="Phone No."
                                    class="w-full bg-gray-100 rounded-lg py-3 px-6 text-sm outline-none" required />
                                <textarea name="message" placeholder="Message" rows="6"
                                    class="w-full bg-gray-100 rounded-lg px-6 text-sm pt-3 outline-none"
                                    required></textarea>
                                <button type="submit"
                                    class="text-gray-800 w-full relative bg-gray-300 hover:bg-red-400 font-semibold rounded-lg text-sm px-6 py-3 !mt-6">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            include 'connection.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get form data
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                $message = mysqli_real_escape_string($conn, $_POST['message']);

                if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
                    $query = "INSERT INTO contact_us (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
                    if (mysqli_query($conn, $query)) {
                        echo "<p class='mt-4 text-green-500 text-center'>Your message has been sent successfully!</p>";
                    } else {
                        echo "<p class='mt-4 text-red-500 text-center'>Error: " . mysqli_error($conn) . "</p>";
                    }
                } else {
                    echo "All fields are required!";
                }
                mysqli_close($conn);
            }
            ?>
        </section>

    </main>


    <?php include('footer.php') ?>


</body>

</html>