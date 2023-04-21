<!doctype html>
<html>
<head>
    <title>CP calculator</title>
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="monitor col-md-12 col-sm-12 col-lg-12">Start calculating</div>
        </div>
    </div>
<script>
    let btn=document.querySelector("#clickme");
    let i=0;
    btn.addEventListener("click",function (){
        let disp=document.querySelector("#display");
        disp.innerHTML="Clicked "+(i++);
    })
</script>
</body>
</html>
