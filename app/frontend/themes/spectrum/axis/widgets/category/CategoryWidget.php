<?php
namespace oknetsun\axis\widgets\category;

use yii\base\Widget;
use yii\helpers\Html;
use oknetsun\axis\models\Articles;
use oknetsun\axis\models\Categories;



class CategoryWidget extends Widget
{
    public $module_name = 'axis';

    public $cat_id = 0;

    public $template = 'all'; 

    public $cat_name = 'Огляд';

    public $articles;

    public $categories;

    public $error_code;


    public function init()
    {
        parent::init();

        $this->error_code = 0;

        // Проверка наличия в базе категории с заданим id 
        $this->categories = Categories::find()->where(['id' => $this->cat_id])->one();
        
        if(!$this->categories)
        { 
            if(!$this->cat_id){ 
                //Виборка всех статей сортю по дате в одратном порядке    
                $this->articles = Articles::find()->orderBy(['date' => SORT_DESC])->all();
                //.. проверка успешности операции
                if(!$this->articles){$this->error_code = 2;}                
            }
            else
            {
                $this->error_code = 1;
            }    
        }
        else
        {   
            //Запись названия категории
            $this->cat_name = Html::encode($this->categories->title); 
            //Виборка всех статей категории сорт. по дате в одратном порядке     
            $this->articles = Articles::find()->where(['cat' => $this->cat_id])->orderBy(['date' => SORT_DESC])->all();
            //.. проверка успешности операции
            if(!$this->articles){$this->error_code = 2;}

        }    


    }

   

    public function run()
    {
       if(!$this->error_code) 
       {
            return $this->render($this->template ,['dataArticles' => $this->articles, 'cat_name' => $this->cat_name, 'module_name' => $this->module_name, ]);
       }
       else 
       {
        return $this->render('error',['error' => $this->error_code ]);
       } 
    }



}