<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
      <link rel="stylesheet" href="public/styles.css">
    <title></title>
  </head>
  <body>

    <div>
      <!--HEADER-->
      <?php include 'src/includes/header.php';?>
    </div>

    <div class="w-full h-96 relative border-2 group">
      <img src="src/images/about.jpg" class="h-full w-full object-cover absolute mix-blend-overlay bg-blue-400 group-hover:blur">
      <div class="p-5">
          <h1 class="text-white flex items-center justify-center h-96 text-2xl sm:text-6xl font-body  w-full ">About Us</h1>
      </div>
    </div>
    <div class="w-full h-full">
        <h1 class="font-body pt-5 text-4xl flex items-center justify-center text-gray-800">VetCares</h1>
      <div class="w-full h-full flex items-center justify-center leading-10 text-justify">
        <p class="p-5 w-[1000px] text-center">
          VetCares is a veterinary clinic that aims to give
          the best services to pets everywhere with our wide
          range of services including grooming and assessing your pet's health
          through <strong>Examinations and Diagnosis, Endoscopy, Laboratory,
          </strong> and <strong> Pharmacy services</strong>. Futhermore, our clinic is attended by
          professional veterinarians with great expertise to only give the best treatment to your pets. With the current pandemic protocols, our clinic schedules
          appointments accordingly. We also observe proper procedures
          when handling the transactions in a face to face manner. We hope that
          you will abide with these procedures upon claiming our services.
          We absolutely love and are looking forward to work with you! We are located at 101 Anonas, Sta. Mesa, Manila. <br/>For further inquiries
          you can reach us with the following contact details: <br/> Mobile: <strong>+63-912-356-7891 </strong>| 
          Telephone: <strong>(075)123-456</strong> |
          <strong>vetcares@care4pets.com</strong></p>
      </div>
      <div class="">
          <div class="w-full h-full flex items-center justify-center leading-10 text-justify">
             <p class="font-body pt-5 text-4xl flex items-center justify-center text-black">Our veterinarians</p>
                 </div>
                 <div class="w-full h-full flex items-center justify-center leading-10 text-justify">
                      <img src="src/images/Dr1.png" class="pt-20 w-96 h-96 box-border">
                 </div>
                 <div class="w-full h-full flex items-center justify-center leading-10 text-justify">
                      <p class="font-mono text2">Dr. Quack</p>
                 </div>

                 <div class="w-full h-full flex items-center justify-center leading-10 text-justify">
                      <img src="src/images/dr2.jpg" class="pt-20 w-96 h-96 box-border ">
                 </div>

                 <div class="w-full h-full pb-20 flex items-center justify-center leading-10 text-justify">
                      <p class="font-mono text2">Dr. Doge</p>
                 </div>
      </div>
    </div>
    <!--FOOTER-->
    <?php include 'src/includes/footer.php';?>
    
    <!--JAVASCRIPT FILES-->
    <script src="src/javascript/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

  </body>
</html>
