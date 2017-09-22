<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
          <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                font-family: 'Lato';
            }
          ul {
                list-style-type: none;
 
            }
            li {
                color: #367625;
                font-size: 3em;
                font-weight: 800;
            }
            header {
                padding: 3em;
                background-color: #eee;
                border-radius: 15px;
            }
            .container {
               /* text-align: center;
                display: table-cell;
                vertical-align: middle;
                margin: auto;
                width: 60%;*/
                display: flex;
              /*  justify-content: center;*/
                align-items: center;

            }

            .content {
/*                text-align: center;
                display: inline-block;*/
            }

            .title {
                font-size: 96px;
            }
  
            .fullwidth {
                width: 100%;
            }
        </style>
    <title>About this app</title>
</head>
<body>
    <header class="container fullwidth"><h1> Your list, madam</h1></header>
    <div class="container">
        
         <ul>
            @foreach($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul> 
    </div>
</body>
</html>