<?php

class testsCli extends PHPUnit_Framework_TestCase {

	function test_string_length() {
		$this->assertEquals( \cli\Colors::length( 'x' ), 1 );
	}

	function test_encoded_string_length() {

		$this->assertEquals( \cli\Colors::length( 'hello' ), 5 );
		$this->assertEquals( \cli\Colors::length( 'óra' ), 3 );

		$this->assertEquals( \cli\safe_strlen( \cli\Colors::pad( 'hello', 6 ) ), 6 );
		$this->assertEquals( \cli\safe_strlen( \cli\Colors::pad( 'óra', 6 ) ), 6 );

	}

	function test_colorized_string_length() {
		$this->assertEquals( \cli\Colors::length( \cli\Colors::colorize( '%Gx%n', true ) ), 1 );
	}

}