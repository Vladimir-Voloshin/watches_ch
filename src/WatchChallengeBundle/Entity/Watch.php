<?php

namespace WatchChallengeBundle\Entity;

use WatchChallengeBundle\Entity\BaseEntity;
/**
 * Watch
 */
class Watch extends BaseEntity
{
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
    private $brandId;

    /**
     * @var int
     */
    private $caseSite;

    /**
     * @var int
     */
    private $caseMaterialId;

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
     * @return \WatchChallengeBundle\Entity\Condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set condition
     *
     * @param \WatchChallengeBundle\Entity\Condition $condition
     * @return Watch
     */
    public function setCondition(Condition $condition = null)
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
     * Set brandId
     *
     * @param integer $brandId
     *
     * @return Watch
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * Get brandId
     *
     * @return int
     */
    public function getBrandId()
    {
        return $this->brandId;
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
     * Set caseMaterialId
     *
     * @param integer $caseMaterialId
     *
     * @return Watch
     */
    public function setCaseMaterialId($caseMaterialId)
    {
        $this->caseMaterialId = $caseMaterialId;

        return $this;
    }

    /**
     * Get caseMaterialId
     *
     * @return int
     */
    public function getCaseMaterialId()
    {
        return $this->caseMaterialId;
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
    public function addWatchImages(\WatchChallengeBundle\Entity\WatchImage $watchImage)
    {
        $this->watchImages[] = $watchImage;

        return $this;
    }

    /**
     * Remove watch image
     *
     * @param \WatchChallengeBundle\Entity\WatchImage $watchImage
     */
    public function removeWatchImages(\WatchChallengeBundle\Entity\WatchImage $watchImage)
    {
        $this->watchImages->removeElement($watchImage);
    }
}

