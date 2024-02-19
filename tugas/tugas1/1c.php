<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 1c</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px; 
        }

        .container {
            display: flex;
            flex-direction: column;
        }

        .container-dalam {
            display: flex;
            justify-content: flex-start;
        }
        
        .kotak {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            background-color: steelblue;
            border: 1.5px solid black;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container-dalam">
            <div class="kotak">1</div>
        </div>
        <div class="container-dalam">
            <div class="kotak">2</div>
            <div class="kotak">2</div>
        </div>
        <div class="container-dalam">
            <div class="kotak">3</div>
            <div class="kotak">3</div>
            <div class="kotak">3</div>
        </div>
    </div>
</body>
</html>