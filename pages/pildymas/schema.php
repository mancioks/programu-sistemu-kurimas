<?php
if ($actions[0] == "submit") {
    $db = new database();

    $data = $_POST["imgInput"];

    list($type, $data) = explode(';', $data);
    list(, $data)      = explode(',', $data);
    $data = base64_decode($data);

    $filename = $currentSession;

    file_put_contents('images/schemes/'.$filename.'.png', $data);

    redirect($home."duomenys");
}
?>
<div class="overflow-hidden m-md-3 text-center bg-light pt-4 pb-4">
    <h1 class="h4 font-weight-normal mb-4">Eismo įvykio schema</h1>
    <canvas id="can" width="700" height="400" style="border:2px solid;background: #fff;"></canvas>
    <div class="colors">
        <div id="white" onclick="color(this)">Trintukas</div>
        <div id="black" onclick="color(this)">Pieštukas</div>
    </div>
    <form action="<?php echo $home; ?>schema/submit" method="post" id="schemaImage"/>
        <input type="text" id="imgInput" name="imgInput" style="display: none;"/>
    </form>
    <div class="btn btn-primary btn-lg btn-block m-auto" style="max-width: 300px;" onclick="save()">Patvirtinti</div>
</div>



<style>
.colors div{
    display: inline-block;
    background: #0069D9;
    color:#fff;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
}
.colors{
    margin-bottom: 20px;
    margin-top: 10px;
}
.btn{
    cursor: pointer;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        init();
    });

    var canvas, ctx, flag = false,
        prevX = 0,
        currX = 0,
        prevY = 0,
        currY = 0,
        dot_flag = false;

    var x = "black",
        y = 2;

    function init() {
        canvas = document.getElementById('can');
        ctx = canvas.getContext("2d");
        w = canvas.width;
        h = canvas.height;

        canvas.addEventListener("mousemove", function (e) {
            findxy('move', e)
        }, false);
        canvas.addEventListener("mousedown", function (e) {
            findxy('down', e)
        }, false);
        canvas.addEventListener("mouseup", function (e) {
            findxy('up', e)
        }, false);
        canvas.addEventListener("mouseout", function (e) {
            findxy('out', e)
        }, false);
    }

    function color(obj) {
        switch (obj.id) {
            case "green":
                x = "green";
                break;
            case "blue":
                x = "blue";
                break;
            case "red":
                x = "red";
                break;
            case "yellow":
                x = "yellow";
                break;
            case "orange":
                x = "orange";
                break;
            case "black":
                x = "black";
                break;
            case "white":
                x = "white";
                break;
        }
        if (x == "white") y = 14;
        else y = 2;

    }

    function draw() {
        ctx.beginPath();
        ctx.moveTo(prevX, prevY);
        ctx.lineTo(currX, currY);
        ctx.strokeStyle = x;
        ctx.lineWidth = y;
        ctx.stroke();
        ctx.closePath();
    }

    function erase() {
        var m = confirm("Valyti?");
        if (m) {
            ctx.clearRect(0, 0, w, h);
            document.getElementById("canvasimg").style.display = "none";
        }
    }

    function save() {
        document.getElementById("imgInput").value = canvas.toDataURL();
        document.getElementById("schemaImage").submit();
    }

    function findxy(res, e) {
        if (res == 'down') {
            prevX = currX;
            prevY = currY;
            currX = e.clientX - canvas.offsetLeft;
            currY = e.clientY - canvas.offsetTop;

            flag = true;
            dot_flag = true;
            if (dot_flag) {
                ctx.beginPath();
                ctx.fillStyle = x;
                ctx.fillRect(currX, currY, 2, 2);
                ctx.closePath();
                dot_flag = false;
            }
        }
        if (res == 'up' || res == "out") {
            flag = false;
        }
        if (res == 'move') {
            if (flag) {
                prevX = currX;
                prevY = currY;
                currX = e.clientX - canvas.offsetLeft;
                currY = e.clientY - canvas.offsetTop;
                draw();
            }
        }
    }
</script>