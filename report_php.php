<?php


$conn = new mysqli("localhost","root","admin","Faculty");
if(isset($_POST["ReportSubmit"]))
{
$tables=$_POST["tables"];
$attributes=$_POST["attributes"];
/*if(!isset($_POST["StartDate"]) && !isset($_POST["StartDate"]))
{

}
*/

echo $attributes;
echo $tables;
}
?>
