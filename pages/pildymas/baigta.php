<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h1 class="h1 font-weight-normal">Baigta</h1><br>
        <a target="_blank" href="<?php echo $home; ?>api/deklaracija/<?php echo $currentUser[0]["deklaracija_key"]; ?>" class="btn btn-primary btn-lg btn-block m-auto">Peržiūrėti deklaraciją</a>
    </div>
</div>

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