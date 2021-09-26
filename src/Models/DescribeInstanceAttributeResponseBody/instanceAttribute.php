<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class instanceAttribute extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $seriesCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $licenseCode;

    /**
     * @var bool
     */
    public $publicNetworkAccess;

    /**
     * @var string[]
     */
    public $whiteList;

    /**
     * @var string[]
     */
    public $ipv6WhiteList;
    protected $_name = [
        'vpcId'               => 'VpcId',
        'vswitchId'           => 'VswitchId',
        'expireTime'          => 'ExpireTime',
        'imageVersion'        => 'ImageVersion',
        'instanceId'          => 'InstanceId',
        'internetEndpoint'    => 'InternetEndpoint',
        'regionId'            => 'RegionId',
        'intranetEndpoint'    => 'IntranetEndpoint',
        'startTime'           => 'StartTime',
        'seriesCode'          => 'SeriesCode',
        'description'         => 'Description',
        'instanceStatus'      => 'InstanceStatus',
        'licenseCode'         => 'LicenseCode',
        'publicNetworkAccess' => 'PublicNetworkAccess',
        'whiteList'           => 'WhiteList',
        'ipv6WhiteList'       => 'Ipv6WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->seriesCode) {
            $res['SeriesCode'] = $this->seriesCode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->publicNetworkAccess) {
            $res['PublicNetworkAccess'] = $this->publicNetworkAccess;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }
        if (null !== $this->ipv6WhiteList) {
            $res['Ipv6WhiteList'] = $this->ipv6WhiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SeriesCode'])) {
            $model->seriesCode = $map['SeriesCode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['PublicNetworkAccess'])) {
            $model->publicNetworkAccess = $map['PublicNetworkAccess'];
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }
        if (isset($map['Ipv6WhiteList'])) {
            if (!empty($map['Ipv6WhiteList'])) {
                $model->ipv6WhiteList = $map['Ipv6WhiteList'];
            }
        }

        return $model;
    }
}
