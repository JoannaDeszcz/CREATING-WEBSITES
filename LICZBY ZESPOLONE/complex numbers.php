<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Playfair+Display&display=swap" rel="stylesheet">
	<style>
	body
		{
		background-color:#F2FAFC;
		}
	
	#container
		{
		max-width: 1000px;
		margin-left:auto;
		margin-right:auto;
		}
	
	#title
		{
		background-color:#347C98;
		color:#F4F9FB;
		margin: 20px 0px 25px 0px;
		font-size: 70px;
		font-weight: bold;
		text-align:center;
		letter-spacing:2px;
		font-family: 'Playfair Display', serif;
		padding:30px;
		}
	
	#nav
		{
        float:left;
        background-color:#D0E4EC;
        width: 17.737%;
        min-height:2030px;
        padding:2%;
        border-right:3px dotted #666666;
        }
	
	.option	
		{
		margin:0px 5px 0px 5px;
		font-size:17px;
		text-align:center;
		width:170px;
		height:49.5px;
		padding:10px;
		border-bottom:1px solid #444444;
		display:flex;
		justify-content:center;
		align-items:center;
		}
		
	a:link {
		text-decoration: none;
		color:black;
		}		
	a:visited {
		display:flex;
		justify-content:center;
		align-items:center;
		text-decoration: none;
		color:black;
		}

	.first{
		position:fixed;
		top: 28%;
		margin-left: -1%;
		border-top:1px solid #444444;
	}	
	
	.second{
		position:fixed;
		top: 38%;
		margin-left: -1%;
	}	
	
	.third{
		position:fixed;
		top: 48%;
		margin-left: -1%;
	}	
		
	.forth{
		position:fixed;
		top: 58%;
		margin-left: -1%;
	}	
		
	.option:hover
		{
		background-color: white;
		color:#123A68;
		cursor: pointer;
		opacity:0.5;
		}
	
	#content
        {
        float: right;
        background-color: #DBEAF0;
        width: 69.9%;
        padding: 4%;
        text-align:justify;
        }
	
	h3
		{
		text-align: center;
		border-top: 1.5px solid;
		border-bottom: 1.5px solid;
		padding: 14px;
		opacity: 0.7;
		margin-top: -15.5px;
		}
		
	h4{
		text-align:center;
	}
	
		/* przycisk pochodzi ze strony w3school */
	#myBtn {
		display: none;
		position: fixed;
		bottom: 20px;
		right: 30px; 
		z-index: 99;
		border: none; 
		outline: none;
		background-color: #347C98;
		color: white; 
		cursor: pointer;
		padding: 13px;
		font-size: 15px; 
	}

	#myBtn:hover {
		background-color: #555; 
	}

	
	
	</style>
</head>
<body>
	
	<?php
		class Complex {
			public $a;
			public $b;
			
			public function __construct($a,$b)
			{
				$this->a=$a;
				$this->b=$b;
			}
	
			//wyswietlanie
			public function wyswietl()
			{
				if ($this->a==0 && b==0){
					return $res="Brak wartości (obie części równe 0)";
				} else if ($this->b<0){
					return $res=$this->a.$this->b."i";
				} else if ($this->a==0){
					return $res=$this->b . "i";
				} else if ($this->b==0){
					return $res=$this->a;
				} else {
					return $res= $this->a." + ".$this->b ."i" ;
				}
			}
			
			//zwracanie czesci rzeczywistej
			public function rzeczywista()
			{
				return $res= $this->a;
			}
			
			//zwracanie czesci urojonej
			public function urojona()
			{
				return $res= $this->b;
			}
			
			
			// Dodawanie (a+b),(c+d)*i
			public function add(Complex $q){
				return new Complex($this->a+$q->a, $this->b+$q->b);
			}
			
			// Odejmowanie (a+b),(c+d)*i
			public function minus(Complex $q){
				return new Complex($this->a-$q->a, $this->b-$q->b);
			}
			
			// Mnozenie a*c +(b*d*(-1)) , a*d+b*c 
			public function multiply(Complex $q){
				return new Complex(
				$this->a*$q->a+($this->b*($q->b*(-1))),
				$this->a*$q->b+$this->b*$q->a);
			}
			
			// Dzielenie
			public function division(Complex $q){
				return new Complex(
				(($this->a*$q->a)+($this->b*$q->b))/(($q->a*$q->a)+($q->b*$q->b)),
				(($this->b*$q->a)-($this->a*$q->b))/((($q->a*$q->a)+($q->b*$q->b))));
			}
			
			
			// Moduł
			public function modul(){
				$res=round(($this->a*$this->a+$this->b*$this->b)**(1/2),2);
				return $res;
			}
			
			//Argument
			public function argument() {
				if ($this->a == 0) { 
					if ($this->b > 0) 
					{
						$degree=90;	
					}		
					else if($this->b < 0)
					{
						$degree=270;
					}
					else
					{
						$degree=0;
					}
				}
				else {
					$tan=abs($this->b) / abs($this->a); 
					$degree=round(rad2deg(atan($tan)),2); 
					if ($this->a > 0 && $this->b >= 0) { 
						$degree=$degree;
					}
					else if ($this->a < 0 && $this->b >= 0) 
					{
						$degree=180-$degree; 
					}
					
					else if ($this->a < 0 && $this->b <= 0 ) 
					{
						$degree=180+$degree; 
					}
					
					else if ($this->a > 0 && $this->b <= 0) 
					{
						$degree=360-$degree; 
					}
					$this->degree=$degree;
				}

				$argument=$degree;
				return $argument;
			}
			
			//Liczba sprzężona
			public function spr(){
				return $res= $this->a." - ".$this->b ."i" ;
			}
			
			//wyswietlanie liczby w postaci wykladniczej
				public function wyk () {
				return $res=$this->modul()." <sup> ".$this->argument() ." i </sup>";
			}
			
		}	
		
		$z1 = new Complex(12,6);
		$z2 = new Complex(3,4);
		$z3 = new Complex(5,-8);
		$z4 = new Complex(4,7);
		$z5 = new Complex(11,2);
		

	?>

