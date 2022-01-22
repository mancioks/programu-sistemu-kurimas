<?php
$db = new database();

if($actions[0] == "set") {
    $db->update("UPDATE sessions SET statusas = ". $actions[1] ." WHERE session = '". $currentSession ."'");
    if($actions[1] == 0) {
        redirect($home."duomenys");
    }
    else {
        redirect($home."schema");
    }

}
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h1 class="h5 font-weight-normal mb-5">Šiame įvykyje esu</h1>
        <a class="btn btn-danger btn-lg btn-block m-auto" style="max-width: 200px;" href="<?php echo $home; ?>statusas/set/0">Kaltininkas</a>
        <a class="btn btn-warning btn-lg btn-block m-auto" style="max-width: 200px;" href="<?php echo $home; ?>statusas/set/1">Nukentėjęs</a>
        </div>
    </div>
</div>

<style>
    .btn{
        display: inline-block;
        cursor: pointer;
    }
</style>