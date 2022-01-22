<?php
$db = new database();

if($actions[0] == "set") {
    $db->update("UPDATE sessions SET status = 3 WHERE session = '". $currentSession ."'");

    $currentKey = $currentUser[0]["deklaracija_key"];

    if(!$currentKey) {
        $generateKey = rand(100000,999999);
        $db->update("UPDATE sessions SET deklaracija_key = '".$generateKey."' WHERE session = '". $currentSession ."'");
        $kartu_su = $currentUser[0]["kartu_su"];
        //echo $kartu_su."asd";
        $db->update("UPDATE sessions SET deklaracija_key = '".$generateKey."' WHERE id = ". $kartu_su);

        $db->insert("deklaracijos", ['raktas' => $generateKey]);
    }

    redirect($home."deklaravimas");
    //echo "cia redirectinam";
}

if($actions[0] == "select") {
    $db->update("UPDATE sessions SET zala = '". $actions[1] ."' WHERE session = '". $currentSession ."'");
    redirect($home."statusas");
}
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h1 class="h5 font-weight-normal">Pasirinkite automobilio dalį, su kuria patyrėte / padarėte žalą</h1>
        <div class="autoPartsWrapper">
            <div id="autoParts">
                <div class="auto_photos car_show" id="auto_back">
                    <a href="<?php echo $home; ?>deklaravimas/select/back_1"><img src="<?php echo $home; ?>images/car/back/back_1.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/back_2"><img src="<?php echo $home; ?>images/car/back/back_2.png"/></a><br>
                    <a href="<?php echo $home; ?>deklaravimas/select/back_3"><img src="<?php echo $home; ?>images/car/back/back_3.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/back_4"><img src="<?php echo $home; ?>images/car/back/back_4.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/back_5"><img src="<?php echo $home; ?>images/car/back/back_5.png"/></a><br>
                    <a href="<?php echo $home; ?>deklaravimas/select/back_6"><img src="<?php echo $home; ?>images/car/back/back_6.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/back_7"><img src="<?php echo $home; ?>images/car/back/back_7.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/back_8"><img src="<?php echo $home; ?>images/car/back/back_8.png"/></a>
                </div>
                <div class="auto_photos car_hide" id="auto_front">
                    <a href="<?php echo $home; ?>deklaravimas/select/front_1"><img src="<?php echo $home; ?>images/car/front/front_1.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/front_2"><img src="<?php echo $home; ?>images/car/front/front_2.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/front_3"><img src="<?php echo $home; ?>images/car/front/front_3.png"/></a><br>
                    <a href="<?php echo $home; ?>deklaravimas/select/front_4"><img src="<?php echo $home; ?>images/car/front/front_4.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/front_5"><img src="<?php echo $home; ?>images/car/front/front_5.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/front_6"><img src="<?php echo $home; ?>images/car/front/front_6.png"/></a><br>
                    <a href="<?php echo $home; ?>deklaravimas/select/front_7"><img src="<?php echo $home; ?>images/car/front/front_7.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/front_8"><img src="<?php echo $home; ?>images/car/front/front_8.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/front_9"><img src="<?php echo $home; ?>images/car/front/front_9.png"/></a>
                </div>
                <div class="auto_photos car_hide" id="auto_side_b">
                    <a href="<?php echo $home; ?>deklaravimas/select/side_b_1"><img src="<?php echo $home; ?>images/car/side_b/side_b_1.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_b_2"><img src="<?php echo $home; ?>images/car/side_b/side_b_2.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_b_3"><img src="<?php echo $home; ?>images/car/side_b/side_b_3.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_b_4"><img src="<?php echo $home; ?>images/car/side_b/side_b_4.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_b_5"><img src="<?php echo $home; ?>images/car/side_b/side_b_5.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_b_6"><img src="<?php echo $home; ?>images/car/side_b/side_b_6.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_b_7"><img src="<?php echo $home; ?>images/car/side_b/side_b_7.png"/></a>
                </div>
                <div class="auto_photos car_hide" id="auto_side_l">
                    <a href="<?php echo $home; ?>deklaravimas/select/side_l_1"><img src="<?php echo $home; ?>images/car/side_l/side_l_1.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_l_2"><img src="<?php echo $home; ?>images/car/side_l/side_l_2.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_l_3"><img src="<?php echo $home; ?>images/car/side_l/side_l_3.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_l_4"><img src="<?php echo $home; ?>images/car/side_l/side_l_4.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_l_5"><img src="<?php echo $home; ?>images/car/side_l/side_l_5.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_l_6"><img src="<?php echo $home; ?>images/car/side_l/side_l_6.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/side_l_7"><img src="<?php echo $home; ?>images/car/side_l/side_l_7.png"/></a>
                </div>
                <div class="auto_photos car_hide" id="auto_top">
                    <a href="<?php echo $home; ?>deklaravimas/select/top_1"><img src="<?php echo $home; ?>images/car/top/top_1.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/top_2"><img src="<?php echo $home; ?>images/car/top/top_2.png"/></a><br>
                    <a href="<?php echo $home; ?>deklaravimas/select/top_3"><img src="<?php echo $home; ?>images/car/top/top_3.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/top_4"><img src="<?php echo $home; ?>images/car/top/top_4.png"/></a><br>
                    <a href="<?php echo $home; ?>deklaravimas/select/top_5"><img src="<?php echo $home; ?>images/car/top/top_5.png"/></a>
                    <a href="<?php echo $home; ?>deklaravimas/select/top_6"><img src="<?php echo $home; ?>images/car/top/top_6.png"/></a>
                </div>
            </div>
            <div class="arrow arrow_left" id="arrow_left" onclick="changeAuto('left')"></div>
            <div class="arrow arrow_right" id="arrow_right" onclick="changeAuto('right')"></div>
            <div class="arrow arrow_top" id="arrow_top" onclick="changeAuto('top')"></div>
            <div class="arrow arrow_bottom hidearrow" id="arrow_bottom" onclick="changeAuto('bottom')"></div>
        </div>
    </div>
