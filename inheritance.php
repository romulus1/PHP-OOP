<?php
    class Code {
        public $favoriteCode;
        public $noCode;

        function __construct($favoriteCode, $noCode) {
            $this->favoriteCode = $favoriteCode;
            $this->noCode = $noCode;
        }
    
        function getCode() {
        return "This is my favorite code " . $this->favoriteCode . 
                " and my least favorite is " . $this->noCode;
        }
    }
    class php extends Code {
            function getCode() {
            print $this->noCode;
            }

}
    class html extends Code {
            function hello() {
            return $this->bark;
    }
}  

$php = new php("easy", "Php ", "creative");
print "is so easy" . $php->getCode();