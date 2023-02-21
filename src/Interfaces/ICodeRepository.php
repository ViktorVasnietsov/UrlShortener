<?php

namespace PhpPro\UrlShortener\Interfaces;

use PhpPro\UrlShortener\ValueObjects\UrlCodePair;
use PhpPro\UrlShortener\Exceptions\DataNotFoundException;

interface ICodeRepository
{
    /**
     * @param UrlCodePair $urlCodePairVO
     * @return bool
     */
    public function saveEntity(UrlCodePair $urlCodePairVO): bool;

    /**
     * @param string $code
     * @return bool
     */
    public function codeIsset(string $code): bool;

    /**
     * @param string $code
     * @throws DataNotFoundException
     * @return string url
     */
    public function getUrlByCode(string $code): string;

    /**
     * @param string $url
     * @throws DataNotFoundException
     * @return string code
     */
    public function getCodeByUrl(string $url): string;

}