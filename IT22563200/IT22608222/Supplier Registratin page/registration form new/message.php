<?php
    
//Include the database configuration file
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $TypesOfSupplies = $_POST["TypesOfSupplies"];
    $NameofBusinessorPerson =  $_POST["NameofBusinessorPerson"];
    $BusinessRegistratinorNICNo =  $_POST["BusinessRegistratinorNICNo"];
    $RegisteredAddress = $_POST["RegisteredAddress"];
    $ContactNumber = $_POST["ContactNumber"];
    $FaxNumber =  $_POST["FaxNumber"];
    $EmailAddress =  $_POST["EmailAddress"];
    $WebSite = $_POST["WebSite"];
    $VATRegistratinNumber = $_POST["VATRegistratinNumber"];
    $SVATRegistratinNumber =  $_POST["SVATRegistratinNumber"];
    $Bankrelatedtotransaction =  $_POST["Bankrelatedtotransaction"];
    $AccountNo = $_POST["AccountNo"];
    $DeliveryTerms = $_POST["DeliveryTerms"];

    // Insert user data into the database
    $sql = "INSERT INTO supplier(TypesOfSupplies,  NameofBusinessorPerson, BusinessRegistratinorNICNo, 
    RegisteredAddress, ContactNumber, FaxNumber, EmailAddress, WebSite,
    VATRegistratinNumber, SVATRegistratinNumber, Bankrelatedtotransaction ,AccountNo,
    DeliveryTerms) VALUES ('$TypesOfSupplies',
    '$NameofBusinessorPerson', '$BusinessRegistratinorNICNo', '$RegisteredAddress','$ContactNumber', 
    '$FaxNumber', '$EmailAddress', '$WebSite','$VATRegistratinNumber', '$SVATRegistratinNumber', '$Bankrelatedtotransaction',
    '$AccountNo', '$DeliveryTerms' )";
   
    if ($conn->query($sql)) {
		//use alert box
        echo '<script>alert("Submitted Successfully!!");</script>';
    } 
    else {
        echo "Error: <br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?> 