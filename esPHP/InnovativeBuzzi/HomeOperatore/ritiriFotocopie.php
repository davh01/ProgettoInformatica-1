<?php
  session_start();
  $ip=$_SERVER['SERVER_NAME'];  //server per vedere sei sei localhost o hai un ip
  $porta=$_SERVER['SERVER_PORT'];   //porta del serve, perchè c'è chi ha 80, chi 8080 etc...
  /*Controlli per vedere se si e' eseguito il login*/
  if(isset($_SESSION["usernameBZ"])){
    //rimango qua
  }else{
    header("Location: http://" .$ip .":" .$porta ."/esPHP/InnovativeBuzzi/index.php");  //reinderizzo alla home
  }
  //  echo "operatore";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
   	<title>HOME OPERATORE</title>
   	<meta charset="UTF-8">
    <!--===============================================================================================-->
    	<link rel="icon" type="image/png" href="../HomeUtente/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../HomeUtente/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../HomeUtente/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../HomeUtente/vendor/animate/animate.css">
    <!--==============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../HomeUtente/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../HomeUtente/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../HomeUtente/css/util.css">
      <link href="../HomeUtente/css/main.css" rel="stylesheet" type="text/css"  >
    <!--===============================================================================================-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <style>

     b.c{
       position: fixed;
       left : 35%;
       top: 15%;
       font-size: 40px;
       color: #fff;
     }

     .page {
       width:100%;
       height: 100%;
       margin: 0px 0px 0px 0px;
       padding: 0px 0px 0px 0px;
       border: 0px 0px 0px 0px;
       background: url(../Login/images/wallpaper.jpg) no-repeat fixed;
       background-size: cover;
       position: fixed;
       font-family: Poppins-Regular, sans-serif;
     }

     .container-table100 {
       width: 100%;
       min-height: 100vh;
       display: -webkit-box;
       display: -webkit-flex;
       display: -moz-box;
       display: -ms-flexbox;
       display: flex;
       margin-top: 0px;
       flex-wrap: wrap;
       padding: 0px 0px;
       margin-right: 10%;
       position: fixed;
       top: 25%;
       left: 5%;
     }
/*////////////////////////////////////////////////////////////////////////////// NAV BAR STYLE/////////////////////////////////////////////////////////////////*/
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
       background-color: blue;
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
       color: blue;
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
       <p class="page">
         <header>
           <nav class="nav">
             <a href="HomeOperatore.php" class="nav-item" active-color="orange">Home</a>
             <a href="VisualizzaPrenotazioni.php" class="nav-item" active-color="red">Visualizza Prenotazioni</a>
             <a href="" class="nav-item is-active" active-color="blue">Ritiri Fotocopie</a>
             <a href="CreaAcquisto/CreaAcquisto.php" class="nav-item" active-color="purple">Crea Acquisto</a>
             <a href="CronologiaAcquisti.php" class="nav-item" active-color="green">Storico Acquisti</a>
             <a href="logout.php" class="nav-item" active-color="blue">Logout</a>
             <?php
              $usr=$_SESSION["usernameBZ"];
              $msgIdUtente="<p style=\"border-style:ridge; margin-top: 18px; margin-left: 30%;\"> Username: $usr </p>";
              echo $msgIdUtente;
             ?>
             <span class="nav-indicator"></span>
           </nav>
         </header>

         <div class="limiter">
        		<div class="container-table100">
        			<div class="wrap-table100OperatoreR">
        				<b class="c">Coda Ritiri</b>
        				<div class="table100 ver3 m-b-110">
                  <input id="myInput" style="position:fixed; top:21%;" type="text" placeholder="Search..">

                   <?php
                   //Creazione Coda Delle Stampe in modo dinamico
                   include 'LogicaCodaRitiri/codaRitiriFotocopie.php';
                     $app = caricaCodaRitiri($ip,$porta);
                    echo $app;

                   ?>
        				</div>
        			</div>
        		</div>
        	</div>
       </p>

<!--===============================================================================================-->
<script src="../HomeUtente/vendor/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../HomeUtente/js/navbar.js"></script>
<!--===============================================================================================-->
<script src="../HomeUtente/vendor/bootstrap/js/popper.js"></script>
<script src="../HomeUtente/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../HomeUtente/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../HomeUtente/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
		$('.js-pscroll').each(function(){
  		var ps = new PerfectScrollbar(this);
  	  $(window).on('resize', function(){
  			ps.update();
      })
    });
</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<!--===============================================================================================-->
<script src="../HomeUtente/js/main.js"></script>


 </body>
 </html>
