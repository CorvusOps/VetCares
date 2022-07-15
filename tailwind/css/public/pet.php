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

      <table class="border-2 border-blue-800 m-auto md:mt-20 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
        <caption class="font-extrabold text-2xl">Pet Categories</caption>
        <tr class="border-2 border-blue-800">
          <th class="w-1/5 border-2 border-blue-800">Patient</th>
          <th class="w-1/5 border-2 border-blue-800">Pet Category</th>
          <th class="w-1/5 border-2 border-blue-800">Name</th>
        </tr>
        <tr>
          <td class="border-2 border-blue-800 top-0">Pt1</td>
          <td class="border-2 border-blue-800">Dog</td>
          <td class="border-2 border-blue-800 text-sm">Spotty</td>
        </tr>
      </table>
  </body>
</html>
