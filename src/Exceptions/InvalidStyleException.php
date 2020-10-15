<?php
 /**
 * Part of the Radic packages.
 */
namespace Sunveloper\TeeplussSupport\Exceptions;
/**
 * Class InvalidStyleException
 *
 * @package     Sunveloper\TeeplussSupport\Exceptions
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class InvalidStyleException extends \Exception
{
    public function __construct($styleName)
    {
        parent::__construct("Invalid style $styleName.");
    }
}
