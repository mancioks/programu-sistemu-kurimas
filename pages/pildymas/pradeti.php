<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h1 class="h1 font-weight-normal">Įveskite savo tr. priemonės valstybinį numerį</h1>
        <?php
        if ($actions[0] == "submit") {
            $db = new database();
            $db->update("UPDATE sessions SET number = '" . $_POST["number_plate"] . "', status = 1 WHERE session = '" . getSessionId() . "'");
            redirect($home."vieta");
        }
        ?>
        <form class="mt-4" action="<?php echo $home; ?>pradeti/submit" method="post">
            <div class="form-group">
                <div class="number-plate">
                    <input type="text" class="number-plate-input" name="number_plate" id="number_plate"
                           placeholder="ABC123" onkeypress="clsAlphaNoOnly(event)" onpaste="return false;"
                           maxlength="6" minlength="6">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Toliau</button>
        </form>
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
    }
</style>
<script>
    function clsAlphaNoOnly(e) {  // Accept only alpha numerics, no special characters
        var regex = new RegExp("^[a-zA-Z0-9]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }

        e.preventDefault();
        return false;
    }
</script>