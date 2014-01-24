<!DOCTYPE html>
<html>
	<head>
		<title>James' Change Maker</title>
	</head>
    <body>
        <?php
        echo"Here is a simple program to tell you what coins to use to make change! <br>" ;
        ?>
        <form action="changemaker.php">
            Enter how many cents worth of change you have.
            <input type="text" name="changetomake" size="7" /><br />
            <input type="submit" value="Find out what coins you should use to make change!" />
        </form>
    </body>
</html>
