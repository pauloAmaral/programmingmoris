<?php

namespace ProgrammingMoris\HomeBundle\Managers;

use Doctrine\ORM\EntityManager;

class ArticleManager{
    protected $em;

    private $cathegories = array(
        'programming' => array('Web','Java','Python'),
        'other' => array('Short Stories','Movies','Music','Photography')
    );
    
    public function __construct(EntityManager $entityManager){
        $this->em = $entityManager;
    }
    
    public function getEntityManager(){
        return $this->em;
    }
    
    public function getLatestArticles($max_articles=3){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM ProgrammingMorisHomeBundle:Article p ORDER BY p.created_at DESC'
            )
            ->setMaxResults($max_articles)    
            ->getResult();
    }
    
    public function getArticlesByCathegory($max_articles=3,$cathegory){
        $entity_manager = $this->getEntityManager();
            
        $cathegory_id = $entity_manager->createQuery(
                'SELECT c FROM ProgrammingMorisHomeBundle:Category c WHERE c.name LIKE :name'
                )
                ->setParameter('name', $cathegory)
                ->getOneOrNullResult();
        if(is_null($cathegory_id)){
            return null;
        }else{
            $cathegory_id = $cathegory_id->getId();
        }
                
        return  $entity_manager
                ->getRepository('ProgrammingMorisHomeBundle:Article')
                ->findByCategory($cathegory_id);
    }
    
    public function getArticlesByTag($max_articles=3,$tag){
        $entity_manager = $this->getEntityManager();
            
        return $entity_manager->createQuery(
                'SELECT t FROM ProgrammingMorisHomeBundle:Tag t WHERE t.name LIKE :name'
                )
                ->setParameter('name', $tag)
                ->getSingleResult()
                ->getArticles();

//        if(is_null($tag_id)){
//            return null;
//        }else{
//            $tag_id = $tag_id->getId();
//        }
//                
//        return  $entity_manager
//                ->getRepository('ProgrammingMorisHomeBundle:Tag')
//                ->getArticles();
    }
    
    public function getArticleFromSlug($slug){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM ProgrammingMorisHomeBundle:Article p WHERE p.slug LIKE :slug'
            )
            ->setParameter('slug', $slug)
            ->getSingleResult();   
        
    }
    
    public function getFeaturedArticle(){
        $article_id = $this->getEntityManager()
            ->createQuery(
                'SELECT f FROM ProgrammingMorisHomeBundle:FeaturedContent f ORDER BY f.id DESC'
            )
            ->getSingleResult()
            ->getArticleId();
        return  $this->getEntityManager()
                ->getRepository('ProgrammingMorisHomeBundle:Article')
                ->find($article_id);
    }
    
    public function getCathegoriesFromTopic($topic){
        return $this->cathegories[$topic];
    }
    
    public function getTopicFromCathegory($cathegory){
        foreach($this->cathegories as $key=>$cathegories){
            if(in_array($cathegory,$cathegories)){
                return $key;
            }
        }
        return null;
    }
}

