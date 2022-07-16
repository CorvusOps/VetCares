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
        <h1 class="m-auto text-4xl font-extrabold justify-center mt-5 text-center">Records</h1>
        <div class="">
          <div class=" ml-20 mt-20 md:mt-20 md:ml-60 md:mr-4 w-full h-60">
            <form class="" action="index.html" method="post">
              <label for="date" class="font-bold w-2">Date</label>
              <input type="date" name="date" placeholder="Appointment Date" class="ml-9 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

              <br><label for="time" class="font-bold">Time</label>
              <input type="text" name="time" placeholder="Appointment Time" class="ml-9 bg-blue-200 md:bg-blue-300 border-b-2 border-black"><br>

              <label for="time" class="font-bold w-1/12">Time</label>
              <input type="text" name="time" placeholder="Time" class="ml-9 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

              <br><label for="pet" class="font-bold w-1/12">Pet Type</label>
              <input type="text" name="pet" placeholder="Pet Type" class="ml-2 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

              <br><label for="breed" class="font-bold w-1/12">Breed</label>
              <input type="text" name="breed" placeholder="Pet Breed" class="ml-7 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

              <br><label for="age" class="font-bold w-1/12">Vet</label>
              <input type="text" name="age" placeholder="Pet's Age" class="ml-12 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

              <br><label for="service" class="font-bold w-1/12">Service(s)</label>
              <select class=" bg-blue-200 md:bg-blue-300 border-b-2 border-black" name="service">
                <option value="">Examinations and Diagnosis</option>
                <option value="">Endoscopy</option>
                <option value="">Laboratory</option>
                <option value="">Pharmacy</option>
                <option value="">Health Certificates</option>
              </select>

              <br>
              <button type="submit" name="button" class="ml-20 mt-5 border-black border-2 p-2 rounded-md">Request Appointment</button>
            </form>
          </div>
        </div>
  </body>
</html>
