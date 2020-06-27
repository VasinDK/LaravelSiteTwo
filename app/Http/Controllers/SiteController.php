<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Http\Requests;

class SiteController extends Controller
{
    /* 
    $p_rep - свойство для хранения объекта класса портфолио репозиторий. Для хранении логики для работы с портфолио
    $s_rep - слайдер репозиторий. В классе хронится логика по работе со слайдером
    $a_rep - Объект класса статей. Логика по работе со статьями блога
    $m_rep - Объект класса меню. Этот класс будет хрнанить люгику работы меню

    $template - имя шаблона для отображения информации на конкретной странице
    $vars - массив передаваемых переменных в шаблон
    $bar - показвает, что есть определенный сайтбар
    $contentRightBar - контент левого и правого сайтабара
    $contentLeftBar - контент левого и правого сайтабара
    */

    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;

    protected $template;
    protected $vars = Array();
    protected $contentRightBar = FALSE;
    protected $contentLeftBar = FALSE;
    protected $bar = FALSE;

    public function __construct(){

    }

    // возвращает вид для соответствующий темы и передает в нее переменные 
    protected function renderOutput(){


        return view($this->template)->with($this->vars);
    }
}
