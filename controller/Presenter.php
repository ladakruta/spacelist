<?php
class Presenter {
    protected $template;
    protected $templateDir = 'templates/';
    protected $templatePath;
    
    public function __construct(){
        $this->templatePath = $this->templateDir.get_class($this).'.tpl';
    }
    
    public function showItem($data){
        $tplString = file_get_contents($this->templatePath);
        foreach($data as $key => $val){
            $tplString = str_ireplace('{'.$key.'}', $val, $tplString);
        }
        return $tplString;
    }
    public function showList($data){
        $listString = '';
        foreach($data as $val){
            $listString .= $this->showItem($val);
        }
        return $listString;
    }
    
}
