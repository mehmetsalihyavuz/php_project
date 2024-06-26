{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Table</title>
    <style>
        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
            font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
            min-height: 100vh;
            background-color: #f4f4f9;
        }

        .second-body {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            background: linear-gradient(135deg, #eee, #ddd);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 130px !important;
            height: 65px !important;
            pointer-events: none;
        }

        .divider {
            height: 2px;
            background-color: #941323;
            margin: 20px 0;
        }

        .table-header {
            background-color: #941323;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .table-users {
            box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
            overflow-x: auto;
            background-color: #ffffff;
            width: 100%;
            display: inline-block;
            box-sizing: border-box;
            margin: 0 auto;
        }

        .table-users table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-users th,
        .table-users td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #444;
        }

        .table-users th {
            background-color: #cbcbcb;
            text-transform: capitalize;
            letter-spacing: 0.1em;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .table-users th,
        .table-users td {
            text-align: center;
        }

        .table-users tr:hover {
            background-color: #f1f1f1;
        }

        .table-users tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table-users th,
        .table-users td {
            transition: background-color 0.3s ease;
        }

        .table-users th:hover,
        .table-users td:hover {
            background-color: #ddd;
        }

        @media (max-width: 1080px) {
            
            .table-users th,
            .table-users td {
                padding: 8px 10px;
                font-size: 14px;
            }

            .table-header {
                font-size: 18px;
                padding: 8px;
            }

            .logo {
                width: 80px !important;
                height: 35px !important;
            }
        }

        @media (max-width: 768px) {

            .table-users th,
            .table-users td {
                padding: 8px;
                font-size: 12px;
            }

            .table-header {
                font-size: 12px;
                padding: 6px;
            }

            .logo {
                width: 55px !important;
                height: 25px !important;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
            <img src="https://imgur.com/vZlw17g.png" alt="Logo" class="logo">
            <div class="divider"></div>
            <div class="table-header">
                <span>Licenses That Will Expire In a Week</span>
            </div>
            <div class="table-users">
                <table>
                    <thead>
                        <tr>
                            <th>Hosts</th>
                            <th>Port</th>
                            <th>Last Seen</th>
                            <th>Subject</th>
                            <th>Days to Expire</th>
                            <th>Issuer</th>
                            <th>Subject Alternative Names</th>
                            <th>Owner</th>
                            <th>Alert Days</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local</td>
                            <td></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local</td>
                            <td></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local</td>
                            <td></td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html> --}}











{{-- The above one with overflow, the font sizes needed to be fix for the small screens --}}














{{-- ------------------- THIS ONE ------------------- --}}




{{-- <!DOCTYPE html>
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
            min-height: fit-content;
            background-color: #f4f4f9;
        }

        .second-body {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            background: linear-gradient(135deg, #eee, #ddd);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 130px !important;
            height: 65px !important;
            pointer-events: none;
        }

        .divider {
            height: 2px;
            background-color: #941323;
            margin: 20px 0;
        }

        .table-header {
            background-color: #941323;
            font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
            color: #fff;
            padding: 27px;
            text-align: center;
            font-size: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .table-users {
            box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            width: 100%;
            box-sizing: border-box;
            margin: 0 auto;
            overflow-x: auto;
        }

        .table-users table {
            width: 100%;
            border-collapse: collapse;
            /* table-layout: auto;  *//* ------------------- ADDED ----------------*/
        }

        .table-users th,
        .table-users td {
            /* padding: 14px 16px; */
            /* margin: 5px 7px; */
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #444;
            word-wrap: normal; /* ------------------- ADDED ----------------*/
        }

        .table-users th {
            /* padding: 15px 15px 15px 15px; */
            padding: 15px 10px;
            font-size: 13px;
            font-weight: 500 !important;
            color: #000000 !important;
        }

        .table-users td {
            /* padding: 17px 17px 17px 17px; */
            padding: 17px 10px;
            font-size: 13px;
            font-weight: 300 !important;
        }

        .table-users th {
            background-color: #cbcbcb; 
            text-transform: capitalize;
            letter-spacing: 0.1em;
            position: relative;
            top: 0;
            z-index: 999;
        }

        .table-users tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        @media (max-width: 1080px) {
            .container {
                padding: 10px;
            }

            .table-users {
                overflow-x: auto; 
            }

            .table-users th,
            .table-users td {
                /* padding: 12px 14px; */
                padding: 12px 8px;
                font-size: 9px;
            }

            .table-header {
                font-size: 10px;
                padding: 5px;
            }

            .logo {
                width: 65px !important;
                height: 30px !important;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .table-users th,
            .table-users td {
                padding: 10px 12px;
                font-size: 8px;
            }

            .table-header {
                font-size: 8px;
                padding: 3px;
            }

            .logo {
                width: 50px !important;
                height: 25px !important;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 5px;
            }

            .table-users th,
            .table-users td {
                padding: 8px 10px;
                font-size: 7px;
            }

            .table-header {
                font-size: 6px;
                padding: 2px;
            }

            .logo {
                width: 40px !important;
                height: 20px !important;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
            <img src="https://imgur.com/vZlw17g.png" alt="Logo" class="logo">
            <div class="divider"></div>
            <div class="table-header">
                <span>7 GUN ICINDE SERTIFIKASI SONA ERECEK INTERNAL SERTIFIKALAR</span>
            </div>
            <div class="table-users">
                <table>
                    <thead>
                        <tr>
                            <th>Hosts</th>
                            <th>Port</th>
                            <th>Last Seen</th>
                            <th>Subject</th>
                            <th>Days to Expire</th>
                            <th>Issuer</th>
                            <th>Subject Alternative Names</th>
                            <th>Owner</th>
                            <th>Alert Days</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local, DNS:sectrailcmprod.local</td>
                            <td>abc.def@bntpro.com</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local</td>
                            <td></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local</td>
                            <td></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local</td>
                            <td></td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
 --}}



<x-mail::licensetable.license-message {{-- :job="$job" :url="$url" --}}>

</x-mail::licensetable.license-message>









{{--  Table-layout:fixed Table, needed to be fixed --}}







{{-- <!DOCTYPE html>
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
            min-height: fit-content;
            background-color: #f4f4f9;
        }

        .second-body {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            background: linear-gradient(135deg, #eee, #ddd);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 130px !important;
            height: 65px !important;
            pointer-events: none;
        }

        .divider {
            height: 2px;
            background-color: #941323;
            margin: 20px 0;
        }

        .table-header {
            background-color: #941323;
            font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
            color: #fff;
            padding: 27px;
            text-align: center;
            font-size: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .table-users {
            box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            width: 100%;
            box-sizing: border-box;
            margin: 0 auto;
        }

        .table-users table {
            width: 100%;
            border-collapse: collapse;
            table-layout: auto;
        }

        .table-users th,
        .table-users td {
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #444;
            word-wrap: normal;
        }

        .table-users th {
            padding: 15px 10px;
            font-size: 13px;
            font-weight: 500 !important;
            color: #000000 !important;
        }

        .table-users td {
            padding: 17px 10px;
            font-size: 13px;
            font-weight: 300 !important;
        }

        .table-users th {
            background-color: #cbcbcb; 
            text-transform: capitalize;
            letter-spacing: 0.1em;
            position: relative;
            top: 0;
            z-index: 999;
        }

        .table-users tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table-users th,
        .table-users td {
            transition: background-color 0.3s ease;
        }

        @media (max-width: 1080px) {
            .container {
                max-width: 1080px;
                padding: 10px;
            }

            .table-users th,
            .table-users td {
                padding: 12px 8px;
                font-size: 11px;
            }

            .table-header {
                font-size: 14px;
                padding: 5px;
            }

            .logo {
                width: 65px !important;
                height: 30px !important;
            }
        }

        @media (max-width: 768px) {
            .container {
                max-width: 768px;
                padding: 10px;
            }

            .table-users th,
            .table-users td {
                padding: 10px 5px;
                font-size: 9px;
            }

            .table-header {
                font-size: 10px;
                padding: 3px;
            }

            .logo {
                width: 50px !important;
                height: 25px !important;
            }
        }

        @media (max-width: 480px) {
            .container {
                max-width: 480px;
                padding: 5px;
            }

            .table-users th,
            .table-users td {
                padding: 8px 2px;
                font-size: 7px;
            }

            .table-header {
                font-size: 8px;
                padding: 2px;
            }

            .logo {
                width: 40px !important;
                height: 20px !important;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
            <img src="https://imgur.com/vZlw17g.png" alt="Logo" class="logo">
            <div class="divider"></div>
            <div class="table-header">
                <span>Licenses That Will Expire In a Week</span>
            </div>
            <div class="table-users">
                <table>
                    <thead>
                        <tr>
                            <th>Hosts</th>
                            <th>Port</th>
                            <th>Last Seen</th>
                            <th>Subject</th>
                            <th>Days to Expire</th>
                            <th>Issuer</th>
                            <th>Subject Alternative Names</th>
                            <th>Owner</th>
                            <th>Alert Days</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local, DNS:sectrailcmprod.local, DNS:sectrailcmprod.local, DNS:sectrailcmprod.local</td>
                            <td>abc.def@bntpro.com</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local</td>
                            <td></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local</td>
                            <td></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10.34.24.181</td>
                            <td>443</td>
                            <td>2024-05-06 12:00:17</td>
                            <td>sectrailcmprod.local</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>rootCA</td>
                            <td>DNS:sectrailcmprod.local</td>
                            <td></td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
 --}}