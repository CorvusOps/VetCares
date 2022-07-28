<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link rel="stylesheet" href="public/styles.css">
    <link rel="icon" href="src/images/templogo.png">
    <title>Services</title>
  </head>

  <body class="text-green-900">
    <div class="">
      <div>
        <!--HEADER-->
        <?php include 'src/includes/header.php';?>
      </div>

      <div class="w-full h-96 relative border-2 group">
        <img src="src/images/service.jpg" class="h-full w-full object-cover absolute mix-blend-overlay group-hover:blur">
        <div class="p-5">
            <h1 class="text-white flex items-center justify-center h-96 text-2xl sm:text-6xl font-body  w-full ">Services</h1>
        </div>
      </div>

      <div class="container mx-auto flex flex-wrap my-8 justify-center">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
          <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded border-2" >
            <div class="px-6 py-4">
              <i class="fa fa-cog"></i>
              <h1 class="font-bold mb-2">Examinations and Diagnosis</h1>
              <hr>
              <p class="text-black mt-4 pb-4 text-center">
              Our clinic offers physical examinations and diagnosis for your pets to ensure that their health are in good shape,
              or identify underlying conditions making your pets sick
            </p>
            </div>
          </div>
          <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded border-2">
            <div class="px-6 py-4">
              <i class="fa fa-cog"></i>
              <h1 class="font-bold mb-2">Endoscopy</h1>
              <hr>
              <p class="text-black mt-4 pb-4 text-center">
              Our veterinaries can perform endoscopy which envolves a fiber optic endoscope 
              which can help identify foreign objects that is present within the pet's body and gives information whether the pet's organs are in normal state
              </p>
            </div>
          </div>
          <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded border-2">
            <div class="px-6 py-4">
              <i class="fa fa-cog"></i>
              <h1 class="font-bold mb-2">Laboratory</h1>
              <hr>
              <p class="text-black mt-4 pb-4 text-center">
              Our clinic is equipped with needed equipments for diagnosis that needs laboratory testings such as
              parasite testing and urine analysis.We also do blood testings such as complete blood
              count that analyzes the number of blood cells, Blood chemistry which analyzes the
              chemicals present in the pet's blood.
              </p>
            </div>
          </div>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 mt-8">
          <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded border-2" >
            <div class="px-6 py-4">
              <i class="fa fa-cog"></i>
              <h1 class="font-bold mb-2">Pharmacy</h1>
              <hr>
              <p class="text-black mt-4 pb-4 text-center">
              Our clinic can provide medicines to your pets, you can bring prescription to us and we will take care of the rest.
              Our clinic can accomodate most of the medicines needed for typical diseases on pets such as antibiotics, antiparasitics, antifungals, and pain relievers.
            </p>
            </div>
          </div>
          <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded border-2">
            <div class="px-6 py-4">
              <i class="fa fa-cog"></i>
              <h1 class="font-bold mb-2">Health Certificates</h1>
              <hr>
              <p class="text-black mt-4 pb-4 text-center">
              Our pharmacy is also capable of giving health certificates for your pets for various use.
            </p>
            </div>
          </div>
          <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded border-2">
            <div class="px-6 py-4">
              <i class="fa fa-cog"></i>
              <h1 class="font-bold mb-2">Grooming and Boarding</h1>
              <hr>
              <p class="text-black mt-4 pb-4 text-center">
              Our clinic offers comprehensive grooming packages, 
              as well as short-and long-term accommodation packages for owners who need to leave their pets in our care temporarily.
              </p>
            </div>
          </div>
        </div>

    </div>

  <!--FOOTER-->
  <?php include 'src/includes/footer.php';?>
  
   <script src="src/javascript/script.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
  </body>
</html>
