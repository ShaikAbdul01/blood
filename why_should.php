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
        <!-- Why should i donate blood -->
        <section class="py-16 px-4 lg:flex items-center">
            <div class="lg:w-1/2 pb-4">
                <h3 class="text-xl lg:text-4xl pb-4 font-semibold">Why Should I Donate Blood?</h3>
                <p>
                    Donating blood is a simple, selfless act that has a profound impact on the lives of others. Here are
                    several reasons why you should consider becoming a blood donor:

                    Donating blood can save lives. Every donation can help up to three people who are undergoing
                    surgeries, cancer treatments, or suffering from traumatic injuries. Blood banks and hospitals rely
                    on regular donations to maintain a stable supply for emergencies and routine medical procedures. By
                    donating, you support the health of your community.

                    There are health benefits for donors as well. Regular blood donation can help reduce the risk of
                    heart disease and cancer by lowering iron levels in your blood. Additionally, each donation includes
                    a mini-health checkup, which can help monitor your health.

                    The donation process is quick and easy, usually taking less than an hour, with the actual blood
                    donation lasting about 10-15 minutes. This small time investment can have a significant impact.

                    Donating blood creates a sense of community and altruism. It’s a simple act of kindness that can
                    bring people together and foster a sense of solidarity. In times of crisis, such as natural
                    disasters or accidents, the need for blood can spike. Regular donations ensure that blood banks are
                    prepared for these emergencies, providing critical support when it's needed most.

                    Moreover, blood donation is a safe procedure conducted under strict medical guidelines. Sterile
                    equipment is used, and the process is carried out by trained professionals to ensure donor safety.
                </p>

            </div>
            <div class="w-1\2 px-8">
                <img src="image/should1.jpg" alt="why should i donate blood">
            </div>
        </section>
    </main>
    <?php include('footer.php') ?>
</body>

</html>