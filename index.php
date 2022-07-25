<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link rel="stylesheet" href="public/styles.css">
    <title></title>
  </head>
  <body class="text-green-900">
    <div class="">
      <div>
      <!--HEADER-->
      <?php include 'src/includes/header.php';?>
      </div>
      
      <div class="mt-8 grid lg:grid-cols-3 gap-3 mb-8">

      <div class="w-full h-96 relative border-2 group">
        <img src="src/images/law.png" class="h-full w-full object-cover absolute mix-blend-overlay bg-blue-400 group-hover:blur">
        <div class="p-5">
            <h1 class="text-gray-200 text-2xl sm:text-6xl font-body">VetCares</h1>
            <h2 class="text-white text-sm sm:text-2xl font-light mt-5">Appointment Policy</h2>
            <p class="flex  items-baseline text-sm text-gray-300 bg-gray-500 mt-10 md:mt-14 sm:mt-0 md:text-xl justify-end h-full w-full sm:text-gray-200 invisible group-hover:visible">
              Same day appointments will be allowed in times of free slots. Walk-ins will also be entertained, however, those who set appointments are prioritized. Also, Appointments shall not be cancelled without prior notice to avoid inconvenience.</p>
        </div>
      </div>

      <div class="w-full h-96 relative border-2 group">
        <img src="src/images/vet.png" class="w-full h-full object-contain absolute mix-blend-overlay bg-blue-300 group-hover:blur">
        <div class="p-5">
            <h1 class="text-black text-2xl sm:text-6xl font-body">VetCares</h1>
            <h2 class="text-black text-sm sm:text-3xl font-light mt-5"> Cares gently for your pets</h2>
            <div class="">

            </div>
            <p class="flex items-baseline mt-10 text-sm text-gray-900 bg-gray-500 md:mt-14 sm:mt-0 md:text-lg justify-end h-full w-full sm:text-black invisible group-hover:visible">
              We vow to treat your pets with care and ensure proper treatment regardless of breed or type of animal that will  be brought in our care. We ought to only bring the best services to you.</p>
        </div>
      </div>

      <div class="w-full h-96 relative border-2 group">
        <img src="src/images/pay.jpg" class="h-full w-full object-cover absolute mix-blend-overlay bg-blue-400 group-hover:blur">
        <div class="p-5">
            <h1 class="text-black text-2xl sm:text-6xl font-body">VetCares</h1>
            <h2 class="text-white text-sm sm:text-2xl font-light mt-5">Payment Policy</h2>

            <p class="flex  items-baseline  text-sm text-white bg-gray-500 mt-10 md:mt-14 sm:mt-0 md:text-xl justify-end h-full w-full sm:text-white invisible group-hover:visible">
              Payment shall be handed in person - before or after the services has been done. The clinic accepts cash or credit card as payments for customer convenience.</p>
        </div>
      </div>

      </div>

    <!--FOOTER-->
     <?php include 'src/includes/footer.php';?>
    </div>

    <!--JAVASCRIPT FILES-->
    <script src="src/javascript/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

  </body>
</html>
