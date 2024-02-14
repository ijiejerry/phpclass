<?php
$title = "form validations Examples";
include 'header.php';
?>





<script>
    // function to validate name
    function validateName() {
        const name= document.getElementById("name").value;
        const nameError =document.getElementById("nameError");

        if (name.length < 3 arguments)

    }

    // function to validate email
    function validateEmail() {
        const email= document.getElementById("email").value;

    }

    // function to validate passwod
    function validatePassword() {
        const password= document.getElementById("password").value;

    }

    // function to validate Age
    function validateAge() {
        const age= document.getElementById("age").value;

    }

    // event listeners for real time validation
    document.getElementById("name").addEventListener("input", validateName);
    document.getElementById("email").addEventListener("input", validateEmail);
    document.getElementById("password").addEventListener("input", validatePassword);
    </script>
