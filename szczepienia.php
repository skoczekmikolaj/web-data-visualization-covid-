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

        <section id="szczepienia">
            <div class="row">
                <div class="col-md-12">
                <br/><br/>
               <center> <h3>Statystyki szczepień w Polsce</h3></center>
                </div>    
            </div>
        </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="wojSzczep"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="dawki"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="wojSzczepProc"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
             <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="SzczepieniaPlcie"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="szczepieniaKolowy"></canvas>
                    </div>
                </div>
            </div>
          
            </section>
            <hr style="background:white" />
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="szczepDziennie"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="nop"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
             <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="nopkolo"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
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
    $tab_szczepienia=[];
    $tab_szczepieniaPlec=[];
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

 

 var szczepPlec_js=<?php echo json_encode($tab_szczepieniaPlec) ?>;
   console.log(szczepPlec_js);
 var szczepienia_js=<?php echo json_encode($tab_szczepienia) ?>;
   console.log(szczepienia_js);
   var wojewodztwa_js=<?php echo json_encode($tab_wojewodztwa) ?>;
   console.log(wojewodztwa_js);

    function stacked(elementWykres, tab_dane1, tab_dane2, tab_etykiety, tytul)
 {
        var wykres_canvas=document.getElementById(elementWykres).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'horizontalBar',
            data:
            {
                labels: tab_etykiety,
                datasets: [ { label: 'tylko pierwsza dawka',data:tab_dane1, backgroundColor:'purple'},
                { label: 'obie dawki',data:tab_dane2, backgroundColor:'orange'},
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
                    text: tytul,
                    fontSize:20,
                    padding:40
                    },
                    legend:{display:true, position:'right'},
                     interaction: {
                     intersect: false,
                         },
                    scales: 
                    {
                        yAxes:
                        
                        [{
                            stacked:true,
                            gridLines: 
                            {
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {
                                 fontColor: 'darkgray',
                                 padding:10,
                                 maxRotation:0
                            }
                        }],
                         xAxes: 
                         
                        [{
                         stacked:true,
                        gridLines: 
                            {
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {  
                                 fontColor: 'darkgray',
                                 padding:10,
                                 maxRotation:0
                            }
                        }]
                    }
            }
        })
 };
  function PoczwornyLiniowy(canvas, dane1, opisdanych1, dane2, opisdanych2, dane3, opisdanych3, dane4, opisdanych4, etykiety, tytul)
   {
        var wykres_canvas=document.getElementById(canvas).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: etykiety,
                datasets: [ { label: opisdanych1,data:dane1, borderColor:'yellow', borderWidth:3, lineTension:0, pointRadius:4},
                { label: opisdanych2,data:dane2, borderColor:'blue', borderWidth:3, lineTension:0, pointRadius:4},
                { label: opisdanych3,data:dane3, borderColor:'red', borderWidth:3, lineTension:0, pointRadius:4},
                { label: opisdanych4,data:dane4, borderColor:'green', borderWidth:3, lineTension:0, pointRadius:4}
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
                    text: tytul,
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
                            zeroLineColor: "gray",
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
                            zeroLineColor: "gray",
                            zeroLineWidth: 2,
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                            },
                            ticks: {
                                min:0,
                                
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
   };

 function liniowy(element,kobiety,mezczyzni, daty, tytul)
  {  
        var wykres_canvas=document.getElementById(element).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: daty,
                datasets: [ { label: 'Kobiety',data:kobiety, borderColor:'red', borderWidth:3, lineTension:0, pointRadius:4},
                { label: 'Męzczyźni',data:mezczyzni, borderColor:'blue', borderWidth:3, lineTension:0, pointRadius:4}      
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
                    text: tytul,
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
                                drawOnChartArea: false,
                                color:'#616161'
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
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };
  function liniowy3(element,dane, daty)
  {  
        var wykres_canvas=document.getElementById(element).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: daty,
                datasets: [ { label: 'dzienna liczba szczepień',data:dane, borderColor:'yellow', borderWidth:3, lineTension:0, pointRadius:4} ]
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
                    text: 'Dzienna liczba wykonanych szczepień',
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
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };
  function liniowy2(element,pierwsza,druga, daty, tytul)
  {  
        var wykres_canvas=document.getElementById(element).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: daty,
                datasets: [ { label: 'zaszczepieni tylko pierwszą dawką',data:pierwsza, borderColor:'purple', borderWidth:3, lineTension:0, pointRadius:4},
                { label: 'zaszczepieni oboma dawkami',data:druga, borderColor:'orange', borderWidth:3, lineTension:0, pointRadius:4}      
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
                    text: tytul,
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
                                drawOnChartArea: false,
                                color:'#616161'
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
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
  };
  function kolo(elementWykres, tab_dane, tab_etykiety, tab_kolory, tytul)
 {
        var wykres_canvas=document.getElementById(elementWykres).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'pie',
            data:
            {
                labels: tab_etykiety,
                datasets: [ {label:'xd',data:tab_dane, backgroundColor:tab_kolory}]
            },
            options:
            {       layout: 
                {
                      padding: 
                      {
                            left: 50,
                            right: 50,
                            top: 0,
                            bottom: 50
                      }
                },     
                    title:
                    {
                    fontColor: 'darkgray',
                    display:true,
                    text: tytul,
                    fontSize:20,
                    padding:40
                    },
                    legend:{display:true, position:'right'}       
            }
        })
 };

        var pierwsza = [];
        var obie=[];
        var etykiety=[];
        var obiekty=[];
        for(var i = 0;i<wojewodztwa_js.length;i++)
        { 
          if (wojewodztwa_js[i].NazwaWojewodztwa!="Polska")
          {
            var o=
            {
                pierwsza: wojewodztwa_js[i].ZaszczepieniTylkoPierwszaDawka,
                obie: wojewodztwa_js[i].ZaszczepieniObomaDawkami,
                wojewodztwo: wojewodztwa_js[i].NazwaWojewodztwa
            };
            obiekty.push(o);
          }
        }
        function compareNumbers(a, b) 
        {
            return (a.pierwsza + a.obie) - (b.pierwsza+b.obie);
        };
        var posortowanePary=obiekty.sort(compareNumbers);
        console.log(posortowanePary);
         for(var i = 0;i<posortowanePary.length;i++)
        {
            pierwsza.push(posortowanePary[i].pierwsza);
            obie.push(posortowanePary[i].obie);
            etykiety.push(posortowanePary[i].wojewodztwo);
        }

        var pierwszaproc = [];
        var obieProc=[];
        var etykiety2=[];
        var obiekty2=[];
        for(var i = 0;i<wojewodztwa_js.length;i++)
        { 
          if (wojewodztwa_js[i].NazwaWojewodztwa!="Polska")
          {
            var o=
            {
                pierwsza: wojewodztwa_js[i].ProcZaszczepionychJedna,
                obie: wojewodztwa_js[i].ProcZaszczepionychOboma,
                wojewodztwo: wojewodztwa_js[i].NazwaWojewodztwa
            };
            obiekty2.push(o);
          }
        }
        function compareNumbers2(a, b) 
        {
            return parseFloat(a.pierwsza) + parseFloat(a.obie)  -  parseFloat(b.pierwsza) - parseFloat(b.obie);
        };

        var posortowanePary2=obiekty2.sort(compareNumbers2);
        console.log(posortowanePary2);
         for(var i = 0;i<posortowanePary2.length;i++)
        {
            pierwszaproc.push(posortowanePary2[i].pierwsza);
            obieProc.push(posortowanePary2[i].obie);
            etykiety2.push(posortowanePary2[i].wojewodztwo);
        }

  var liczbamezczyzn=szczepPlec_js[szczepPlec_js.length-1].mezczyzni;
  console.log(liczbamezczyzn);
  var liczbakobiet=szczepPlec_js[szczepPlec_js.length-1].kobiety;
  var plcie=['mezczyzni','kobiety'];
  var suma=parseInt(liczbakobiet)+parseInt(liczbamezczyzn);
  var plcieValue=[Math.round((liczbamezczyzn*100/suma*100),2)/100, Math.round((liczbakobiet*100/suma*100))/100];
  var koloryPlcie=['blue','red'];

  var datySzczepien=[];
  var kobietySzczepienia=[];
  var mezczyzniSzczepienia=[];
  for(i=0;i<szczepPlec_js.length;i++)
  {
        datySzczepien.push(szczepPlec_js[i].data5);
        kobietySzczepienia.push(szczepPlec_js[i].kobiety);
        mezczyzniSzczepienia.push(szczepPlec_js[i].mezczyzni);
  }
  

  var datySzczepien2=[];
  var pierwszaD=[];
  var obieD=[];
  var dzienne=[];
  var NopLagodne=[];
  var NopPowazne=[];
  var NopCiezkie=[];
  var NopZgon=[];
  for(i=0;i<szczepienia_js.length;i++)
  {
        datySzczepien2.push(szczepienia_js[i].data7);
        pierwszaD.push(szczepienia_js[i].OsobyTylkoPoPierwszejDawce);
        obieD.push(szczepienia_js[i].OsobyPoObuDawkach);
        dzienne.push(szczepienia_js[i].SzczepieniaDziennie);
        NopLagodne.push(szczepienia_js[i].NopLagodne);
        NopPowazne.push(szczepienia_js[i].NopPowazne);
        NopCiezkie.push(szczepienia_js[i].NopCiezkie);
        NopZgon.push(szczepienia_js[i].NopZgon);
  }
  var x1=szczepienia_js[szczepienia_js.length-1].Nop/szczepienia_js[szczepienia_js.length-1].LiczbaZaszczepionychJednaLubDwomaDawkami;
  var koloDane=[x1,100-x1];
  var koloDaneOpisy=['Niepożądane Odczyny Poszczepienne','Osoby u których nie wystąpiły NOP'];
  var koloryXD=['red','green'];
  console.log(koloDane);
  window.onload=function()
 {
  stacked('wojSzczep', pierwsza, obie, etykiety, 'Liczba wykonanych szczepień w poszczególnych województwach');
  stacked('wojSzczepProc', pierwszaproc, obieProc, etykiety2, 'Procent zaszczepionych w poszczególnych województwach');
  kolo('szczepieniaKolowy', plcieValue, plcie, koloryPlcie, 'Procent zaszczepionych wg płci');
  liniowy('SzczepieniaPlcie',kobietySzczepienia,mezczyzniSzczepienia, datySzczepien, 'Łączna ilość osób zaszczepionych na Covid-19 z podziałem na płeć');
  liniowy2('dawki',pierwszaD,obieD,datySzczepien2,'Ilość osób zaszczepionych w Polsce');
  liniowy3('szczepDziennie',dzienne, datySzczepien2);
  PoczwornyLiniowy('nop', NopLagodne, 'NOP Łagodne', NopPowazne, 'NOP Poważne', NopCiezkie, 'NOP Ciężkie', NopZgon, 'Zgony poszczepienne', datySzczepien2, 'Ilość niepożądanych odczynów poszczepiennych');
 kolo('nopkolo',koloDane,koloDaneOpisy,koloryXD,'Procent występowania niepożądanych odczynów poszczepiennych u osób zaszczepionych w Polsce');
  }
    </script>
</body>
</html>