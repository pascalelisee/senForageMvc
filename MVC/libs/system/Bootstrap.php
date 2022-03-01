<?php
namespace libs\system;

class Bootstrap
{
    public function __construct()
    {

        if(isset($_GET["url"]))
        {
            $url =explode("/", $_GET["url"]);
            $controller_file = "src/controller/".$url[0]."Controller.php";
            if(file_exists($controller_file))
            {
                require_once $controller_file;
                $file = $url[0]."Controller";
                $controller_object = new $file();
                if(isset($url[2]))
                {
                    $method = $url[1];
                    if(method_exists($controller_object,$method))
                    {
                        $controller_object->$method($url[2]);
                    }
                    else {
                        die($method." n'existe pas dans le controller".$file);
                    }
                }
                else if(isset($url[1]))
                {
                    $method = $url[1];
                    if(method_exists($controller_object,$method))
                    {
                        $controller_object->$method();
                    }
                    else {
                        die($method." n'existe pas dans le controller".$file);
                    }

                }

            }else {
                die($controller_file."nexiste pas");
            }
        }else {
            echo "MVC";
        }
    }
}
?>