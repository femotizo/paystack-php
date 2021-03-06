<?php
// quick and dirty testing
error_reporting(-1);
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
$dotenv->load();

$paystack = new \YabaCon\Paystack(getenv("PAYSTACK_SECRET_KEY"));
//$paystack->useGuzzle();
    
if (false) {
    print_r($paystack->customer(1));
    print_r($paystack->ff(3447));
    print_r($paystack->customer->dontlist());
    print_r($paystack->customer->update(['id'=>3447,'first_name'=>'Gopher']));
    print_r($paystack->transaction->list(['perPage'=>1,'page'=>1]));
    print_r($paystack->customer->list(['perPage'=>1,'page'=>1]));
    print_r($paystack->customer->create([
      'first_name'=>'Dafe',
      'last_name'=>'Aba',
      'email'=>"dafe@aba.c",
      'phone'=>'08012345678']));
    print_r($paystack->transaction->initialize([
        'reference'=>'unique_refencecode',
        'amount'=>'120000',
        'email'=>'dafe@aba.c']));
    print_r($paystack->transaction->verify(['reference'=>'unique_refencecode','dummy'=>'dum','id'=>3]));
    print_r($paystack->transaction(4538));
    print_r($paystack->transaction->totals());
}
