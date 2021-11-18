<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#panel").slideToggle("slow", function () {
                    if ($("#flip").text() == 'Click to slide the panel down') {
                        $("#flip").text('Click to slide the panel up');
                        $("#flip").css("background-color", "lightblue");
                    }
                    else {
                        $("#flip").text('Click to slide the panel down');
                        $("#flip").css("background-color", "#e5eecc");
                    }
                });
            });
        });
    </script>
    <style>
        #panel,
        #flip {
            padding: 5px;
            text-align: center;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
        }

        #panel {
            padding: 50px;
            display: none;
        }
    </style>
</head>

<body>

    <div id="flip">Click to slide the panel down</div>
    <div id="panel">Hello world! <br><br><a href="https://youtu.be/dQw4w9WgXcQ">Better to not open this</a></div>

</body>

</html>
