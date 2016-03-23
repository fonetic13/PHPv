<?php


/**********************************************
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