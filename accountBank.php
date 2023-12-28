<?php
    require_once 'account.php';
    class AccountBank extends Account{
        // tambahkan data baru customer
        public $customer;
        public static $biaya_admin = 6500;

        function __construct($no, $saldo_awal, $cust){
            // panggil constructor parent class
            parent::__construct($no, $saldo_awal);
            $this -> customer = $cust;
        }
        // tulis ulang method cetak
        function cetak(){
            parent::cetak();
            echo '<br/>Customer : '.$this->customer;
            echo '<br/>Saldo : '.$this->get_Saldo;
        }
        function transfer($obj_account, $uang){
            $obj_account->deposit($uang);
            $this->witdrawl($uang);
            $this->witdrawl(self::$biaya_admin);
        }
    }
?>