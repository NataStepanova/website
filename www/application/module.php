<?php


class Module {

    public function load_all_modules()
    {
        $this->includeFunc(glob("application/core/*.php"));
      //  $this->includeFunc(glob("application/modules/autorization/*.php"));
        $this->includeFunc(glob("application/modules/*/controller/*.php"));
        $this->includeFunc(glob("application/modules/*/views/*.php"));
        $this->includeFunc(glob("application/modules/*/routes.php"));
       /* $test = Connection::getInstance();
        $t =  $test->getConnection();
        print_r($t);*/
    }
    private function includeFunc($pattern){
        if(!is_array($pattern))
        {
            throw new Exception("It's not array!");
        }
        foreach ($pattern as $filename) {
            include_once $filename;
        }
    }

}
