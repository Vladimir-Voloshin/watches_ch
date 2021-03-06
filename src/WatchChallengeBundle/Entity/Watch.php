<?php

namespace WatchChallengeBundle\Entity;

use WatchChallengeBundle\Entity\BaseEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
/**
 * Watch
 */
class Watch extends BaseEntity
{
    /**
     * @var string
     */
    private $slug;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * @var int
     */
    private $caseSite;

    /**
     * @var string
     */
    private $bracelet;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \WatchChallengeBundle\Entity\Brand
     */
    private $brand;

    /**
     * @var \WatchChallengeBundle\Entity\CaseMaterial
     */
    private $caseMaterial;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var \WatchChallengeBundle\Entity\Condition
     */
    private $condition;

    /**
     * @var WatchFunction[]|\Doctrine\Common\Collections\ArrayCollection
     */
    private $watchFunctions;

    /**
     * @var WatchImage[]|\Doctrine\Common\Collections\ArrayCollection
     */
    private $watchImages;

    public function __construct()
    {
        $this->watchFunctions = new ArrayCollection();
        $this->watchImages    = new ArrayCollection();
    }

    /**
     * Get case material
     *
     * @return CaseMaterial
     */
    public function getCaseMaterial()
    {
        return $this->caseMaterial;
    }

    /**
     * Set case material
     *
     * @param \WatchChallengeBundle\Entity\CaseMaterial $caseMaterial
     * @return Watch
     */
    public function setCaseMaterial(CaseMaterial $caseMaterial = null)
    {
        $this->caseMaterial = $caseMaterial;

        return $this;
    }

    /**
     * Get condition
     *
     * @return \WatchChallengeBundle\Entity\WatchCondition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set condition
     *
     * @param \WatchChallengeBundle\Entity\WatchCondition $condition
     * @return Watch
     */
    public function setCondition(WatchCondition $condition = null)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get brand
     *
     * @return Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set brand
     *
     * @param \WatchChallengeBundle\Entity\Brand $brand
     * @return Watch
     */
    public function setBrand(Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Set SKU
     *
     * @param string $sku
     *
     * @return Watch
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get SKU
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Watch
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
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

    /**
     * Set caseSite
     *
     * @param integer $caseSite
     *
     * @return Watch
     */
    public function setCaseSite($caseSite)
    {
        $this->caseSite = $caseSite;

        return $this;
    }

    /**
     * Get caseSite
     *
     * @return int
     */
    public function getCaseSite()
    {
        return $this->caseSite;
    }

    /**
     * Set bracelet
     *
     * @param string $bracelet
     *
     * @return Watch
     */
    public function setBracelet($bracelet)
    {
        $this->bracelet = $bracelet;

        return $this;
    }

    /**
     * Get bracelet
     *
     * @return string
     */
    public function getBracelet()
    {
        return $this->bracelet;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Watch
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Watch
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return ArrayCollection|WatchFunction[]
     */
    public function getWatchFunctions()
    {
        return $this->watchFunctions;
    }

    /**
     * @param ArrayCollection|WatchFunction[] $watchFunctions
     * @return Watch
     */
    public function setWatchFunctions($watchFunctions)
    {
        $this->watchFunctions = $watchFunctions;

        return $this;
    }

    /**
     * Add watch function
     *
     * @param \WatchChallengeBundle\Entity\WatchFunction $watchFunction
     * @return Watch
     */
    public function addWatchFunctions(\WatchChallengeBundle\Entity\WatchFunction $watchFunction)
    {
        $this->watchFunctions[] = $watchFunction;

        return $this;
    }

    /**
     * Remove watch function
     *
     * @param \WatchChallengeBundle\Entity\WatchFunction $watchFunction
     */
    public function removeWatchFunctions(\WatchChallengeBundle\Entity\WatchFunction $watchFunction)
    {
        $this->watchFunctions->removeElement($watchFunction);
    }

    /**
     * @return ArrayCollection|WatchImage[]
     */
    public function getWatchImages()
    {
        return $this->watchImages;
    }

    /**
     * @param ArrayCollection|WatchImage[] $watchImages
     * @return Watch
     */
    public function setWatchImages($watchImages)
    {
        $this->watchImages = $watchImages;

        return $this;
    }

    /**
     * Add watch image
     *
     * @param \WatchChallengeBundle\Entity\WatchImage $watchImage
     * @return Watch
     */
    public function addWatchImage(\WatchChallengeBundle\Entity\WatchImage $watchImage)
    {
        $this->watchImages[] = $watchImage;

        return $this;
    }

    /**
     * Remove watch image
     *
     * @param \WatchChallengeBundle\Entity\WatchImage $watchImage
     */
    public function removeWatchImage(\WatchChallengeBundle\Entity\WatchImage $watchImage)
    {
        $this->watchImages->removeElement($watchImage);
    }

    public function toJson(){
        $functions = array();
        if ($this->watchFunctions->count() > 0) {
            $functions = $this->watchFunctions->map(function($function) {
                return $function->getFunctionName();
            })->toArray();
        }

        return array(
            'id' => $this->id,
            'model' => $this->model,
            'sku'  => $this->sku,
            'brand' => empty($this->brand)?null:$this->brand->getName(),
            'case site' => $this->caseSite,
            'caseMaterial' => empty($this->caseMaterial)?null:$this->caseMaterial->getMaterialName(),
            'condition' => empty($this->condition)?null:$this->condition->getConditionName(),
            'functions'    => $functions
        );
    }
}

