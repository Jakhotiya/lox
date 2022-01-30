<?php

namespace Lox;

class Lox
{
    public function execute(){
       global $argv;
       global $argc;

       if($argc==1){
           $this->runPrompt();
       }elseif ($argc==2){
           $this->runFile($argv[1]);
       }else{
           echo 'Usage: php index.php <path to lox script>'.PHP_EOL;
       }

    }

    protected function runFile($file){
        $text = file_get_contents($file);
        $this->run($text);
    }

    protected function runPrompt(){
        while(true){
            $line = readline("Lox >: ");
            $this->run($line);
        }
    }

    public function run($source){
        $scanner = new Scanner();
        $tokens = $scanner->getTokens();
        echo $source.PHP_EOL;
    }

}
