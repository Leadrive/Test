<?php namespace Leadrive\Test\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Demos extends Controller
{
    public $implement = ['Backend\Behaviors\ListController'];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Leadrive.Test', 'main-menu-item');
    }
}