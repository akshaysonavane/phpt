<?
$somevar = 15;
function addit() {

	$somevar=40;
	GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();
?>