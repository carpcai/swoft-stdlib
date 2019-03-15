<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: stelin
 * Date: 2019-01-02
 * Time: 17:43
 */

namespace Swoft\Stdlib;

/**
 * Interface Jsonable
 */
interface Jsonable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson(int $options = 0): string;
}
