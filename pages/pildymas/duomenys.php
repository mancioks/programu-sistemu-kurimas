<?php
    function clean($string) {
        return preg_replace('/[^A-Za-z0-9 \-]/', '', $string); // Removes special chars.
    }

    if($actions[0] == "submit") {
        foreach ($_POST as $key => $post) {
            $_POST[$key] = clean($post);
        }
        $_POST["user_data"] = $currentUser[0];
        $data = json_encode($_POST);

        $db = new database();

        $statusas = $currentUser[0]["statusas"];
        $raktas = $currentUser[0]["deklaracija_key"];

        if($statusas == 0) {
            $db->update("UPDATE deklaracijos SET deklaracija1 = '". $data ."' WHERE raktas = '". $raktas ."'");
        }
        else {
            $db->update("UPDATE deklaracijos SET deklaracija2 = '". $data ."' WHERE raktas = '". $raktas ."'");
        }

        redirect($home."baigta");
    }
?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-left bg-light">
    <form method="post" action="<?php echo $home; ?>duomenys/submit">
        <h1 class="h4 font-weight-normal mb-4">Informacija apie vairuotoją</h1>


        <div class="row g-3">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Vardas</label>
                    <input type="text" name="vardas" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pavardė</label>
                    <input type="text" name="pavarde" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Gimimo data</label>
                    <input type="date" name="data" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Adresas</label>
                    <input type="text" name="adresas" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>


        <div class="row g-3">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefono numeris</label>
                    <input type="text" name="telefonas" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Vairuotojo pažymėjimo numeris</label>
                    <input type="text" name="pazymejimas" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>


        <div class="row g-3">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategorija</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="kategorija">
                        <option value="AM">AM</option>
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A">A</option>
                        <option value="B1">B1</option>
                        <option value="B">B</option>
                        <option value="BE">BE</option>
                        <option value="C1">C1</option>
                        <option value="C1E">C1E</option>
                        <option value="C">C</option>
                        <option value="CE">CE</option>
                        <option value="D1">D1</option>
                        <option value="D1E">D1E</option>
                        <option value="D">D</option>
                        <option value="DE">DE</option>
                        <option value="T">T</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Vairuotojo pažymėjimas galioja iki</label>
                    <input type="date" name="galiojimas" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>


        <br>
        <h1 class="h4 font-weight-normal mb-4">Eismo įvykis</h1>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Matomi transporto priemonės apgadinimai</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="apgadinimai"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Aplinkybės</label>
            <select multiple class="form-control" id="exampleFormControlSelect2" name="aplinkybes[]" style="height: 400px;">
                <option value="1">stovint / sustabdžius</option>
                <option value="2">pradedant važiuoti / atidarant dureles</option>
                <option value="3">stabdant</option>
                <option value="4">išvažiuojant iš stovėjimo vietos</option>
                <option value="5">įvažiuojant į stovėjimo vietą</option>
                <option value="6">įvažiuojant į žiedinę sankryžą</option>
                <option value="7">važiuojant žiedinėje sankryžoje</option>
                <option value="8">atsitrenkiant į ta pačia kryptimi ir ta pačia kelio juosta važiuojančios tr. priemonės galine dalį</option>
                <option value="9">važiuojant ta pačia kryptimi, tačiau kita kelio juista</option>
                <option value="10">persirikiuojant</option>
                <option value="11">lenkiant</option>
                <option value="12">sukant į dešinę</option>
                <option value="13">sukant į kairą</option>
                <option value="14">važiuojant atbuline eiga</option>
                <option value="15">įvažiuojant į priepriešinio eismo juostą</option>
                <option value="16">sankryžoje atsitrenkiant iš dešinės</option>
                <option value="17">nesuteikiant pirmenybės teisės ar nepaisant raudono šviesoforo signalo</option>
            </select>
        </div>
        <br>
        <h1 class="h4 font-weight-normal mb-4">Kita informacija</h1>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Pastabos</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pastabos"></textarea>
        </div>
        <button class="btn btn-primary btn-lg btn-block m-auto">Patvirtinti</button>
    </form>
</div>