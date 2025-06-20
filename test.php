
<?php
	$upper_limit = 10;
	for($i=1; $i<$upper_limit; $i++)
	{
		if($i%2==0)
		{
			echo $i;
			echo " ";
		}
	}

	var_dump((string) 28.8);
	$real_number1 = 15.2589;
	$real_number2 = 14.2549;

	var_dump($real_number1);
	var_dump($real_number2);
	var_dump(sqrt(-1.0));
	var_dump(is_nan(sqrt(-1.0)));

	
?>