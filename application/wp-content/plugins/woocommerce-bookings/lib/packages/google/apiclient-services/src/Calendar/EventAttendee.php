<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 *
 * Modified by woocommerce on 11-August-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Automattic\WooCommerce\Bookings\Vendor\Google\Service\Calendar;

class EventAttendee extends \Automattic\WooCommerce\Bookings\Vendor\Google\Model
{
  /**
   * @var int
   */
  public $additionalGuests;
  /**
   * @var string
   */
  public $comment;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $email;
  /**
   * @var string
   */
  public $id;
  /**
   * @var bool
   */
  public $optional;
  /**
   * @var bool
   */
  public $organizer;
  /**
   * @var bool
   */
  public $resource;
  /**
   * @var string
   */
  public $responseStatus;
  /**
   * @var bool
   */
  public $self;

  /**
   * @param int
   */
  public function setAdditionalGuests($additionalGuests)
  {
    $this->additionalGuests = $additionalGuests;
  }
  /**
   * @return int
   */
  public function getAdditionalGuests()
  {
    return $this->additionalGuests;
  }
  /**
   * @param string
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /**
   * @return string
   */
  public function getComment()
  {
    return $this->comment;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param bool
   */
  public function setOptional($optional)
  {
    $this->optional = $optional;
  }
  /**
   * @return bool
   */
  public function getOptional()
  {
    return $this->optional;
  }
  /**
   * @param bool
   */
  public function setOrganizer($organizer)
  {
    $this->organizer = $organizer;
  }
  /**
   * @return bool
   */
  public function getOrganizer()
  {
    return $this->organizer;
  }
  /**
   * @param bool
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return bool
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * @param string
   */
  public function setResponseStatus($responseStatus)
  {
    $this->responseStatus = $responseStatus;
  }
  /**
   * @return string
   */
  public function getResponseStatus()
  {
    return $this->responseStatus;
  }
  /**
   * @param bool
   */
  public function setSelf($self)
  {
    $this->self = $self;
  }
  /**
   * @return bool
   */
  public function getSelf()
  {
    return $this->self;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EventAttendee::class, 'Google_Service_Calendar_EventAttendee');
