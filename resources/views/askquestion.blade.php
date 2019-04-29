<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.0/trix.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
            trix-editor {
                min-height: 21em!important;
            }
        </style>
    </head>
    <body>
    <div class="container-fluid">
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                    <a href="{{URL::to('/')}}">Home</a>
                        
                </div>
                <div class="row">    
                <div class="title m-b-md">
                    Create a question
                

                </div>
            <div class="row">
                <form id="mytext" method="post" action="{{URL::to('/askQuestion')}}" >
                    @csrf
                    <input id="x" type="hidden" name="content">
                    <div class="form-group">
                        <label for="email">Title:</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                    <trix-editor input="x"></trix-editor>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                    
                </form>
            </div>
        </div>
        </div>
    </body>
    <script type = "text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.0/trix.js" ></script>
</html>
