<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    {{-- <style>
        @media only screen and (max-width: 600px) {
            .content {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        /*     @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        } */
    </style> --}}

<body class="proton-body">
    <div class="proton-wrapper">
        <table class="proton-table">
            <tbody>
                <tr>
                    <td colspan="10" style="">
                        {{ $logo ?? '' }}
                    </td>
                </tr>

                <tr>
                    <td colspan="10" style="">
                        {{ $verifycontent ?? '' }}
                    </td>
                </tr>

                <tr>
                    <td colspan="10" style="">
                        {{ $verifyfooter ?? '' }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
