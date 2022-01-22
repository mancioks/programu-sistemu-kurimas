<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h1 class="h1 font-weight-normal">Suteikite leidimą nustatyti jūsų dabartinę vietą</h1>
        <?php
        if ($actions[0] == "submit") {
            $db = new database();
            $db->update("UPDATE sessions SET latitude = '" . $_POST["lat"] . "', longitude = '" . $_POST["long"] . "', status = 2, active_to = '". time()+3600 ."' WHERE session = '" . getSessionId() . "'");
            //echo "UPDATE sessions SET latitude = '" . $_POST["lat"] . "', longitude = '" . $_POST["long"] . "' WHERE session = '" . getSessionId() . "'";
            redirect($home."susijungimas");
        }
        ?>
        <form class="mt-4" action="<?php echo $home; ?>vieta/submit" method="post" id="vietaForm">
            <div class="form-group" style="display:none;">
                <input type="text" id="lat" name="lat">
                <input type="text" id="long" name="long">

            </div>
            <a class="btn btn-primary btn-lg btn-block text-white" style="cursor: pointer;" onclick="getLocation()">Suteikti</a>
            <div id="vietaError"></div>
        </form>
    </div>
</div>

<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        }
    }
    function showError(position) {
        document.getElementById("vietaError").innerHTML = "<br>Nepavyko gauti jūsų dabartinės vietos. Patikrinkite nustatymus";
    }
    function showPosition(position) {

        let skLat = position.coords.latitude;
        let skLong = position.coords.longitude;

        var requestOptions = {
            method: 'GET',
        };

        fetch("https://api.geoapify.com/v1/geocode/reverse?lat="+skLat+"&lon="+skLong+"&apiKey=ea243f92d5b44448ae55a6978f09cc09", requestOptions)
            .then(response => response.json())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));

        document.getElementById("lat").value = skLat;
        document.getElementById("long").value = skLong;

        if(skLat && skLong) {
            document.getElementById("vietaForm").submit();
        }
    }
</script>