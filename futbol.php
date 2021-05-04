<!DOCTYPE html>
<html lang="pl">

  <head>

     <meta charset="utf-8">
     <title>Rozgrywki futbolowe</title>

     <meta name="description" content="Opis zawartości strony dla wyszukiwarek">
     <meta name="keywords" content="słowa, kluczowe, opisujące, zawartość">
     <meta name="author" content="Jan Programista">

     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="styl.css">
     <script src="styl.css"></script>

  </head>
  <body>
  <div class="baner">
      <h2>Światowe Rozgrywki Piłkarskie</h2>
      <img src="obraz1.jpg" alt="boisko">
      
  </div>
  <div class="mecze">
   <?php
      
      $baza=mysqli_connect('localhost','root','','pilka');
     if(mysqli_connect_errno())
     {echo"wystapil blad polaczenia z baza";}
      $wynik=mysqli_query($baza,'SELECT `zespol1`,`zespol2`,`wynik`,`data_rozgrywki` FROM `rozgrywka` WHERE `zespol1`= "EVG"');
      while($r=mysqli_fetch_array($wynik))
      {
     echo '<div class="rozg">';
     echo "<h3>";
     echo $r["zespol1"]." ".$r["zespol2"];
     echo "</h3>";  
     
     echo "<h4>";
     echo $r["wynik"];
     echo "</h4>";  
        
     echo "<p>";
     echo $r["data_rozgrywki"];
     echo "</p>";
        
     echo '</div>';
      
      }
      
      mysqli_close($baza);
       echo isset($row['zespol1']);
      ?>
    
  </div>
  <div class="blokglowny">
      <h2> Reprezentacja Polski</h2>
  </div>
  <div class="lewy">
      <a>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</a>
        
      <form action="futbol.php" method="post">
          <input type="number" name="pilkarz" id="pilkarz">
          <input type="submit" value="Sprawdź" name="sprawdz" id="pilkarz">       
        
      </form>    
      
      <?php
    
      $baza=mysqli_connect('localhost','root','','pilka');
      if(mysqli_connect_errno())
      {echo"wystapil blad polaczenia z baza";}
      $wynik=mysqli_query($baza," SELECT `imie`,`nazwisko` FROM `zawodnik` where `pozycja_id`= $_POST[pilkarz]");
      while($rowy=mysqli_fetch_array($wynik))
     
       {
                  
     echo "<ul>";
     echo "<li>"; 
     echo $rowy["imie"]." ".$rowy["nazwisko"];
     echo "</li>";
     echo "</ul>";    
     
      }
      mysqli_close($baza);
      
      ?>
           
  </div>
  <div class="prawy">
    <img src="zad1.png" alt="piłkarz">
    <a>Autor: Daniel</a>
          
  </div>  
  </body>
</html>
