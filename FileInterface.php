<?php

namespace src\Solid\lsp;

interface FileInterface
{
    public function rename();
    public function move();
    public function copy();
    public function download();
}
