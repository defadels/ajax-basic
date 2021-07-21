<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
    <button id="panggil-ajax">Panggil Ajax</button>
    <div id="tampilkan-data"></div>


    <script>
        $(document).ready(function() {
            $("#panggil-ajax").click(function() {
                $.ajax({
                    method : "POST",
                    url: "keluarkan-data.php",
                    data: "nama=Fadhil&umur=19",
                    success: function(data){
                        $("#tampilkan-data").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>