<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
          <script src="javascript/script.js" charset="utf-8"></script>
    <title></title>
  </head>
  <body">
    <?php include'header.php' ?>
    <div class="p-20">
      <h1 class="text-4xl">Contact Us</h1>

      <section>
        <form class="md:ml-20"action="" method="post" class="w-full">
          <h1 class="text-2xl mt-10">Your Info</h1>
           <fieldset>
             <label for="Name">Name</label>
             <br><input class="border-2 border-black rounded-md" type="text" name="name" value=""><br>
             <label for="email">Email</label><br>
             <input class="border-2 border-black  rounded-md" type="email" name="email" value="">
           </fieldset>
           <fieldset>
             <legend>Your Message</legend>
             <label for="message"></label>
             <textarea class="border-black border-2 w-full md:w-1/2  rounded-md" name="message" rows="8" cols="80"></textarea>
           </fieldset>
           <p><input  class="p-2 border-2 border-black  rounded-md" type="submit" name="" value="Submit Message"></p>
        </form>
      </section>
    </div>
 
    <?php include'footer.php' ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  </body>
</html>
