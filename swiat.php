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

        <section id="swiat">
            <div class="row">
                <div class="col-md-12">
                    <br/><br/>
                    <center> <h3>Pandemia Covid-19 na świecie</h3></center>
                </div>    
            </div>
        </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="PolskaSasiedziZakazenia"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="PolskaSasiedziZakazeniaMilion"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
             <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="PolskaSasiedziZgony"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="PolskaSasiedziZgonyMilion"></canvas>
                    </div>
                </div>
            </div>
          
            </section>
            <hr style="background:white" />
             <section>
            <div class="row">
                <div class="col-md-12">
                <br/><br/>
               <center> <h3>Kraje o najwyższej śmiertelności na Covid-19</h3></center>
                </div>    
            </div>
        </section>
            <section>    
            <div class="row">
                <div class="col-md-12">
                    <div class="wykres">
                        <canvas id="smiertelnoscWykres"></canvas>
                    </div>
                </div>
            </div>
            <hr style="background:lightgray" />
            </section>
            <section>    
                <div class="row">
                    <div class="col-md-12">
                        <div class="wykres">
                            <canvas id="Europa"></canvas>
                        </div>
                    </div>
                </div>
                <hr style="background:lightgray" />
            </section>
            <section>    
                <div class="row">
                    <div class="col-md-12">
                        <div class="wykres">
                            <canvas id="Ameryka"></canvas>
                        </div>
                    </div>
                </div>
                <hr style="background:lightgray" />
            </section>
             <section>    
                <div class="row">
                    <div class="col-md-12">
                        <div class="wykres">
                            <canvas id="Afryka"></canvas>
                        </div>
                    </div>
                </div>
                <hr style="background:lightgray" />
            </section>
             <section>    
                <div class="row">
                    <div class="col-md-12">
                        <div class="wykres">
                            <canvas id="Azja"></canvas>
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
    $tab_swiat=[];
   class Swiat
 {
      public $kraj;
      public $liczbaZakazonych;
      public $zakazeniNaMilion;
      public $zgony;
      public $ludnosc;
      public $zgonyNaMilion;
      public $smiertelnosc;//ilosc zmarlych/ilosc zakazonych
      public function __construct( $kraj, $liczbaZakazonych, $zakazeniNaMilion, $zgony, $ludnosc, $zgonyNaMilion, $smiertelnosc)
      {
        $this->kraj=$kraj;
        $this->liczbaZakazonych=$liczbaZakazonych;
        $this->zakazeniNaMilion=$zakazeniNaMilion;
        $this->zgony=$zgony;
        $this->ludnosc=$ludnosc;
        $this->zgonyNaMilion=$zgonyNaMilion;
        $this->smiertelnosc=$smiertelnosc;
      }
 }


if($polaczenie->connect_errno!=0)
{
    echo "wystapil blad".$polaczenie->connect_errno." ".$polaczenie->connect_error;
}
else 
{
     $sql4="SELECT * , round(zgony/liczbazakazonych*100 ,2) as smiertelnosc FROM swiat";
    if( $wynik4 = $polaczenie->query($sql4))
    {
        $wiersz4=$wynik4->fetch_assoc();
        while($wiersz4= mysqli_fetch_array($wynik4))
        {
            $d4 = new Swiat($wiersz4['Kraj'], $wiersz4['LiczbaZakazonych'], $wiersz4['ZakazeniNaMilionOsob'], $wiersz4['Zgony'], $wiersz4['Ludnosc'],
            $wiersz4['ZgonyNaMilionOsob'], $wiersz4['smiertelnosc']);
            $tab_swiat[]=$d4;  
        }
        $wynik4->free_result();
    }

    else 
    {
    echo "cos nie dziala";
	}
    
     
    $polaczenie->close();
} ?>

 function stworzWykres(elementWykres, tab_dane,tab_etykiety, tab_color, max_skala, opis,tytul)
 {
        var wykres_canvas=document.getElementById(elementWykres).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'bar',
            data:
            {
                labels: tab_etykiety,
                datasets: [ { label: opis,data:tab_dane, backgroundColor:tab_color}]
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
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {
                                 
                                 fontColor: 'darkgray',
                                 padding:10,
                                 maxRotation:0
                            }
                        }],
                         yAxes: 
                        [{
                        gridLines: 
                            {
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {
                                 beginAtZero: true,
                                 max:max_skala,
                                 fontColor: 'darkgray',
                                 padding:10,
                                 maxRotation:0
                            }
                        }]
                    }
            }
        })
 };

 var swiat_js = <?php echo json_encode($tab_swiat) ?>;
    console.log(swiat_js);

 var PolskaSasiedzi=[];
 for(i=0;i<swiat_js.length;i++)
 {
      if(swiat_js[i].kraj=='Niemcy'||swiat_js[i].kraj=='Slowacja'||swiat_js[i].kraj=='Czechy'||swiat_js[i].kraj=='Polska'||swiat_js[i].kraj=='Ukraina'||swiat_js[i].kraj=='Bialorus'||swiat_js[i].kraj=='Rosja')
      {
        
        PolskaSasiedzi.push(swiat_js[i]);
      }
 }
 console.log(PolskaSasiedzi);
 sasiedziZakazenia_tab=[];
 sasiedziZgony_tab=[];
 sasiedziZgonyMilion_tab=[];
 sasiedziZakazeniaMilion_tab=[];
 sasiedzi_tab=[];
 kolory_tab=[];

