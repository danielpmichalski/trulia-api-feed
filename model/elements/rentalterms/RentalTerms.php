<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/EmptyElement.php');
include_once(MODEL_ROOT . '/elements/rentalterms/LeasePeriods.php');
include_once(MODEL_ROOT . '/elements/rentalterms/CreditCards.php');
include_once(MODEL_ROOT . '/elements/rentalterms/Pets.php');
include_once(MODEL_ROOT . '/elements/rentalterms/UtilitiesIncluded.php');
include_once(MODEL_ROOT . '/enums/PriceTerm.php');
include_once(MODEL_ROOT . '/enums/RentalType.php');
include_once(MODEL_ROOT . '/enums/LeaseType.php');

class RentalTerms extends Element {
    private $price_term;
    private $rental_type;
    private $lease_type;
    private $lease_min_length_months;
    private $lease_max_length_months;
    private $lease_periods;
    private $lease_details;
    private $security_deposit;
    private $security_deposit_description;
    private $application_fee;
    private $application_fee_description;
    private $credit_cards_accepted;
    private $credit_cards;
    private $pets;
    private $utilities_included;
    private $property_manager_on_site;
    private $rent_control;
    private $subletting_allowed;
    private $rental_broker_fee;
    private $rental_broker_fee_amount;

    /**
     * @param mixed $application_fee
     */
    public function setApplicationFee($application_fee) {
        $this->application_fee = $application_fee;
    }

    /**
     * @return mixed
     */
    public function getApplicationFee() {
        return $this->application_fee;
    }

    /**
     * @param mixed $application_fee_description
     */
    public function setApplicationFeeDescription($application_fee_description) {
        $this->application_fee_description = $application_fee_description;
    }

    /**
     * @return mixed
     */
    public function getApplicationFeeDescription() {
        return $this->application_fee_description;
    }

    /**
     * @param CreditCards $credit_cards
     */
    public function setCreditCards(CreditCards $credit_cards) {
        $this->credit_cards = $credit_cards;
    }

    /**
     * @return CreditCards
     */
    public function getCreditCards() {
        if ($this->credit_cards == null) {
            $this->credit_cards = new CreditCards();
        }
        return $this->credit_cards->getAll();
    }

    /**
     * @param mixed $lease_details
     */
    public function setLeaseDetails($lease_details) {
        $this->lease_details = $lease_details;
    }

    /**
     * @return mixed
     */
    public function getLeaseDetails() {
        return $this->lease_details;
    }

    /**
     * @param mixed $lease_max_length_months
     */
    public function setLeaseMaxLengthMonths($lease_max_length_months) {
        $this->lease_max_length_months = $lease_max_length_months;
    }

    /**
     * @return mixed
     */
    public function getLeaseMaxLengthMonths() {
        return $this->lease_max_length_months;
    }

    /**
     * @param mixed $lease_min_length_months
     */
    public function setLeaseMinLengthMonths($lease_min_length_months) {
        $this->lease_min_length_months = $lease_min_length_months;
    }

    /**
     * @return mixed
     */
    public function getLeaseMinLengthMonths() {
        return $this->lease_min_length_months;
    }

    /**
     * @param LeasePeriods $lease_periods
     */
    public function setLeasePeriods(LeasePeriods $lease_periods) {
        $this->lease_periods = $lease_periods;
    }

    /**
     * @return LeasePeriods
     */
    public function getLeasePeriods() {
        if ($this->lease_periods == null) {
            $this->lease_periods = new LeasePeriods(new EmptyElement());
        }
        return $this->lease_periods;
    }

    /**
     * @param LeaseType $lease_type
     */
    public function setLeaseType(LeaseType $lease_type) {
        $this->lease_type = $lease_type;
    }

    /**
     * @return LeaseType
     */
    public function getLeaseType() {
        return $this->lease_type;
    }

    /**
     * @param Pets $pets
     */
    public function setPets(Pets $pets) {
        $this->pets = $pets;
    }

    /**
     * @return Pets
     */
    public function getPets() {
        if ($this->pets == null) {
            $this->pets = new Pets();
        }
        return $this->pets;
    }

    /**
     * @param PriceTerm $price_term
     */
    public function setPriceTerm(PriceTerm $price_term) {
        $this->price_term = $price_term;
    }

    /**
     * @return PriceTerm
     */
    public function getPriceTerm() {
        return $this->price_term;
    }

    /**
     * @param mixed $property_manager_on_site
     */
    public function setPropertyManagerOnSite($property_manager_on_site) {
        $this->property_manager_on_site = $property_manager_on_site;
    }

    /**
     * @return mixed
     */
    public function getPropertyManagerOnSite() {
        return $this->property_manager_on_site;
    }

    /**
     * @param mixed $rent_control
     */
    public function setRentControl($rent_control) {
        $this->rent_control = $rent_control;
    }

    /**
     * @return mixed
     */
    public function getRentControl() {
        return $this->rent_control;
    }

    /**
     * @param mixed $rental_broker_fee
     */
    public function setRentalBrokerFee($rental_broker_fee) {
        $this->rental_broker_fee = $rental_broker_fee;
    }

    /**
     * @return mixed
     */
    public function getRentalBrokerFee() {
        return $this->rental_broker_fee;
    }

    /**
     * @param mixed $rental_broker_fee_amount
     */
    public function setRentalBrokerFeeAmount($rental_broker_fee_amount) {
        $this->rental_broker_fee_amount = $rental_broker_fee_amount;
    }

    /**
     * @return mixed
     */
    public function getRentalBrokerFeeAmount() {
        return $this->rental_broker_fee_amount;
    }

    /**
     * @param RentalType $rental_type
     */
    public function setRentalType(RentalType $rental_type) {
        $this->rental_type = $rental_type;
    }

    /**
     * @return RentalType
     */
    public function getRentalType() {
        return $this->rental_type;
    }

    /**
     * @param mixed $security_deposit
     */
    public function setSecurityDeposit($security_deposit) {
        $this->security_deposit = $security_deposit;
    }

    /**
     * @return mixed
     */
    public function getSecurityDeposit() {
        return $this->security_deposit;
    }

    /**
     * @param mixed $security_deposit_description
     */
    public function setSecurityDepositDescription($security_deposit_description) {
        $this->security_deposit_description = $security_deposit_description;
    }

    /**
     * @return mixed
     */
    public function getSecurityDepositDescription() {
        return $this->security_deposit_description;
    }

    /**
     * @param mixed $subletting_allowed
     */
    public function setSublettingAllowed($subletting_allowed) {
        $this->subletting_allowed = $subletting_allowed;
    }

    /**
     * @return mixed
     */
    public function getSublettingAllowed() {
        return $this->subletting_allowed;
    }

    /**
     * @param UtilitiesIncluded $utilities_included
     */
    public function setUtilitiesIncluded(UtilitiesIncluded $utilities_included) {
        $this->utilities_included = $utilities_included;
    }

    /**
     * @return UtilitiesIncluded
     */
    public function getUtilitiesIncluded() {
        if ($this->utilities_included == null) {
            $this->utilities_included = new UtilitiesIncluded();
        }
        return $this->utilities_included;
    }

    /**
     * @param boolean $credit_cards_accepted
     */
    public function setCreditCardsAccepted($credit_cards_accepted) {
        $this->credit_cards_accepted = $credit_cards_accepted;
    }

    /**
     * @return boolean
     */
    public function areCreditCardsAccepted() {
        return $this->credit_cards_accepted;
    }
}