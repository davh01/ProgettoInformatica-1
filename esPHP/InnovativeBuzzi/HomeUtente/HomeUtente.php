<?php
  session_start();
  $ip=$_SERVER['SERVER_NAME'];  //server per vedere sei sei localhost o hai un ip
  $porta=$_SERVER['SERVER_PORT'];   //porta del serve, perchè c'è chi ha 80, chi 8080 etc...
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="Table/width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="Table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/css/util.css">
	<link rel="stylesheet" type="text/css" href="Table/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
	<style>
		b{
			position: absolute;
			left : 800px;
			top: 170px;
		}
		b.c{
			position: : fixed;
			left : 230px;
			top: 100px;
			font-size: 40px;
		}


	</style>
<body>
      <?php
        if(isset($_SESSION["usernameBZ"])){
          //rimango qua
        }else{
          header("Location: http://" .$ip .":" .$porta ."/esPHP/InnovativeBuzzi/index.php");  //reinderizzo alla home
        }
          echo "utente";

//  header("Location: http://" .$ip .":" .$porta ."/esPHP/InnovativeBuzzi/HomeUtente/HomeUtente.php");  //reinderizzo alla home

		   $CreaPreno="<b><button onclick=\"window.location.href='http://$ip:$porta/esPHP/InnovativeBuzzi/Prenotazione/CreaPrenotazione.php'\" type=\"button\" class=\"btn btn-outline-success\">Crea Prenotazione</button></b>";
			 echo $CreaPreno;
			 ?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<b class="c">Lista Acquisti </b>
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Class name</th>
									<th class="cell100 column2">Type</th>
									<th class="cell100 column3">Hours</th>
									<th class="cell100 column4">Trainer</th>
									<th class="cell100 column5">Spots</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">Like a butterfly</td>
									<td class="cell100 column2">Boxing</td>
									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>



			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="Table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Table/vendor/bootstrap/js/popper.js"></script>
	<script src="Table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Table/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});


	</script>
<!--===============================================================================================-->
	<script src="Table/js/main.js"></script>

</body>
</html>