{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Table 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
            min-height: 100vh;
        }

        .second-body {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #eaeaea; 
        }

        .table-custom {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-collapse: collapse; 
        }

        .table-custom th,
        .table-custom td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd; 
        }

        .table-custom th {
            background-color: #007bff;
            color: #fff;
            text-transform: capitalize;
        }

        .table-custom tbody tr:hover {
            background-color: #f2f2f2;
        }

        .heading-section {
            font-size: 24px;
            color: #007bff;
            text-align: center;
            text-transform: capitalize;
            margin-bottom: 20px;
        }

        .logo-container {
            text-align: center;
            margin-top: 20px;
        }

        .logo {
            width: 150px;
            height: auto;
        }

        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }

        
        @media (max-width: 768px) {
            .second-body {
                padding: 15px;
            }
            .heading-section {
                font-size: 22px;
            }
            .table-custom th,
            .table-custom td {
                padding: 8px; 
            }
            .table-custom th,
            .table-custom td {
                font-size: 14px; 
            }
            .logo {
                width: 120px;
            }
        }

        @media (max-width: 480px) {
            .table-custom th,
            .table-custom td {
                padding: 5px; 
                font-size: 12px; 
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
            <div class="col-md-12 mb-5">
                <h2 class="heading-section">Licences Expiring Soon</h2>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table-custom" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>jacobthornton@email.com</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>larrybird@email.com</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>larrybird@email.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container">
                <div class="logo-container">
                    <div>
                        <div class="divider"></div>
                        <img src="https://i.imgur.com/e7Ejpv5.png" alt="Company Logo" class="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var table = document.getElementById("myTable");
        var rows = table.getElementsByTagName("tr");
        for (var i = 1; i < rows.length; i++) {
            var cell = rows[i].getElementsByTagName("td")[0];
            cell.textContent = i;
        }
    </script>
</body>

</html>
 --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
            min-height: 100vh;
        }

        .second-body {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #eaeaea;
        }

        .table-custom {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-collapse: collapse;
        }

        .table-custom th,
        .table-custom td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table-custom th {
            background-color: #007bff;
            color: #fff;
            text-transform: capitalize;
        }

        .table-custom tbody tr:hover {
            background-color: #f2f2f2;
        }

        .heading-section {
            font-size: 24px;
            color: #007bff;
            text-align: center;
            text-transform: capitalize;
            margin-bottom: 20px;
        }

        .logo-container {
            text-align: center;
            margin-top: 20px;
        }

        .logo {
            width: 150px !important;
            height: auto;
        }

        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }


        @media (max-width: 768px) {
            .second-body {
                padding: 15px;
            }

            .heading-section {
                font-size: 22px;
            }

            .table-custom th,
            .table-custom td {
                padding: 8px;
            }

            .table-custom th,
            .table-custom td {
                font-size: 14px;
            }

            .logo {
                width: 120px !important;
            }
        }

        @media (max-width: 480px) {

            .logo {
                width: 80px !important;
            }

            .table-custom th,
            .table-custom td {
                padding: 5px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
            <div>
                <h2 class="heading-section">Licences Expiring Soon</h2>
            </div>
            <div>
                <div class="table-responsive">
                    <table class="table-custom" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company Name</th>
                                <th>Expire Date</th>
                                <th>Days To Expire</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($job as $jobs)
                                <tr>
                                    <td></td>
                                    <td>{{ $jobs->title }}</td>
                                    <td>{{ $jobs->created_at }}</td>
                                    <td>{{ $jobs->salary }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div>
                        <div class="divider"></div>
                        <img src="https://i.imgur.com/e7Ejpv5.png" alt="Company Logo" class="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
 --}}



{{----------------- This one works ------------------------}}






{{--  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       
        .primary-body {
            font-family: Arial, sans-serif;
            display: block;
            padding: 0;
            margin: 0;
            min-height: 100vh;
        }

        .second-body {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #eaeaea;
        }

        .table-custom {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-collapse: collapse;
        }

        .table-custom th,
        .table-custom td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table-custom th {
            background-color: #007bff;
            color: #fff;
            text-transform: capitalize;
        }

        .table-custom tbody tr:hover {
            background-color: #f2f2f2;
        }
    
        .heading-section {
            font-size: 24px;
            color: #007bff;
            text-align: center;
            text-transform: capitalize;
            margin-bottom: 20px;
        }

        .logo-container {
            text-align: center;
            margin-top: 20px;
        }

        .logo {
            width: 150px !important;
            height: auto;
        }

        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }


        @media (max-width: 768px) {
            .second-body {
                padding: 15px;
            }

            .heading-section {
                font-size: 22px;
            }

            .table-custom th,
            .table-custom td {
                padding: 8px;
            }

            .table-custom th,
            .table-custom td {
                font-size: 14px;
            }

            .logo {
                width: 100px !important;
            }
        }

        @media (max-width: 480px) {

            .logo {
                width: 70px !important;
            }

            .table-custom th,
            .table-custom td {
                padding: 5px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
            <div>
                <h2 class="heading-section">Licences That Will Expire In A Week</h2>
            </div>
            <div>
                <div class="table-responsive">
                    <table class="table-custom" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company Name</th>
                                <th>Expire Date</th>
                                <th>Days To Expire</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($job as $jobs)
                                <tr>
                                    <td>{{ $loop->iteration}}</td> 
                                    <td>{{ $jobs->title }}</td>
                                    <td>{{ $jobs->created_at }}</td>
                                    <td>{{ $jobs->salary }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <div class="logo-container">
                    <div>
                        <div class="divider"></div>
                        <img src="https://i.imgur.com/e7Ejpv5.png" alt="Company Logo" class="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html> --}}


<x-mail::bluetable.blue-message :job="$job" :url="$url">

</x-mail::bluetable.blue-message>