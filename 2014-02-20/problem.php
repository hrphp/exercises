<?php

class shapeFactory
{
	const OUTPUT = '#';
	const SPACE = ' ';

	public static function drawUpsideDownTriangle()
	{
		for($i=8; $i>0; $i--)
		{
			echo str_repeat(self::OUTPUT, $i) . PHP_EOL;
		}
	}

	public static function drawTriangle()
	{
		for($i=0; $i<8; $i++)
		{
			echo str_repeat(self::OUTPUT, $i) . PHP_EOL;
		}
	}

	public static function drawDiamond($i=2)
	{
		echo str_repeat( self::SPACE, (8 - $i)/2);
		echo str_repeat( self::OUTPUT, $i);
		echo str_repeat( self::SPACE, (8 - $i)/2) . PHP_EOL;
		if($i < 8){
			self::drawDiamond($i+=2);
			$i-=2;
		}
		echo str_repeat( self::SPACE, (8 - $i)/2);
		echo str_repeat( self::OUTPUT, $i);
		echo str_repeat( self::SPACE, (8 - $i)/2) . PHP_EOL;
	}

	public static function drawX($i=2)
	{
		self::_printX($i);
		if($i < 8){
			self::drawX($i+=2);
			$i-=2;
		}
		self::_printX($i);
	}

	private function _printX($i)
	{
		echo str_repeat( self::SPACE, $i/2 - 1);
		echo str_repeat( self::OUTPUT, $i/2);
		echo str_repeat( self::SPACE, (8-$i)*2);
		echo str_repeat( self::OUTPUT, $i/2) . PHP_EOL;
	}

}


shapeFactory::drawUpsideDownTriangle();
shapeFactory::drawTriangle();
shapeFactory::drawDiamond();
shapeFactory::drawX();