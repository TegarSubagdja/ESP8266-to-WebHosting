<!DOCTYPE html>
<html>

<head>
    <title>LDR Data</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setInterval(function () {
                $("#nilaiLdr").load("getNilai.php");
            }, 1000);
        });
    </script>
</head>

<body>
    <div class="center">
        <div class="mx-auto w-50">
            <h1 class="text-center py-4">DATA SENSOR</h1>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class='align-middle text-center'>LDR Value</th>
                        <th class='align-middle text-center'>Date and Time</th>
                    </tr>
                </thead>
                <tbody id="nilaiLdr">
                    <!-- <tr>
                        <td class='align-middle text-center'>0</td>
                        <td class='align-middle text-center'>0</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap 4 JS -->
</body>

</html>
