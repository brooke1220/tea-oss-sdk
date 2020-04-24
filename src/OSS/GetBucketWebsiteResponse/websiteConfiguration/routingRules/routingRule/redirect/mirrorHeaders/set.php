<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OSS\OSS\GetBucketWebsiteResponse\websiteConfiguration\routingRules\routingRule\redirect\mirrorHeaders;

use AlibabaCloud\Tea\Model;

class set extends Model
{
    /**
     * @description Key
     *
     * @var string
     */
    public $key;

    /**
     * @description Value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res          = [];
        $res['Key']   = $this->key;
        $res['Value'] = $this->value;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return set
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
