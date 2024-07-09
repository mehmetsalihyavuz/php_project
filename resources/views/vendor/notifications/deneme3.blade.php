{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&family=Courier+New:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Georgia:wght@400;700&family=Trebuchet+MS:wght@400;700&display=swap');

        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
            /* font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif; */
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
            height: 125px !important;
            max-height: 125px !important;
            pointer-events: none;
        }

        .divider {
            height: 2px;
            background-color: #1b3057;
            margin: 20px 0;
        }

        .table-header {
            background-color: #1b3057;
            font-family: Arial, sans-serif;
            text-transform: capitalize;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 15px;
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
            /* table-layout: auto;  */
        }

        .table-users th,
        .table-users td {
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #444;
            word-wrap: normal;

        }

        .table-users th {
            font-family: Arial, sans-serif;
            padding: 13px 9px;
            font-size: 13px;
            font-weight: 500 !important;
            color: #000000 !important;
        }

        .table-users td {
            font-family: Arial, sans-serif;
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

        /* .table-users tbody tr:nth-child(even) {
    background-color: #f9f9f9;
} */

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
                width: 90px !important;
                height: 90px !important;
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
                height: 50px !important;
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
                width: 25px !important;
                height: 25px !important;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">

            <div class="table-header">
                <span>7 gün İçinde sertifikası sona erecek internal sertifikalar</span>
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

            <div class="divider"></div>
            <img src="https://www.bntpro.com/media/2022/09/SecTrail-CM-Logo1.png" alt="Logo" class="logo">
        </div>
    </div>
</body>

</html>

 --}}








{{-- Yukardaki kodda:
    ----- logo aşağıda 
    ----- CM logosu ekli, 
    ----- header ve th tags için padding ve font-size azaltıldı --}}

{{-- CM Logosu, aşağıda --}}


























{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&family=Courier+New:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Georgia:wght@400;700&family=Trebuchet+MS:wght@400;700&display=swap');

        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
            /* font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif; */
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
            height: 125px !important;
            max-height: 125px !important;
            pointer-events: none;
        }

        .divider {
            height: 2px;
            background-color: #1b3057;
            margin: 20px 0;
        }

        .table-header {
            background-color: #1b3057;
            font-family: Arial, sans-serif;
            text-transform: capitalize;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 15px;
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
            /* table-layout: auto;  */
        }

        .table-users th,
        .table-users td {
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #444;
            word-wrap: normal;

        }

        .table-users th {
            font-family: Arial, sans-serif;
            padding: 13px 9px;
            font-size: 13px;
            font-weight: 500 !important;
            color: #000000 !important;
        }

        .table-users td {
            font-family: Arial, sans-serif;
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

        /* .table-users tbody tr:nth-child(even) {
    background-color: #f9f9f9;
} */

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
                width: 90px !important;
                height: 90px !important;
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
                height: 50px !important;
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
                width: 25px !important;
                height: 25px !important;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
            
            <img src="https://www.bntpro.com/media/2022/09/SecTrail-CM-Logo1.png" alt="Logo" class="logo">
            <div class="divider"></div>
            <div class="table-header">
                <span>7 gün İçinde sertifikası sona erecek internal sertifikalar</span>
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











{{-- Yukardaki kodda:
    --}}

{{-- CM Logosu, yukarıda --}}















{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .logo-divider {
            display: flex;
            align-items: center;
            width: 80%;
        }

        .logo1 {
            margin: 20px 0px;
            width: 70px !important;
            height: 50px !important;
        }

        .logo2 {
            width: 80px;
            height: 85px !important;
            margin: auto auto 20px auto;
        }

        .divider-line {
            width: 100%;
            flex-grow: 1;
            height: 2px;
            background-color: #1b3057;
            margin: 40px 20px;
            
        }
    </style>
</head>

<body>
    <div class="logo-divider">
        <img src="https://i.imgur.com/5CUUbS2.png" alt="Logo 1" class="logo1">
        <div class="divider-line"></div>
        <img src="https://www.bntpro.com/media/2022/09/SecTrail-CM-Logo1.png" alt="Logo 2" class="logo2">
    </div>
</body>

</html> --}}








