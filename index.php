<?php
$dbParams=require(
	'db.php'
);
$db=new PDO(
	"mysql:host=localhost;dbname=" . 
		$dbParams['database'] .
		";charset=utf8",
	$dbParams['username'],
	$dbParams['password']
);

$students=$db
	->query('SELECT * FROM `student`')
	->fetchAll(PDO::FETCH_ASSOC);
Foreach ($students as $student) {
	echo "<p>" . 
		htmlspecialchars($student['lastName']) .
		"</p>";
}