for(i=0;i<PolskaSasiedzi.length;i++)
{
    if(PolskaSasiedzi[i].kraj=='Polska')
  {
    kolory_tab.push('orange');
  }
    else 
  {
    kolory_tab.push('darkblue');
  } 
  sasiedziZakazenia_tab.push(PolskaSasiedzi[i].liczbaZakazonych);
  sasiedziZgony_tab.push(PolskaSasiedzi[i].zgony);
  sasiedziZakazeniaMilion_tab.push(PolskaSasiedzi[i].zakazeniNaMilion);
  sasiedzi_tab.push(PolskaSasiedzi[i].kraj);
  sasiedziZgonyMilion_tab.push(PolskaSasiedzi[i].zgonyNaMilion);

 
  }


  var najwyzszaSmiertelnosc=[];
  var najwyzszaSmiertelnoscLabels=[];
  for(i=0;i<swiat_js.length;i++)
  {
        if (swiat_js[i].smiertelnosc>3.5)
        {
            najwyzszaSmiertelnosc.push(swiat_js[i].smiertelnosc);
            najwyzszaSmiertelnoscLabels.push(swiat_js[i].kraj);
        }
  }




 function stacked(elementWykres, tab_dane1, tab_dane2, tab_etykiety, tytul)
 {
        var wykres_canvas=document.getElementById(elementWykres).getContext('2d');
        var wykres=new Chart(wykres_canvas,
        { 
            type:'horizontalBar',
            data:
            {
                labels: tab_etykiety,
                datasets: [ { label: 'liczba zgonow na sto tysięcy mieszkancow',data:tab_dane1, backgroundColor:'red'},
                { label: 'liczba zachorowań na milion mieszkancow',data:tab_dane2, backgroundColor:'blue'},
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
                            stacked:false,
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
                         stacked:false,
                        gridLines: 
                            {
                                drawOnChartArea: false,
                                color:'#616161'
                            },
                            ticks: {  
                                 max:100000,
                                 fontColor: 'darkgray',
                                 padding:10,
                                 maxRotation:0
                            }
                        }]
                    }
            }
        })
 };

  var europaZgony=[];
   var europaZakazenia=[];
  var europaLabels=[];
  var obiekty=[];
  for(i=0;i<swiat_js.length;i++)
  {
        if (swiat_js[i].kraj=="Norwegia"||swiat_js[i].kraj=="Austria"||swiat_js[i].kraj=="Dania"||swiat_js[i].kraj=="Chorwacja"||swiat_js[i].kraj=="Islandia"||swiat_js[i].kraj=="Szwecja"||swiat_js[i].kraj=="Niemcy"||swiat_js[i].kraj=="Wlochy"||swiat_js[i].kraj=="Francja"||swiat_js[i].kraj=="Hiszpania"||swiat_js[i].kraj=="Holandia"||swiat_js[i].kraj=="Izrael"||swiat_js[i].kraj=="Belgia"||swiat_js[i].kraj=="Wielka Brytania"||swiat_js[i].kraj=="Polska")
        {
           var o=
           {
                zgony: swiat_js[i].zgonyNaMilion*10,
                zakazenia: swiat_js[i].zakazeniNaMilion, 
                kraj: swiat_js[i].kraj
           };
           obiekty.push(o);
        }
  } 
        function compareNumbers(a, b) 
        {
            return a.zgony - b.zgony
        };
        var posortowane=obiekty.sort(compareNumbers);
        console.log(posortowane);
        for(var i = 0;i<posortowane.length;i++)
        {
            europaZgony.push(parseFloat(posortowane[i].zgony));
            europaZakazenia.push(parseFloat(posortowane[i].zakazenia));
            europaLabels.push(posortowane[i].kraj);
        }


  var amerykaZgony=[];
   var amerykaZakazenia=[];
  var amerykaLabels=[];
  var obiekty=[];
  for(i=0;i<swiat_js.length;i++)
  {
        if (swiat_js[i].kraj=="Stany Zjednoczone"||swiat_js[i].kraj=="Brazylia"||swiat_js[i].kraj=="Urugwaj"||swiat_js[i].kraj=="Chile"||swiat_js[i].kraj=="Kolumbia"||swiat_js[i].kraj=="Kanada"||swiat_js[i].kraj=="Argentyna"||swiat_js[i].kraj=="Meksyk"||swiat_js[i].kraj=="Peru"||swiat_js[i].kraj=="Dominikana")
        {
           var o=
           {
                zgony: swiat_js[i].zgonyNaMilion*10,
                zakazenia: swiat_js[i].zakazeniNaMilion,
                kraj: swiat_js[i].kraj
           };
           obiekty.push(o);
        }
  } 
        function compareNumbers(a, b) 
        {
            return a.zgony - b.zgony
        };
        var posortowane=obiekty.sort(compareNumbers);
        console.log(posortowane);
        for(var i = 0;i<posortowane.length;i++)
        {
            amerykaZgony.push(parseFloat(posortowane[i].zgony));
            amerykaZakazenia.push(parseFloat(posortowane[i].zakazenia));
            amerykaLabels.push(posortowane[i].kraj);
        }
  var afrykaZgony=[];
   var afrykaZakazenia=[];
  var afrykaLabels=[];
  var obiekty=[];
  for(i=0;i<swiat_js.length;i++)
  {
        if (swiat_js[i].kraj=="Egipt"||swiat_js[i].kraj=="RPA"||swiat_js[i].kraj=="Tunezja"||swiat_js[i].kraj=="Etiopia"||swiat_js[i].kraj=="Nigeria")
        {
           var o=
           {
                zgony: swiat_js[i].zgonyNaMilion*10,
                zakazenia: swiat_js[i].zakazeniNaMilion,
                kraj: swiat_js[i].kraj
           };
           obiekty.push(o);
        }
  } 
        function compareNumbers(a, b) 
        {
            return a.zgony - b.zgony
        };
        var posortowane=obiekty.sort(compareNumbers);
        console.log(posortowane);
        for(var i = 0;i<posortowane.length;i++)
        {
            afrykaZgony.push(parseFloat(posortowane[i].zgony));
            afrykaZakazenia.push(parseFloat(posortowane[i].zakazenia));
            afrykaLabels.push(posortowane[i].kraj);
        }
  var azjaZgony=[];
   var azjaZakazenia=[];
  var azjaLabels=[];
  var obiekty=[];
  for(i=0;i<swiat_js.length;i++)
  {
        if (swiat_js[i].kraj=="Chiny"||swiat_js[i].kraj=="Japonia"||swiat_js[i].kraj=="Indonezja"||swiat_js[i].kraj=="Iran"||swiat_js[i].kraj=="Korea Poludniowa"||swiat_js[i].kraj=="Australia"||swiat_js[i].kraj=="Malediwy"||swiat_js[i].kraj=="Nowa Zelandia")
        {
           var o=
           {
                zgony: swiat_js[i].zgonyNaMilion*10,
                zakazenia: swiat_js[i].zakazeniNaMilion,
                kraj: swiat_js[i].kraj
           };
           obiekty.push(o);
        }
  } 
        function compareNumbers(a, b) 
        {
            return a.zgony - b.zgony
        };
        var posortowane=obiekty.sort(compareNumbers);
        console.log(posortowane);
        for(var i = 0;i<posortowane.length;i++)
        {
            azjaZgony.push(parseFloat(posortowane[i].zgony));
            azjaZakazenia.push(parseFloat(posortowane[i].zakazenia));
            azjaLabels.push(posortowane[i].kraj);
        }

 
  window.onload=function()
 {
  stworzWykres('PolskaSasiedziZakazenia',sasiedziZakazenia_tab,sasiedzi_tab,kolory_tab,5000000,'Liczba zakazen','Liczba zakażeń w Polsce i w krajach sąsiadujących');
  stworzWykres('PolskaSasiedziZakazeniaMilion',sasiedziZakazeniaMilion_tab,sasiedzi_tab,kolory_tab,140000,'Liczba zakazen na mln os.','Liczba zakażeń w Polsce i w krajach sąsiadujących na milion osób');
   stworzWykres('PolskaSasiedziZgony',sasiedziZgony_tab,sasiedzi_tab,kolory_tab,100000,'Liczba zgonow','Liczba zgonów spowodowanych Covid-19 w Polsce i w krajach sąsiadujących');
  stworzWykres('PolskaSasiedziZgonyMilion',sasiedziZgonyMilion_tab,sasiedzi_tab,kolory_tab,2500,'Liczba zgonow na mln os.','Liczba zgonów na milion osób spowodowanych Covid-19 w Polsce i w krajach sąsiadujących');
  stworzWykres('smiertelnoscWykres',najwyzszaSmiertelnosc,najwyzszaSmiertelnoscLabels,'darkred',10,'smiertelnosc','Kraje o najwyzszym proc. śmiertelności na COVID-19 (liczba zgonów/liczba zakażeń)');
  stacked('Europa', europaZgony, europaZakazenia, europaLabels, 'Zgony i zakażenia w przeliczeniu na liczbę ludności w wybranych krajach Europy');
  stacked('Ameryka', amerykaZgony, amerykaZakazenia, amerykaLabels, 'Zgony i zakażenia w przeliczeniu na liczbę ludności w wybranych krajach Ameryki Północnej i Południowej');
  stacked('Afryka', afrykaZgony, afrykaZakazenia, afrykaLabels, 'Zgony i zakażenia w przeliczeniu na liczbę ludności w wybranych krajach Afryki');
   stacked('Azja', azjaZgony, azjaZakazenia, azjaLabels, 'Zgony i zakażenia w przeliczeniu na liczbę ludności w wybranych krajach Azji i Australii');
  }
    </script>
</body>
</html>