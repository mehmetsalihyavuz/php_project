{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <style>
        .proton-body {
            display: block;
            padding: 0px;
            margin: 0px;
        }

        .proton-wrapper {
            width: 100%;
            display: block;
            overflow: hidden;
            box-sizing: border-box;
            color: #222;
            /* background: #f2f2fd; */
            background: #d3d3d3;
            font-size: 18px;
            font-weight: normal;
            font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
        }

        .proton-table {
            border-collapse: collapse;
            border-spacing: 0;
            border: 0px;
            width: 640px;
            max-width: 90%;
            margin: 100px auto;
            box-shadow: 0px 20px 48px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .proton-table tr {
            background: #ffffff;
        }

        .proton-table td,
        .proton-table th {
            border: 0px;
            border-spacing: 0;
            border-collapse: collapse;
        }

        .proton-table tr td {
            padding: 0px 40px;
            box-sizing: border-box;
        }

        .proton-margin {
            float: left;
            width: 100%;
            overflow: hidden;
            height: 40px;
            padding-bottom: 0px;
            box-sizing: border-box;
        }

        .proton-div {
            float: left;
            width: 100%;
            overflow: hidden;
            box-sizing: border-box;
        }

        .proton-table h1,
        .proton-table h2{
            float: left;
            width: 100%;
            margin: 0px 0px 20px 0px !important;
            padding: 0px;
        }

        .proton-table h1 {
            font-size: 33px;
        }

        .proton-table h2 {
            font-size: 26px;
        }

        .proton-table p {
            float: left;
            width: 100%;
            font-size: 18px;
            margin: 0px 0px 20px 0px !important;
        }

        .proton-table a {
            font-weight: bold;
        }

        .proton-table img,
        .proton-table a img {
            display: block;
            max-width: 100%;
            margin-bottom: 20px;
            border: 0px;
            border-radius: 10px;
            overflow: hidden;
        }

        .proton-table a.proton-button {
            display: inline-block;
            font-weight: bold;
            font-size: 17px;
            padding: 15px 40px;
            margin: 20px 0px;
            color: #ffffff !important;
            background: #e90303 !important;
            border-radius: 10px;
            text-decoration: none;
            outline: none;
        }

        .proton-divider {
            float: left;
            width: 100%;
            overflow: hidden;
            margin: 20px 0px;
            border-bottom: 2px solid #f2f2fd;
        }

        .logo {
            width: 150px;
        }

    </style>
</head>

<body class="proton-body">
    <div class="proton-wrapper">
        <table class="proton-table">
            <tbody>
                <tr>
                    <td  colspan="10" style="">
                        <div class="proton-margin"></div>
                        <center>
                            <span>
                            <img src="{{ url('https://www.bntpro.com/media/2021/06/bntpro_logo.svg') }}"
                                alt="Company Logo" class="logo"></span>
                        </center>
                        <div class="proton-divider"></div>
                        <!--<div class="proton-margin"></div> -->
                    </td>
                </tr>

                <tr>
                    <td  colspan="10" style="">
                        <!-- <div class="proton-margin"></div> -->
                        <center>
                            <h1>Welcome ! </h1>
                            <img src="https://www.bntpro.com/media/2022/04/SecTrail_CM_homepage.jpeg"
                                alt="Image" />
                        </center>
                        <h2>Verify Your Email Account</h2>
                        <p>        
                            You can verify your email from below.
                        </p>
                    </td>
                </tr>

                <tr>
                    <td colspan="10" style="">
                        <center>
                            <a href="" class="proton-button">Confirm Email</a>
                        </center>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html> --}}

<x-mail::verify-message>

    {{ $url }}
    {{ $job->id }}

</x-mail::verify-message>
