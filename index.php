<pre>
<?php
class Transport{
	public $TipTransporta = '';
	public $StranaProizvodstva = 'Russia';
	public function peredvigaetsya (){
	}	
}
interface Bluetooth{
	public function connect ($Device);
	public function proverka ($Code);
}

class Car extends Transport implements Bluetooth {
	public $color = '';
	public $toplivo = '';
	public $doors = '';
	public function __construct( $color, $toplivo, $doors, $TipTransporta){
		$this->color = $color;
		$this->toplivo = $toplivo;
		$this->doors = $doors;
		$this->TipTransporta = $TipTransporta;	
	}
	public function go () {
	}
	public function stop () {
	}
	public function connect ($Device){
	}
	public function proverka ($Code){
	}
		
}
		
	$car1 = new Car ('Красный', 'Дизель', '4 двери', 'Дорожный');
	$car2= new Car( 'Синий', 'Бензин', '2 двери', 'Дорожный');
	print_r ($car1);
	print_r ($car2);
	print_r (get_class_methods ('Car'));
echo '==========================================================================<br><br>';	
	
class Tekhnika{
	public $price = 0;
	public $OnOff = false;
	public function SetPrice ($price){
		$this->price = $price;
	}	
}
interface HDMI{
	public function connect ($Device);
	public function proverka ($Code);
}
class TV extends Tekhnika implements HDMI{
	private $Chanal = 1;
	public $diagonal = '';
	public function __construct ($diagonal){
		$this->diagonal = $diagonal;	
	}	
	public function ChangeChanel() {
	}
	public function OnOff (){
		$this->OnOff = !$this->OnOff;	
	}
	public function connect ($Device){
	}
	public function proverka ($Code){
	}
}
$TV1 = new TV('24');
$TV1->OnOff();
$TV1->SetPrice(2000);
$TV2 = new TV('32');
$TV2->SetPrice(8000);
print_r ($TV1);
print_r ($TV2);
print_r (get_class_methods ('TV'));
echo '==========================================================================<br><br>';

class kantstovary{
	public $price = 0;
	public $class = '';
	public function SetPrice ($price){
		$this->price = $price;
	}	
}
interface Sterjen{
	public function napolnennost ($Chernila);
	}
class Pen extends kantstovary implements Sterjen{
	public $color = '';
	public $price = '';
	public $dlina = '';
	public function __construct( $color, $price, $dlina, $class){
		$this->color = $color;
		$this->price = $price;
		$this->dlina = $dlina;
		$this->class = $class;
	}
	public function pishet (){
	}
	public function napolnennost ($Chernila){
		$this->napolnennost = $Chernila;
	}
}

$pen1 = new Pen ('синяя', '12р', '12см', 'Шариковые ручки');
$pen2 = new Pen ('красная', '14р', '16см', 'Шариковые ручки');
$pen1->napolnennost('100%');
$pen2->napolnennost('80%');
print_r ($pen1);
print_r ($pen2);
print_r (get_class_methods ('Pen'));

echo '==========================================================================<br><br>';
class Ptitsy{
	public $vid = '';
	public $ves = 0;
	public function SetVes ($ves){
		$this->ves = $ves;	
}
}
interface golos{
	public function zvuk ($krya);
}
class Duck extends Ptitsy implements golos{
	public $tsvet = '';
	public $vozrast = 0;
	public $poroda = '';
	public function	__construct ($tsvet, $vozrast, $poroda, $vid ){
		$this->tsvet = $tsvet;
		$this->vozrast = $vozrast;
		$this->poroda = $poroda;
		$this->vid = $vid;
		
		
	}
	public function plavaet(){
	}
	public function zvuk ($krya){
		$this->krya = $krya;
	}
}
	$duck1 = new Duck ('пестрая', 6, 'Башкирская', 'дикая', 2);
	$duck2 = new Duck ('белая', 8, 'Мандаринка', 'домшняя', 4);
	$duck1->zvuk('krya');
	$duck1->SetVes(2);
	$duck2->zvuk('ga-ga');
	$duck2->SetVes(4);
	print_r ($duck1);
	print_r ($duck2);
	print_r (get_class_methods ('Duck'));
echo '==========================================================================<br><br>';	
class Tovary{
	public $price = 0;
	public function SetPrice ($price){
		$this->price = $price;
	}	
}
interface upakovka{
	public function upakovat ($obertka);
}	
class Produkt extends Tovary implements upakovka {
	public $ostatok = 0;
	public $discout = 0;
	public $name = '';
	public function __construct ( $name, $ostatok, $discout){
		$this->ostatok = $ostatok;
		$this->discout = $discout;
		$this->name = $name;
	}
	public function bonus(){
		if($this->discout >=0){
			return round($this->price*(1-$this->discout/100));
		}
	}
	public function upakovat ($obertka){
		$this->obertka = $obertka;
	}
}
	$book = new Produkt ('Книга', 3000, 3);
	$book->upakovat('Обложка'); 
	$book->SetPrice(200);
	$lego = new Produkt ('Лего', 30, 15);
	$lego->upakovat('Коробка');
	$lego->SetPrice(1450); 
	print_r ($book);
	print_r ($lego);
	echo '<br>Цена со скидкой:'.$book->bonus().'<br>';
	echo '<br>Цена со скидкой:'.$lego->bonus().'<br>';


