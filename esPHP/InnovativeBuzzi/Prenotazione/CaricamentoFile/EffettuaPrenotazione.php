<?php
  session_start();
  header("Expires: on, 01 Jan 1970 00:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  $tipo=$_SESSION["tipoBZ"];    //ora lo facico manualmente ma devo prenderlo dalla variabile di sessione che viene settata al login
  if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET["logout"])) {
      $_SESSION["usernameBZ"]=null;
      header("location: http://" .$ip .":" .$porta ."/esPHP/InnovativeBuzzi/index.php");
      die("");
    }
  }

  if(!isset($_SESSION["usernameBZ"])){
    header("location: http://" .$ip .":" .$porta ."/esPHP/InnovativeBuzzi/login/index.php");
  }
?>
<html>
<head>

      <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js">
    jQuery(function($) {
      $(window).on('scroll', function() {
  		if ($(this).scrollTop() >= 5) {
  			$('.navbar').addClass('fixed-top');
  		} else if ($(this).scrollTop() == 0) {
  			$('.navbar').removeClass('fixed-top');
  		}
  	});

  	function adjustNav() {
  		var winWidth = $(window).width(),
  			dropdown = $('.dropdown'),
  			dropdownMenu = $('.dropdown-menu');

  		if (winWidth >= 768) {
  			dropdown.on('mouseenter', function() {
  				$(this).addClass('show')
  					.children(dropdownMenu).addClass('show');
  			});

  			dropdown.on('mouseleave', function() {
  				$(this).removeClass('show')
  					.children(dropdownMenu).removeClass('show');
  			});
  		} else {
  			dropdown.off('mouseenter mouseleave');
  		}
  	}

  	$(window).on('resize', adjustNav);

  	adjustNav();
  });

</script>

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../HomeUtente/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../HomeUtente/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../HomeUtente/vendor/animate/animate.css">
<!--==============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../HomeUtente/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../HomeUtente/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../HomeUtente/css/util.css">
  <link href="../../HomeUtente/css/main.css" rel="stylesheet" type="text/css"  >
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
  body{
      background-color: #2f3640;
  }
  .mainTitle{
    font-size: 100px;
    color: green;
    text-align: center;
    width: 100%;
  }
  text{
    font-family: 'Open Sans', sans-serif;
    color: white;
  }
  text.title{
    font-weight: bold;
    font-size: 40px;
    text-transform: uppercase;
    color: green;
    padding: 0 0;
  }
  select{
    height: 50px;
    width: 250px;
  }
  @import url("https://fonts.googleapis.com/css?family=DM+Sans:500,700&display=swap");
  *{
    margin: 0;
    padding: 0;
    text-decoration: none;
  }

  header{
    z-index: 9999;
    position: fixed;
    height: auto;
    width: 100%;
    background: #FFFF;
  }
  .inner-width{
    background: black;
    max-width: 100%;
    padding: 0 10px;
    margin: auto;
  }
  body {

    display: -webkit-box;
    display: flex;
    height: 100vh;
    width: 100%;
    -webkit-box-pack: center;
            justify-content: center;
    padding: 0 0;
    background-color: #2f3640;
  }

  .nav {
    display: -webkit-inline-box;
    display: inline-flex;
    position: relative;
    overflow: hidden;
    width: 100%;
    background-color: #fff;
    margin-left: 500px;
    box-shadow: 0 10px 40px rgba(159, 162, 177, 0.8);
    float: right;
  }

  .nav-item {
    color: #83818c;
    padding: 20px;
    text-decoration: none;
    -webkit-transition: .3s;
    transition: .3s;
    margin: 0 6px;
    z-index: 1;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    position: relative;
  }
  .nav-item:before {
    content: "";
    position: absolute;
    bottom: -6px;
    right: 0;
    width: 100%;
    height: 5px;
    background-color: #dfe2ea;
    border-radius: 8px 8px 0 0;
    opacity: 0;
    -webkit-transition: .3s;
    transition: .3s;
  }

  .nav-item:not(.is-active):hover:before {
    opacity: 1;
    bottom: 0;
  }

  .nav-item:not(.is-active):hover {
    color: #333;
  }

  .nav-indicator {
    position: absolute;
    right: 0;
    bottom: 0;
    height: 4px;
    -webkit-transition: .4s;
    transition: .4s;
    height: 5px;
    z-index: 1;
    border-radius: 8px 8px 0 0;
  }

  @media (max-width: 580px) {
    .nav {
      overflow: auto;
    }
  }
