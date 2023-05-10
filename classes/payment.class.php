<?php

interface PaymentInterface{
    public function payNow();
    public function paymentProcess();
}

interface LoginInterface{
    public function loginFirst();
    public function paymentProcess(); 
}

class Paypal implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}
class bankTransfer implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}
class Visa implements PaymentInterface{
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
    }
}
class Cash implements PaymentInterface{
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class BuyProduct{
    public function pay(PaymentInterface $paymentType){
        $paymentType->paymentProcess();

    }

    public function onlinepay(LoginInterface $paymentType){
        $paymentType->paymentProcess();
    }
}

$paymentType = new Paypal();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
