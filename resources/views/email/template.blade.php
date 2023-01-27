<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dedicated People Email's</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <div class="container">
            <div class="jumbotron">
                <h2>We have accepted  requests  from "Contac us"{{$data['date']}} </h2>     
            </div>
            <div class="row">
                <div class="col-12">
                   <h4>Contac Info</h4> 
                   <div><strong>Name:</strong>  {{$data['form']['name']}}</div>
                   <div><strong>Phone:</strong> {{$data['form']['phone']}}</div>
                   <div><strong>Email:</strong> <a href="mailto:{{$data['form']['email']}}">{{$data['form']['email']}}</a></div>
                  
                   
                </div>
                <div class="col-12">
                    <h4>Descripcion:</h4>
                     {{$data['form']['description']}}
                </div>
            </div>
        </div>

    </body>
</html>
