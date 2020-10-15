<?php
/**
 * Part of the Radic packages.
 */
namespace Sunveloper\TeeplussSupport\Contracts;

/**
 * Dependable contract
 *
 * @package     Sunveloper\TeeplussSupport\Contracts
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
interface Validable
{
    /**
     * passes
     *
     * @return bool
     */
    public function passes();

    /**
     * errors
     *
     * @return \Illuminate\Support\MessageBag
     */
    public function errors();

    /**
     * with
     *
     * @param array $data
     * @return $this
     */
    public function with(array $data);
}
