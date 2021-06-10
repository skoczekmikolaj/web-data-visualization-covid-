<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <
    <meta http-equiv="Content-type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Covid-19 - interaktywne wizualizacje danych</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="styl.css" type="text/css"/>
    <link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>  
</head>
<body>
    <div class="containter-fluid" id="menu">
    
    </div>
    
    <div class="containter">
        <section id="baner">
            <div class="col-sm-12">
            <a href="glowna.php">
            <img id="banerObraz" src="VirusesVisualization.jpg" width="100%" height="400"/>
            <span id="tekstNaBanerze">
                <h1>COVID-19 - WIZUALIZACJE DANYCH</h1>
                <br/>
                <h4> Mikolaj Skoczek</h4>
            </span>
            </a>
            </div>
        </section>
    
        <section id="kwadraty">
        <div class="row">
            <div class="col-md-6" class="kwadrat">
                <h4>COVID-19 w Polsce</h4>
                <div class="opis">
                <p>Iloœæ zaka¿eñ, zgonów, aktywnych przypadków w Polsce, tak¿e z podzia³em na poszczególne województwa</p>
                </div>
            </div>
            <div class="col-md-6" class="kwadrat">
                <h4>Covid-19 na œwiecie</h4>
                <div class="opis">
                <p>Sytuacja epidemiczna w poszczególnych krajach œwiata oraz porównanie z sytuacj¹ w Polsce</P>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" class="kwadrat">
                <h4>Sytuacja medyczna w Polsce</h4>
                <div class="opis">
                <p>Statystyki osób hospitalizowanych, osób pod respiratorami, dostêpnych ³ó¿ek i respiratorów, a tak¿e dane o osobach na kwarantannie </P>
                </div>
            </div>
            <div class="col-md-6" class="kwadrat">
                <h4>Szczepienia</h4>
                <div class="opis">
                <p>Statystyki dotycz¹ce szczepieñ w Polsce, informacje o niepo¿¹danych odczynach poszczepiennych</P>
                </div>
            </div>
        </div>
        </section>
    
    
    
    </div>









<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
  
