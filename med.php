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

        <section id="med">
            <div class="row">
                <div class="col-md-12">
                <br/><br/>
               <center> <h3>Sytuacja medyczna w Polsce</h3></center>
                </div>    
            </div>
        </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="respiratory"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="RespiratoryProc"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
             <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="RespiratoryProcNow"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
             <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="dobowaResp"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="Lozka"></canvas>
                    </div>
                </div>
            </div>
            </section>
            <hr style="background:white" />
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="LozkaProc"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
             <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="LozkaProcNow"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
             <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="LozkaZmiana"></canvas>
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
   $tab_med=[];
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


if($polaczenie->connect_errno!=0)
{
    echo "wystapil blad".$polaczenie->connect_errno." ".$polaczenie->connect_error;
}
else 
{
   
      $sql6='SELECT *, round(OsobyHospitalizowane/LozkaWPolsce*100,2) as ProcZajetychLozek, round(ZajeteRespiratory/RespiratoryWPolsce*100,2) as ProcZajetychRespiratorow FROM respiratorylozka';
    if( $wynik6 = $polaczenie->query($sql6))
    {
        $wiersz6=$wynik6->fetch_assoc();
        while($wiersz6= mysqli_fetch_array($wynik6))
        {
            $d6 = new RespiratoryLozka($wiersz6['Data'], $wiersz6['OsobyHospitalizowane'], $wiersz6['ZmianaDobowaHospitalizowanych'],$wiersz6['LozkaWPolsce'], 
            $wiersz6['ZajeteRespiratory'],$wiersz6['RespiratoryZmianaDobowa'],$wiersz6['RespiratoryWPolsce'], $wiersz6['ProcZajetychLozek'],$wiersz6['ProcZajetychRespiratorow']);
            $tab_med[]=$d6;  
        }
        $wynik6->free_result();
    }

    else 
    {
    echo "cos nie dziala";
	}
    
     
    $polaczenie->close();
} ?>

   var respiratoryLozka_js=<?php echo json_encode($tab_med) ?>;
   console.log(respiratoryLozka_js);

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
   function DoubleLiniowy(canvas, dane1, opisdanych1, dane2, opisdanych2, etykiety, tytul)
   {
        var wykres_canvas=document.getElementById(canvas).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: etykiety,
                datasets: [ { label: opisdanych1,data:dane1, borderColor:'blue', borderWidth:3, lineTension:0, pointRadius:4},
                { label: opisdanych2,data:dane2, borderColor:'red', borderWidth:3, lineTension:0, pointRadius:4}
                        
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
                                 padding:10,
                                 
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
                            ticks: {min:0,
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
   };
   function Liniowy(canvas, dane1, opisdanych1, etykiety, tytul, min, max)
   {
        var wykres_canvas=document.getElementById(canvas).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'line',
            data:
            {
                labels: etykiety,
                datasets: [ { label: opisdanych1,data:dane1, borderColor:'orange', 
                borderWidth:3, lineTension:0, pointRadius:4},
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
                    legend:{display:false},
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
                                min:min,
                                max:max,
                                 fontColor: 'darkgray'
                            }
                        }]
                    }
            }
        })
   };

  


        var ZajeteRespiratory = [];
        var ZajeteLozka=[];
        var WszystkieLozka=[];
        var WszystkieRespiratory=[];
        var ZajeteLozkaProc=[];
        var ZajeteRespiratoryProc=[];
        var ZmianaDobowaChorzy=[];
        var ZmianaDobowaRespiratory=[];
        var etykiety=[];
        for(var i = 0;i<respiratoryLozka_js.length;i++)
        {
                ZajeteRespiratory.push(respiratoryLozka_js[i].zajeteRespiratory);
                ZajeteLozka.push(respiratoryLozka_js[i].osobyHospitalizowane);
                WszystkieLozka.push(respiratoryLozka_js[i].lozkaWPolsce);
                WszystkieRespiratory.push(respiratoryLozka_js[i].respiratoryWPolsce);
                ZajeteLozkaProc.push(respiratoryLozka_js[i].procZajetychLozek);
                ZajeteRespiratoryProc.push(respiratoryLozka_js[i].procZajetychRespiratorow);
                ZmianaDobowaChorzy.push(respiratoryLozka_js[i].zmianaDobowaHospitalizowanych);
                ZmianaDobowaRespiratory.push(respiratoryLozka_js[i].respiratoryZmianaDobowa);
                etykiety.push(respiratoryLozka_js[i].data6);
        }
        var procent1=Math.round(100*ZajeteLozka[ZajeteLozka.length-1]*100/WszystkieLozka[WszystkieLozka.length-1])/100;
        var reszta1=Math.round(100*(100-procent1))/100;
        var procent2=Math.round(100*ZajeteRespiratory[ZajeteRespiratory.length-1]*100/WszystkieRespiratory[WszystkieRespiratory.length-1])/100;
        var reszta2=Math.round(100*(100-procent2))/100;
        var tab1=[procent1,reszta1];

  window.onload=function()
 {
  DoubleLiniowy('respiratory', WszystkieRespiratory, 'łączna liczba respiratorów w Polsce',  ZajeteRespiratory, 'liczba zajętych respiratorów', etykiety, 'Dostępność i liczba zajętych respiratorów');
  Liniowy('RespiratoryProc', ZajeteRespiratoryProc, 'procent zajętych respiratorów', etykiety, 'Procent zajętych respiratorów w Polsce',0,100);
  Liniowy('dobowaResp', ZmianaDobowaRespiratory, 'zm. dobowa zajętych respiratorów', etykiety, 'Zmiana dobowa liczby zajętych respiratorów w Polsce',-150,150);
  DoubleLiniowy('Lozka', WszystkieLozka, 'łączna liczba łóżek dla chorych na COVID-19',  ZajeteLozka, 'liczba hospitalizowanych z powodu COVID-19', etykiety, 'Liczba dostępnych łóżek Covidowych a liczba osób hospitalizowanych z powodu Covid-19');
  Liniowy('LozkaProc', ZajeteLozkaProc, 'procent zajętych łóżek', etykiety, 'Procent zajętych łóżek w Polsce',0,100);
  Liniowy('LozkaZmiana', ZmianaDobowaChorzy, 'zmiana liczby łóżek', etykiety, 'Zmiana dobowa liczby zajętych łóżek w Polsce',-1000,1100);
  kolo('RespiratoryProcNow', [procent2,reszta2], ['procent zajętych respiratorów','procent wolnych respiratorów'], ['red','green'], 'Aktualny procent zajętych respiratorów w Polsce');
  kolo('LozkaProcNow', [procent1,reszta1], ['procent zajętych łóżek','procent wolnych łóżek'], ['red','green'], 'Aktualny procent zajętych łóżek w Polsce');


 }
    </script>
</body>
</html>