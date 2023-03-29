<!DOCTYPE html>
<html> <lang="pl-PL"> 
<head>
<meta charset="utf-8"> 
<title>ANKIETA</title>

</head>
<body style="background-color: #CCCCCC; color: Black">
<h2><header>ZACHOWANIA KONSUMENTÓW NA RYNKU ŻYWNOŚCI EKOLOGICZNEJ</header></h2>

<style>
header {
	background-color: white; 
	border: 15px solid black;
  text-align: center; 
  border-style: double;
  font-size: 30px;
  font-family: Times New Roman;
  padding: 30px;
}
p {
font-size:20px;	
text-decoration: underline;
}
p.one {
line-height: 5
width: 100px;
}
selector{ justify-content: center;
}
</style>

<span style="font-size: x-Large" >
<div align="center">

<table cellpadding="50" cellspacing="30" style="background-color: #F5F5F5">
 <span style="font-size: large" >Kwestionariusz został stworzony, by poznać zachowania konsumentów na rynku żywności ekologicznej.<br>
 Jego celem jest zweryfikowanie preferencji, poglądów oraz opinii na temat BIO żywności. <br>
 Wypełnienie ankiety nie zajmie więcej niż 5 minut.<br>
 Badanie jest przeprowadzane anonimowo, a wyniki zostaną wykorzystane głównie do celów naukowych.<br>
