<?hh //strict

      namespace HelloWorld\Controllers;


      use Plenty\Plugin\Controller;
      use Plenty\Plugin\Templates\Twig;
      use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
      use Plenty\Plugin\Http\Request;

      class ContentController extends Controller
      {
    	    public function sayHello(
                Twig $twig,
                LibraryCallContract $libCall,
                Request $request
            ):mixed
    	    {
                $packagistResult =
                    $libCall->call(
                        'HelloWorld::guzzle_connector',
                        ['packagist_query' => $request->get('search')]
                    );

                return $packagistResult;
    	    }
      }
