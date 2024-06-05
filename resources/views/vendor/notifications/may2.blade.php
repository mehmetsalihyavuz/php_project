{{-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <style>
      body {
         background-color: #cce1e2; 
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
      }

      .header {
         background-color: #2c6268; 
         color: white;
         font-size: 1.5em;
         padding: 1rem;
         text-align: center;
         text-transform: uppercase;
      }

      .table-users {
         border: 1px solid #2c6268;
         border-radius: 10px; 
         box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
         max-width: calc(100% - 2em);
         margin: 1em auto;
         overflow: hidden;
         width: 800px;
      }

      table {
         width: 100%;
         border-collapse: collapse;
      }

      td, th { 
         color: #255154;
         padding: 10px; 
         text-align: center;
      }

      th { 
         background-color: #e6f3f3; 
         font-weight: 300;
      }

      tr {     
         &:nth-child(2n) { background-color: white; }
         &:nth-child(2n+1) { background-color: #e9f5f5; } 
      }

      .red-text {
         color: red;
      }

      .grey-background {
         background-color: grey;
      }
   </style>
</head>
<body>
   <div class="table-users">
      <div class="header">Licenses That Will Expire In A Month</div>
      
      <table cellspacing="0">
         <tr>
            <th>Company Name</th>
            <th>Expire Date</th>
            <th>Days to Expire</th>
         </tr>

         <tr>
            <td>Company A</td>
            <td class="grey-background">2024-06-15</td>
            <td class="red-text">15</td>
         </tr>

         <tr>
            <td>Company B</td>
            <td class="grey-background">2024-06-20</td>
            <td class="red-text">20</td>
         </tr>

         <tr>
            <td>Company C</td>
            <td class="grey-background">2024-06-25</td>
            <td class="red-text">25</td>
         </tr>
         
         <tr>
            <td>Company D</td>
            <td class="grey-background">2024-06-30</td>
            <td class="red-text">30</td>
         </tr>
      </table>
   </div>
</body>
</html>
 --}}

{{--  <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Licenses Expiration</title>
   <style>
      body {
         background-color: #f4f4f9;
         font-family: 'Helvetica Neue', Arial, sans-serif;
         margin: 0;
         padding: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
      }

      .container {
         width: 90%;
         max-width: 1000px;
         margin: 20px;
         box-shadow: 0 4px 8px rgba(0,0,0,0.1);
         border-radius: 10px;
         overflow: hidden;
         background-color: #ffffff;
      }

      .header {
         background-color: #2a9d8f;
         color: white;
         font-size: 1.8em;
         padding: 1.5rem;
         text-align: center;
         text-transform: capitalize;
         letter-spacing: 0.1em;
      }

      table {
         width: 100%;
         border-collapse: collapse;
         margin: 0;
      }

      th, td {
         padding: 15px;
         text-align: center;
         border-bottom: 1px solid #ddd;
      }

      th {
         background-color: #264653;
         color: #ffffff;
         font-weight: 600;
      }

      tr:nth-child(even) {
         background-color: #f9f9f9;
      }

      tr:hover {
         background-color: #f1f1f1;
      }

      .red-text {
         color: #e63946;
         font-weight: bold;
      }

      .grey-background {
         background-color: #e9ecef;
         border-radius: 5px;
         padding: 5px 10px;
      }

   </style>
</head>
<body>
   <div class="container">
      <div class="header">Licenses That Will Expire In A Month</div>
      
      <table>
         <tr>
            <th>Company Name</th>
            <th>Expire Date</th>
            <th>Days to Expire</th>
         </tr>

         <tr>
            <td>Company A</td>
            <td class="grey-background">2024-06-15</td>
            <td class="red-text">15</td>
         </tr>

         <tr>
            <td>Company B</td>
            <td class="grey-background">2024-06-20</td>
            <td class="red-text">20</td>
         </tr>

         <tr>
            <td>Company C</td>
            <td class="grey-background">2024-06-25</td>
            <td class="red-text">25</td>
         </tr>
         
         <tr>
            <td>Company D</td>
            <td class="grey-background">2024-06-30</td>
            <td class="red-text">30</td>
         </tr>
      </table>
   </div>
</body>
</html>
 --}}

 <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <style>
      .primary-body {
            display: block;
            padding: 0;
            margin: 0;
            font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
/*             background: linear-gradient(135deg, #ffcccc, #ffe6e6); */
            min-height: 100vh;
        }

        .second-body {
            width: 100%;
            display: block;
            overflow: hidden;
            /* background: linear-gradient(135deg, #d3d3d3, #ffffff); */
            /* background: linear-gradient(135deg, #a9a9a9, #c0c0c0); */
            background: linear-gradient(135deg, #696969, #a9a9a9);

            padding: 20px;
            box-sizing: border-box;
        }

      .header {
         background-color: #2c6268; 
         color: white;
         font-size: 25px;
         padding: 1rem;
         text-align: center;
         text-transform: capitalize;
      }

      .table-users {
         border: 1px solid #2c6268;
         border-radius: 10px; 
         box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
         max-width: calc(100% - 2em);
         margin: 1em auto;
         overflow: hidden;
         width: 800px;
      }

      table {
         width: 100%;
         border-collapse: collapse;
      }

      td, th {
         background-color: #f9f9f9;
         color: #255154;
         padding: 10px; 
         text-align: center;
      }

      th { 
         background-color: #e6f3f3; 
         font-weight: 300;
      }

      tr:nth-child(2n){
        background-color: red; 
      }

      tr:nth-child(2n+1){
        background-color: blue; 
      }

   </style>
</head>
<body class="primary-body">
   <div class="second-body">
    <div class="table-users">


         
        <div class="header">Licenses That Will Expire In A Month</div>
        
        <table cellspacing="10">
            <thead>
                <tr>
                   <th>Company Name</th>
                   <th>Expire Date</th>
                   <th>Days to Expire</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>Company A</td>
                   <td >2024-06-15</td>
                   <td>15</td>
                </tr>
        
                <tr>
                   <td>Company B</td>
                   <td >2024-06-20</td>
                   <td>20</td>
                </tr>
        
                <tr>
                   <td>Company C</td>
                   <td >2024-06-25</td>
                   <td>25</td>
                </tr>
                
                <tr>
                   <td>Company D</td>
                   <td >2024-06-30</td>
                   <td>30</td>
                </tr>
            </tbody>

        </table>
     </div>
   </div>
</body>
</html>