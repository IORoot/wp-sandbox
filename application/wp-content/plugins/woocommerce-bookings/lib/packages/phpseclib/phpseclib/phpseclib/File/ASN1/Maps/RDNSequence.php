<?php

/**
 * RDNSequence
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
 * RDNSequence
 *
 * In practice, RDNs containing multiple name-value pairs (called "multivalued RDNs") are rare,
 * but they can be useful at times when either there is no unique attribute in the entry or you
 * want to ensure that the entry's DN contains some useful identifying information.
 *
 * - https://www.opends.org/wiki/page/DefinitionRelativeDistinguishedName
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class RDNSequence
{
    const MAP = [
        'type' => ASN1::TYPE_SEQUENCE,
        // RDNSequence does not define a min or a max, which means it doesn't have one
        'min' => 0,
        'max' => -1,
        'children' => RelativeDistinguishedName::MAP
    ];
}
