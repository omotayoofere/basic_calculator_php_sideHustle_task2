<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>

<form>
    <input type="text" name="num1" placeholder="Number 1"> <br>

    <p>
    <input type="text" name="num2" placeholder="Number 2">
    </p>
    
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>

    <button type="submit" name="submit" value="submit">Calculate</button>

</form>

<p>The answer is: </p>

<?php 

    if (isset($_GET['submit'])) {
        # code...
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch ($operator) {
            case "None":
                # code...
                echo "You need to select an operation to perform";
            break;
            case "Add":
                # code...
                echo $result1 + $result2;
            break;
            case "Subtract":
                # code...
                echo $result1 - $result2;
            break;
            case "Multiply":
                # code...
                echo $result1 * $result2;
            break;
            case "Divide":
                # code...
                echo $result1 / $result2;
            break;
          
        }
    }
?>

</body>
</html>

