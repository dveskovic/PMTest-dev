<?php
namespace PMTest\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Frontend\Services;
use Plenty\Modules\System\Models;
use Plenty\Plugin\Http\Response;

use IO\Helper\TemplateContainer;
/**
 * Class ContentController
 * @package PMTest\Controllers
 */
class ExportController extends Controller
{

    /**
     * @var null|Response
     */
    private $response = null;

    public function __construct(
        Response $response)
    {
        $this->response = $response;
    }

    /**
     * @param Twig $twig
     * @param Models\WebstoreConfiguration $designConfig
     * @return string
     */
    public function export(Twig $twig, Models\WebstoreConfiguration $designConfig):string
    {

        $test = ['test' => 'test'];

        return $this->response->json(json_encode($test));
    }
}
