<?php

namespace src\Solid\lsp;

class FileService implements FileServiceInterface
{

    /**
     * @throws \Exception
     */
    public function encode(FileInterface $file): string
    {
        if (!($file instanceof FileInterface)) {
            throw new \Exception('Invalid file');
        }
    }
}
