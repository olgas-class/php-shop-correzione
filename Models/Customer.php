<?php
class Customer {
    public $basket;
    private $paymentMethod;

    function __construct(public $name, public $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function insertCreditCard(CreditCard $creditCard) {
        $this->paymentMethod = $creditCard;
    }

    public function pay($total) {
        // Se l'anno > annoCorrente OR (Se l'anno === annoCorente AND mese < meseCorente)
        //     Carta valida
        // Altrimenti 
        //        Carta non è valida
        if (
            $this->paymentMethod->getExpirationYear() > date("Y") ||
            ($this->paymentMethod->getExpirationYear() === date("Y") && $this->paymentMethod->getExpirationMonth() <= date("m"))
        ) {
            // $this->basket->empty();
            // sendEmail($this->email);
            return "La carta è valida. Tutto Pagato";
        } else {
            return "Errore di pagamento. La carta è scaduta";
        }
    }
}
