<!DOCTYPE html>
<html>
<head>
    <title>jQuery Mouse and Keyboard Events</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
    $(document).ready(function(){

        // Mouse Click Event
        $("#btn").click(function(){
            alert("Button Clicked!");
        });

        // Mouse Hover Event
        $("#box").mouseenter(function(){
            $(this).css("background-color","yellow");
        });

        $("#box").mouseleave(function(){
            $(this).css("background-color","lightblue");
        });

        // Keyboard Event
        $("#txt").keyup(function(){
            $("#result").text($(this).val());
        });

    });
    </script>

    <style>
        #box{
            width:200px;
            height:100px;
            background:lightblue;
            text-align:center;
            line-height:100px;
            margin-bottom:20px;
        }
    </style>
</head>

<body>

<h2>Mouse Event</h2>

<div id="box">Hover Here</div>

<button id="btn">Click Me</button>

<br><br>

<h2>Keyboard Event</h2>

<input type="text" id="txt" placeholder="Type something">

<p>You Typed: <span id="result"></span></p>

</body>
</html>