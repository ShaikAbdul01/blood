<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank And Donation</title>
    <!-- Tailwind and DaisyUI CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Tailwind Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blood-primary': '#DE3163',
                        'blood-primary-bg': 'rgba(235, 115, 81, 0.10)',
                    }
                }
            }
        }
    </script>
    <!-- Custom Styles -->
    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="font-poppins">
    <?php include('header.php'); ?>
    <main class="md:container md:mx-auto">
        <!-- Form Section -->
        <section class="py-16 px-4">
            <h3 class="text-5xl mb-12 font-semibold text-center">Need <span class="text-blood-primary">Blood</span></h3>
            <form method="post" action="" class="mx-auto">
                <div class="relative z-0 w-full mb-5 group">
                    <label for="blood_group"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Blood
                        Group</label>
                    <select name="blood" id="blood_group"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        required>
                        <option value="" disabled selected>Select your blood group</option>
                        <?php
                        include 'connection.php';
                        $sql = "SELECT * FROM blood";
                        $result = mysqli_query($conn, $sql) or die("Query unsuccessful.");
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <option value="<?php echo $row['blood_group']; ?>">
                                <?php echo $row['blood_group']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <textarea name="address" id="floating_reason"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" "></textarea>
                    <label for="floating_reason"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Reason,
                        why do you need blood?</label>
                </div>
                <button type="submit" name="search"
                    class="text-white bg-[#DE3163] hover:bg-[#f82561] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </form>
            <?php
            if (isset($_POST['search'])) {
                $bg = $_POST['blood'];
                $sql = "SELECT * FROM donars WHERE bloodtype = '{$bg}' ORDER BY RAND() LIMIT 7";
                $result = mysqli_query($conn, $sql) or die("Query unsuccessful: " . mysqli_error($conn));

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="my-4 p-6 bg-white border border-gray-200 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-gray-900"><?php echo $row['name']; ?></h3>
                            <p class="text-gray-700">
                                <b>Blood Group: </b><?php echo $row['bloodtype']; ?><br>
                                <b>Mobile No.: </b><?php echo $row['phone']; ?><br>
                                <b>Gender: </b><?php echo $row['gender']; ?><br>
                                <b>Age: </b><?php echo $row['age']; ?><br>
                                <b>Address: </b><?php echo $row['address']; ?><br>
                            </p>
                        </div>
                        <?php
                    }
                } else {
                    echo '<div class="alert alert-danger">No Donor Found for your selected Blood Group</div>';
                }
            }
            ?>

        </section>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>
