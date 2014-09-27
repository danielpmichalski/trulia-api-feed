<?php
require_once('Element.php');

class Plan extends Element {
    private $plan_id;
    private $plan_name;
    private $plan_type;
    private $plan_bese_price;

    /**
     * @param mixed $plan_bese_price
     */
    public function setPlanBesePrice($plan_bese_price) {
        $this->plan_bese_price = $plan_bese_price;
    }

    /**
     * @return mixed
     */
    public function getPlanBesePrice() {
        return $this->plan_bese_price;
    }

    /**
     * @param mixed $plan_id
     */
    public function setPlanId($plan_id) {
        $this->plan_id = $plan_id;
    }

    /**
     * @return mixed
     */
    public function getPlanId() {
        return $this->plan_id;
    }

    /**
     * @param mixed $plan_name
     */
    public function setPlanName($plan_name) {
        $this->plan_name = $plan_name;
    }

    /**
     * @return mixed
     */
    public function getPlanName() {
        return $this->plan_name;
    }

    /**
     * @param mixed $plan_type
     */
    public function setPlanType($plan_type) {
        $this->plan_type = $plan_type;
    }

    /**
     * @return mixed
     */
    public function getPlanType() {
        return $this->plan_type;
    }
} 