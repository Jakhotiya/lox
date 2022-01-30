<?php

namespace Lox;

use Lox\Scanner\Token;

class Scanner
{
    public function Scanner($source){
        $this->source = $source;
    }

    /**
     * @return Token[]
     */
    public function getTokens():array{
        $tokens = [];
        return $tokens;
    }
}
