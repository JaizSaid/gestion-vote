<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 16/02/2019
 * Time: 20:35
 */

namespace AccessVote\VoteBundle\Entity;

namespace AccessVote\VoteBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="propositions")
 * @ORM\Entity
 */
class Propositions
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
     * @ORM\Column(name="proposition1", type="string", length=150, nullable=false)
     */
    private $proposition1;

    /**
     * @var string
     *
     * @ORM\Column(name="proposition2", type="string", length=150, nullable=false)
     */
    private $proposition2;

    /**
     * @var string
     *
     * @ORM\Column(name="proposition3", type="string", length=150, nullable=false)
     */
    private $proposition3;


    /**
     * @ORM\ManyToOne(targetEntity=Questions::class, inversedBy="propositions")
     */
    protected $question;

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
    public function getProposition1()
    {
        return $this->proposition1;
    }

    /**
     * @param string $proposition1
     */
    public function setProposition1($proposition1)
    {
        $this->proposition1 = $proposition1;
    }

    /**
     * @return string
     */
    public function getProposition2()
    {
        return $this->proposition2;
    }

    /**
     * @param string $proposition2
     */
    public function setProposition2($proposition2)
    {
        $this->proposition2 = $proposition2;
    }

    /**
     * @return string
     */
    public function getProposition3()
    {
        return $this->proposition3;
    }

    /**
     * @param string $proposition3
     */
    public function setProposition3($proposition3)
    {
        $this->proposition3 = $proposition3;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }





}