</style>
</head>
<body>
    <header>
      <nav class="nav">
        <a href="" class="nav-item is-active" active-color="orange">Home</a>
        <a href="contattaci.php" class="nav-item" active-color="green">Contattaci</a>
        <a href="HomeUtente.php?logout=true" class="nav-item" active-color="blue">Logout</a>
        <span class="nav-indicator"></span>
      </nav>
    </header>
  <!--  <div class="mainTitle">
      <b>PRENOTAZIONE</b>
    </div>  -->


  <main>
  	<section id="content" class="content">
  		<div class="container">


        <div class="inputFile">

          <div class="row">
            <form action="CreaPrenotazione.php" method="POST" enctype="multipart/form-data" >
              <?php
              include "connessioneBuzzi.php";
              $msg="";
              //////////formato//////////////////////////////////////////////////////////////////////
              $msg.="<label for=\"formato\" ><text class=\"title\">formato</text></label>";
                  //faccio un query dal database  per prendere i formati di stampa disponibili
                  if(isset($_SESSION["tipoBZ"])){

                    if($_SESSION["tipoBZ"]=="Professore"){   //non devo estrarre il costo dal db in quanto i professori non pagano
                        $sql="SELECT tipo from formato";
                          $records=$conn->query($sql);
                          if ( $records == TRUE) {
                              //echo "<br>Query eseguita!";
                          } else {
                            die("Errore nella query: " . $conn->error);
                          }
                          if($records->num_rows ==0){
                                //	echo "la query non ha prodotto risultato";

                          }else{
                              $msg.="<select id=\"formato\" name=\"formato\">";
                                  while($tupla=$records->fetch_assoc()){
                                    $tipo=$tupla["tipo"];
                                    $msg.="<br /><option value=\"$tipo\">$tipo</option>*";
                                  }
                                  $msg.="</select>";
                         }
                    }else{    //prendo anche il costo dal database
                        $sql="SELECT tipo,costoStampa from formato";
                          $records=$conn->query($sql);
                          if ( $records == TRUE) {
                              //echo "<br>Query eseguita!";
                          } else {
                            die("Errore nella query: " . $conn->error);
                          }
                          if($records->num_rows ==0){
                                //	echo "la query non ha prodotto risultato";

                          }else{
                                $msg.="<br /><select id=\"formato\" name=\"formato\"><br />";
                                  while($tupla=$records->fetch_assoc()){
                                    $tipo=$tupla["tipo"];
                                      $costoStampa=$tupla["costoStampa"];
                                        $msg.="<br /><option value=\"$tipo?$costoStampa\">$tipo $costoStampa euro</option>*";
                                  }
                                    $msg.="</select>";
                         }
                   }
                  }

                 echo $msg;

               ?>

            <br> <br /><text class="title">Fronte retro</text><label class="container-checkbox" style="background-color: black;">
                <input type="checkbox" checked="checked" name="fronteRetro" value=si/>
                <span class="checkmark"></span>
            </label>

            <text class="title"><br>N copie</text>
            <div style="width:100px;">
              <input type="number" name="quantità" value="1" placeholder="" min="1" max="100">
            </div>




            <?php
             $dataOggi=date("Y-m-d");
             $giornoDopo= date( 'Y-m-d', strtotime( $dataOggi . ' +1 day' ) );
              $sceltaData="<text class=\"title\">data ritiro</text><br /><input type=\"date\" name=\"dataRitiro\" value=\"$giornoDopo\" min=\"$giornoDopo\"></input>";
              echo $sceltaData;
              if(isset($_SESSION["OraMancante"])){
                $_SESSION["OraMancante"]=null;
                $sceltaOrario="<br><text class=\"title\">ora ritirio</text><select id=\"oraRitiro\" name=\"oraRitiro\"> <p style=\"color:red\"><p>Orario obbligatorio</p>
                                                 <option value=\"-\">-------</option>
                                                 <option value=\"7:45\">7:45 am</option>
                                                 <option value=\"9:00\">9:00 am</option>
                                                 <option value=\"10:00\">10:00 am</option>
                                                 <option value=\"11:00\">11:00 am</option>
                                                 <option value=\"12:00\">12:00 am</option>
                                                 <option value=\"1\">1 pm</option>
                                                  </select>";

              }else{
                $sceltaOrario="<br><text class=\"title\">ora ritirio</text><br><select id=\"oraRitiro\" name=\"oraRitiro\">
                                                 <option value=\"-\">-------</option>
                                                 <option value=\"7:45\">7:45 am</option>
                                                 <option value=\"9:00\">9:00 am</option>
                                                 <option value=\"10:00\">10:00 am</option>
                                                 <option value=\"11:00\">11:00 am</option>
                                                 <option value=\"12:00\">12:00 am</option>
                                                 <option value=\"1\">1 pm</option>
                                                  </select>";
              }


              echo $sceltaOrario;
              if (!isset($_SESSION["FileNonInserito"]) && !isset($_SESSION["FormatoErrato"]) && !isset($_SESSION["FileTroppoGrande"]) ){
                //caricamento normale
                $caricaFile="<p>Carica il file</p> <input type=\"file\" name=\"myfile\"> <br>";
              }
               else if(isset($_SESSION["FileNonInserito"])){
                //file non inserito
                $caricaFile="<p>Carica il file eccomi2</p> <input classtype=\"file\" name=\"myfile\"> </input> <p style=\"color:red\">File Obbligatorio</p>";
                $_SESSION["FileNonInserito"]=null;
              }else if(isset($_SESSION["FormatoErrato"])){
                //formato errato
                $caricaFile="<p>Carica il file</p> <input type=\"file\" name=\"myfile\"> </input><p style=\"color:red\">Formato non disponibile. File concessi zip, .pdf, .docx, .jpg, .jpeg, .png , .txt</p>";
                $_SESSION["FormatoErrato"]=null;
              }else if(isset($_SESSION["FileTroppoGrande"])){
                //file troppo grande
                $caricaFile="<p>Carica il file</p> <input type=\"file\" name=\"myfile\"></input><p style=\"color:red\">Dimensione del file troppo grande</p>";
                $_SESSION["FileTroppoGrande"]=null;
              }

              echo $caricaFile;
              if(!isset($_SESSION["DescrizioneAssente"])){
                  $descrizione="Inserisci la descrizione<input class=\"input2\" type=\"text\" name=\"descrizione\" placeholder=\"descrizione\" maxlength=\"64\" ></input><br>";
              }else{
                //descrizione non presente
                $descrizione="Inserisci la descrizione<input class=\"input2\" type=\"text\" name=\"descrizione\" placeholder=\"descrizione\"   maxlength=\"64\"></input><p style=\"color:red\">Descrizione obbligatoria</p>";
                $_SESSION["DescrizioneAssente"]=null;
              }
            echo $descrizione;
              ?>
              <text class="title">NOTA</text><input class="input2" type="text" name="nota" placeholder="Inserisci nota" ></input><br>
               <button type="submit" name="save" onclick="myFunction()">Invia Prenotazione</button>


            </form>
          </div>

      </div>





  		</div>
  	</section>
  </main>
  <script src="./bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>

<!--===============================================================================================-->
	<script src="vendorjquery/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/navbar.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);
      $(window).on('resize', function(){
        ps.update();
      })
    });
</script>
<!--===============================================================================================-->
	<script src="js/navbar.js"></script>

</body>
</html>
