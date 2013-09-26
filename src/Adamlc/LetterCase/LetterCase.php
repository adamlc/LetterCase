<?php namespace Adamlc\LetterCase;

/**
 * LetterCase class
 *
 * @category String
 * @package  LetterCase
 * @author   Shin Kojima <shin@kojima.org>
 * @license  MIT License
 * @link     http://github.com/ernix/
 */

class LetterCase
{
    private $parts = [];

    /**
     * constructor
     *
     * @param string $str Input string.
     */
    public function __construct($str)
    {
        if (!is_string($str)) {
            throw new LetterCaseException("parameter must be a string.");
        }

        return $this->parse($str);
    }

    /**
     * Parse input string.
     *
     * @param string $str Input string.
     *
     * @return LetterCase object
     */
    private function parse($str)
    {
        $str = trim($str);

        // path form
        if (strpos($str, '/') !== false) {
            $this->parts = preg_split('/\//', $str);

            return $this;
        }

        // snake case
        if (strpos($str, '_') !== false) {
            $this->parts = preg_split('/_/', $str);

            return $this;
        }

        // camel/pascal case
        $this->parts = preg_split('/(?<=.)(?=[A-Z]([^A-Z]|$))/', $str);

        return $this;
    }

    /**
     * Return pascal case
     *
     * @return string PascalCase
     */
    public function pascal()
    {
        $parts = array_map(
            function ($part) {
                return ucfirst($part);
            },
            $this->parts
        );

        return join('', $parts);
    }

    /**
     * Return snake case
     *
     * @return string snake_case
     */
    public function snake()
    {
        $parts = array_map(
            function ($part) {
                return strtolower($part);
            },
            $this->parts
        );

        return join('_', $parts);
    }

    /**
     * Return camel case
     *
     * @return string camelCase
     */
    public function camel()
    {
        $first_part = array_shift($this->parts);

        return strtolower($first_part) . $this->pascal();
    }

    /**
     * Return path form
     *
     * @return string Path/Form
     */
    public function path()
    {
        return join('/', $this->parts);
    }
}