{{--  Yukardaki kodda:
    
    ---> iki logo arası divider --}}










{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&family=Courier+New:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Georgia:wght@400;700&family=Trebuchet+MS:wght@400;700&display=swap');

        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
            /* font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif; */
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

        .logo-divider {
            display: flex;
            align-items: center;
            width: 100% !important;
        }

        .logo1 {
            margin: 20px 0px;
            width: 70px !important;
            height: 50px !important;
        }

        .logo2 {
            width: 80px;
            height: 85px !important;
            margin: auto auto 20px auto;
        }

        .divider-line {
            width: 100%;
            flex-grow: 1;
            height: 2px;
            background-color: #1b3057;
            margin: 40px 20px;
            
        }

        .table-header {
            background-color: #1b3057;
            font-family: Arial, sans-serif;
            text-transform: capitalize;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 15px;
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
            /* table-layout: auto;  */
        }

        .table-users th,
        .table-users td {
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #444;
            word-wrap: normal;

        }

        .table-users th {
            font-family: Arial, sans-serif;
            padding: 13px 9px;
            font-size: 13px;
            font-weight: 500 !important;
            color: #000000 !important;
        }

        .table-users td {
            font-family: Arial, sans-serif;
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

        /* .table-users tbody tr:nth-child(even) {
    background-color: #f9f9f9;
} */

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
                width: 90px !important;
                height: 90px !important;
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
                height: 50px !important;
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
                width: 25px !important;
                height: 25px !important;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">

            <div class="table-header">
                <span>7 gün İçinde sertifikası sona erecek internal sertifikalar</span>
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

            <div class="logo-divider">
                <img src="https://i.imgur.com/5CUUbS2.png" alt="Logo 1" class="logo1">
                <div class="divider-line"></div>
                <img src="https://www.bntpro.com/media/2022/09/SecTrail-CM-Logo1.png" alt="Logo 2" class="logo2">
            </div>
        </div>
    </div>
</body>

</html> --}}