</div>

<style>
    .auto_photos{
        font-size: 0;
        background: #fff;
    }
    .auto_photos img:hover{
        cursor: pointer;
        filter: contrast(150%);
        opacity: 0.5;
    }
    .car_hide{
        display: none;
    }
    .car_show{
        display: block;
    }
    .autoPartsWrapper{
        padding: 30px;
        position: relative;
        margin-top: 40px;
    }
    .arrow{
        width:30px;
        height: 30px;
        display: inline-block;
        position: absolute;
        cursor:pointer;
        opacity: 0.7;
    }
    .arrow_bottom{
        bottom: 0;
        left:50%;
        margin-left: -15px;
        background-image: url("<?php echo $home; ?>images/arrows/bottom.png");
    }
    .arrow_top{
        top: 0;
        left:50%;
        margin-left: -15px;
        background-image: url("<?php echo $home; ?>images/arrows/top.png");
    }
    .arrow_left{
        left: 0;
        top:50%;
        margin-top: -15px;
        background-image: url("<?php echo $home; ?>images/arrows/left.png");
    }
    .arrow_right{
        right: 0;
        top:50%;
        margin-top: -15px;
        background-image: url("<?php echo $home; ?>images/arrows/right.png");
    }
    .hidearrow{
        display: none;
    }
</style>
<script>
    var currentAuto = 'auto_back';

    function changeAuto(pos) {
        document.getElementById(currentAuto).classList.remove("car_show");
        document.getElementById(currentAuto).classList.add("car_hide");

        document.getElementById("arrow_left").classList.remove("hidearrow");
        document.getElementById("arrow_right").classList.remove("hidearrow");
        document.getElementById("arrow_top").classList.remove("hidearrow");
        document.getElementById("arrow_bottom").classList.remove("hidearrow");

        if(currentAuto == 'auto_back') {
            if (pos == "right") {
                currentAuto = 'auto_side_b';
            }
            if (pos == "left") {
                currentAuto = 'auto_side_l';
            }
            if (pos == "top") {
                currentAuto = 'auto_top';
            }
        }
        else if(currentAuto == 'auto_side_b') {
            if (pos == "right") {
                currentAuto = 'auto_front';
            }
            if (pos == "left") {
                currentAuto = 'auto_back';
            }
            if (pos == "top") {
                currentAuto = 'auto_top';
            }
        }
        else if(currentAuto == 'auto_front') {
            if (pos == "right") {
                currentAuto = 'auto_side_l';
            }
            if (pos == "left") {
                currentAuto = 'auto_side_b';
            }
            if (pos == "top") {
                currentAuto = 'auto_top';
            }
        }
        else if(currentAuto == 'auto_side_l') {
            if (pos == "right") {
                currentAuto = 'auto_back';
            }
            if (pos == "left") {
                currentAuto = 'auto_front';
            }
            if (pos == "top") {
                currentAuto = 'auto_top';
            }
        }
        else if(currentAuto == 'auto_top') {
            if (pos == "bottom") {
                currentAuto = 'auto_back';
            }
        }

        if(currentAuto == 'auto_back') {
            document.getElementById("arrow_bottom").classList.add("hidearrow");
        }
        else if(currentAuto == 'auto_side_b') {
            document.getElementById("arrow_bottom").classList.add("hidearrow");
        }
        else if(currentAuto == 'auto_front') {
            document.getElementById("arrow_bottom").classList.add("hidearrow");
        }
        else if(currentAuto == 'auto_side_l') {
            document.getElementById("arrow_bottom").classList.add("hidearrow");
        }
        else if(currentAuto == 'auto_top') {
            document.getElementById("arrow_top").classList.add("hidearrow");
            document.getElementById("arrow_left").classList.add("hidearrow");
            document.getElementById("arrow_right").classList.add("hidearrow");
        }

        document.getElementById(currentAuto).classList.add("car_show");
        document.getElementById(currentAuto).classList.remove("car_hide");
    }
</script>