<?php
    require_once "connection.php";

    $polaczenie= @new mysqli($host,$db_user,$db_password,$db_name);
    $tab_danecovid=[];
    $tab_dzienZakWoj=[];
    $tab_sumaZakWoj=[];
    $tab_testyWoj=[];
    $tab_swiat=[];
    $tab_szczepieniaPlec=[];
    $tab_szczepienia=[];
    $tab_respiratoryLozka=[];
    $tab_wojewodztwa=[];


 class Danecovid 
 {
    public $data;
    public $nowePrzypadki;
    public $noweZgony;
    public $noweWyzdrowienia;
    public $zmianaAktywnychPrzypadkow;
    public $sumaPrzypadkow;
    public $sumaZgonow;
    public $sumaWyzdrowien;
    public $sumaTestow;
    public $sumaDobowaTestow;
    public $dobowaSumaTestowAntygenowych;
    public $osobyNaKwarantannie;
    public function __construct($data, $nowePrzypadki, $noweZgony, $noweWyzdrowienia, $zmianaAktywnychPrzypadkow, $sumaPrzypadkow, $sumaZgonow, $sumaWyzdrowien, $sumaTestow, $sumaDobowaTestow,
        $dobowaSumaTestowAntygenowych, $osobyNaKwarantannie)
    {
        $this->data=$data;
        $this->nowePrzypadki=$nowePrzypadki;
        $this->noweZgony=$noweZgony;
        $this->noweWyzdrowienia=$noweWyzdrowienia;
        $this->zmianaAktywnychPrzypadkow=$zmianaAktywnychPrzypadkow;
        $this->sumaPrzypadkow=$sumaPrzypadkow;
        $this->sumaZgonow=$sumaZgonow;
        $this->sumaWyzdrowien=$sumaWyzdrowien;
        $this-> sumaTestow= $sumaTestow;
        $this->sumaDobowaTestow=$sumaDobowaTestow;
        $this->dobowaSumaTestowAntygenowych=$dobowaSumaTestowAntygenowych;
        $this->osobyNaKwarantannie= $osobyNaKwarantannie;
    }
 }
 class Swiat
 {
      public $kraj;
      public $liczbaZakazonych;
      public $zakazeniNaMilion;
      public $zgony;
      public $ludnosc;
      public $zgonyNaMilion;
      public $procZakazonych;
      public $procZmarlych;
      public $smiertelnosc;//ilosc zmarlych/ilosc zakazonych
      public function __construct( $kraj, $liczbaZakazonych, $zakazeniNaMilion, $zgony, $ludnosc, $zgonyNaMilion, $procZakazonych, $procZmarlych, $smiertelnosc)
      {
        $this->kraj=$kraj;
        $this->liczbaZakazonych=$liczbaZakazonych;
        $this->zakazeniNaMilion=$zakazeniNaMilion;
        $this->zgony=$zgony;
        $this->ludnosc=$ludnosc;
        $this->zgonyNaMilion=$zgonyNaMilion;
        $this->procZakazonych=$procZakazonych;
        $this->procZmarlych=$procZmarlych;
        $this->smiertelnosc=$smiertelnosc;
      }
 }

 class DzienZakWoj
 {
    public $data1;
    public $dolnoslaskie;
    public $kujawskoPomorskie;
    public $lubelskie;
    public $lubuskie;
    public $lodzkie;
    public $malopolskie;
    public $mazowieckie;
    public $opolskie;
    public $podkarpackie;
    public $podlaskie;
    public $pomorskie;
    public $slaskie;
    public $swietokrzyskie;
    public $warminskoMazurskie;
    public $wielkopolskie;
    public $zachodniopomorskie;
    public $polska;
    public function __construct($data1, $dolnoslaskie, $kujawskoPomorskie, $lubelskie, $lubuskie, $lodzkie, $malopolskie,
    $mazowieckie, $opolskie, $podkarpackie, $podlaskie, $pomorskie, $slaskie, $swietokrzyskie, $warminskoMazurskie, $wielkopolskie, $zachodniopomorskie, $polska)
    {
        $this->data1=$data1;
        $this->dolnoslaskie=$dolnoslaskie;
        $this->kujawskoPomorskie=$kujawskoPomorskie;
        $this->lubelskie=$lubelskie;
        $this->lubuskie=$lubuskie;
        $this->lodzkie=$lodzkie;
        $this->malopolskie=$malopolskie;
        $this->mazowieckie=$mazowieckie;
        $this->opolskie= $opolskie;
        $this->podkarpackie=$podkarpackie;
        $this->podlaskie=$podlaskie;
        $this->pomorskie= $pomorskie;
        $this->slaskie=$slaskie;
        $this->swietokrzyskie=$swietokrzyskie;
        $this->warminskoMazurskie= $warminskoMazurskie;
        $this->wielkopolskie=$wielkopolskie;
        $this->zachodniopomorskie=$zachodniopomorskie;
        $this->polska= $polska;
    }
 }

 class SumaZakWoj
 {

    public $data2;
    public $dolnoslaskie2;
    public $kujawskoPomorskie2;
    public $lubelskie2;
    public $lubuskie2;
    public $lodzkie2;
    public $malopolskie2;
    public $mazowieckie2;
    public $opolskie2;
    public $podkarpackie2;
    public $podlaskie2;
    public $pomorskie2;
    public $slaskie2;
    public $swietokrzyskie2;
    public $warminskoMazurskie2;
    public $wielkopolskie2;
    public $zachodniopomorskie2;
    public $polska2;
    public function __construct($data2, $dolnoslaskie2, $kujawskoPomorskie2, $lubelskie2, $lubuskie2, $lodzkie2, $malopolskie2,
    $mazowieckie2, $opolskie2, $podkarpackie2, $podlaskie2, $pomorskie2, $slaskie2, $swietokrzyskie2, $warminskoMazurskie2, $wielkopolskie2, $zachodniopomorskie2, $polska2)
    {
        $this->data2=$data2;
        $this->dolnoslaskie2=$dolnoslaskie2;
        $this->kujawskoPomorskie2=$kujawskoPomorskie2;
        $this->lubelskie2=$lubelskie2;
        $this->lubuskie2=$lubuskie2;
        $this->lodzkie2=$lodzkie2;
        $this->malopolskie2=$malopolskie2;
        $this->mazowieckie2=$mazowieckie2;
        $this->opolskie2= $opolskie2;
        $this->podkarpackie2=$podkarpackie2;
        $this->podlaskie2=$podlaskie2;
        $this->pomorskie2= $pomorskie2;
        $this->slaskie2=$slaskie2;
        $this->swietokrzyskie2=$swietokrzyskie2;
        $this->warminskoMazurskie2= $warminskoMazurskie2;
        $this->wielkopolskie2=$wielkopolskie2;
        $this->zachodniopomorskie2=$zachodniopomorskie2;
        $this->polska2= $polska2;
    }
 }

 class TestyWoj
 {

    public $data3;
    public $dolnoslaskie3;
    public $kujawskoPomorskie3;
    public $lubelskie3;
    public $lubuskie3;
    public $lodzkie3;
    public $malopolskie3;
    public $mazowieckie3;
    public $opolskie3;
    public $podkarpackie3;
    public $podlaskie3;
    public $pomorskie3;
    public $slaskie3;
    public $swietokrzyskie3;
    public $warminskoMazurskie3;
    public $wielkopolskie3;
    public $zachodniopomorskie3;
    public function __construct($data3, $dolnoslaskie3, $kujawskoPomorskie3, $lubelskie3, $lubuskie3, $lodzkie3, $malopolskie3,
    $mazowieckie3, $opolskie3, $podkarpackie3, $podlaskie3, $pomorskie3, $slaskie3, $swietokrzyskie3, $warminskoMazurskie3, $wielkopolskie3, $zachodniopomorskie3)
    {
        $this->data3=$data3;
        $this->dolnoslaskie3=$dolnoslaskie3;
        $this->kujawskoPomorskie3=$kujawskoPomorskie3;
        $this->lubelskie3=$lubelskie3;
        $this->lubuskie3=$lubuskie3;
        $this->lodzkie3=$lodzkie3;
        $this->malopolskie3=$malopolskie3;
        $this->mazowieckie3=$mazowieckie3;
        $this->opolskie3= $opolskie3;
        $this->podkarpackie3=$podkarpackie3;
        $this->podlaskie3=$podlaskie3;
        $this->pomorskie3= $pomorskie3;
        $this->slaskie3=$slaskie3;
        $this->swietokrzyskie3=$swietokrzyskie3;
        $this->warminskoMazurskie3= $warminskoMazurskie3;
        $this->wielkopolskie3=$wielkopolskie3;
        $this->zachodniopomorskie3=$zachodniopomorskie3;
    }
 }

 class SzczepieniaPlec
 {
    public $data5;
    public $kobiety;
    public $mezczyzni;
    public $brakDanych;
    public $NopKobiety;
    public $NopMezczyzni;
    public function __construct($data5,$kobiety,$mezczyzni,$brakDanych,$NopKobiety,$NopMezczyzni)
    {
        $this->data5=$data5;
        $this->kobiety=$kobiety;
        $this->mezczyzni=$mezczyzni;
        $this->brakDanych=$brakDanych;
        $this->NopKobiety=$NopKobiety;
        $this->NopMezczyzni=$NopMezczyzni;
    }
 }

