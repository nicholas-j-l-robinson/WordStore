<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Words
 *
 * @ORM\Table(name="words")
 * @ORM\Entity
 */
class Words
{
    /**
     * @var string
     *
     * @ORM\Column(name="word", type="string", length=25, nullable=false)
     */
    private $word;

    /**
     * @var string
     *
     * @ORM\Column(name="wordtype", type="string", length=20, nullable=false)
     */
    private $wordtype;

    /**
     * @var string
     *
     * @ORM\Column(name="definition", type="text", nullable=false)
     */
    private $definition;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set word
     *
     * @param string $word
     * @return Words
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set wordtype
     *
     * @param string $wordtype
     * @return Words
     */
    public function setWordtype($wordtype)
    {
        $this->wordtype = $wordtype;

        return $this;
    }

    /**
     * Get wordtype
     *
     * @return string 
     */
    public function getWordtype()
    {
        return $this->wordtype;
    }

    /**
     * Set definition
     *
     * @param string $definition
     * @return Words
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string 
     */
    public function getDefinition()
    {
        return $this->definition;
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
}
