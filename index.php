<?php

class Form {
    private $method;
    private $action;

    function __construct($method, $action)
    {
        $this->method = $method;
        $this->action = $action;
    }

    function generateLabel($for, $name)
    {
        echo "<label for='$for'>$name</label><br>";
    }

    function generateInput($type, $name)
    {
        echo "<input type='$type' name='$name' required><br><br>";
    }

    function generateButton($text)
    {
        echo "<button type='submit'>$text</button>";
    }

    function setMethod($method) 
    {
        $this->method = $method;
    }

    function getMethod()
    {
        return $this->method;
    }

    function setAction($action) 
    {
        $this->action = $action;
    }

    function getAction()
    {
        return $this->action;
    }

    function generateForm() 
    {
        $myForm = new Form("POST", "");
        echo "<form action='$this->action' method='$this->method'>";
        $myForm->generateLabel("name", "Nome:");
        $myForm->generateInput("text", "name");
        $myForm->generateButton("Invia");
        echo "</form>";
    }
}

    $name = $_POST['name'] ?? '';

    if(isset($_POST['name'])) {
        echo "Il tuo nome è $name";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP I</title>
</head>
<body>

    <?php
        $myForm = new Form("POST", "");
        $myForm->generateForm();
    ?>
    
</body>
</html>