class RespiratoryLozka
{
    public $data6;
    public $osobyHospitalizowane;
    public $zmianaDobowaHospitalizowanych;
    public $lozkaWPolsce;
    public $zajeteRespiratory;
    public $respiratoryZmianaDobowa;
    public $respiratoryWPolsce;
    public $procZajetychLozek;
    public $procZajetychRespiratorow;
    public function __construct($data6,$osobyHospitalizowane,$zmianaDobowaHospitalizowanych,$lozkaWPolsce,$zajeteRespiratory,$respiratoryZmianaDobowa,
    $respiratoryWPolsce,$procZajetychLozek, $procZajetychRespiratorow)
    {
        $this->data6=$data6;
        $this->osobyHospitalizowane=$osobyHospitalizowane;
        $this->zmianaDobowaHospitalizowanych=$zmianaDobowaHospitalizowanych;
        $this->lozkaWPolsce=$lozkaWPolsce;
        $this->zajeteRespiratory=$zajeteRespiratory;
        $this->respiratoryZmianaDobowa=$respiratoryZmianaDobowa;
        $this->respiratoryWPolsce=$respiratoryWPolsce;
        $this->procZajetychLozek=$procZajetychLozek;
        $this->procZajetychRespiratorow=$procZajetychRespiratorow;
    }
}

