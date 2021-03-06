<?php


// Index Controller
// ----------------



declare(strict_types=1);


namespace Pith\Quickstart\QuickstartPagesModule;


class QuickstartIndexController extends \Pith\Framework\PithController implements \Pith\Framework\PithControllerInterface
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
        // Load Objects
        $this->inject->obj_one   = 'test one';
        $this->inject->obj_two   = 'test two';
        $this->inject->obj_three = 'test three';
    }

    public function action($app, $objects)
    {
        // Set Objects
        $obj_one   = $objects->obj_one;
        $obj_two   = $objects->obj_two;
        $obj_three = $objects->obj_three;


        // Action Variables
        $a = $obj_one;
        $b = $obj_two;
        $c = $obj_three;


        // Debug
        // echo $a;
        // echo $b;
        // echo $c;


        // Push to Preparer
        $this->prepare->a = $a;
        $this->prepare->b = $b;
        $this->prepare->c = $c;
    }

    public function preparer($app, $prepare)
    {
        $a = $prepare->a;
        $b = $prepare->b;
        $c = $prepare->c;

        $this->view->a = $a;
        $this->view->b = $b;
        $this->view->c = $c;
    }
}