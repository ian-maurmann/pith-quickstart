<?php


declare(strict_types=1);


namespace Pith\Quickstart;


class QuickstartRouteList
{
    private $routes;



    function __construct()
    {
        $this->createRoutes();
    }




    private function createRoutes()
    {
        $routes = [


            [
                'match'      => '/',
                'type'       => 'page',
                'module'     => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartPagesModule',
                'route-name' => 'index',
                'layout'     => '/layout/quickstart',
            ],

            [
                'match'      => '/404',
                'type'       => 'page',
                'module'     => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartPagesModule',
                'route-name' => '404',
                'layout'     => '',
            ],

            [
                'match'      => '/501',
                'type'       => 'page',
                'module'     => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartPagesModule',
                'route-name' => '501',
                'layout'     => '',
            ],

            [
                'match'      => '/layout/quickstart',
                'type'       => 'layout',
                'module'     => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartPagesModule',
                'route-name' => 'quickstart-layout',
            ],

            [
                'match'      => '/partial/first',
                'type'       => 'partial',
                'module'     => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartPagesModule',
                'route-name' => 'first-partial',
            ],

            [
                'match'      => '/partial/quickstart-banner',
                'type'       => 'partial',
                'module'     => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartPagesModule',
                'route-name' => 'quickstart-banner-partial',
            ],

            [
                'match'      => '/partial/quickstart-footer',
                'type'       => 'partial',
                'module'     => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartPagesModule',
                'route-name' => 'quickstart-footer-partial',
            ],



        ];

        $this->routes = $routes;
    }



    public function getRouteList(){
        return $this->routes;
    }



    public function whereAmI()
    {
        return 'Example Route List';
    }
}