<html>

<head>
    <title>ITLEL2-18</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Activity 5</h1>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        });
    </script>

    <hr />
    <br />
    <br />

    <?php

    $folder = 'pic/';
    $images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


    $x = 0;
    foreach ($images as $image) {
        if ($x == 0) {
            echo "
            <div class='container'>
                    <div id='carousel' class='carousel slide' data-ride='carousel' style='width:1000px'>
                        <ol class='carousel-indicators'>
                             <li data-target='#mycarousel' data-slide-to='0' class='active'></li>
                         </ol>

                 <div class='carousel-inner'>
                      <div class='item active'>
                    <img src='$image' width='1000px'>
                    <div class='carousel-caption'>
                        <h3>Green Painting</h3>
                            <p>Welcome to my first pic</p>
                    </div>
                </div>";
        } else {
            echo "
                        <div class='container'>
                            <div id='carousel' class='carousel slide' data-ride='carousel' style='width:1000px'>
                                <ol class='carousel-indicators'>
                                  <li data-target='#mycarousel' data-slide-to='1'>
                                </ol>

                        <div class='item'>
                            <img src='$image' width='1000px'>
                            <div class='carousel-caption'>
                                <h3>Green Painting</h3>
                                <p>Welcome to my first pic</p>
                            </div>
                        </div>";
        }
        $x++;
    }

    ?>




</body>

</html>