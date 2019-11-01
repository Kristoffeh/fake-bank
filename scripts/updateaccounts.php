<?php
session_start();
require '../require/dbconnect.php';

$r=mysqli_query($conn, "SELECT * FROM users WHERE id='" . $_SESSION['id'] . "'");
$userRow=mysqli_fetch_array($r);

$tempname = "accounts";
$id = $userRow['id'];

$result = mysqli_query($conn, "SELECT * FROM $tempname WHERE belongstoid = '$id'");

// Format the account number to not show the entire account number. 7 numbers are hidden while the last 4 numbers are visible.
function format_accountnumber ($n){
    $y = "*******";
    $x = substr($n, -4);
    return $y . $x;
}


while($row = mysqli_fetch_array($result)) {
    echo "<div class='table-responsive table-borderless'>";
    echo "<table class='table table-bordered table-hover table-sm' id='accTable'>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['accountname'] . " (" . $row['accounttype'] . ")" . "</td>";
    echo "<td class='text-center'><a>" . format_accountnumber($row['accountnumber']) . "<br></a></td>";
    echo "<td class='text-right'>$" . number_format($row['accountbalance'], 2) . "</td>";
    echo "<td class='text-right'><a href='transfer.php'>" . "Transfer" . "<br></a></td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}


?>