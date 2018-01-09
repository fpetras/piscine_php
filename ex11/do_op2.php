#!/usr/bin/php
<?php
if ($argc == 2)
{
	$argv[1] = str_replace(" ", "", $argv[1]);
	if (substr_count($argv[1], "+") == 1)
	{
		$syntax = str_replace("+", "", $argv[1]);
		if (is_numeric($syntax))
		{
			$array = explode("+", $argv[1]);
			$result = $array[0] + $array[1];
			echo "$result\n";
		}
		else
			echo "Syntax Error\n";
	}
	else if (substr_count($argv[1], "-") == 1)
	{
		$syntax = str_replace("-", "", $argv[1]);
		if (is_numeric($syntax))
		{
			$array = explode("-", $argv[1]);
			$result = $array[0] - $array[1];
			echo "$result\n";
		}
		else
			echo "Syntax Error\n";
	}
	else if (substr_count($argv[1], "*") == 1)
	{
		$syntax = str_replace("*", "", $argv[1]);
		if (is_numeric($syntax))
		{
			$array = explode("*", $argv[1]);
			$result = $array[0] * $array[1];
			echo "$result\n";
		}
		else
			echo "Syntax Error\n";
	}
	else if (substr_count($argv[1], "/") == 1)
	{
		$syntax = str_replace("/", "", $argv[1]);
		if (is_numeric($syntax))
		{
			$array = explode("/", $argv[1]);
			if ($array[1] == '0')
				echo "Syntax Error\n";
			else
			{
				$result = $array[0] / $array[1];
				echo "$result\n";
			}
		}
		else
			echo "Syntax Error\n";
	}
	else if (substr_count($argv[1], "%") == 1)
	{
		$syntax = str_replace("%", "", $argv[1]);
		if (is_numeric($syntax))
		{
			$array = explode("%", $argv[1]);
			if ($array[1] == '0')
				echo "Syntax Error\n";
			else
			{
				$result = $array[0] % $array[1];
				echo "$result\n";
			}
		}
		else
			echo "Syntax Error\n";
	}
	else
		echo "Syntax Error\n";
}
else
	echo "Incorrect Parameters\n";
?>