class Szczepienie
{
    public $data7;
    public $SzczepieniaSuma;
    public $SzczepieniaDziennie;
    public $LiczbaZaszczepionychJednaLubDwomaDawkami;
    public $OsobyTylkoPoPierwszejDawce;
    public $OsobyPoObuDawkach;
    public $Nop;
    public $NopLagodne;
    public $NopPowazne;
    public $NopCiezkie;
    public $NopZgon;
    public function __construct ($data7,  $SzczepieniaSuma,  $SzczepieniaDziennie, $LiczbaZaszczepionychJednaLubDwomaDawkami,  $OsobyTylkoPoPierwszejDawce,
    $OsobyPoObuDawkach,  $Nop,  $NopLagodne,  $NopPowazne,  $NopCiezkie,  $NopZgon)
    {
        $this->data7=$data7;
        $this->SzczepieniaSuma=$SzczepieniaSuma;
        $this->SzczepieniaDziennie=$SzczepieniaDziennie;
        $this->LiczbaZaszczepionychJednaLubDwomaDawkami=$LiczbaZaszczepionychJednaLubDwomaDawkami;
        $this->OsobyTylkoPoPierwszejDawce=$OsobyTylkoPoPierwszejDawce;
        $this->OsobyPoObuDawkach=$OsobyPoObuDawkach;
        $this->Nop=$Nop;
        $this->NopLagodne=$NopLagodne;
        $this->NopPowazne=$NopPowazne;
        $this->NopCiezkie=$NopCiezkie;
        $this->NopZgon=$NopZgon;
    }
}
class Wojewodztwo
{
    public $NazwaWojewodztwa;
    public $LiczbaLudnosci;
    public $PozytywniDo28Grudnia;
    public $ZaszczepieniTylkoPierwszaDawka;
    public $ZaszczepieniObomaDawkami;
    public $OgolemZaszczepieni;
    public $ProcPozytywnychDo28Grudnia;
    public $ProcZaszczepionychJednaLubDwoma;
    public $ProcZaszczepionychJedna;
    public $ProcZaszczepionychOboma;
    public function __construct($NazwaWojewodztwa, $LiczbaLudnosci,  $PozytywniDo28Grudnia, $ZaszczepieniTylkoPierwszaDawka, $ZaszczepieniObomaDawkami, $OgolemZaszczepieni,
    $ProcPozytywnychDo28Grudnia, $ProcZaszczepionychJednaLubDwoma,  $ProcZaszczepionychJedna, $ProcZaszczepionychOboma)
    {
     $this->NazwaWojewodztwa=$NazwaWojewodztwa;
     $this->LiczbaLudnosci=$LiczbaLudnosci;
     $this->PozytywniDo28Grudnia=$PozytywniDo28Grudnia;
     $this->ZaszczepieniTylkoPierwszaDawka=$ZaszczepieniTylkoPierwszaDawka;
     $this->ZaszczepieniObomaDawkami=$ZaszczepieniObomaDawkami;
     $this->OgolemZaszczepieni=$OgolemZaszczepieni;
     $this->ProcPozytywnychDo28Grudnia=$ProcPozytywnychDo28Grudnia;
     $this->ProcZaszczepionychJednaLubDwoma=$ProcZaszczepionychJednaLubDwoma;
     $this->ProcZaszczepionychJedna=$ProcZaszczepionychJedna;
     $this->ProcZaszczepionychOboma=$ProcZaszczepionychOboma;
    }
}


 