<button onclick="topFunction()" id="myBtn" title="Wróć na górę">Start</button>


	<div id="container">
	
		<div id="title"> Liczby zespolone w php</div>
		
		<div id="nav">
			<div class="first">
				<a href="#top">
					<p class="option">
					O projekcie
					</p>
				</a> 
			</div>
			<div class="second">
				<a href="#wyswietlanie">
					<p class="option">
					Wyświetlanie liczb zespolonych
					</p>
				</a> 
			</div>
			<div class="third">
				<a href="#działania">
					<p class="option">
					Działania na liczbach zespolonych
					</p>
				</a> 
			</div>
			<div class="forth">
				<a href="#wykladnicza">
					<p class="option">
					Postać wykładnicza liczby zespolonej
					</p>
				</a> 
			</div>
		</div>
		
		<div id="content">
		
			<h3>O projekcie</h3>
			<p style="line-height: 0.8cm;">Zadanie polegało na stworzeniu odpowiednich funkcji dotyczących liczb zespolonych w jęzuku php, z uwzględnieniem HTML oraz CSS.
			</p>
			<br><br>
				
		<br>
		<div id="wyswietlanie">
		<h3>Wyświetlanie liczb zespolonych</h3>
		</div>
			
		<?php
			echo "z = ".$z1->wyswietl(); 
			echo "<br>";

			echo "z = ".$z2->wyswietl();
			echo "<br>";
			
			echo "z = ".$z3->wyswietl();
			echo "<br>";
		?>
		
		<br><h4>
		Wyświetlanie części rzeczywistej:
		</h4><br>
		<?php
			echo "Część rzeczywista liczby zespolonej ". $z1->wyswietl() ." wynosi: ". $z1->rzeczywista();
		?>
		
		<br><h4>
		Wyświetlanie części urojonej:
		</h4><br>
		<?php
		echo "Część urojona liczby zespolonej ". $z1->wyswietl() ." wynosi: ".$z1->urojona();
		?>
		<br><br>
		
		<br><br>
		<div id="działania">
		<h3>Działania na liczbach zespolonych</h3>
		</div>
		<h4>
		Dodawanie:
		</h4><br>
		<?php
			$d1=$z2->add($z1);
			echo "(" . $z1->wyswietl() . ") + (" . $z2->wyswietl() . ") = (" . $d1->wyswietl().")<br>";
		?>
		<br><h4>
		Odejmowanie:
		</h4><br>
		<?php
			$o1=$z1->minus($z2);
			echo "(" . $z1->wyswietl() . ") - (" . $z2->wyswietl() . ") = (" . $o1->wyswietl().")<br>";
		?>
		<br><h4>
		Mnożenie:
		</h4><br>
		<?php
			$m1=$z3->multiply($z4);
			echo "(" . $z3->wyswietl() . ") * (" . $z4->wyswietl() . ") = (" . $m1->wyswietl().")<br>";
		?>
		
		<br><h4>
		Dzielenie:
		</h4><br>
		<?php
			$dz1=$z1->division($z2);
			echo "(" . $z1->wyswietl() . ") / (" . $z2->wyswietl() . ") = (" . $dz1->wyswietl().")<br><br>";
		
			$dz2=$z4->division($z5);
			$dz2->wyswietl();
			echo "(" . $z4->wyswietl() . ") / (" . $z5->wyswietl() . ") = (" . $dz2->wyswietl().")<br>";
		
		?>
			
		<br><h4>
		Moduł:
		</h4>
		<p><i>Wynik zaokrąglany do dwóch miejsc po przecinku </i></p><br>
		<?php
		
			echo '|3+4i| = '.$z5->modul()."<br><br>";
			echo '|12+6i| = '.$z1->modul()."<br><br>";
			echo '|3+4i| = '.$z2->modul()."<br><br>";
		?> 
		
		<br><h4>
		Liczba sprzężona:
		</h4><br>
		<?php
			echo "Liczba sprzężona z (".$z4->wyswietl().") wynosi  z-= (". $z4->spr()." )<br><br>";
			echo "Liczba sprzężona z (".$z5->wyswietl().") wynosi  z-= (". $z5->spr()." )<br><br>";
		?>
		
		<br><h4>
		Argument:
		</h4><br>
		<p><i>Wynik zaokrąglany do dwóch miejsc po przecinku </i></p><br>
		<?php
			echo "Argument liczby zespolonej ". $z1->wyswietl() ." wynosi: ". $z1->argument() ."°<br><br>";
			echo "Argument liczby zespolonej ". $z2->wyswietl() ." wynosi: ". $z2->argument() ."°<br><br>";
			echo "Argument liczby zespolonej ". $z3->wyswietl() ." wynosi: ". $z3->argument() ."°<br><br>";
		?>
		
		<br><br>
		<div id="wykladnicza">
		<h3>Wyświetlanie liczb zespolonych w postaci wykładniczej</h3>
		</div>
		<p><i>Wynik zaokrąglany do dwóch miejsc po przecinku </i></p><br>
		<?php
			$w1=$z1->wyk($z1);
			echo "Postać wykładnicza liczby zespolonej ". $z1->wyswietl() . " wynosi: ".$w1 ."<br><br>";
			$w2=$z4->wyk($z4);
			echo "Postać wykładnicza liczby zespolonej ". $z4->wyswietl() . " wynosi: ".$w2;
		?>
		
	
		
	<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
