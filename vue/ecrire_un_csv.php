<?php
$list = array (
array( "Batman", "Gotham" ) ,
array( "Superman", "Smallville" ),
array( "Spiderman", "Paris" )
);
$fp = fopen("export.csv", "w");
foreach($list as $fields):
    fputcsv($fp, $fields);
endforeach;
fclose($fp);
?>



<?php
header("Content-Type: text/plain");
header("Content-disposition: attachment; filename=products.csv");

$out = fopen('PHP://output', 'w');
fputcsv($out, array(
"COL1",
"COL2",
"COL3"
));

foreach( $r as $row ):
    fputcsv($out, array(
    	$row['col1'],
    	$row['col1'],
    	$row['col1'],
    ));
endforeach;
fclose($out);
?>