<?php

class AlatMusik {
    public function bunyi(){
        return "*Suara Alat Musik*";
    }
}

class Gitar extends AlatMusik {
    public function bunyi() {
        return "Jreng";
    }
}

class Drum extends AlatMusik {
    public function bunyi() {
        return "Dum Dum";
    }
}

function mainkanMusik($AlatAlatMusik) {
    foreach ($AlatAlatMusik as $AlatMusik) {
        echo $AlatMusik->bunyi() .'<br>';
    }
}

$AlatAlatMusik = [
    new Gitar(),
    new Drum()
];

mainkanMusik($AlatAlatMusik);

?>