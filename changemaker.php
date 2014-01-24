<html>
	<head>
		<title>James' Change Calculator</title>
	</head>
    <body>
        <?php
            echo"Now lets find out what coins you want! <br>" ;
            $change= $_GET["changetomake"];
            $quarters=0;
            $dimes=0;
            $nickles=0;
            $pennies=0;
            while($change>=25)
            {
                $change=$change-25;
                $quarters++;
            }
            while($change>=10)
            {
                $change=$change-10;
                $dimes++;
            }
            while($change>=5)
            {
                $change=$change-5;
                $nickles++;
            }
            while($change>=1)
            {
                $change=$change-1;
                $pennies++;
            }
            echo "Your change is made up of " . " " . $quarters ." quarter(s), " . $dimes . " dime(s), " . $nickles . " nickle(s), and " . $pennies . " pennie(s)."; 
        ?>
      </body>
</html>   
