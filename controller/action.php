<?php
/**
 * Created by PhpStorm.
 * User: liuciyin
 * Date: 2017/1/18
 * Time: 15:29
 */

require_once 'model/rzpx_md.php';
require_once 'config.php';
class Action{
    public $model;
    public $smarty;
    function __construct(){

        require_once 'libs/Smarty.class.php';
        $this->smarty= new Smarty();
        $this->smarty->setTemplateDir('templates/');
        $this->smarty->setCompileDir('templates_c/');
        $this->smarty->setConfigDir('configs/');
        $this->smarty->setCacheDir('cache/');
        $this->smarty->left_delimiter = '<{';
        $this->smarty->right_delimiter = '}>';
    }
}