<?php


// Quickstart Banner Controller
// ----------------------------


declare(strict_types=1);


namespace Pith\Quickstart\QuickstartPagesModule;


class QuickstartBannerController extends \Pith\Framework\PithController implements \Pith\Framework\PithControllerInterface
{
    function __construct(\Pith\PhtmlViewAdapter\PithPhtmlViewAdapter $view_adapter)
    {
        $this->view_adapter = $view_adapter;

        parent::__construct();
    }

    public function access()
    {
        $this->access_level = 'world';
    }

    public function injector($app)
    {
        // Do nothing for now
    }

    public function action($app, $objects)
    {
        // Do nothing for now
    }

    public function preparer($app, $prepare)
    {
        // Do nothing for now
    }
}