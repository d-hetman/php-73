<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"
        $this->assertEquals('Hello world', "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals('Hello world', "Hello " . $foo);

        // TODO Heredoc
        $this->assertEquals('Hello $foo', <<< 'EOD'
        Hello $foo
        EOD
        );

        // TODO Nowdoc
        $this->assertEquals('Hello world', <<< EOD
        Hello $foo
        EOD
        );
    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented
        $this->assertEquals('Hello...', ltrim('...Hello...', '.'));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals('...Hello', rtrim('...Hello...', '.'));

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('Hello', ucfirst('hello'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('hELLO', lcfirst('HELLO'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('Hello, my name is Denys', strip_tags('<h1>Hello, my <small>name</small> is Denys</h1>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals('&amp; &lt; &gt;', htmlspecialchars("& < >"));

        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals("Is your name O\'Reilly?", addslashes("Is your name O'Reilly?"));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals("2", strcmp("12345678", "123456"));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals("0", strncasecmp("hello world", "hello world", 5));

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals("Bonjor world", str_replace("Hello", "Bonjor", "Hello world"));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented

        // strstr — Find the first occurrence of a string
        // TODO to be implemented

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented

        // substr — Return part of a string
        // TODO to be implemented

        // sprintf — Return a formatted string
        // TODO to be implemented
    }
}