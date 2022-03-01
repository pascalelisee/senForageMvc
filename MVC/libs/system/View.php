<?php
namespace libs\system;

class View
{
    public function __construct()
    {

    }
    public function load()
    {
        $num = func_num_args();
        $args = func_get_args();

        switch ($num) {
            case 1:
                $file = "src/view/".$args[0].".php"; 
                
                if(file_exists($file))
                {
                   
                    require_once $file;
                }else {
                    die($file."n'existe pas comme vue");
                }
                break;
            case 2:
                $file = "src/view/".$args[0].".php"; 
                if(file_exists($file))
                {
                    $data = $args[1];
                    require_once $file;
                }else {
                    die($file."n'existe pas comme vue");
                }
                break; 
                   
        }
    }
}
?>