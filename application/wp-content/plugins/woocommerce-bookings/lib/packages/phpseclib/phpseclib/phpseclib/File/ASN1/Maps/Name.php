<?php

/**
 * Name
 *
 * PHP version 5
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 *
 * Modified by woocommerce on 11-August-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Automattic\WooCommerce\Bookings\Vendor\phpseclib3\File\ASN1\Maps;

use Automattic\WooCommerce\Bookings\Vendor\phpseclib3\File\ASN1;

/**
 * Name
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class Name
{
    const MAP = [
        'type' => ASN1::TYPE_CHOICE,
        'children' => [
            'rdnSequence' => RDNSequence::MAP
        ]
    ];
}
