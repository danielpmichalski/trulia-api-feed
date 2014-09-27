<?php
require_once('../Collection.php');

class CreditCards extends Collection {
    private $credit_cards_accepted;

    public function add($element) {
        array_push($this->collection, $element);
    }

    /**
     * @param mixed $credit_cards_accepted
     */
    public function setCreditCardsAccepted($credit_cards_accepted) {
        $this->credit_cards_accepted = $credit_cards_accepted;
    }

    /**
     * @return mixed
     */
    public function getCreditCardsAccepted() {
        return $this->credit_cards_accepted;
    }
} 