<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'clientsidebar.html' ?>
    <h1 class="md:ml-16 m-auto text-4xl text-white font-bold justify-center mt-10 text-center">Set Appointment</h1>
        <div class="">
          <div class=" ml-20 mt-20 md:mt-20 md:ml-60 md:mr-4 w-full h-60">
            <form class="" action="#" method="post">
              <div class="my-2">
                <label for="date" class="font-bold w-2">Date</label>
                <input type="date" name="date" placeholder="Appointment Date" class="ml-9 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">
              </div>

              <div class="my-2">
                <label for="time" class="font-bold">Time</label>
                <input type="text" name="time" placeholder="Appointment Time" class="ml-9 bg-blue-200 md:bg-blue-300 border-b-2 border-black">
              </div>

              <div class="my-2">
                <label for="pet" class="font-bold w-1/12">Pet Name</label>
                <select class=" bg-blue-200 md:bg-blue-300 border-b-2 border-black" name="pet">
                  <option selected>Select a Pet Type</option>
                  <option value="">Pet 1</option>
                  <option value="">Pet 2</option>
                  <option value="">Pet 3</option> <!--Temporary placeholder; might just retrieve from database-->
                </select>
              </div>

              <div class="my-2">
                <label for="service" class="font-bold w-1/12">Service(s)</label>
                <select class=" bg-blue-200 md:bg-blue-300 border-b-2 border-black" name="service">
                  <option value="">Examinations and Diagnosis</option>
                  <option value="">Endoscopy</option>
                  <option value="">Laboratory</option>
                  <option value="">Pharmacy</option>
                  <option value="">Health Certificates</option>
                </select>
              </div>

              <input 
                    type="submit" 
                    value="Request Appointment" 
                    class="my-2 border-gray-600 px-3 p-2 rounded bg-white text-black shadow-md hover:bg-blue-800 hover:text-white hover:shadow-lg">
            </form>
          </div>
        </div>
  </body>
</html>
