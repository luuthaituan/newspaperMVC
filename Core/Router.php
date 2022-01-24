<?php

class Router{

    protected $routes = []; //khai ra 1 mảng, nói ra sẽ như 1 cái bảng, chứa các route, controller, ction
    //Thêm route vào bảng để khi người dùng vào index, nhập query string sẽ biết trỏ tới controller vs action nào
    protected $params = []; //các tham số từ route được match, tức là khi ng dùng gõ ra url, nó sẽ trỏ tới params nào


    public function add($route, $params) {
        $this->routes[$route] = $params;
        //$route la đường dẫn, query string
        //$params là controller, action...
    }
    //lấy ra các routes

    public function getRoutes(){
        return $this->routes;
    }

    //cần 1 hàm match, match cái đường dẫn trên thanh địa chỉ, so với routing table để xem có params nào khớp ko
    public function match($url){
        foreach ($this->routes as $route=>$params){
            if($url == $route) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function getParams(){
        return $this->params;
    }
}