<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    <video width="320" height="240" controls>
        <source src="../../../../../../home/hope/Documents/Laravel/te7a/Learn to Build Web Apps using Laravel Framework (7 hours)/02 Routes  Controllers/002 Basic Routing.mp4" type="video/mp4">
        Your browser does not support the <code>video</code> tag.
    </video>
    </head>
    <body>
        <div class="container">
            
            <div class="content">
                <div class="title">Laravel 5</div>
                <?= $text; ?>
                <h2>{{ $text }}</h2>
                <h1>Enter Your Age</h1>
            </div>
            <form action="/dashboard" method="get" >
                <input type='hidden' name="_token" value="<?php echo csrf_token(); ?>">
                <input type="text" name="age">
                <input type="submit" name="submit">          
            </form>
        </div>
    </body>
</html>