{{-- Yukardaki kodda
    
    ---> Tablonun altına BntPro logosu ile CM logo eklendi// Bölmeler olmadan --}}

















{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&family=Courier+New:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Georgia:wght@400;700&family=Trebuchet+MS:wght@400;700&display=swap');

        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
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

        .logo-divider {
            display: flex;
            align-items: center;
            width: 100% !important;
        }

        .logo1 {
            margin: 20px 0px;
            width: 70px !important;
            height: 50px !important;
        }

        .logo2 {
            width: 80px;
            height: 85px !important;
            margin: auto auto 20px auto;
        }

        .divider-line {
            width: 100%;
            flex-grow: 1;
            height: 2px;
            background-color: #1b3057;
            margin: 40px 20px;

        }

        .table-header {
            background-color: #1b3057;
            font-family: Arial, sans-serif;
            text-transform: capitalize;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 15px;
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
        }

        .table-users th,
        .table-users td {
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #444;
            /* padding: 13px 9px; */
            word-wrap: normal;
        }

        .table-users th {
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 600 !important;
            color: #000000 !important;
            background-color: #cbcbcb;
            text-transform: capitalize;
            letter-spacing: 0.1em;
            position: relative;
            top: 0;
            z-index: 999;
        }

        .table-users td {
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 300 !important;
        }

        .table-users th {
            padding: 12px 17px !important;
        }
        .table-users td {
            padding: 17px 12px !important;
        }

        .table-users th,
        .table-users td {
            border-right: 1px solid #ddd;
        }

        .table-users th:last-child,
        .table-users td:last-child {
            border-right: none;
        }

        .table-users tr {
            border-bottom: 1px solid #ddd;
        }

        .table-users tr:last-child {
            border-bottom: none;
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
                padding: 10px 7px;
                font-size: 8px;
            }

            .table-header {
                font-size: 9px;
                padding: 5px;
            }

            .logo1 {
                width: 50px !important;
                height: 35px !important;
            }

            .logo2 {
                width: 60px;
                height: 60px !important;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .table-users th,
            .table-users td {
                padding: 8px 6px;
                font-size: 6px;
            }

            .table-header {
                font-size: 8px;
                padding: 3px;
            }

            .logo {
                width: 50px !important;
                height: 50px !important;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 5px;
            }

            .table-users th,
            .table-users td {
                padding: 7px 5px;
                font-size: 5px;
            }

            .table-header {
                font-size: 6px;
                padding: 2px;
            }

            .logo {
                width: 25px !important;
                height: 25px !important;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">

            <div class="table-header">
                <span>7 gün İçinde sertifikası sona erecek internal sertifikalar</span>
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
                            <td>sectrailcmprodabcdefkgsdfpskfps.locals</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>sectrailcm.local</td>
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

            <div class="logo-divider">
                <img src="https://i.imgur.com/5CUUbS2.png" alt="Logo 1" class="logo1">
                <div class="divider-line"></div>
                <img src="https://www.bntpro.com/media/2022/09/SecTrail-CM-Logo1.png" alt="Logo 2" class="logo2">
            </div>
        </div>
    </div>
</body>

</html> --}}










{{-- Yukardaki kodda 
    
    ---> th, ve td tagları arasına bölmeler eklendi 
    ---> th taglarındaki bold arttırıldı
    ---> BNTPRO / CM Logosu Aşağıda 
    --}}













{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&family=Courier+New:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Georgia:wght@400;700&family=Trebuchet+MS:wght@400;700&display=swap');

        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
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

        .logo-divider {
            display: flex;
            align-items: center;
            width: 100% !important;
        }

        .logo1 {
            margin: 20px 0px;
            width: 70px !important;
            height: 50px !important;
        }

        .logo2 {
            width: 80px;
            height: 85px !important;
            margin: auto auto 20px auto;
        }

        .divider-line {
            width: 100%;
            flex-grow: 1;
            height: 2px;
            background-color: #1b3057;
            margin: 40px 20px;

        }

        .table-header {
            background-color: #1b3057;
            font-family: Arial, sans-serif;
            text-transform: capitalize;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 15px;
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
        }

        .table-users th,
        .table-users td {
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #444;
            /* padding: 13px 9px; */
            word-wrap: normal;
        }

        .table-users th {
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 600 !important;
            color: #000000 !important;
            background-color: #cbcbcb;
            text-transform: capitalize;
            letter-spacing: 0.1em;
            position: relative;
            top: 0;
            z-index: 999;
        }

        .table-users td {
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 300 !important;
        }

        .table-users th {
            padding: 12px 17px !important;
        }

        .table-users td {
            padding: 17px 12px !important;
        }

        .table-users th,
        .table-users td {
            border-right: 1px solid #ddd;
        }

        .table-users th:last-child,
        .table-users td:last-child {
            border-right: none;
        }

        .table-users tr {
            border-bottom: 1px solid #ddd;
        }

        .table-users tr:last-child {
            border-bottom: none;
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
                padding: 10px 7px;
                font-size: 8px;
            }

            .table-header {
                font-size: 9px;
                padding: 5px;
            }

            .logo1 {
                width: 50px !important;
                height: 35px !important;
            }

            .logo2 {
                width: 60px;
                height: 60px !important;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .table-users th,
            .table-users td {
                padding: 8px 6px;
                font-size: 6px;
            }

            .table-header {
                font-size: 8px;
                padding: 3px;
            }

            .logo {
                width: 50px !important;
                height: 50px !important;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 5px;
            }

            .table-users th,
            .table-users td {
                padding: 7px 5px;
                font-size: 5px;
            }

            .table-header {
                font-size: 6px;
                padding: 2px;
            }

            .logo {
                width: 25px !important;
                height: 25px !important;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
            <div class="logo-divider">
                <img src="https://i.imgur.com/5CUUbS2.png" alt="Logo 1" class="logo1">
                <div class="divider-line"></div>
                <img src="https://www.bntpro.com/media/2022/09/SecTrail-CM-Logo1.png" alt="Logo 2" class="logo2">
            </div>

            <div class="table-header">
                <span>7 gün İçinde sertifikası sona erecek internal sertifikalar</span>
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
                            <td>sectrailcmprodabcdefkgsdfpskfps.locals</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>sectrailcm.local</td>
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

</html> --}}







{{-- Yukardaki kodda 

    ---> BNTPRO / CM Logosu Yukarıda
    --}}

