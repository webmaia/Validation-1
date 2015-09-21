<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Exceptions\SubdivisionCode;

use Respect\Validation\Exceptions\SubdivisionCodeException;

/**
 * Exception class for Central African Republic subdivision code.
 *
 * ISO 3166-1 alpha-2: CF
 */
class CfSubdivisionCodeException extends SubdivisionCodeException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::STANDARD => '{{name}} must be a subdivision code of Central African Republic',
        ),
        self::MODE_NEGATIVE => array(
            self::STANDARD => '{{name}} must not be a subdivision code of Central African Republic',
        ),
    );
}