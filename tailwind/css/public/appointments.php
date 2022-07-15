<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'sidebar.html' ?>

      <table class="border-2 border-blue-800 ml-auto mr-auto mt-20 md:mt-20 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60 ">
        <caption class="font-extrabold text-2xl">Appointments</caption>
        <tr class="border-2 border-blue-800">
          <th class="w-1/12 border-2 border-blue-800">Patient</th>
          <th class="w-1/12 border-2 border-blue-800">Date</th>
          <th class="w-1/12 border-2 border-blue-800">Time</th>
          <th class="w-1/12 border-2 border-blue-800">Service Needed</th>
          <th class="w-1/12 border-2 border-blue-800">Pet</th>
          <th class="w-1/12 border-2 border-blue-800">Veterinary</th>
          <th class="w-1/12 border-2 border-blue-800">Status</th>
        </tr>
        <tr>
          <td class="border-2 border-blue-800">Pt1</td>
          <td class="border-2 border-blue-800">15/07/2022</td>
          <td class="border-2 border-blue-800">7:00 am</td>
          <td class="border-2 border-blue-800">Endoscopy</td>
          <td class="border-2 border-blue-800">Dog</td>
          <td class="border-2 border-blue-800">Dr.Doge</td>
          <td class="border-2 border-blue-800">
              <select class="border-blue-800 bg-blue-200 md:bg-blue-300">
                <option value="pending">Pending</option>
                <option value="accepted">Approved</option>
                <option value="successful">Complete</option>
                  <option value="successful">Reject</option>
               </select>
          </td>
        </tr>
      </table>


  </body>
</html>
