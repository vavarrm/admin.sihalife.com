<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mysmarty
{
	private $CI;
	private $randseedload;
    public function __construct()
    {
		require_once(APPPATH."third_party/smarty/libs/Smarty.class.php");
		$this->CI = & get_instance();
		$this->randseed = time().rand(1,9999);
		$this->smarty = new Smarty;
		$this->smarty->caching = false;
		$this->smarty->setTemplateDir(BASEPATH.'../application/views/');
		$this->smarty->setCompileDir(BASEPATH.'../application/views/templates_c');
		$this->smarty->left_delimiter ="<{";
		$this->smarty->right_delimiter = "}>";
		$template_dir = $this->smarty->getTemplateDir();
		return $this->smarty;
    }
	
	public function display($tpl)
	{

		$language_ary = $this->CI->language->load('main');
		$config['food_url'] = $this->CI->config->item('food_url');
		$this->assign(array(
			'language'	=>$language_ary,
			'randseed'	=>$this->randseed,
			'config'	=>$config
		));
		$this->smarty->clearAllCache();
		$this->smarty->display($tpl);
	}
	
	public function displayFrame($tpl)
	{
		$this->assign(array(
			'content'	=>$tpl,
			'randseed'	=>$this->randseed,
		));
		$this->smarty->display('Frontend/frame.tpl');
	}
	
	public function assign($var)
	{
		$this->smarty->assign($var);
	}
	public function fetch($tpl)
	{
		return $this->smarty->fetch($tpl);
	}
}