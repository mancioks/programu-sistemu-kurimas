<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h1 class="h1 font-weight-normal">Ieškoma šalia esančių</h1>
        <div style="">Pasirinkite iš sąrašo</div>
        <div id="availableList"></div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function apdorotiJson(data) {
        //document.getElementById("availableList").innerHTML = data;
        const obj = JSON.parse(data);
        var dList = document.getElementById("availableList");
        var dListHtml = "";
        if(obj.length !== 0) {
            obj.forEach(function (item) {
                var newItem = '<a class="number-plate" href="<?php echo $home; ?>laukiama/' + item.ID + '"><div class="number-plate-input">' + item.number + '</div></a>';
                dListHtml = dListHtml + newItem;
            });
        }
        if(dListHtml == "") dListHtml = '<div class="waitingInfo">Laukiama šalia esančių eismo dalyvių</div>';

        if(dList.innerHTML != dListHtml) {
            dList.innerHTML = dListHtml;
        }

    }
    $(document).ready(function(){
        $.get("<?php echo $home; ?>api/susijungti", function(data, status){
            //document.getElementById("availableList").innerHTML = data;
            apdorotiJson(data);
        });
        setInterval(function() {
            $.get("<?php echo $home; ?>api/susijungti", function(data, status){
                //document.getElementById("availableList").innerHTML = data;
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