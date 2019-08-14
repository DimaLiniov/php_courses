<?php

class MainController extends AbstractController {

    protected $title;
    protected $meta_desc;
    protected $meta_keywords;
    
    public function __construct() {
        parent::__construct(new View(DIR_TMPL));
    }
    
    public function action404() {
        parent::action404();
        $this->title = 'Страница не найдена - 404';
        $this->meta_desc = 'Запрошенная страница не существует.';
        $this->meta_keywords = 'страница не найдена, страница не существует, 404';
        
        $content = $this->view->render('404', [], true);
        $this->render($content);
    }
    
    public function actionIndex() {
        $this->title = 'Главная страница';
        $this->meta_desc = 'Описание главной страницы';
        $this->meta_keywords = 'описание, главная страниц';
        
        $content = $this->view->render('index', [], true);
        $this->render($content);
    }
    
    public function actionPage() {
        $this->title = 'Внутренняя страница';
        $this->meta_desc = 'Описание внутренней страницы';
        $this->meta_keywords = 'описание, внутренняя страниц';
        $email = 'abc@mail.ru'; // Допустим, получено из базы с помощью Model
        $content = $this->view->render('page', ['email' => $email], true);
        $this->render($content);
    }
    
    protected function render($content) {
        $params = [];
        $params['title'] = $this->title;
        $params['meta_desc'] = $this->meta_desc;
        $params['meta_keywords'] = $this->meta_keywords;
        $params['content'] = $content;
        $this->view->render(MAIN_LAYOUT, $params);
    }
}

?>