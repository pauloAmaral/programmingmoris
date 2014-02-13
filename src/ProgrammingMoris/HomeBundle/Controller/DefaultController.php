<?php

namespace ProgrammingMoris\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager as Container;
use FOS\UserBundle\Model\UserManagerInterface;

use \ProgrammingMoris\HomeBundle\Entity\Article;
use \ProgrammingMoris\HomeBundle\Entity\FeaturedContent;

use \Doctrine\Common\Collections\ArrayCollection;

class DefaultController extends Controller
{
    const MAX_LATEST_ARTICLES = 10;
    const MAX_LATEST_ARTICLES_BY_CATHEGORY = 10;
    const MAX_LATEST_ARTICLES_BY_TAG = 10;
    
    public function indexAction()
    {
        $name = 'a';
//        $userManager = $this->get('fos_user.user_manager');
//        $user = $userManager->createUser();
//        $user->setUsername('John2');
//$user->setEmail('john.doae@example.com');
//$user->setPassword('123456');
//
//$userManager->updateUser($user);
//
//        $this->getDoctrine()->getEntityManager()->flush();
//        $latest_articles = Article::getLatestArticles(self::MAX_LATEST_ARTICLES);
//        var_dump($latest_articles);die();

        $article_manager = $this->get('article_manager');
//        var_dump($article_manager->getLatestArticles());die();
        $latest_articles = $article_manager->getLatestArticles(self::MAX_LATEST_ARTICLES);
        
        $featured_content = array(
            'article' => $article_manager->getFeaturedArticle(),            
        );
        return $this->render('ProgrammingMorisHomeBundle:Default:index.html.twig', array('name' => 'exemplo', 'latest_articles'=>$latest_articles, 'featured_content'=>$featured_content));
    }
    
    public function articleListByCathegoryAction($cathegory){
        $article_manager = $this->get('article_manager');
        $article_list = $article_manager->getArticlesByCathegory(self::MAX_LATEST_ARTICLES_BY_CATHEGORY,$cathegory);
        return $this->render('ProgrammingMorisHomeBundle:Default:articlelist.html.twig', array('articles' => $article_list,'type'=>'cathegory','identifier'=>$cathegory,'cathegoryname'=>$cathegory,'cathegory'=>$article_manager->getTopicFromCathegory($cathegory)));
    }
    
    public function articleListByTagAction($tag){
        $article_manager = $this->get('article_manager');
        $article_list = $article_manager->getArticlesByTag(self::MAX_LATEST_ARTICLES_BY_TAG,$tag);
  
        return $this->render('ProgrammingMorisHomeBundle:Default:articlelist.html.twig', array('articles' => $article_list,'type'=>'tag','identifier'=>$tag));
    }
}
