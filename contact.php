<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
      <link rel="stylesheet" href="public/styles.css">
    <title></title>
  </head>
  <body">

    <div>
      <!--HEADER-->
      <?php include 'src/includes/header.php';?>
    </div>

    <div class="md:flex md:items-center">
      <div class="p-10 ml-5 w-full">
        <h1 class="text-4xl">Contact Us</h1>
        <div class="group">
          <div class="p-5 w-full h-24 text-2xl mt-10 border-2 border-black text-black rounded-xl font-mono group-hover:text-white group-hover:bg-black">
              <h2>Mobile</h2>
              <p class="pl-20 text-sm md:text-2xl">+63-912-356-7891</p>
          </div>
        </div>
        <div class="group">
          <div class="p-5 w-full h-24 text-2xl mt-10 border-2 border-black text-black rounded-xl font-mono group-hover:text-white group-hover:bg-black">
              <h2>Telephone</h2>
              <p class="pl-20 text-sm md:text-2xl">(075)123-456</p>
          </div>
        </div>
        <div class="group">
          <div class="p-5 w-full h-24 text-2xl mt-10 border-2 border-black text-black rounded-xl font-mono group-hover:text-white group-hover:bg-black">
              <h2>Email</h2>
              <p class=" pl-10 md:pl-20 text-sm md:text-2xl">vetcares@care4pets.com</p>
          </div>
        </div>
      </div>

      <div class="bg-slate-100 mx-5"> <!--DIV for CONTACT FORM-->
          <form class="rounded-lg px-4 m-5 p-5" action="#" method="post">
              <div>
                  <label for="name">NAME</label>
                  <input 
                      class="my-3 p-1 border border-solid border-gray-300 w-full focus:outline-none focus:border-blue-600" 
                      type="text" 
                      name="name"
                      required>
                  <br/>
                  <label for="email">EMAIL</label>
                  <input 
                      class="my-3 p-1 border border-solid border-gray-300 w-full focus:outline-none focus:border-blue-600" 
                      type="email"
                      name="email"
                      required>
                  <br/>
                  <label for="contactNum" >PHONE NUMBER</label>
                  <input 
                      class="my-3 p-1 border border-solid border-gray-300 w-full focus:outline-none focus:border-blue-600" 
                      type="text" 
                      name="contactNum"
                      required>
                  <br/>

                  <label for="message">MESSAGE</label>
                  <textarea
                      class="my-3 p-1 border border-solid border-gray-300 w-full focus:outline-none focus:border-blue-600" 
                      type="text" 
                      name="message"> </textarea>
              </div>

              <div class="grid gap-3 place-items-center md:flex">
                  <input 
                      type="submit" 
                      value="Send Message" 
                      class=" w-full border-gray-600 px-8 p-2 rounded bg-blue-600 text-white shadow-md hover:bg-blue-800 hover:shadow-lg">
                  <input 
                      type="reset" 
                      value="Clear" 
                      class="w-full border-gray-600 px-20 p-2 rounded bg-gray-100 shadow-md hover:bg-gray-300 hover:shadow-lg">
              </div>
          </form>
        </div>
      </div>

    <!--FOOTER-->
    <?php include 'src/includes/footer.php';?>
    
    <script src="src/javascript/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

  </body>
</html>
