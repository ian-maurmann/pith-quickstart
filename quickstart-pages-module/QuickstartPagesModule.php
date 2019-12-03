<?php
# ===================================================================
# Copyright (c) 2008-2019 Ian K Maurmann. The Pith Framework is
# provided under the terms of the Mozilla Public License, v. 2.0
#
# This Source Code Form is subject to the terms of the Mozilla Public
# License, v. 2.0. If a copy of the MPL was not distributed with this
# file, You can obtain one at http://mozilla.org/MPL/2.0/.
# ===================================================================

declare(strict_types=1);


// Example Module
// --------------------

namespace Pith\Quickstart\QuickstartPagesModule;

class QuickstartPagesModule implements \Pith\Framework\PithModuleInterface
{
    private $routes;


    function __construct()
    {
        $this->initRoutes();
    }


    public function whereAmI()
    {
        return "Example Module";
    }



    private function initRoutes()
    {
        $routes = [
            'index' => [
                'route-name' => 'index',
                'route-type' => 'page',
                'use-layout' => true,
                'controller' => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartIndexController',
                'view'       => 'views/home.phtml',
            ],

            '404' => [
                'route-name' => '404',
                'route-type' => 'error-page',
                'use-layout' => false,
                'controller' => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartErrorController',
                'view'       => 'views/404.phtml',
            ],

            '501' => [
                'route-name' => '501',
                'route-type' => 'error-page',
                'use-layout' => false,
                'controller' => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartErrorController',
                'view'       => 'views/501.phtml',
            ],

            'quickstart-layout' => [
                'route-name' => 'quickstart-layout',
                'route-type' => 'layout',
                'controller' => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartLayoutController',
                'view'       => 'layouts/quickstart-layout.phtml',
            ],

            'first-partial' => [
                'route-name' => 'first-partial',
                'route-type' => 'partial',
                'controller' => 'Pith\\Quickstart\\QuickstartPagesModule\\FirstPartialController',
                'view'       => 'partial-views/first-partial-view.phtml',
            ],

            'quickstart-banner-partial' => [
                'route-name' => 'quickstart-banner-partial',
                'route-type' => 'partial',
                'controller' => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartBannerController',
                'view'       => 'partial-views/quickstart-banner.phtml',
            ],

            'quickstart-footer-partial' => [
                'route-name' => 'quickstart-footer-partial',
                'route-type' => 'partial',
                'controller' => 'Pith\\Quickstart\\QuickstartPagesModule\\QuickstartFooterController',
                'view'       => 'partial-views/quickstart-footer.phtml',
            ],


        ];

        $this->routes = $routes;
    }




    public function findRoute($route_name)
    {
        $route_exists = isset($this->routes[$route_name]);
        $route        = ($route_exists) ? $this->routes[$route_name] : false ;

        return $route;
    }



    public function listRoutes()
    {
        return $this->routes;
    }

}