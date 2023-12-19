<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <h1>looplet</h1>
    <p id="demo"></p>
</body>
<script>
        let text = '';
            for(let x = 0; x<10; x++){
                text += "The number is " + x + "<br>";
            }
            document.getElementById("demo").innerHTML = text;
    <script>
</html>