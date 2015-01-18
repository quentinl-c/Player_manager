<?php

namespace PM\CharacterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CharacterUsed
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PM\CharacterBundle\Entity\CharacterUsedRepository")
 */
class CharacterUsed
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="smallint")
     */
    private $age;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean")
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="decimal")
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal")
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpMax", type="smallint")
     */
    private $hpMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpCurrent", type="smallint")
     */
    private $hpCurrent;

    /**
     * @ORM\ManyToOne(targetEntity="PM\CharacterBundle\Entity\Alignment")
     * @ORM\JoinColumn(nullable=true)
     */
    private $alignment;

    /**
     * @ORM\ManyToOne(targetEntity="PM\CharacterBundle\Entity\ClassDnD")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classDnD;

    /**
     * @ORM\ManyToOne(targetEntity="PM\CharacterBundle\Entity\Race")
     * @ORM\JoinColumn(nullable=false)
     */
    private $race;

    /**
     * @ORM\OneToOne(targetEntity="PM\CharacterBundle\Entity\CharacterWealth", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $wealth;

    /**
     * @ORM\ManyToOne(targetEntity="PM\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $createUser;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="createDate", type="datetime", nullable=false)
     */
    protected $createDate;

    /**
     * @ORM\ManyToOne(targetEntity="PM\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $updateUser;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    protected $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="updateComment", type="string", length=255, nullable=true)
     * @Assert\Length(
     *      max = "255",
     *      maxMessage = "Le commentaire ne doit pas dépasser {{ limit }} caractères."
     * )
     */
    protected $updateComment;


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
     * @return CharacterUsed
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set age
     *
     * @param integer $age
     * @return CharacterUsed
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return CharacterUsed
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set height
     *
     * @param string $height
     * @return CharacterUsed
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return CharacterUsed
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set hpMax
     *
     * @param integer $hpMax
     * @return CharacterUsed
     */
    public function setHpMax($hpMax)
    {
        $this->hpMax = $hpMax;

        return $this;
    }

    /**
     * Get hpMax
     *
     * @return integer 
     */
    public function getHpMax()
    {
        return $this->hpMax;
    }

    /**
     * Set hpCurrent
     *
     * @param integer $hpCurrent
     * @return CharacterUsed
     */
    public function setHpCurrent($hpCurrent)
    {
        $this->hpCurrent = $hpCurrent;

        return $this;
    }

    /**
     * Get hpCurrent
     *
     * @return integer 
     */
    public function getHpCurrent()
    {
        return $this->hpCurrent;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return CharacterUsed
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return CharacterUsed
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set updateComment
     *
     * @param string $updateComment
     * @return CharacterUsed
     */
    public function setUpdateComment($updateComment)
    {
        $this->updateComment = $updateComment;

        return $this;
    }

    /**
     * Get updateComment
     *
     * @return string 
     */
    public function getUpdateComment()
    {
        return $this->updateComment;
    }

    /**
     * Set alignment
     *
     * @param \PM\CharacterBundle\Entity\Alignment $alignment
     * @return CharacterUsed
     */
    public function setAlignment(\PM\CharacterBundle\Entity\Alignment $alignment = null)
    {
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * Get alignment
     *
     * @return \PM\CharacterBundle\Entity\Alignment 
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * Set classDnD
     *
     * @param \PM\CharacterBundle\Entity\ClassDnD $classDnD
     * @return CharacterUsed
     */
    public function setClassDnD(\PM\CharacterBundle\Entity\ClassDnD $classDnD)
    {
        $this->classDnD = $classDnD;

        return $this;
    }

    /**
     * Get classDnD
     *
     * @return \PM\CharacterBundle\Entity\ClassDnD 
     */
    public function getClassDnD()
    {
        return $this->classDnD;
    }

    /**
     * Set race
     *
     * @param \PM\CharacterBundle\Entity\Race $race
     * @return CharacterUsed
     */
    public function setRace(\PM\CharacterBundle\Entity\Race $race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return \PM\CharacterBundle\Entity\Race 
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set wealth
     *
     * @param \PM\CharacterBundle\Entity\CharacterWealth $wealth
     * @return CharacterUsed
     */
    public function setWealth(\PM\CharacterBundle\Entity\CharacterWealth $wealth)
    {
        $this->wealth = $wealth;

        return $this;
    }

    /**
     * Get wealth
     *
     * @return \PM\CharacterBundle\Entity\CharacterWealth 
     */
    public function getWealth()
    {
        return $this->wealth;
    }

    /**
     * Set createUser
     *
     * @param \PM\UserBundle\Entity\User $createUser
     * @return CharacterUsed
     */
    public function setCreateUser(\PM\UserBundle\Entity\User $createUser)
    {
        $this->createUser = $createUser;

        return $this;
    }

    /**
     * Get createUser
     *
     * @return \PM\UserBundle\Entity\User 
     */
    public function getCreateUser()
    {
        return $this->createUser;
    }

    /**
     * Set updateUser
     *
     * @param \PM\UserBundle\Entity\User $updateUser
     * @return CharacterUsed
     */
    public function setUpdateUser(\PM\UserBundle\Entity\User $updateUser = null)
    {
        $this->updateUser = $updateUser;

        return $this;
    }

    /**
     * Get updateUser
     *
     * @return \PM\UserBundle\Entity\User 
     */
    public function getUpdateUser()
    {
        return $this->updateUser;
    }
}