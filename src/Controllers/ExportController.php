<?php
namespace PMTest\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Frontend\Services;
use Plenty\Modules\System\Models;

use Plenty\Plugin\Http\Response;
use Plenty\Plugin\Http\Request;

/**
 * Class ContentController
 * @package PMTest\Controllers
 */
class ExportController extends Controller
{

    /**
     * @var null|Response
     */
    private $response;

    /**
     * @var null|Response
     */
    private $request;

    public function __construct(
        Response $response,
        Request $request)
    {
        $this->response = $response;
        $this->request = $request;
    }

    /**
     */
    public function export()
    {
        $test = ['test' => 'test'];

        return $this->response->json(json_encode($test));
    }
}
