<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
                background-color: black;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center
            }
            h1,h2{
                border: solid 1px white
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Hello World </h1>
            <h2>My name is: {{$nome}} {{$cognome}}</h2>
            <h2>Age: {{$eta}} yrs</h2>
            <h2>Sono nato il: {{$data}}</h2>
            <h2>Sono uno studente {{$scuola}}</h2>
        </div>
    </body>
</html>