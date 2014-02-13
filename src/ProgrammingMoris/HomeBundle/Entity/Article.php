<?php

namespace ProgrammingMoris\HomeBundle\Entity;
use Doctrine\ORM\EntityManager;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Util;
/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article
{
    /**
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="articles")
     * @ORM\JoinTable(name="article_tags")
     **/
    private $tags;
    
    /**
     * @ORM\ManyToMany(targetEntity="Comment", inversedBy="articles")
     * @ORM\JoinTable(name="article_comments")
     **/
    private $comments;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;
    
    /**
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="articles")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $author;
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",unique=true)
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $description;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $description_image;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $slug;
 
    public function __construct() {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;
        
        $this->setSlug($this->slugiffy($name));
        return $this;
    }
    
    /**
     * Slugiffy a given name
     *
     * @param string $name
     * @return string the $name parameter slugiffied
     */
    private function slugiffy($name){
        $slug = strtolower($name);
        $slug = str_replace(' ', '-', $slug);
        
        return $slug;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set category_id
     *
     * @param integer $categoryId
     * @return Article
     */
    public function setCategoryId($categoryId)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get category_id
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Article
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set category
     *
     * @param \ProgrammingMoris\HomeBundle\Entity\Category $category
     * @return Article
     */
    public function setCategory(\ProgrammingMoris\HomeBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \ProgrammingMoris\HomeBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set author
     *
     * @param \ProgrammingMoris\HomeBundle\Entity\Author $author
     * @return Article
     */
    public function setAuthor(\ProgrammingMoris\HomeBundle\Entity\Author $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \ProgrammingMoris\HomeBundle\Entity\Author 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Add tags
     *
     * @param \ProgrammingMoris\HomeBundle\Entity\Tag $tags
     * @return Article
     */
    public function addTag(\ProgrammingMoris\HomeBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \ProgrammingMoris\HomeBundle\Entity\Tag $tags
     */
    public function removeTag(\ProgrammingMoris\HomeBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add comments
     *
     * @param \ProgrammingMoris\HomeBundle\Entity\Comment $comments
     * @return Article
     */
    public function addComment(\ProgrammingMoris\HomeBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \ProgrammingMoris\HomeBundle\Entity\Comment $comments
     */
    public function removeComment(\ProgrammingMoris\HomeBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description_image
     *
     * @param string $descriptionImage
     * @return Article
     */
    public function setDescriptionImage($descriptionImage)
    {
        $this->description_image = $descriptionImage;

        return $this;
    }

    /**
     * Get description_image
     *
     * @return string 
     */
    public function getDescriptionImage()
    {
        return $this->description_image;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    public function renderTags($route){
        $i=0;
        $number_of_tags = count($this->tags);
        $tags_string = $number_of_tags>0?'• ':'';
        foreach($this->tags as $tag){
            $new_route = substr_replace($route, $tag->getName(),strlen($route)-1);
            $tags_string.='<a href="'.$new_route.'">'.$tag->getName().'</a>';
            if($i!=$number_of_tags-1){
                $tags_string.=', ';
            }
            $i++;    
        }
        return $tags_string;
    }
}
