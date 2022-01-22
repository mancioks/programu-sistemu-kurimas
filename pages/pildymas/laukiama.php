<?php
    $db = new database();
    $data = $db->get("SELECT * FROM sessions WHERE id = '". $actions[0] ."'");
    $db->update("UPDATE sessions SET kartu_su = '". $actions[0] ."' WHERE session = '". $currentSession ."'");
?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h1 class="h1 font-weight-normal">Laukiama patvirtinimo iš</h1>
        <div id="availableList">
            <div class="number-plate">
                <div class="number-plate-input"><?php echo $data[0]["number"] ?></div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function apdorotiJson(data) {
        if(data === "true") {
            window.location.replace("<?php echo $home ?>deklaravimas/set");
        }
    }
    $(document).ready(function(){
        setInterval(function() {
            $.get("<?php echo $home; ?>api/laukia", function(data, status){
                apdorotiJson(data);
            });
        }, 1000);
    });
</script>


<style>
    .number-plate {
        background-image: url("<?php echo $home; ?>images/plate-placeholder.png");
        width: 300px;
        height: 66px;
        background-size: cover;
        background-repeat: no-repeat;
        margin: auto;
        text-align: left;
        margin-top: 20px;
        display: block;
        color:#000 !important;
    }

    .number-plate-input {
        height: 66px;
        float: right;
        width: 270px;
        border: 0;
        background: transparent;
        padding-left: 30px;
        font-size: 50px;
        outline: none !important;
        padding-top: 0;
        line-height: 1;
        text-transform: uppercase;
        font-weight: bold;
        padding-top: 7px;
    }
    .waitingInfo{
        font-size: 20px;
        font-weight: 100;
        margin-top: 50px;
    }
</style>