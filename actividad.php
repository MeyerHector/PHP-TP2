<?php
$userInput = "GENERICO";
$passInput = "1234";

function cashier($userInput, $passInput, $operation){
    echo "Welcome to the ATM";
    echo "<br>";
    echo "Please enter your user";
    echo "<br>";
    echo "...";
    echo "<br>";
    echo "Please enter your password";
    echo "<br>";
    echo "...";
    echo "<br>";
    $user = "GENERICO";
    $pass = "1234";
    $balance = 1000;

    if(($userInput !== $user) || ($passInput !== $pass)){
         echo "Password or user incorrect";
         return;
    };
    echo "Please select the operation you want to do";
    echo "<br>";
    echo "1. Deposit";
    echo "<br>";
    echo "2. Withdraw";
    echo "<br>";
    echo "processing...";
    echo "<br>";
    if($operation === "deposit"){
        $balance += 500;
    }else if($operation === "withdraw"){
        $balance -= 500;
    }else{
        echo "Invalid operation";
        return;
    };
    echo "Your balance is: $balance";

};

echo "DEPOSITO:";
echo "<br>";
cashier($userInput, $passInput, "deposit");

echo "<br>";
echo "==================================";
echo "<br>";

echo "RETIRO:";
echo "<br>";
cashier($userInput, $passInput, "withdraw");

echo "<br>";
echo "==================================";
echo "<br>";

echo "OTRO: (Invalid operation)";
echo "<br>";
cashier($userInput, $passInput, "other");

echo "<br>";
echo "==================================";
echo "<br>";

echo "USUARIO INCORRECTO:";
echo "<br>";
cashier("aaa", "1234", "deposit");
?>