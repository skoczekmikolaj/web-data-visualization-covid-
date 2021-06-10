<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <
    <meta http-equiv="Content-type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Covid-19 - interaktywne wizualizacje danych</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <link rel="stylesheet" href="fontello/css/fontello.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet"/>

</head>
<body>
    <header>
        <div class="mainmenu">
            <nav class="navbar fixed-top navbar-dark  navbar-expand-lg">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false">
                    <span class="navbar-toggler-icon icon-bar navbar-toggle" ></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav mx-auto"><!--mx-auto mi wysrodkowuje menu na podstawie tego, że prawy i lewy margines mają być równe-->
                       <li class="nav-item"><a class="nav-link" href="covidpolska.php#kwadraty">Covid-19 - Polska</a></li>
                        <li class="nav-item"><a class="nav-link" href="swiat.php#swiat">Covid-19 - świat</a></li>
                        <li class="nav-item"><a class="nav-link" href="med.php#med">Sytuacja medyczna</a></li>
                        <li class="nav-item"> <a class="nav-link" href="szczepienia.php#szczepienia">Szczepienia</a></li>
                        <li class="nav-item"> <a class="nav-link" href="kontakt.html#ja">Kontakt</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <hr style="background:lightgray" />
    <div class="containter">
        <section id="baner">
            <div class="col-sm-12">
                <a href="index.html">
                    <img id="banerObraz" src="VirusesVisualization.jpg" width="100%" height="400" />
                    <span id="tekstNaBanerze">
                        <h1>COVID-19 - WIZUALIZACJE DANYCH</h1>
                        <h4> Mikołaj Skoczek</h4>
                    </span>
                </a>
            </div>
        </section>

        <section id="kwadraty">
            <div class="row">
                <div class="col-md-12">
                  <br/><br/>
                  <center> <h3>Statystyki zachorowań, zgonów, wykonanych testów w Polsce</h3></center>
                </div>    
            </div>
            <div class="row">
                
                <div class="col-md-6" id="select1">
                   <center>
                   <br/><br/><br/><br/><br/>
                   
                       <center> <h5>Wybierz województwo</h5></center>
                       <br/>
                   <select name="wojewodztwo1" id="wojewodztwo1" onchange="ladujWojewodztwo()">
                         <option value="Polska">Polska łącznie</option>
                         <option value="KujawskoPomorskie">Kujawsko-Pomorskie</option>
                         <option value="Lubelskie">Lubelskie</option>
                         <option value="Lubuskie">Lubuskie</option>
                         <option value="Lodzkie">Łódzkie</option>
                         <option value="Malopolskie">Małopolskie</option>
                         <option value="Mazowieckie">Mazowieckie</option>
                         <option value="Opolskie">Opolskie</option>
                         <option value="Podkarpackie">Podkarpackie</option>
                         <option value="Podlaskie">Podlaskie</option>
                         <option value="Pomorskie">Pomorskie</option>
                         <option value="Slaskie">Śląskie</option>
                         <option value="Swietokrzyskie">Świętokrzyskie</option>
                         <option value="WarminskoMazurskie">Warmińsko-Mazurskie</option>
                         <option value="Wielkopolskie">Wielkopolskie</option>
                         <option value="Zachodniopomorskie">Zachodniopomorskie</option>
                   </select>
                   </center> 
                </div>
                 

                <div class="col-md-6">
                    <br /><br />
                    <div class="duzaliczba" >
                    <center>
                    <p id="liczba1"></p>
                    
                    </div>
                    <div class="opisliczby" id="opisliczby1">
                    
                    </div>
                    </center>
                </div>
            </div>
            <br/><br/> <br/><br/>
            <hr style="background:white" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="wykres">
                        <canvas id="zgonyWojewodztwaWykres"></canvas>
                </div>
            </div>
            </section>
          
        <section>
            <hr style="background:white" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="wykres">
                        <canvas id="przypadkiwPolsce"></canvas>
                </div>
            </div>
        </section>
          <section>
            <hr style="background:white" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="wykres">
                        <canvas id="pozytywniWojewodztwaWykres"></canvas>
                </div>
            </div>
        </section>
         <section>
            <hr style="background:white" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="wykres">
                        <canvas id="przypadkiTesty"></canvas>
                </div>
            </div>
        </section>
         <section>
            <hr style="background:white" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="wykres">
                        <canvas id="ozdrowiency"></canvas>
                </div>
            </div>
        </section>
        <section>
            <hr style="background:white" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="wykres">
                        <canvas id="slopeWoj"></canvas>
                </div>
            </div>
        </section>
         <section>
            <hr style="background:white" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="wykres">
                        <canvas id="OsobyNaKwarantannie"></canvas>
                </div>
            </div>
        </section>
        <br />
        <hr style="background:white" />
        <section id="zrodla">
            <br /><br />
            <div class="row">
                <div class="col-md-12"> <h1>Źródła danych</h1></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br /><br />
                    <div class="kwadrat">
                        <a href="http://bit.ly/covid19-poland">
                            <h3>Baza danych Michała Rogalskiego</h3>
                            <br />
                            <div class="przycisk">
                                <input type="button" value="odwiedź stronę" />
                            </div>
                        </a>
                    </div>
                    <br />
                    <div class="opis">
                        <p>
                            Michał Rogalski, 19-letni pasjonat statystyki pochodzący z Torunia - przedstawia i aktualizuje różne zestawienia danych w pliku ogólnodostępnym na Google Drive.
                            Korzysta m.in z raportów Ministerstwa Zdrowia, danych z PSSE i WSSE, Urzędów Wojewódzkich. Z danych gromadzonych przez nastolatka korzysta m.in. Uniwersytet Warszawski
                            tworzący prognozy, których z kolei do swoich analiz używa polski rząd. Jest głównym źródłem informacji, które posłużyły do stworzenia wizualizacji na tej stronie.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <br /><br />
                    <div class="kwadrat">
                        <a href="https://coronavirus.jhu.edu/map.html">
                            <h3>John Hopkins University w Baltimore</h3>
                            <br />
                            <div class="przycisk">
                                <input type="button" value="odwiedź stronę" />
                            </div>
                        </a>
                    </div>
                    <br />
                    <div class="opis">
                        <p>
                            Naukowcy z uniwersytetu Johna Hopkinsa w Baltimore stworzyli interaktywną, globalną mapę, śledzącą rozprzestrzenianie się COVID-19 w czasie rzeczywistym. Dane na stronie są codziennie aktualizowane.
                            Z wyników pracy specjalistów z JHU korzysta między innymi Google. Dane zgromadzone przez amerykańskich uczonych są jednymi z najbardziej wiarygodnych wskaźników rozwoju pandemii w poszczególnych krajach świata
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br />
    <hr style="background:lightgray" />
    <footer>
        Strona została opracowana przez Mikołaja Skoczka ©
    </footer>
    <br />












    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

    <script type="text/javascript">
    
    <?php
    require_once "connection.php";
    $polaczenie= @new mysqli($host,$db_user,$db_password,$db_name);
    $tab_danecovid=[];
    $tab_dzienZakWoj=[];
    $tab_sumaZakWoj=[];
    $tab_testyWoj=[];
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
    public function __construct($data, $nowePrzypadki, $noweZgony, $noweWyzdrowienia, $zmianaAktywnychPrzypadkow, 
    $sumaPrzypadkow, $sumaZgonow, $sumaWyzdrowien, $sumaTestow, $sumaDobowaTestow,
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

 class Wojewodztwo
{
    public $NazwaWojewodztwa;
    public $LiczbaLudnosci;
    public $Pozytywni;
    public $ZaszczepieniTylkoPierwszaDawka;
    public $ZaszczepieniObomaDawkami;
    public $OgolemZaszczepieni;
    public $ProcPozytywnych;
    public $ProcZaszczepionychJednaLubDwoma;
    public $ProcZaszczepionychJedna;
    public $ProcZaszczepionychOboma;
    public $ZgonyWoj;
    public $ProcZgonyWoj;
    public function __construct($NazwaWojewodztwa, $LiczbaLudnosci,  $Pozytywni, $ZaszczepieniTylkoPierwszaDawka, $ZaszczepieniObomaDawkami, $OgolemZaszczepieni,
    $ProcPozytywnych, $ProcZaszczepionychJednaLubDwoma,  $ProcZaszczepionychJedna, $ProcZaszczepionychOboma, $ZgonyWoj, $ProcZgonyWoj)
    {
     $this->NazwaWojewodztwa=$NazwaWojewodztwa;
     $this->LiczbaLudnosci=$LiczbaLudnosci;
     $this->Pozytywni=$Pozytywni;
     $this->ZaszczepieniTylkoPierwszaDawka=$ZaszczepieniTylkoPierwszaDawka;
     $this->ZaszczepieniObomaDawkami=$ZaszczepieniObomaDawkami;
     $this->OgolemZaszczepieni=$OgolemZaszczepieni;
     $this->ProcPozytywnych=$ProcPozytywnych;
     $this->ProcZaszczepionychJednaLubDwoma=$ProcZaszczepionychJednaLubDwoma;
     $this->ProcZaszczepionychJedna=$ProcZaszczepionychJedna;
     $this->ProcZaszczepionychOboma=$ProcZaszczepionychOboma;
     $this->ZgonyWoj=$ZgonyWoj;
     $this->ProcZgonyWoj=$ProcZgonyWoj;
    }
}


if($polaczenie->connect_errno!=0)
{
    echo "wystapil blad".$polaczenie->connect_errno." ".$polaczenie->connect_error;
}
else 
{
    $sql="select * from danecovid";
    if( $wynik = $polaczenie->query($sql))
    {
        $ile_wierszy=$wynik->num_rows;
        
        $wiersz=$wynik->fetch_assoc();
        while($wiersz = mysqli_fetch_array($wynik))
        {
            $d0 = new Danecovid($wiersz['Data'], $wiersz['NowePrzypadki'], $wiersz['NoweZgony'], $wiersz['NoweWyzdrowienia'], 
            $wiersz['ZmianaAktywnychPrzypadkow'],$wiersz['SumaPrzypadkow'], $wiersz['SumaZgonow'], $wiersz['SumaWyzdrowien'],
            $wiersz['SumaTestow'], $wiersz['SumaDobowaTestow'], 
            $wiersz['DobowaSumaTestowAntygenowych'], $wiersz['OsobyNaKwarantannie']);
            $tab_danecovid[]=$d0;//przypisuje rekord na pierwszym wolnym miejscu  
        }
        $wynik->free_result();
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
    
    $sql8="SELECT *, round(Zakazenia/Ludnosc*100,2) as ProcPozytywnych, round(OgolemZaszczepieni/Ludnosc*100,2) 
    AS ProcZaszczepionychJednaLubDwoma, round(ZaszczepieniTylkoPierwszaDawka/Ludnosc*100,2) AS ProcZaszczepionychJedna, 
    round(ZaszczepieniObomaDawkami/Ludnosc*100,2) AS ProcZaszczepionychOboma, round(Zgony/Ludnosc*100,4) as ProcZgonow FROM wojewodztwa1";
    if( $wynik8 = $polaczenie->query($sql8))
    {
        $wiersz8=$wynik8->fetch_assoc();
        while($wiersz8= mysqli_fetch_array($wynik8))
        {
            $d8 = new Wojewodztwo($wiersz8['NazwaWojewodztwa'], $wiersz8['Ludnosc'], $wiersz8['Zakazenia'], 
            $wiersz8['ZaszczepieniTylkoPierwszaDawka'],  $wiersz8['ZaszczepieniObomaDawkami'],$wiersz8['OgolemZaszczepieni'],$wiersz8['ProcPozytywnych'], 
            $wiersz8['ProcZaszczepionychJednaLubDwoma'], $wiersz8['ProcZaszczepionychJedna'], $wiersz8['ProcZaszczepionychOboma'],$wiersz8['Zgony'], $wiersz8['ProcZgonow']);
            $tab_wojewodztwa[]=$d8;  
        }
        $wynik8->free_result();
    }

    else 
    {
    echo "cos nie dziala";
	}
    
     
    $polaczenie->close();
} ?>






  
var danecovid_js = <?php echo json_encode($tab_danecovid) ?>;
    console.log(danecovid_js);

    var dzienZakWoj_js= <?php echo json_encode($tab_dzienZakWoj) ?>;
    console.log(dzienZakWoj_js);

    var sumaZakWoj_js= <?php echo json_encode($tab_sumaZakWoj) ?>;
    console.log(sumaZakWoj_js);

   var testyWoj_js=  <?php echo json_encode($tab_testyWoj) ?>;
   console.log(testyWoj_js);

   var wojewodztwa_js=<?php echo json_encode($tab_wojewodztwa) ?>;
   console.log(wojewodztwa_js);

 window.onload=function()
 {
 ladujWojewodztwo();
 f_wykres1();
 f_wykres2();
 f_wykres3();
 f_wykres4();
 f_wykres5();
 f_wykres6();
 slopegraph();
 }



  function ladujWojewodztwo()
  {

    var wybrananeWoj = document.getElementById('wojewodztwo1').value;
    var tab=[];
    
    document.getElementById("liczba1").style.fontSize="120px";
    for(i=0;i<wojewodztwa_js.length;i++)
    {
              var nazwa = wojewodztwa_js[i].NazwaWojewodztwa;
              var zgony1= wojewodztwa_js[i].ZgonyWoj;
              let para={nazwa:nazwa,zgony1:zgony1};
              tab.push(para);
    }
    for(i=0;i<tab.length;i++)
    {
        if (tab[i].nazwa==wybrananeWoj)
        {
        document.getElementById("liczba1").innerHTML=tab[i].zgony1;  
        document.getElementById("opisliczby1").style.textAlign="center";
        if (tab[i].nazwa=="Polska") 
        {
        document.getElementById("opisliczby1").innerHTML="W Polsce na Covid-19 zmarło "+ tab[i].zgony1 + " osób";
        }
        else 
        {  
            if(tab[i].nazwa=="KujawskoPomorskie")
            {
            document.getElementById("opisliczby1").innerHTML= "W województwie kujawsko-pomorskim na Covid-19 zmarło "+ tab[i].zgony1 + " osób";  
            }
            else if (tab[i].nazwa=="WarminskoMazurskie")
            {
             document.getElementById("opisliczby1").innerHTML= "W województwie Warminsko-mazurskim na Covid-19 zmarło "+ tab[i].zgony1 + " osób";  
            }
            else
            {
             var tekst=tab[i].nazwa.substring(0,((tab[i].nazwa.length)-1))+'m';
             document.getElementById("opisliczby1").innerHTML= "W województwie "+ tekst.toLowerCase()+" na Covid-19 zmarło "+ tab[i].zgony1 + " osób";  
            }
        }       
    }
 }


    
 
 }
  console.log(document.getElementById('wojewodztwo1').value);

  function f_wykres1()
  {     var dane = [];
        var etykiety=[];
        var kolory=[];
        var pary=[];
        for(var i = 0;i<wojewodztwa_js.length;i++)
        {
            var para=
            {
                wartosc: Math.round((parseFloat(wojewodztwa_js[i].ZgonyWoj)/parseFloat(wojewodztwa_js[i].LiczbaLudnosci)*10000)*10)/10,
                wojewodztwo: wojewodztwa_js[i].NazwaWojewodztwa
            };
            pary.push(para);
        }
        function compareNumbers(a, b) 
        {
            return a.wartosc - b.wartosc
        };
        var posortowanePary=pary.sort(compareNumbers);
        console.log(posortowanePary);
         for(var i = 0;i<posortowanePary.length;i++)
        {
            dane.push(parseFloat(posortowanePary[i].wartosc));
            etykiety.push(posortowanePary[i].wojewodztwo);
            if(posortowanePary[i].wojewodztwo=='Polska')
            {
                kolory.push('#F5A818');
            }
            else 
            {
                kolory.push('#1A0D68');
            }

        }
        var wykres_canvas=document.getElementById('zgonyWojewodztwaWykres').getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'horizontalBar',
            data:
            {
                labels: etykiety ,
                datasets: [ { label: 'Liczba osób zmarłych na Covid-19 na 10 tys mieszkańców',data:dane, backgroundColor:kolory}]
            },
            options:
            {       
                    layout: {
                        padding: {
                            left: 50,
                            right: 50,
                            top: 0,
                            bottom: 0
                        }
                    },
                    title:
                    {
                    fontColor: 'darkgray',
                    display:true,
                    text: 'Liczba zmarłych na Covid-19 na 10 tys mieszkańców',
                    fontSize:20,
                    padding:40
                    },
                    legend:{display:false},

                    scales: 
                    {
                        xAxes: 
                        [{
                            gridLines: 
                            {
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {
                                 beginAtZero: true,
                                 max:20,
                                 stepSize:1,
                                 fontColor: 'darkgray',
                                 padding:10,
                                 maxRotation:0
                            }
                        }],
                         yAxes: 
                        [{
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };
   function f_wykres2()
  {     var dane = [];
        var etykiety=[];
        var kolory=[];
        var pary=[];
        for(var i = 0;i<wojewodztwa_js.length;i++)
        {
            var para=
            {
                wartosc: wojewodztwa_js[i].ProcPozytywnych,
                wojewodztwo: wojewodztwa_js[i].NazwaWojewodztwa
            };
            pary.push(para);
        }
        function compareNumbers(a, b) 
        {
            return a.wartosc - b.wartosc
        };
        var posortowanePary=pary.sort(compareNumbers);
        console.log(posortowanePary);
         for(var i = 0;i<posortowanePary.length;i++)
        {
            dane.push(parseFloat(posortowanePary[i].wartosc));
            etykiety.push(posortowanePary[i].wojewodztwo);
            if(posortowanePary[i].wojewodztwo=='Polska')
            {
                kolory.push('#F5A818');
            }
            else 
            {
                kolory.push('#1A0D68');
            }

        }
        var wykres_canvas=document.getElementById('pozytywniWojewodztwaWykres').getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'horizontalBar',
            data:
            {
                labels: etykiety ,
                datasets: [ { label: 'Procent osób zakażonych Covid-19',data:dane, backgroundColor:kolory}]
            },
            options:
            {
                    layout: {
                        padding: {
                            left: 50,
                            right: 50,
                            top: 0,
                            bottom: 0
                        }
                    },
                    title:
                    {
                    fontColor: 'darkgray',
                    display:true,
                    text: 'Procent ludności, która zachorowała na Covid-19 w poszczególnych województwach',
                    fontSize:20,
                    padding:40
                    },
                    legend:{display:false},

                    scales: 
                    {
                        xAxes: 
                        [{ gridLines: 
                            {
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {
                                 beginAtZero: true,
                                 max:10,
                                 stepSize:0.5,
                                 fontColor: 'darkgray',
                                 padding:10,
                                 maxRotation:0
                            }
                        }],
                         yAxes: 
                        [{
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };
  function f_wykres3()
  {     var dane = [];
        var etykiety=[];
        for(var i = 0;i<danecovid_js.length;i++)
        {
                dane.push(danecovid_js[i].nowePrzypadki);
                etykiety.push(danecovid_js[i].data);
        }
        var wykres_canvas=document.getElementById('przypadkiwPolsce').getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: etykiety,
                datasets: [ { label: 'Liczba przypadków',data:dane, borderColor:'blue', borderWidth:2, lineTension:0, pointRadius:3}]
            },
            options:
            {
                    layout: {
                        padding: {
                            left: 50,
                            right: 50,
                            top: 0,
                            bottom: 0
                        }
                    },
                    title:
                    {
                    fontColor: 'darkgray',
                    display:true,
                    text: 'Liczba dziennych przypadków zachorowań na Covid-19 w Polsce',
                    fontSize:20,
                    padding:40
                    },
                    legend:{display:false},
                    scales: 
                    {
                        xAxes: 
                        [{
                            gridLines: 
                            {
                                 zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 autoSkip: true,
                                 maxTicksLimit: 6,
                                 fontColor: 'darkgray',
                                 maxRotation:0,
                                 padding:10
                            }
                        }],
                         yAxes: 
                        [{ gridLines: 
                            {
                                 zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };

 function f_wykres4()
  {     var dane = [];
        var dane2=[];
        var etykiety=[];
        for(var i = 0;i<danecovid_js.length;i++)
        {
                dane.push(danecovid_js[i].sumaPrzypadkow);
                dane2.push(danecovid_js[i].sumaTestow);
                etykiety.push(danecovid_js[i].data);
        }
        var wykres_canvas=document.getElementById('przypadkiTesty').getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: etykiety,
                datasets: [ { label: 'Suma wykonanych testów',data:dane2, borderColor:'red', borderWidth:2, lineTension:0, pointRadius:3},
                { label: 'Suma wyników pozytywnych',data:dane, borderColor:'blue', borderWidth:2, lineTension:0, pointRadius:3}
                        
                ]
            },
            options:
            {
                    layout: {
                        padding: {
                            left: 50,
                            right: 50,
                            top: 0,
                            bottom: 0
                        }
                    },
                    title:
                    {
                    fontColor: 'darkgray',
                    display:true,
                    text: 'Suma wykonanych testów a suma przypadków zachorowań na Covid-19 w Polsce',
                    fontSize:20,
                    padding:40
                    },
                    legend:{display:true,position:'right'},
                    scales: 
                    {
                        xAxes: 
                        [{
                            gridLines: 
                            {
                                  zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 autoSkip: true,
                                 maxTicksLimit: 6,
                                 fontColor: 'darkgray',
                                 maxRotation:0,
                                 padding:10
                            }
                        }],
                         yAxes: 
                        [{ gridLines: 
                            {
                                 zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };

  function slopegraph()
  {
        var warmia=[];
        var opole=[];
        var mazowsze=[];
        var malopolska=[];
        var daty=[];
        for(i=0;i<sumaZakWoj_js.length;i++)
        {
            if (sumaZakWoj_js[i].data2=='2020-11-01'|| sumaZakWoj_js[i].data2=='2021-01-01')
            {
                warmia.push(sumaZakWoj_js[i].warminskoMazurskie2);
                opole.push(sumaZakWoj_js[i].opolskie2);
                mazowsze.push(sumaZakWoj_js[i].mazowieckie2);
                malopolska.push(sumaZakWoj_js[i].malopolskie2);
                daty.push(sumaZakWoj_js[i].data2);
            }
        }
        var wykres_canvas=document.getElementById('slopeWoj').getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: daty,
                datasets: [ { label: 'Mazowieckie',data:mazowsze, borderColor:'lightgreen', borderWidth:5, lineTension:0, pointRadius:10},
                { label: 'Malopolskie',data:malopolska, borderColor:'grey', borderWidth:5, lineTension:0, pointRadius:10},
                        { label: 'Warminsko-Mazurskie',data:warmia, borderColor:'red', borderWidth:5, lineTension:0, pointRadius:10},
                         { label: 'Opolskie',data:opole, borderColor:'blue', borderWidth:5, lineTension:0, pointRadius:10}
                ]
            },
            options:
            {
                    layout: {
                        padding: {
                            left: 50,
                            right: 50,
                            top: 0,
                            bottom: 0
                        }
                    },
                    title:
                    {
                    fontColor: 'darkgray',
                    display:true,
                    text: 'Zmiana sumy potwierdzonych przypadków między 1 listopada 2020 a 1 stycznia 2021',
                    fontSize:20,
                    padding:40
                    },
                    legend:{display:true,position:'right'},
                    scales: 
                    {
                        xAxes: 
                        [{
                            gridLines: 
                            {
                                  zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 fontColor: 'darkgray',
                                 maxRotation:0,
                                 padding:10
                            }
                        }],
                         yAxes: 
                        [{ gridLines: 
                            {
                                  zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };

  function f_wykres5()
  {     var dane = [];
        var etykiety=[];
        for(var i = 0;i<danecovid_js.length;i++)
        {
                dane.push(danecovid_js[i].osobyNaKwarantannie);
                etykiety.push(danecovid_js[i].data);
        }
        var wykres_canvas=document.getElementById('OsobyNaKwarantannie').getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: etykiety,

                datasets: [ { label: 'Osoby na kwarantannie',data:dane, borderColor:'green', borderWidth:3, lineTension:0, pointRadius:4}]
            },
            options:
            {
                    layout: {
                        padding: {
                            left: 50,
                            right: 50,
                            top: 0,
                            bottom: 0
                        }
                    },
                    title:
                    {
                    fontColor: 'darkgray',
                    display:true,
                    text: 'Liczba osób przebywających na przymusowej kwarantannie',
                    fontSize:20,
                    padding:40
                    },
                    legend:{display:false},
                    scales: 
                    {
                        xAxes: 
                        [{
                            gridLines: 
                            {
                                  zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 autoSkip: true,
                                 maxTicksLimit: 6,
                                 fontColor: 'darkgray',
                                 maxRotation:0,
                                 padding:10
                            }
                        }],
                         yAxes: 
                        [{ gridLines: 
                            {
                                   zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };
   function f_wykres6()
  {     var dane = [];
        var etykiety=[];
        for(var i = 0;i<danecovid_js.length;i++)
        {
                dane.push(danecovid_js[i].sumaWyzdrowien);
                etykiety.push(danecovid_js[i].data);
        }
        var wykres_canvas=document.getElementById('ozdrowiency').getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: etykiety,

                datasets: [ { label: 'Liczba osób, które wyzdrowiały z COVID-19',data:dane, borderColor:'gold', borderWidth:3, lineTension:0, pointRadius:4}]
            },
            options:
            {
                    layout: {
                        padding: {
                            left: 50,
                            right: 50,
                            top: 0,
                            bottom: 0
                        }
                    },
                    title:
                    {
                    fontColor: 'darkgray',
                    display:true,
                    text: 'Łączna liczba osób, które wyzdrowiały z COVID-19',
                    fontSize:20,
                    padding:40
                    },
                    legend:{display:false},
                    scales: 
                    {
                        xAxes: 
                        [{
                            gridLines: 
                            {
                                   zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 autoSkip: true,
                                 maxTicksLimit: 6,
                                 fontColor: 'darkgray',
                                 maxRotation:0,
                                 padding:10
                            }
                        }],
                         yAxes: 
                        [{ gridLines: 
                            {
                                  zeroLineColor: "darkgray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };

    </script>
</body>
</html>