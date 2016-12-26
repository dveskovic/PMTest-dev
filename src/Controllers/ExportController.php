<?php
namespace PMTest\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Frontend\Services;
use Plenty\Modules\System\Models;
use Symfony\Component\HttpFoundation\Response;

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
     * @return Response
     */
    public function export(Twig $twig, Models\WebstoreConfiguration $designConfig):Response
    {

        $test = ['test' => 'test'];

        return $this->response.json_encode($test);
    }
}
