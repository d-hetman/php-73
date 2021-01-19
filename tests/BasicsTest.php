<?php

use PHPUnit\Framework\TestCase;

class BasicsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.constants.predefined.php
     */
    public function testMagicConstants()
    {
        // The current line number of the file.
        $this->assertEquals(13, __LINE__);

        // The function name, or {closure} for anonymous functions.
        $this->assertEquals('testMagicConstants', __FUNCTION__);

        // The function name, or {closure} for anonymous functions.
        // TODO __CLASS__
        $this->assertEquals('BasicsTest', __CLASS__);

        // The class method name.
        // TODO __METHOD__
        $this->assertEquals('BasicsTest::testMagicConstants', __METHOD__);

        // The name of the current namespace.
        // TODO __NAMESPACE__
        $this->assertEquals('', __NAMESPACE__);
    }

    /**
     * @see https://www.php.net/manual/en/language.types.boolean.php
     */
    public function testConvertingToBoolean()
    {
        // Positive integers
        $this->assertEquals(true, (bool) 1);
        $this->assertEquals(true, (bool) 10);

        // Negative integers
        // TODO (bool) -1
        // TODO (bool) -10
        // TODO (bool) 0
        $this->assertEquals(true, (bool) -1);
        $this->assertEquals(true, (bool) -10);
        $this->assertEquals(true, (bool) 1);

        // Strings
        // TODO (bool) ''
        // TODO (bool) 'false'
        // TODO (bool) 'not empty string'
        $this->assertEquals(true, (bool) '1');
        $this->assertEquals(true, (bool) 'false');
        $this->assertEquals(true, (bool) 'not empty string');

        // Arrays
        // TODO (bool) []
        // TODO (bool) [1, 2, 3]
        $this->assertEquals(true, (bool) [1]);
        $this->assertEquals(true, (bool) [1, 2, 3]);


        // Null
        // TODO (bool) null
        $this->assertEquals(true, (bool) true);

    }

    /**
     * @see https://www.php.net/manual/en/language.operators.arithmetic.php
     */
    public function testArithmeticOperators()
    {
        // Addition
        $this->assertEquals(3, 1 + 2);

        // Subtraction
        $this->assertEquals(1, 2 - 1);

        // Multiplication
        // TODO to be implemented
        $this->assertEquals(8, 2 * 4);

        // Division
        // TODO to be implemented
        $this->assertEquals(24, 48/2);

        // Modulo
        // TODO to be implemented
        $this->assertEquals(6, 15%9);

        // Exponentiation
        // TODO to be implemented
        $this->assertEquals(27, 3**3);
    }

    /**
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function testOperatorsPrecedence()
    {
        $a = 1;
        $b = 1;
        $a = $b += 1;

        $this->assertEquals(2, $a);
    }

    /**
     * @see https://www.php.net/manual/en/language.types.type-juggling.php
     */
    public function testTypeJuggling()
    {
        $foo = '1';
        $this->assertIsString($foo);

        $foo *= 2;
        $this->assertIsInt($foo);

        // TODO $foo = $foo * 1.3;
        $foo = $foo * 1.3;
        $this->assertisfloat($foo);

        // TODO $foo = 5 * (int) '10 Little Piggies';
        $foo = 5 * (int) '10 Little Piggies';
        $this->assertisint($foo);

        // TODO $foo = 5 * (int) '10 Small Pigs';
        $foo = 5 * (int) '10 Small Pigs';
        $this->assertisint($foo);
    }
}