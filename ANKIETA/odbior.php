<html>

<body>

<?php
// łączymy się z bazą danych

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ankietapiba";

	
		try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$plec = $_POST['plec'];
			$wiek = $_POST['wiek'];
			$zamieszkanie = $_POST['zamieszkanie'];
			$wyksztalcenie = $_POST['wyksztalcenie'];
			$sytuacjafinansowa = $_POST['sytuacja_finansowa'];
			$liczba = $_POST['liczba'];
			$czestotliwosczakupow = $_POST['czestotliwosc_zakupow'];
			$znajomosc = $_POST['znajomosc'];
			$kwotamsc = $_POST['kwota_msc'];
			$gdziezakupy = $_POST['gdzie_zakupy'];
			$det = $_POST['det'];
			$informacje = $_POST['informacje'];
			$prod = $_POST['prod'];
			$bariery = $_POST['bariery'];
			
			$gdziezakupyw = "";
				foreach($gdziezakupy as $wielokrotny)
				{
					$gdziezakupyw .= $wielokrotny . " ; ";
				}
				
			$detw = "";
				foreach($det as $wielokrotny)
				{
					$detw .= $wielokrotny . " ; ";
				}
				
			$informacjew = "";
				foreach($informacje as $wielokrotny)
				{
					$informacjew .= $wielokrotny. " ; ";
				}
			
			$prodw = "";
				foreach($prod as $wielokrotny)
				{
					$prodw .= $wielokrotny . " ; ";
				}
				
			$barieryw = "";
				foreach($bariery as $wielokrotny)
				{
					$barieryw .= $wielokrotny . " ; ";
				}
				
			
			
			$stmt = $conn->prepare("INSERT INTO 1strona (plec,wiek,zamieszkanie,wyksztalcenie,sytuacjafinansowa,liczba,czestotliwosczakupow,znajomosc,kwotamsc,gdziezakupy,det,informacje,prod,bariery)
			VALUES (:plec, :wiek, :zamieszkanie, :wyksztalcenie, :sytuacjafinansowa, :liczba, :czestotliwosczakupow, :znajomosc, :kwotamsc, :gdziezakupy, :det, :informacje, :prod, :bariery)");
			
			$stmt->bindParam(':plec', $plec);
			$stmt->bindParam(':wiek', $wiek);
			$stmt->bindParam(':zamieszkanie', $zamieszkanie);
			$stmt->bindParam(':wyksztalcenie', $wyksztalcenie);
			$stmt->bindParam(':sytuacjafinansowa', $sytuacjafinansowa);
			$stmt->bindParam(':liczba', $liczba);
			$stmt->bindParam(':czestotliwosczakupow', $czestotliwosczakupow);
			$stmt->bindParam(':znajomosc', $znajomosc);
			$stmt->bindParam(':kwotamsc', $kwotamsc);
			$stmt->bindParam(':gdziezakupy', $gdziezakupyw);
			$stmt->bindParam(':det', $detw);
			$stmt->bindParam(':informacje', $informacjew);
			$stmt->bindParam(':prod', $prodw);
			$stmt->bindParam(':bariery', $barieryw);
				  
			$stmt->execute();
		  
		header("Location: aij1.php");
		exit();

		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	

	// zamykamy połączenie z bazą danych
	$conn = null;
?>
</body>
</html>