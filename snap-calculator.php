<?php
/**
 * Created by PhpStorm.
 * User: petersdata
 * @author Peter Street <PeterBStreet@gmail.com
 * Date: 1/29/18
 * Time: 8:10 AM
 */

         function addFunction($num1, $num2) {
				$sum = $num1 + $num2;
				echo "Sum of the two numbers is : $sum";
			}

         addFunction(20, 10);

         function subtractFunction($num1, $num2) {
         	$difference = $num1 - $num2;
         	echo "Difference of  the two numbers is : $difference";
			}

			subtractFunction(20, 10);

         function multiplyFunction($num1, $num2) {
         	$multiply = $num1 * $num2;
         	echo "The product of multiplying the two numbers is : $multiply";
			}

			multiplyFunction(20, 10);

         function divideFunction($num1, $num2) {
         	$divide = $num1 / $num2;
         	echo "The product of dividing the two numbers is : $divide";
			}

			divideFunction(20, 10);

/**
 * Created by PhpStorm.
 * User: petersdata
 * @author Dylan McDonald
 * Date: 1/29/18
 * Time: 8:10 AM
 */
function add(float $first, float $second) : float {
	return($first + $second);
}
function divide(float $numerator, float $denominator) : float {
	return($numerator + $denominator);
}
function multiply(float $first, float $second) : float {
	return($first * $second);
}

function subtract(float $first, float $second) : float {
	return($first - $second);
}

function main(float $first, float $second) : void {
	echo "addition : " . add($first, $second) . PHP_EOL;
	echo "division : " . divide($first, $second) . PHP_EOL;
	echo "multiplication : " . multiply($first, $second) . PHP_EOL;
	echo "Subtraction : " . subtract($first, $second) . PHP_EOL;
}

main(20,10);
echo "------------" . PHP_EOL;
