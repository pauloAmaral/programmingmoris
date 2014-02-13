<?php

namespace ProgrammingMoris\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeaturedContent
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FeaturedContent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    protected $article_id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set article_id
     *
     * @param \ProgrammingMoris\HomeBundle\Entity\Article $articleId
     * @return FeaturedContent
     */
    public function setArticleId(\ProgrammingMoris\HomeBundle\Entity\Article $articleId = null)
    {
        $this->article_id = $articleId;

        return $this;
    }

    /**
     * Get article_id
     *
     * @return \ProgrammingMoris\HomeBundle\Entity\Article 
     */
    public function getArticleId()
    {
        return $this->article_id;
    }
}
