<?php
declare(strict_types=1);

namespace App\Kernel;

/**-----------------------------------------------------------------------------
 *
 * Class Bootstrap
 *
 * -----------------------------------------------------------------------------
 *
 * @package App\Kernel
 */
class Bootstrap
{
    /**
     * Bootstrap constructor.
     */
    public function __construct() {
        echo 'Bootstrapping';
    }

    /**
     *
     */
    public function prepare()
    {

    }
}
