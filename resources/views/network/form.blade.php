<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .container
            {
                display:flex;
                padding: 15px 15px;
                justify-content: center;
                align-items: center;
                height: 100%;
            }

            form
            {
                background: #f5f5f5;
                padding: 20px;
                border-radius: 10px;
            }

            input[type="submit"]
            {
                background: #0098cb;
                border: 0px;
                border-radius: 5px;
                color: #fff;
                padding: 10px;
                margin: 20px auto;
            }

            label
            {
                margin-right: 20px;
            }

            
            h2{
                text-align: center;
                padding: 15px 15px;
                font-family: sans serif;
            }

            a{
                text-decoration:none;
            }
            
        </style>
    </head>
    <body>

            <h2><a href="/">Go back to main page</a></h2>


            <div class="container">
                <div class="content">



                    <h1>File Upload</h1>

                    
                    <form action="/uploadNetwork" method="post" enctype="multipart/form-data">
                    
                    @csrf
                    
                        <label>Select image to upload:</label>
                        <input type="file" name="file" id="file">
                        <input type="submit" value="Upload" name="submit">
                    </form>
                </div>
            </div>
    </body>
</html>
