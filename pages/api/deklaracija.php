<?php
$db = new database();

$data = $db->get("SELECT * FROM deklaracijos WHERE raktas = '". $actions[1] ."'");
$data = $data[0];
//$data[0]["deklaracija1"] = json_decode($data[0]["deklaracija1"]);
//$data[0]["deklaracija1"] = json_decode($data[0]["deklaracija1"]);


$deklaracija1 = $data["deklaracija1"];
$deklaracija1 = json_decode($deklaracija1);

$deklaracija2 = $data["deklaracija2"];
$deklaracija2 = json_decode($deklaracija2);

$user1 = $deklaracija1->user_data;
$user2 = $deklaracija2->user_data;

$paveikslelis = $deklaracija2->user_data->session;
if($deklaracija2->user_data->statusas == 1) $paveikslelis = $deklaracija2->user_data->session;

//echo $paveikslelis;



//echo "<pre>";
//var_dump($data);
//var_dump($deklaracija1);
//var_dump($deklaracija2);
//var_dump($user1);

?>
<div class="deklaracija">
    <div class="zyma" style="top:238px;left:96px;">X</div>
    <div class="zyma" style="top:238px;left:394px;">X</div>
    <div class="zyma" style="top: 114px; left: 1598px;">X</div>
    <div style="top: 102px; left: 700px;">Lietuva</div>
    <div style="top: 102px; left: 1000px;"><?php echo $deklaracija1->user_data->latitude; ?> <?php echo $deklaracija1->user_data->longitude; ?></div>
    <div style="top: 2260px; left: 1474px;"><?php echo $deklaracija1->apgadinimai; ?></div>
    <div style="top: 2258px; left: 32px;"><?php echo $deklaracija2->apgadinimai; ?></div>
    <div style="top: 2411px; left: 1233px;"><?php echo $deklaracija1->pastabos; ?></div>
    <div style="top: 2411px; left: 32px;"><?php echo $deklaracija2->pastabos; ?></div>
    <div style="top: 1514px; left: 1281px;"><?php echo $deklaracija1->vardas; ?></div>
    <div style="top: 1514px; left: 108px;"><?php echo $deklaracija2->vardas; ?></div>
    <div style="top: 1474px; left: 1281px;"><?php echo $deklaracija1->pavarde; ?></div>
    <div style="top: 1478px; left: 131px;"><?php echo $deklaracija2->pavarde; ?></div>
    <div style="top: 2537px; left: 1395px;"><?php echo $deklaracija1->vardas; ?></div>
    <div style="top: 2537px; left: 1544px;"><?php echo $deklaracija1->pavarde; ?></div>
    <div style="top: 1552px; left: 1317px;"><?php echo $deklaracija1->data; ?></div>
    <div style="top: 1554px; left: 168px;"><?php echo $deklaracija2->data; ?></div>
    <div style="top: 1589px; left: 1281px;"><?php echo $deklaracija1->adresas; ?></div>
    <div style="top: 1589px; left: 131px;"><?php echo $deklaracija2->adresas; ?></div>
    <div style="top: 1681px; left: 1361px;"><?php echo $deklaracija1->telefonas; ?></div>
    <div style="top: 1678px; left: 215px;"><?php echo $deklaracija2->telefonas; ?></div>
    <div style="top: 1707px; left: 1445px;"><?php echo $deklaracija1->pazymejimas; ?></div>
    <div style="top: 1709px; left: 298px;"><?php echo $deklaracija2->pazymejimas; ?></div>
    <div style="top: 1750px; left: 1373px;"><?php echo $deklaracija1->kategorija; ?></div>
    <div style="top: 1748px; left: 229px;"><?php echo $deklaracija2->kategorija; ?></div>
    <div style="top: 1785px; left: 1522px;"><?php echo $deklaracija1->galiojimas; ?></div>
    <div style="top: 1790px; left: 370px;"><?php echo $deklaracija2->galiojimas; ?></div>
    <div style="top: 1633px; left: 341px;">Lietuva</div>
    <div style="top: 1633px; left: 1482px;">Lietuva</div>
    <div style="top: 198px; left: 658px;">Nėra</div>

    <?php $count = 0; ?>
    <?php foreach ($deklaracija2->aplinkybes as $value): ?>
        <?php if($value == 1): ?><div class="zyma" style="top: 449px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 2): ?><div class="zyma" style="top: 492px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 3): ?><div class="zyma" style="top: 560px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 4): ?><div class="zyma" style="top: 608px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 5): ?><div class="zyma" style="top: 682px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 6): ?><div class="zyma" style="top: 757px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 7): ?><div class="zyma" style="top: 815px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 8): ?><div class="zyma" style="top: 870px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 9): ?><div class="zyma" style="top: 975px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 10): ?><div class="zyma" style="top: 1051px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 11): ?><div class="zyma" style="top: 1102px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 12): ?><div class="zyma" style="top: 1150px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 13): ?><div class="zyma" style="top: 1200px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 14): ?><div class="zyma" style="top: 1249px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 15): ?><div class="zyma" style="top: 1299px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 16): ?><div class="zyma" style="top: 1367px; left: 666px;">X</div><?php $count++; endif; ?>
        <?php if($value == 17): ?><div class="zyma" style="top: 1441px; left: 666px;">X</div><?php $count++; endif; ?>
    <?php endforeach; ?>
    <div style="top: 1512px; left: 671px;"><?php echo $count; ?></div>

    <?php $count = 0; ?>
    <?php foreach ($deklaracija1->aplinkybes as $value): ?>
        <?php if($value == 1): ?><div class="zyma" style="top: 449px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 2): ?><div class="zyma" style="top: 492px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 3): ?><div class="zyma" style="top: 560px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 4): ?><div class="zyma" style="top: 608px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 5): ?><div class="zyma" style="top: 682px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 6): ?><div class="zyma" style="top: 757px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 7): ?><div class="zyma" style="top: 815px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 8): ?><div class="zyma" style="top: 870px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 9): ?><div class="zyma" style="top: 975px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 10): ?><div class="zyma" style="top: 1051px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 11): ?><div class="zyma" style="top: 1102px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 12): ?><div class="zyma" style="top: 1150px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 13): ?><div class="zyma" style="top: 1200px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 14): ?><div class="zyma" style="top: 1249px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 15): ?><div class="zyma" style="top: 1299px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 16): ?><div class="zyma" style="top: 1367px; left: 1117px;">X</div><?php $count++; endif; ?>
        <?php if($value == 17): ?><div class="zyma" style="top: 1441px; left: 1117px;">X</div><?php $count++; endif; ?>
    <?php endforeach; ?>

    <div style="top: 1512px; left: 1114px;"><?php echo $count; ?></div>

    <div class="schema" style="top: 1855px; left: 362px;background-image: url('<?php echo $home; ?>images/schemes/<?php echo $paveikslelis; ?>.png');"></div>
    <div class="overlay" style="top: 348px; left: 21px;">Duomenys, kurie turi būti gaunami automatiškai</div>
    <div class="overlay" style="top: 348px; left: 1170px;">Duomenys, kurie turi būti gaunami automatiškai</div>
</div>

<style>
    body{
        margin:0;
        padding: 0;
    }
    .deklaracija{
        width:1800px;
        height: 2642px;
        min-width:1800px;
        min-height: 2642px;
        max-width:1800px;
        max-height: 2642px;
        background-image: url("<?php echo $home; ?>images/deklaracija-lapas-min.png");
        position: relative;
    }
    .deklaracija div{
        position: absolute;
        display: inline-block;
        font-size: 25px;
        font-weight: bold;
    }
    .zyma{
        font-size: 20px !important;
        font-weight: bold;
    }
    .schema{
        width:1076px;
        height: 500px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
    }
    .overlay{
        background: rgba(200,200,200,0.8);
        font-size: 30px !important;
        padding-top: 486px;
        text-align: center;
        box-sizing: border-box;
        width: 605px;
        height: 1056px;
    }
</style>