if($polaczenie->connect_errno!=0)
{
    echo "wystapil blad".$polaczenie->connect_errno." ".$polaczenie->connect_error;
}
else 
{
    #echo "jest git";
    #echo "</br>";
    $sql="select * from danecovid";
    if( $wynik = $polaczenie->query($sql))
    {
        $ile_wierszy=$wynik->num_rows;
        
        $wiersz=$wynik->fetch_assoc();
        while($wiersz = mysqli_fetch_array($wynik))
        {
            #echo $wiersz['Data'] . ", " . $wiersz['NowePrzypadki']." przypadkow zachorowan"; echo "<br>";
            $d0 = new Danecovid($wiersz['Data'], $wiersz['NowePrzypadki'], $wiersz['NoweZgony'], $wiersz['NoweWyzdrowienia'], $wiersz['ZmianaAktywnychPrzypadkow'],
            $wiersz['SumaPrzypadkow'], $wiersz['SumaZgonow'], $wiersz['SumaWyzdrowien'], $wiersz['SumaTestow'], $wiersz['SumaDobowaTestow'], 
            $wiersz['DobowaSumaTestowAntygenowych'], $wiersz['OsobyNaKwarantannie']);
            $tab_danecovid[]=$d0;//przypisuje rekord na pierwszym wolnym miejscu  
        }
        $wynik->free_result();

        /*for($i=0;$i<5;$i++)
        {
         echo $tab_danecovid[$i]->data;
        }*/
    }

        $sql1="select * from dziennezakazeniawojewodztwa";
    if( $wynik1 = $polaczenie->query($sql1))
    {
       
        
        $wiersz1=$wynik1->fetch_assoc();
        while($wiersz1= mysqli_fetch_array($wynik1))
        {
            
            $d1 = new DzienZakWoj($wiersz1['Data'], $wiersz1['Dolnoslaskie'], $wiersz1['KujawskoPomorskie'], $wiersz1['Lubelskie'], $wiersz1['Lubuskie'],
            $wiersz1['Lodzkie'], $wiersz1['Malopolskie'], $wiersz1['Mazowieckie'], $wiersz1['Opolskie'], $wiersz1['Podkarpackie'], 
            $wiersz1['Podlaskie'], $wiersz1['Pomorskie'], $wiersz1['Slaskie'], $wiersz1['Swietokrzyskie'], $wiersz1['WarminskoMazurskie'], 
            $wiersz1['Wielkopolskie'], $wiersz1['Zachodniopomorskie'], $wiersz1['Polska']);
            $tab_dzienZakWoj[]=$d1;  
        }
        $wynik1->free_result();
    }

        $sql2="select * from sumazakazenwojewodztwa";
    if( $wynik2 = $polaczenie->query($sql2))
    {
       
        
        $wiersz2=$wynik2->fetch_assoc();
        while($wiersz2= mysqli_fetch_array($wynik2))
        {
            
            $d2 = new SumaZakWoj($wiersz2['data'], $wiersz2['Dolnoslaskie'], $wiersz2['KujawskoPomorskie'], $wiersz2['Lubelskie'], $wiersz2['Lubuskie'],
            $wiersz2['Lodzkie'], $wiersz2['Malopolskie'], $wiersz2['Mazowieckie'], $wiersz2['Opolskie'], $wiersz2['Podkarpackie'], 
            $wiersz2['Podlaskie'], $wiersz2['Pomorskie'], $wiersz2['Slaskie'], $wiersz2['Swietokrzyskie'], $wiersz2['WarminskoMazurskie'], 
            $wiersz2['Wielkopolskie'], $wiersz2['Zachodniopomorskie'], $wiersz2['Polska']);
            $tab_sumaZakWoj[]=$d2;  
        }
        $wynik2->free_result();
    }
    
       $sql3="select * from testywojewodztwa";
    
        if( $wynik3 = $polaczenie->query($sql3))
    {
       
        
        $wiersz3=$wynik3->fetch_assoc();
        while($wiersz3= mysqli_fetch_array($wynik3))
        {
            
            $d3 = new TestyWoj($wiersz3['Data'], $wiersz3['Dolnoslaskie'], $wiersz3['KujawskoPomorskie'], $wiersz3['Lubelskie'], $wiersz3['Lubuskie'],
            $wiersz3['Lodzkie'], $wiersz3['Malopolskie'], $wiersz3['Mazowieckie'], $wiersz3['Opolskie'], $wiersz3['Podkarpackie'], 
            $wiersz3['Podlaskie'], $wiersz3['Pomorskie'], $wiersz3['Slaskie'], $wiersz3['Swietokrzyskie'], $wiersz3['WarminskoMazurskie'], 
            $wiersz3['Wielkopolskie'], $wiersz3['Zachodniopomorskie']);
            $tab_testyWoj[]=$d3;  
        }
        $wynik3->free_result();
    }

     $sql4="SELECT *, round(LiczbaZakazonych/ludnosc * 100,2) AS procZakazonych, round(Zgony/Ludnosc * 100,2) as procZmarlych, round(zgony/liczbazakazonych*100 ,2) as smiertelnosc FROM swiat";
    if( $wynik4 = $polaczenie->query($sql4))
    {
        $wiersz4=$wynik4->fetch_assoc();
        while($wiersz4= mysqli_fetch_array($wynik4))
        {
            $d4 = new Swiat($wiersz4['Kraj'], $wiersz4['LiczbaZakazonych'], $wiersz4['ZakazeniNaMilionOsob'], $wiersz4['Zgony'], $wiersz4['Ludnosc'],
            $wiersz4['ZgonyNaMilionOsob'], $wiersz4['procZakazonych'], $wiersz4['procZmarlych'], $wiersz4['smiertelnosc']);
            $tab_swiat[]=$d4;  
        }
        $wynik4->free_result();
    }


     $sql5='SELECT * FROM szczepieniawgplci';
    if( $wynik5 = $polaczenie->query($sql5))
    {
        $wiersz5=$wynik5->fetch_assoc();
        while($wiersz5= mysqli_fetch_array($wynik5))
        {
            $d5 = new SzczepieniaPlec($wiersz5['Data'], $wiersz5['Kobiety'], $wiersz5['Mezczyzni'], $wiersz5['BrakDanychOPlci'], $wiersz5['NOPKobiety'],$wiersz5['NopMezczyzni']);
            $tab_szczepieniaPlec[]=$d5;  
        }
        $wynik5->free_result();
    }

      $sql6='SELECT *, round(OsobyHospitalizowane/LozkaWPolsce*100,2) as ProcZajetychLozek, round(ZajeteRespiratory/RespiratoryWPolsce*100,2) as ProcZajetychRespiratorow FROM respiratorylozka';
    if( $wynik6 = $polaczenie->query($sql6))
    {
        $wiersz6=$wynik6->fetch_assoc();
        while($wiersz6= mysqli_fetch_array($wynik6))
        {
            $d6 = new RespiratoryLozka($wiersz6['Data'], $wiersz6['OsobyHospitalizowane'], $wiersz6['ZmianaDobowaHospitalizowanych'],$wiersz6['LozkaWPolsce'], 
            $wiersz6['ZajeteRespiratory'],$wiersz6['RespiratoryZmianaDobowa'],$wiersz6['RespiratoryWPolsce'], $wiersz6['ProcZajetychLozek'],$wiersz6['ProcZajetychRespiratorow']);
            $tab_respiratoryLozka[]=$d6;  
        }
        $wynik6->free_result();
    }

    $sql7='SELECT * FROM szczepienia';
    if( $wynik7 = $polaczenie->query($sql7))
    {
        $wiersz7=$wynik7->fetch_assoc();
        while($wiersz7= mysqli_fetch_array($wynik7))
        {
            $d7 = new Szczepienie($wiersz7['data'], $wiersz7['WykonaneSzczepieniaSuma'], $wiersz7['SzczepieniaDzienne'], $wiersz7['LiczbaZaszczepionych1lub2Dawkami'], 
            $wiersz7['OsobyPoTylkoPierwszejDawce'],$wiersz7['OsobyPoObuDawkach'],$wiersz7['NiepozadaneOdczynyPoszczepienne'], $wiersz7['NopLagodne'], 
            $wiersz7['NopPowazne'], $wiersz7['NopCiezkie'],$wiersz7['NopZgon']);
            $tab_szczepienia[]=$d7;  
        }
        $wynik7->free_result();
    }


    $sql8="SELECT *, round(PozytywniDo28Grudnia/LiczbaLudnosci*100,2) as ProcPozytywnychDo28Grudnia, round(OgolemZaszczepieni/LiczbaLudnosci*100,2) AS ProcZaszczepionychJednaLubDwoma, 
    round(ZaszczepieniTylkoPierwszaDawka/LiczbaLudnosci*100,2) AS ProcZaszczepionychJedna, round(ZaszczepieniObomaDawkami/LiczbaLudnosci*100,2) AS ProcZaszczepionychOboma FROM wojewodztwa";
    if( $wynik8 = $polaczenie->query($sql8))
    {
        $wiersz8=$wynik8->fetch_assoc();
        while($wiersz8= mysqli_fetch_array($wynik8))
        {
            $d8 = new Wojewodztwo($wiersz8['NazwaWojewodztwa'], $wiersz8['LiczbaLudnosci'], $wiersz8['PozytywniDo28Grudnia'], $wiersz8['ZaszczepieniTylkoPierwszaDawka'], 
            $wiersz8['ZaszczepieniObomaDawkami'],$wiersz8['OgolemZaszczepieni'],$wiersz8['ProcPozytywnychDo28Grudnia'], $wiersz8['ProcZaszczepionychJednaLubDwoma'], 
            $wiersz8['ProcZaszczepionychJedna'], $wiersz8['ProcZaszczepionychOboma']);
            $tab_wojewodztwa[]=$d8;  
        }
        $wynik8->free_result();
    }



    else 
    {
    echo "cos nie dziala";
	}

     
    $polaczenie->close();
}
?>


    /*  TU SIE ZACZYNA JAVA SCRIPT*/
    var danecovid_js = <?php echo json_encode($tab_danecovid) ?>;
    console.log(danecovid_js);
    //document.write (danecovid_js[0].data);

    var dzienZakWoj_js= <?php echo json_encode($tab_dzienZakWoj) ?>;
    console.log(dzienZakWoj_js);
    //document.write (dzienZakWoj_js[0].malopolskie);

    var sumaZakWoj_js= <?php echo json_encode($tab_sumaZakWoj) ?>;
    console.log(sumaZakWoj_js);
    //document.write (sumaZakWoj_js[0].data2);//pamietac ze dalej s¹ dwojki

   var testyWoj_js=  <?php echo json_encode($tab_testyWoj) ?>;
   console.log(testyWoj_js);
   //document.write (" "+testyWoj_js[13].malopolskie3);

   var swiat_js=<?php echo json_encode($tab_swiat) ?>;
   console.log(swiat_js);
   //document.write(" "+swiat_js[5].procZmarlych);

    var szczepPlec_js=<?php echo json_encode($tab_szczepieniaPlec) ?>;
   console.log(szczepPlec_js);
   //document.write(" "+szczepPlec_js[5].kobiety);

   var respiratoryLozka_js=<?php echo json_encode($tab_respiratoryLozka) ?>;
   console.log(respiratoryLozka_js);
   //document.write(" XD"+respiratoryLozka_js[0].zajeteRespiratory);
   
   var szczepienia_js=<?php echo json_encode($tab_szczepienia) ?>;
   console.log(szczepienia_js);
   //document.write(" lagodne"+szczepienia_js[20].NopLagodne);


   var wojewodztwa_js=<?php echo json_encode($tab_wojewodztwa) ?>;
   console.log(wojewodztwa_js);
   //document.write(wojewodztwa_js[0].NazwaWojewodztwa);



 </script>
</body>
</html>