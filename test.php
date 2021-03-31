<?php
//salom

//salom-END salom salom
$yil = 2023;
$n = 4;
$butun =intval(($yil-2020)/4);
$qoldiq = ($yil-2020)%4;
echo $qoldiq;
if(($yil-2020) < 4){
    $kun = $yil-2020 + $qoldiq+2;
}
else {
    $kun = $yil-2020+$butun+3;
}
if( $qoldiq == 1){
    $kun++;
}
$n = $kun%7;

switch($n){
    case 0:
        echo "Dushanba";
        break;  
    case 1:
        echo "Seshanba";
        break;
    case 2:
        echo "Chorchanba";
        break;
    case 3:
        echo "Payshanba";
        break;
    case 4:
        echo "Juma";
        break;
    case 5:
        echo "Shanba";
        break;
    case 6:
        echo "Yakshanba";
        break;
}
echo "❌";
// include "db.php";
// interface Log {
    //     public function execute($log);
    // }
    
    // class LogToFile 
    // {
        //     public function execute5($log){
//         echo $log;
//     }
// }

// abstract class LogToDatabase extends LogToFile 
// {
//     public function execute2($log){
//         echo $log;
//     }
// }

// class UserController extends LogToDatabase{

//     public $log;

//     public function __construct($log)
//     {
//         $this->log = $log;
//     }
// }
// // $log = new LogToDatabase();
// // $log2 = new LogToFile();
// $model = new UserController($log2);
// $model->execute5("5656465456");





// Class Auto {

//     public $model;
//     public $color;
//     public $probeg = 0;
//     private $price;
//     private $date;

//     public function createAuto($model,$color,$price,$date,$probeg = 0)
//     {
//         $this->model = $model;
//         $this->color = $color;
//         $this->price = $price;
//         $this->date = $date;
//         $this->probeg = $probeg;

//     }
//     public function getInfo(){
//         echo " Modeli : ". $this->model . "<br>";
//         echo " Rangi : " . $this->color. "<br>";
//         echo " Narxi : " . $this->price. "<br>";      
//         echo " Yili : " . $this->date. "<br>";      
//         echo " probeg : " .  $this->probeg . " km <br>";
       
//     }
//     public function updateProbeg($probeg)
//     {
//        $this->probeg = $probeg;
//     }

//     public function updateModel($model)
//     {
//        $this->model = $model;
//     }

//     public function updatePrice($price)
//     {
//        $this->price = $price;
//     }
//     public function updateColor($color)
//     {
//        $this->color = $color;
//     }  
// }
// // $auto = new Auto();
// // $auto->createAuto("nexia","qizil",50000,"2020");
// // $auto->updateModel("Damas");
// // $auto->updateProbeg(500);
// // $auto->getInfo();

// Class AutoSalon{
//     public $nomi = "Nitro";
//     public $address = "toshkent";
//     public $avtomobile;

//     public function create($model,$color,$price,$date,$probeg = 0){
           
//         $this->avtomobile["$model"]['rangi'] = $color;
//         $this->avtomobile["$model"]['narxi'] = $price;
//         $this->avtomobile["$model"]['yili'] = $date;
//         $this->avtomobile["$model"]['probeg'] = $probeg;

//     }

//     public function getSalonInfo(){
//         echo "Salon nomi :" .$this->nomi;
//         echo "<br> Address ".$this->address;
//         echo "<pre>";
//         print_r($this->avtomobile);
//     }
     

// }
// // $autoSalon = new AutoSalon();
// // $autoSalon->create("nexia","qizil",50000,"2020");
// // $autoSalon->create("Damas","qizil",50000,"2020");
// // $autoSalon->create("Lasetti","qizil",50000,"2020");
// // $autoSalon->getSalonInfo();










// // class Rectangle{

// //     private $width;
// //     private $height;

// //     public function setValue($width,$height){
// //         $this->width = $width;
// //         $this->height = $height;
// //     }
// //     public function yuzi(){
// //         return $this->width * $this->height;
// //     }

// //     public function perimetr() {
// //         return 2 * ($this->width + $this->height);
// //     }
// // }
//  class Kofe{

//     public $kofe;
//     public $shakar;
//     public $suv;
//     public $sut;

//     public function addKofe(){
//         echo  "kofe qoshildi <br>";
//     }
//     public function addShakar(){
//         echo "shakar qoshildi <br>";
//     }
//     public function addSuv(){
//         echo "Suv qoshildi <br>";
//     }
//     public function addSut(){
//         echo "Sut qoshildi <br>";
//     }
//     public function tayyorla($kofe){
//         $this->addKofe();
//         $this->addShakar(); 
//         $this->addSuv();
//         if($kofe == "latte"){
//              $this->addSut();
//         }
//         echo "$kofe tayyor";
//     }
    
// }

// // $kofe = new Kofe();
// // $kofe->tayyorla("latte");

// class Connect {
    
//     private $db;

//     public function __construct()
//     {
//         $this->db =new Db();
//     }
//     public function getInfo(){
//         $select = $this->db->con()->query("select * from user_profile")->fetch();
//         return $select;
//     }
// }
// $select = new connect();
// var_dump($select->getInfo()); 
// echo "<pre>";
// print_r($select->getInfo());
// echo "</pre>";
