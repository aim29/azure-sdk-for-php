<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * PHP version 5
 *
 * @category  Microsoft
 *
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 */

namespace WindowsAzure\MediaServices\Models;

use WindowsAzure\Common\Internal\Validate;

/**
 * Represents StreamingEndpoint object used in media services.
 *
 * @category  Microsoft
 *
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @version   Release: 0.5.0_2016-11
 *
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 */
class StreamingEndpoint
{
    /**
     * StreamingEndpoint id.
     *
     * @var string
     */
    private $_id;

    /**
     * StreamingEndpoint Name.
     *
     * @var string
     */
    private $_name;

    /**
     * Created.
     *
     * @var \DateTime
     */
    private $_created;

    /**
     * StreamingEndpoint Description.
     *
     * @var string
     */
    private $_description;

    /**
     * StreamingEndpoint LastModified DateTime.
     *
     * @var \DateTime
     */
    private $_lastModified;

    /**
     * StreamingEndpoint State.
     *
     * @var string
     */
    private $_state;

    /**
     * StreamingEndpoint HostName.
     *
     * @var StreamingEndpointHostName
     */
    private $_hostName;


    /**
     * Create StreamingEndpoint from array.
     *
     * @param array $options Array containing values for object properties
     *
     * @return StreamingEndpoint
     */
    public static function createFromOptions($options)
    {
        $operation = new self();
        $operation->fromArray($options);

        return $operation;
    }

    /**
     * Create StreamingEndpoint.
     */
    public function __construct()
    {
    }

    /**
     * Fill StreamingEndpoint from array.
     *
     * @param array $options Array containing values for object properties
     */
    public function fromArray($options)
    {
        if (isset($options['Id'])) {
            Validate::isString($options['Id'], 'options[Id]');
            $this->_id = $options['Id'];
        }

        if (isset($options['Name'])) {
            Validate::isString($options['Name'], 'options[Name]');
            $this->_name = $options['Name'];
        }

        if (isset($options['Created'])) {
            Validate::isDateString($options['Created'], 'options[Created]');
            $this->_created = new \DateTime($options['Created']);
        }

        if (isset($options['Description'])) {
            Validate::isString($options['Description'], 'options[Description]');
            $this->_description = $options['Description'];
        }

        if (isset($options['LastModified'])) {
            Validate::isDateString($options['LastModified'], 'options[LastModified]');
            $this->_lastModified = new \DateTime($options['LastModified']);
        }

        if (isset($options['State'])) {
            Validate::isString($options['State'], 'options[State]');
            $this->_state = $options['State'];
        }

        if (!empty($options['HostName'])) {
            Validate::isArray($options['HostName'], 'options[HostName]');
            $this->_hostName = $options['HostName'];
        }
    }

    /**
     * Get the StreamingEndpoint identifier.
     *
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Set StreamingEndpoint identifier.
     *
     * @param string $value Operation id
     */
    public function setId($value)
    {
        $this->_id = $value;
    }

    /**
     * Get StreamingEndpoint Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set StreamingEndpoint Name.
     *
     * @param string $value Description
     */
    public function setName($value)
    {
        $this->_name = $value;
    }

    /**
     * Get StreamingEndpoint creation date.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->_created;
    }

    /**
     * Get StreamingEndpoint Description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Set StreamingEndpoint Description.
     *
     * @param string $value Description
     */
    public function setDescription($value)
    {
        $this->_description = $value;
    }

    /**
     * Get StreamingEndpoint last modification date.
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->_lastModified;
    }

    /**
     * Get StreamingEndpoint State.
     *
     * @return string
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * Get StreamingEndpoint HostName.
     *
     * @return StreamingEndpointHostName
     */
    public function getHostName()
    {
        return $this->_hostName;
    }
}
