<?php /*

//phpinfo()
//Klasse Auto definieren
class auto
{
    //eine Eigenschaft/Attribut
    var $benoetigter_kraftstoff;
    var $marke;
    //Eigenschaft Anzahl Betankungen mit Startwert 0
    var $anzahl_betankungen = 0;

    //Methode festlegen, nennt sich Funktion, ist aber in einer Klasse
    //Auto redet, wenn der Tankdeckel geöffnet wird
    function tankdeckel_oeffnen()
    {
        //Ihr Auto sagt, welcher Kraftstoff benötigt wird

        echo "<p>Bitte mit ";
        echo $this->benoetigter_kraftstoff;
        echo " betanken. ";
        echo "Ich wurde ";
        echo $this->anzahl_betankungen;
        echo " mal betankt";
        //Anzahl Betankungen um 1 erhöhen
        $this->anzahl_betankungen++;
    }

    function marke_sagen()
    {
        echo "Ich bin";
        echo $this->marke;
    }
}

//aus der Klasse ein Objekt erzeugen
$auto_1 = new auto;
//Zuweisen des benötigten Kraftstoffs
//Definieren des Attributs
$auto_1->benoetigter_kraftstoff = "Diesel";
$auto_1->marke = "VW";

//Neues Objekt wird erzeugt
$golf = new auto;
//Attribute definieren
$golf->marke = "Dacia";
$golf->benoetigter_kraftstoff = "super";


//Methoden werden aufgerufen
$auto_1->tankdeckel_oeffnen();
$auto_1->marke_sagen();

$auto_1->tankdeckel_oeffnen();

$golf->tankdeckel_oeffnen();
*/

class mensch {
    var $name;
    var $geschlecht;
    var $alter;
}
//Eigenschaften der Klasse Mensch werden an Studenten vererbt
class student extends mensch
{
    //Eigenschaften

    public $hauptfach;
//public = außerhalb der Klasse verfügbar. private nur darin
    public function geburtstag()
    {
        $this->alter++;
        echo $this->name . " ist jetzt ";
        echo $this->alter . " Jahre.";
    }
//Methoden
    function fachwechsel()
    {
        echo "Altes Fach: ";
        echo $this->hauptfach;
        $this->hauptfach ="Latein";
        echo ". Neues Fach: ";
        echo $this->hauptfach;

    }
}
//Objekt anlegen
$Susi_S = new student;
//Attribute definieren
$Susi_S->name="Susi S.";
$Susi_S->alter=22;
$Susi_S->hauptfach="Englisch";

$Alfred_A = new student;
$Alfred_A->name="Alfred A";
$Alfred_A->alter=24;
$Alfred_A->hauptfach="Ameisenkunde";

//Methoden für jeweilige Objekte aufrufen
$Alfred_A->geburtstag();

$Alfred_A->geburtstag();

$Susi_S->fachwechsel();


//Besipiel: fpdf ist eigenlitch eine Klasse, die eingebunden wird
?>