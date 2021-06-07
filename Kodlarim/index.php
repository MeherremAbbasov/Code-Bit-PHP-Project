<?php 

if ($_SERVER['REQUEST_METHOD']=="POST") {
	$filimName = $_POST['filimName'];

}

$filimList = [
[
	"title: " => "Rear Window",
    "director: " => "Alfred Hitchcock",
    "year: " => 1954
],
[
	"title: " => "Full Metal Jacket",
    "director: " => "Stanley Kubrick",
    "year: " => 1987
],
[
	"title: " => "Mean Streets",
    "director: " => "Martin Scorsese",
    "year: " => 1973
]

];
function SearcFilimm(){
	global $filimName;
	global $filimList;
	
	for ($i=0; $i <count($filimList) ; $i++) {

		if (in_array($filimName, $filimList[$i])) {

			foreach ($filimList[$i] as $key => $value) {
				echo $key,$value."<br>";
			} die();
		}
		
	}

	if ($filimList[$i]!=$filimName) {
		echo "Bele Filim Adi Yoxdur";	
	}
	
}



SearcFilimm();



	


