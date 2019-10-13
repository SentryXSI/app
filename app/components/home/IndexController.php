<?php
declare(strict_types=1);

namespace App\Components\Home;

use NinjaSentry\Rei\{
    Http,
    Kernel\BaseController
};

/**-----------------------------------------------------------------------------
 *
 * Class IndexController
 *
 * -----------------------------------------------------------------------------
 *
 * @package App\Components\Home
 */
final class IndexController extends BaseController
{
    /**-------------------------------------------------------------------------
     *
     * IndexController constructor.
     *
     * -------------------------------------------------------------------------
     *
     * @param \NinjaSentry\Rei\Http\Response $response
     */
    public function __construct( Http\Response $response ){
        parent::__construct( $response );
    }

    /**-------------------------------------------------------------------------
     *
     * Get Index
     *
     * -------------------------------------------------------------------------
     *
     * @return mixed|void
     * @throws \Exception
     */
    public function getIndex(){
        $this->getHtmlDocument();
    }
}