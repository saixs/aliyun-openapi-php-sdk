<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of ModifyModel
 *
 * @method string getSchema()
 * @method string getNewModelName()
 * @method string getSecurityToken()
 * @method string getModelName()
 * @method string getGroupId()
 * @method string getDescription()
 */
class ModifyModelRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CloudAPI',
            '2016-07-14',
            'ModifyModel',
            'apigateway'
        );
    }

    /**
     * @param string $schema
     *
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->requestParameters['Schema'] = $schema;
        $this->queryParameters['Schema'] = $schema;

        return $this;
    }

    /**
     * @param string $newModelName
     *
     * @return $this
     */
    public function setNewModelName($newModelName)
    {
        $this->requestParameters['NewModelName'] = $newModelName;
        $this->queryParameters['NewModelName'] = $newModelName;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $modelName
     *
     * @return $this
     */
    public function setModelName($modelName)
    {
        $this->requestParameters['ModelName'] = $modelName;
        $this->queryParameters['ModelName'] = $modelName;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }
}
