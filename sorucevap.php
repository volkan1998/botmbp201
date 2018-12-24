<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	  
	  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Sohbet Robotu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Ana Sayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Diller</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sohbet Kutusu</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="Ara" placeholder="Ara" aria-label="Ara">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
    </form>
  </div>
	  
            <?php 
            $json = '[
                {"no":"1", "dil": "PHP", "soru": "Deðiþken nasýl tanýmlanýr ?", "cevap": "Deðiþkenin baþýna $ iþareti konularak tanýmlanýr."},
                {"no":"2", "dil": "PHP", "soru": "Dizgelerin birleþtirilmesi nasýl gerçekleþtirilir ?", "cevap": "Dizgeler \'.\' iþleci ile birleþtirilir."},
                {"no":"3", "dil": "C", "soru": "Ekrandan kullanýcý girdisi hangi ifade ile alýnýr ?", "cevap": "Kullanýcý girdisi \'scanf\' ifadesi ile alýnýr."},
                {"no":"4", "dil": "C", "soru": "Fonksiyonda \'return\' ne anlama gelmektedir ?", "cevap": "Fonksiyonun dönüþ deðeri içerdiði anlamýna gelmektedir."}
            ]';

            $veriler = json_decode($json, true);

        ?>

        <! -- tablo -->
        <h1>Soru cevaplarýn listesi:</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Dili</th>
                    <th scope="col">Soru</th>
                    <th scope="col">Cevap</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    foreach($veriler as $veri) { 
                        echo "<tr>";
                        foreach($veri as $sutunanahtari => $sutundegeri) {
                            if ($sutunanahtari == "no") {
                                echo "<th scope='row'>" . $sutundegeri . "</th>";
                            } else {
                                echo "<td>" . $sutundegeri . "</td>";
                            }        
                        }
                        echo "</tr>";
                    }
                    
                ?>
                <?php  ?>
            </tbody>
        </table>

    </body>

</html>


		  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