Dziękujemy za poświęcony czas!</span><br><br>
    <tr>
        <td>
	<form method="post" action="odbior.php">

	<a>
	Po wypełnieniu ankiety proszę kliknąć przycisk "wyślij" na dole strony, odpowiedzi zostaną wtedy przesłane.
	</a> <br><br>
	
		Płeć
		<div><label><input type="radio" value="kobieta" name="plec" required > kobieta </label></div>
		<div><label><input type="radio" value="mężczyzna" name="plec" required> mężczyzna</label></div>
		<div><label><input type="radio" value="inne" name="plec" required> inne </label></div>

		<br>

		<label for="wiek"> Wiek</label><br>
		<select id="wiek" name="wiek">
		<option value="18-25" required>18-25 lat</option>
		<option value="26-35" required>26-35 lat</option>
		<option value="36-45" required>36-45 lat</option>
		<option value="46-55" required>46-55 lat</option>
		<option value="powyżej_55" required>Powyżej 55 lat</option>
		</select>

		<br><br/>

		Miejsce zamieszkania
		<div><label><input type="radio" value="wieś" name="zamieszkanie" required> wieś </label></div>
		<div><label><input type="radio" value="miasto_do_50_tys_mieszkańców" name="zamieszkanie" required> miasto do 50 tys. mieszkańców </label></div>
		<div><label><input type="radio" value="miasto_50-100_tys_mieszkańców" name="zamieszkanie" required> miasto 50-100 tys. mieszkańców </label></div>
		<div><label><input type="radio" value="miasto_100-200_tys_mieszkańców" name="zamieszkanie" required> miasto 100-200 tys. mieszkańców </label></div>
		<div><label><input type="radio" value="miasto_powyżej_200_tys_mieszkańców" name="zamieszkanie" required> miasto powyżej 200 tys. mieszkańców </label></div>

		<br><br/>

		Wykształcenie
		<div><label><input type="radio" value="podstawowe" name="wyksztalcenie" required> podstawowe </label></div>
		<div><label><input type="radio" value="gimnazjalne" name="wyksztalcenie" required> gimnazjalne </label></div>
		<div><label><input type="radio" value="średnie" name="wyksztalcenie" required> średnie </label></div>
		<div><label><input type="radio" value="zawodowe" name="wyksztalcenie" required> zawodowe </label></div>
		<div><label><input type="radio" value="wyższe" name="wyksztalcenie" required> wyższe </label></div>

		<br>

		Jak Pan/Pani ocenia swoją sytuację finansową?
		<div><label><input type="radio" value="bardzo_zła" name="sytuacja_finansowa"required> bardzo zła </label></div>
		<div><label><input type="radio" value="zła" name="sytuacja_finansowa" required> zła </label></div>
		<div><label><input type="radio" value="przeciętna" name="sytuacja_finansowa" required> przeciętna </label></div>
		<div><label><input type="radio" value="dobra" name="sytuacja_finansowa" required> dobra </label></div>
		<div><label><input type="radio" value="bardzo_dobra" name="sytuacja_finansowa" required> bardzo dobra </label></div>

		<br>

		<label for="liczba"> Liczba osób w gospodarstwie domowym</label><br>
		<select id="liczba" name="liczba">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3" selected>3</option>
		<option value="4">4</option>
		<option value="5">5 </option>
		<option value="6_i_więcej">6 i więcej</option>
		</select>

		<br></br>
		
		Jak często Pan/Pani dokonuje zakupu żywności ekologicznej?
		<div><label><input type="radio" value="trzy_x_tyg" name="czestotliwosc_zakupow" required > Przynajmniej trzy razy w tygodniu </label></div>
		<div><label><input type="radio" value="raz_tyg" name="czestotliwosc_zakupow" required > Raz w tygodniu </label></div>
		<div><label><input type="radio" value="raz_msc" name="czestotliwosc_zakupow" required > Przynajmniej raz w miesiącu </label></div>
		<div><label><input type="radio" value="rzadziej" name="czestotliwosc_zakupow" required > Rzadziej </label></div>
		<div><label><input type="radio" value="nigdy" name="czestotliwosc_zakupow" required > Nigdy </label></div>

		<br>

		Czy poniższe oznakowania są Panu/Pani znajome?
		<br><br>
		<img src="organic.jpg" width="220" height="150" alt="JPG" style="margin: 5px; padding: 5px">
		<img src="bio.png" width="160" height="150" alt="JPG" style="margin: 5px; padding: 5px">
		<img src="ekoland.jpg" width="180" height="150" alt="JPG" style="margin: 5px; padding: 5px">

		<div><label><input type="radio" value="tak" name="znajomosc" required> tak </label></div>
		<div><label><input type="radio" value="nie" name="znajomosc" required> nie </label></div>

		<br> 

		Ile pieniędzy przeznacza Pan/Pani miesięcznie na zakup żywności ekologicznej?
		<div><label><input type="radio" value=">100" name="kwota_msc" required> poniżej 100 zł </label></div>
		<div><label><input type="radio" value="100-200" name="kwota_msc" required> 100-200 zł </label></div>
		<div><label><input type="radio" value="201-400" name="kwota_msc" required> 201-400 zł </label></div>
		<div><label><input type="radio" value="<400" name="kwota_msc" required> powyżej 400 zł </label></div>


		<br>

		Gdzie Pan/Pani najczęściej kupuje "eko" żywność?
		<div><label><input type="checkbox" value="1" name="gdzie_zakupy[]"> Sklepy ze zdrową żywnością </label></div>
		<div><label><input type="checkbox" value="2" name="gdzie_zakupy[]"> Supermarkety i hipermarkety (Tesco, Carrefour, Auchan) </label></div>
		<div><label><input type="checkbox" value="3" name="gdzie_zakupy[]"> Sklepy dyskontowe (Biedronka, Lidl, Aldi) </label></div>
		<div><label><input type="checkbox" value="4" name="gdzie_zakupy[]"> Targowisko </label></div>
		<div><label><input type="checkbox" value="5" name="gdzie_zakupy[]"> Małe sklepy spożywcze </label></div>
		<div><label><input type="checkbox" value="6" name="gdzie_zakupy[]"> Sklepy online </label></div>
		<div><label> Inne (jakie?) <input type="text" name="gdzie_zakupy[]"> </label></div>

		<br>
		
		Determinanty wyboru przez Pana/Panią żywności ekologicznej<br>

		<div><label><input type="checkbox"name="det[]" value="1">Dbanie o zdrowie</label></div>
		<div><label><input type="checkbox"name="det[]" value="2">Troska o środowisko naturalne</label></div>
		<div><label><input type="checkbox"name="det[]" value="3">Walory smakowe</label></div>
		<div><label><input type="checkbox"name="det[]" value="4">Atrakcyjny wygląd</label></div>
		<div><label><input type="checkbox"name="det[]" value="5">Nie wpływa negatywnie na dobrostan zwierząt</label></div>
		<div><label><input type="checkbox"name="det[]" value="6">Nie powoduje alergii</label></div>
		<div><label><input type="checkbox"name="det[]" value="7">Trendy</label></div>
		<div><label><input type="checkbox"name="det[]" value="8">Rekomendacja znajomych</label></div>
		<div><label><input type="checkbox"name="det[]" value="9">Promocja poslkiego rolnictwa ekologicznego</label></div>
		<div><label><input type="checkbox"name="det[]" value="10">Przeświadczenie o wyższej jakości żywności ekologicznej w stosunku do żywności konwencjonalnej</label></div>
		<div><label>Inne (jakie ?)<input type="text"name="det[]" ></label></div>

		<br>

		Skąd Pan/Pani pozyskuje informacje na temat produktów ekologicznych?
		<div><label><input type="checkbox" value="1" name="informacje[]"> internet </label></div>
		<div><label><input type="checkbox" value="2" name="informacje[]"> znajomi </label></div>
		<div><label><input type="checkbox" value="3" name="informacje[]"> prasa </label></div>
		<div><label><input type="checkbox" value="4" name="informacje[]"> telewizja </label></div>
		<div><label><input type="checkbox" value="5" name="informacje[]"> radio </label></div>
		<div><label><input type="checkbox" value="6" name="informacje[]"> literatura specjalistyczna </label></div>
		<div><label><input type="checkbox" value="7" name="informacje[]"> rolnicy </label></div>
		<div><label> Inne (jakie?) <input type="text" name="informacje[]"> </label></div>

		<br> 
		Jakie produkty kupuje Pan/Pani najczęściej<br>

		<div><label><input type="checkbox"name="prod[]" value="1">Mięso</label></div>
		<div><label><input type="checkbox"name="prod[]" value="2">Ryby</label></div>
		<div><label><input type="checkbox"name="prod[]" value="3">Nabiał i jajka</label></div>
		<div><label><input type="checkbox"name="prod[]" value="4">Warzywa</label></div>
		<div><label><input type="checkbox"name="prod[]" value="5">Owoce</label></div>
		<div><label><input type="checkbox"name="prod[]" value="6">Pieczywo</label></div>
		<div><label><input type="checkbox"name="prod[]" value="7">Przetwory</label></div>
		<div><label><input type="checkbox"name="prod[]" value="8">Słodycze</label></div>
		<div><label><input type="checkbox"name="prod[]" value="9">Produkty zbożowe</label></div>
		<div><label><input type="checkbox"name="prod[]" value="10">Soki i napoje</label></div>
		<div><label><input type="checkbox"name="prod[]" value="11">napoje alkoholowe</label></div>
		<div><label>Inne (jakie ?)<input type="text"name="prod[]" ></label></div>

		<br>

		Jakie są Pana/Pani ewentualne bariery przed zakupem żywności ekologicznej?
		<div><label><input type="checkbox" value="1" name="bariery[]"> Zbyt wysoka cena </label></div>
		<div><label><input type="checkbox" value="2" name="bariery[]"> Ograniczony dostęp </label></div>
		<div><label><input type="checkbox" value="3" name="bariery[]"> Zbyt mała różnorodność oferowanych produktów </label></div>
		<div><label><input type="checkbox" value="4" name="bariery[]"> Obawy przed fałszywym oznakowaniem </label></div>
		<div><label><input type="checkbox" value="5" name="bariery[]"> Zbyt krótka data przydatności </label></div>
		<div><label><input type="checkbox" value="6" name="bariery[]"> Walory smakowe </label></div>
		<div><label><input type="checkbox" value="7" name="bariery[]"> Mało atrakcyjny wygląd </label></div>
		<div><label> Inne (jakie?) <input type="text" name="inne"> </label></div>




		<center><input type="submit" STYLE="font: 13pt Times New Roman;  font-weight: bold; color:black; background:white; width:80px; height:40px;" value="Wyślij"  /></center>



	</form>

    </td>
    </tr>
</table>

</div>

</body>
</html>