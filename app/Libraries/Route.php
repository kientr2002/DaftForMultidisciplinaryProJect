<?php

namespace App\Libraries;

class Route
{

    //Thuộc tính property
    public function __construct($page = 'site')
    {
        switch ($page) {
            case 'site': {
                    $this->route_site();
                    break;
                }
            case 'admin': {
                    $this->route_admin();
                    break;
                }
        }
    }

    // tùy biến trang người dùng
    function route_site()
    {
        $pathView = 'views/frontend/';
        if (isset($_REQUEST['option'])) {
            $pathView .= $_REQUEST['option'];
            if (isset($_REQUEST['id'])) {
                require_once($pathView . '-detail.php');
            } else {
                if (isset($_REQUEST['cat'])) {
                    require_once($pathView . '-category.php');
                } else {
                    require_once($pathView);
                    //echo "..." . $_REQUEST['option'];
                }
            }
        } else {
            $pathView .= 'login.php';
        }
        //Gọi ở đây
        require_once($pathView);
    }

    // Tuy bien url cho trang quan tri
    function route_admin()
    {   
        $pathView = '../views/backend/';
        if (isset($_REQUEST['option'])) {
            $pathView .= $_REQUEST['option'] . '/';
            if(isset($_REQUEST['cat'])){
                $pathView .= $_REQUEST['cat'] . ".php";
            }else{
                $pathView .= "index.php";
            }
        }  else{
            $pathView .= "dashboard/index.php";
        }
        require_once($pathView);
    }
}
