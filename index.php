<?php

if (isset($_GET['user_name']) and !empty($_GET['user_name'])){
	$user_name = $_GET['user_name'];
	
	if($user_name =='ivan'){
		echo 'Dobrodošao administratore Ivane!';
	}
	else
	{
		echo 'Pogrešni podaci, pokušaj ponovo!';
	}
}

/***************strlen()***********************************************
$tekst = 'Ovo je tekst. ';
$slova = strlen($tekst);

for($i=1;$i<=$slova;$i++);
	echo 'Tekst se sastoji od '.$i.' znakova!'.'<br>';
***********************************************************************/

/*****************************FOREACH*PETLJA*******************************************************
$stvari = array('Ivan'=>array('Kompjuter','NAS', 'Mobitel'),'Monika'=>array('Šminka','Torbica', 'grudnjak'));

foreach($stvari as $ime => $predmeti){
	echo '<strong>'.$ime.'</strong><br>';
	foreach($predmeti as $stvar){
		echo ' -'.$stvar.'<br>';
	}
}
***************************************************************************************************/

/*********************MULTIDIMENZIONALNA*POLJA(2DIMENZIONALNA)*************************************
$hrana = array('ZDRAVA'=>array('mango', 'špinat', 'banane'),'NEZDRAVA'=>array('pizza', 'sladoled', 'čvarci')); // polje unutar polja čine 2dimenzionalno polje.

echo $hrana['NEZDRAVA'][0]; //Ispis člana polja, "pizza"
**************************************************************************************************/

/***************ASOCIJATIVNA*POLJA*******************************
$auti = array('AUDI'=>'PILA', 'MECKA'=>'KANTA', 'BMW'=>'PILA');
echo $auti['AUDI'] . '<br>';
echo $auti['MECKA'];
*****************************************************************/

/******************************POLJA*SA*FOR*PETLJOM******************************************************
$auti = array('BMW', 'AUDI', 'PORCHE', 'RENAULT'); // Deklariranje array-a i unos vrijednosti u array.
$auti[4]='POLIC';                                  //Rucno dodavanje elemanta u polje.
for ($i = 0; $i <= 4; $i++){                       // Ispis svakog elementa polja zasebno kroz for petlju.
	if($i<4){
		echo $auti[$i] . ', ';
	}
	else
	{
		echo $auti[$i] . '.';
	}
}

echo '<br>'; //Nova linija
echo print_r($auti); //Ispisuje cijeli sadržaj polja sa vrijednostima mjesta.
**********************************************************************************************************/

/***************USPOREDJIVANJE*2*STRINGA****
$text1 = 'Ovaj tekst uopce nije plagijat onome koji sljedi';
$text2 = 'O ovom tekstu smo pricali u prethodnoj varijabli';
similar_text($text1, $text2, $rezultat); //Funkcija usporedjuje sličnost 2 stringa te vraća vrijednost u postotku.
	echo 'Rezultat sličnosti je: ' . $rezultat . '%';
*******************************************/
/***********OBRNUTI*ISPIS*******************
$string = 'Ovdje ima cetiri rijeci';
$string_reversed = strrev($string);  //funkcija koja ispisuje string obrnuto.
echo $string_reversed; 
*********************************************/
/*****************RANDOM*MJESA*SLOVA**********
$string = 'Ovdje ima cetiri rijeci';
$string_shuffled = str_shuffle($string); //spremamo u varijablu funkciju koja randomizira slova iu $string-a.
$half = substr($string_shuffled, 0, strlen($string)/2); //spremamo u varijablu $half funkciju koja uzima $string_shuffled te ogranicava broj znakova uzetih u obzir u ovom slučaju pola od $string
echo $string_shuffled . '<br>';
echo strlen($string);
echo '<br>' . $half;
**********************************************/
/*************BROJI*RIJECI********************
$string = 'Ovdje ima cetiri rijeci.';
$string_word_count = str_word_count($string, 2, '.');  // Funkcija koja broji riječi ili ih smjesta u array ovisno dal je 0,1 ili 2. echo samo za 0.
print_r($string_word_count);
**********************************************/
/**********PRIKAZ*IP*ADRESE*KROZ*FUNKCIJU******
$tvoj_ip = $_SERVER['REMOTE_ADDR'];
function prikaziIp(){
	global $tvoj_ip;
	echo 'Tvoja IP adresa je: ' . $tvoj_ip;
}
prikaziIp();
***********************************************/
/**********NAPREDNIJA**FUNKCIJA*****************
function displayDate($day,$date,$year){
	echo $day . '/' . $date . '/' . $year;
	
}
displayDate('Ponedjeljak',28,2019);
***********************************************/
/**********NAPREDNIJA**FUNKCIJA*****************
$unbr1 = 10;
$unbr2 = 12;
function zbroj($br1,$br2){
	echo $br1 + $br2;
	
}
zbroj($unbr1,$unbr2);
***********************************************/
/*********JEDNOSTAVNA**FUNKCIJA*****************
function ispis(){
	echo 'Ivan.';
}
echo 'Ime mi je ';
ispis();
************************************************/
/************************SPAJANJE NA BAZU************************************************
@mysql_connect('localhost','root','') or die('GREŠKA. NIJE MOGUĆE SPOJITI SE NA BAZU!'); // spajanje na bazu imena localhost sa korisnikom root bez sifre. Ako spajanje nije uspjelo javi navedenu gresku.
echo 'Spojen si.';
*****************************************************************************************/
/******************SWITCH************************ 
$dan = 'Subota';
switch ($dan){
	case 'Subota':
	case 'Nedjelja':
		echo 'Wooohoooo vikend je!!!';
	break;
	
	default:
		echo 'moras raditi.';
	break;
}***********************************************/
?>
<form action="index.php" method="GET">
	Korisničko ime: <input type="text" name="user_name">
	<input type="submit" value="Submit">
</form>
