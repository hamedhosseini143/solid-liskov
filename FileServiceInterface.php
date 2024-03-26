<?php

namespace src\Solid\lsp;

interface FileServiceInterface
{
    public function encode(FileInterface $file): string;
}
