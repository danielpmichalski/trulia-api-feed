<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/SimpleElement.php');
include_once(MODEL_ROOT . '/elements/PetComments.php');

class Pets extends Element {
    private $small_dogs_allowed;
    private $large_dogs_allowed;
    private $cats_allowed;
    private $pet_other_allowed;
    private $max_pets;
    private $pet_deposit;
    private $pet_fee;
    private $pet_rent;
    private $pet_weight;
    private $pet_comments;

    /**
     * @param mixed $cats_allowed
     */
    public function setCatsAllowed($cats_allowed) {
        $this->cats_allowed = $cats_allowed;
    }

    /**
     * @return mixed
     */
    public function getCatsAllowed() {
        return $this->cats_allowed;
    }

    /**
     * @param mixed $large_dogs_allowed
     */
    public function setLargeDogsAllowed($large_dogs_allowed) {
        $this->large_dogs_allowed = $large_dogs_allowed;
    }

    /**
     * @return mixed
     */
    public function getLargeDogsAllowed() {
        return $this->large_dogs_allowed;
    }

    /**
     * @param mixed $max_pets
     */
    public function setMaxPets($max_pets) {
        $this->max_pets = $max_pets;
    }

    /**
     * @return mixed
     */
    public function getMaxPets() {
        return $this->max_pets;
    }

    /**
     * @param mixed $pet_comment
     */
    public function setPetComments($pet_comment) {
        $this->pet_comments = $pet_comment;
    }

    /**
     * @return mixed
     */
    public function getPetComments() {
        if ($this->pet_comments == null) {
            $this->pet_comments = new PetComments(new SimpleElement(""));
        }
        return $this->pet_comments->getAll();
    }

    /**
     * @param mixed $pet_deposit
     */
    public function setPetDeposit($pet_deposit) {
        $this->pet_deposit = $pet_deposit;
    }

    /**
     * @return mixed
     */
    public function getPetDeposit() {
        return $this->pet_deposit;
    }

    /**
     * @param mixed $pet_fee
     */
    public function setPetFee($pet_fee) {
        $this->pet_fee = $pet_fee;
    }

    /**
     * @return mixed
     */
    public function getPetFee() {
        return $this->pet_fee;
    }

    /**
     * @param mixed $pet_other_allowed
     */
    public function setPetOtherAllowed($pet_other_allowed) {
        $this->pet_other_allowed = $pet_other_allowed;
    }

    /**
     * @return mixed
     */
    public function getPetOtherAllowed() {
        return $this->pet_other_allowed;
    }

    /**
     * @param mixed $pet_rent
     */
    public function setPetRent($pet_rent) {
        $this->pet_rent = $pet_rent;
    }

    /**
     * @return mixed
     */
    public function getPetRent() {
        return $this->pet_rent;
    }

    /**
     * @param mixed $pet_weight
     */
    public function setPetWeight($pet_weight) {
        $this->pet_weight = $pet_weight;
    }

    /**
     * @return mixed
     */
    public function getPetWeight() {
        return $this->pet_weight;
    }

    /**
     * @param mixed $small_dogs_allowed
     */
    public function setSmallDogsAllowed($small_dogs_allowed) {
        $this->small_dogs_allowed = $small_dogs_allowed;
    }

    /**
     * @return mixed
     */
    public function getSmallDogsAllowed() {
        return $this->small_dogs_allowed;
    }
} 