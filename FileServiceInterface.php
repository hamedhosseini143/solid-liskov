<?php

namespace src\Solid\lsp;

interface FileServiceInterface
{
    public function encode(EncodebaleFileInterface $file): string;
}
