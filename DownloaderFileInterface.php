<?php

namespace src\Solid\lsp;

interface DownloaderFileInterface extends FileInterface
{
    public function download():bool;
}
