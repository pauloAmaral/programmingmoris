<?php

namespace ProgrammingMoris\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \ProgrammingMoris\HomeBundle\Entity\Article;

class DefaultController extends Controller
{
    public function showAction($slug)
    {
        $parameters_array = array();
        
        
        $article_manager = $this->get('article_manager');
        
        $article = $article_manager->getArticleFromSlug($slug);
        
        $parameters_array['article'] = $article;
        
        $repository = $this->getDoctrine()
                    ->getRepository('ProgrammingMorisHomeBundle:Category');
        $cathegory_name = $article->getCategory()->getName();//$repository->findOneByCategoryId($article->getCategoryId())->getName();
        
        $parameters_array['cathegory'] = $article_manager->getTopicFromCathegory($cathegory_name);
        $parameters_array['cathegoryname'] = $cathegory_name;
        
        return $this->render('ProgrammingMorisArticleBundle:Default:show.html.twig', $parameters_array);
    }
}
