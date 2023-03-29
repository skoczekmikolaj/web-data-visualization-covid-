# Aplikacja bazodanowa wizualizująca dane dot. COVID-19

Schemat działania aplikacji: pobiera dane zawarte w bazie danych i na ich podstawie generuje wykresy na stronie www. 

Zastosowane technologie: MySQL, PHP, HTML, CSS, Bootstrap, JSON, JavaScript, Chart.JS.

Dane w bazie pochodzą z bazy Michała Rogalskiego (bit.ly/covid19-poland) oraz uniwersytetu Johna Hopkinsa w Baltimore (coronavirus.jhu.edu/map.html).

Aplikacja pobiera dane z bazy MySQL, zapisuje każdy wiersz danej tabeli w postaci obiektu PHP, którego klasą jest nazwa tej tabeli (własnoręcznie wykonane podejście stosowane m.in. w .NET Entity Framework). Następnie dane są konwertowane do tablicy JSON i przekazywane do skryptu JavaScript, gdzie przy pomocy biblioteki Chart.JS generowane są wizualizacje danych. Za wygląd strony i jej responsywność odpowiada biblioteka Bootstrap. 
