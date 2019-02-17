<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 16/02/2019
 * Time: 02:07
 */


namespace AccessVote\VoteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Questions
 *
 * @ORM\Table(name="questions")
 * @ORM\Entity
 */
class Questions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=150, nullable=false)
     */
    private $question;


    /**
     * @ORM\OneToMany(targetEntity=Propositions::class, cascade={"persist", "remove"}, mappedBy="question")
     */
    protected $propositions;

    public function __construct()
    {
        $this->propositions = new ArrayCollection();
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param string $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getPropositions()
    {
        return $this->propositions;
    }

    /**
     * @param mixed $propositions
     */
    public function setPropositions($propositions)
    {
        $this->propositions = $propositions;
    }












}