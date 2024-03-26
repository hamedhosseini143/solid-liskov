<?php

namespace src\Solid\lsp;

interface EncodebaleFileInterface extends FileInterface
{
    public function encode(): string;
}
