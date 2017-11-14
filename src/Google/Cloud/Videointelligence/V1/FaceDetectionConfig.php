<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\Videointelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for FACE_DETECTION.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.FaceDetectionConfig</code>
 */
class FaceDetectionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Model to use for face detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 1;</code>
     */
    private $model = '';
    /**
     * Whether bounding boxes be included in the face annotation output.
     *
     * Generated from protobuf field <code>bool include_bounding_boxes = 2;</code>
     */
    private $include_bounding_boxes = false;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * Model to use for face detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 1;</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Model to use for face detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Whether bounding boxes be included in the face annotation output.
     *
     * Generated from protobuf field <code>bool include_bounding_boxes = 2;</code>
     * @return bool
     */
    public function getIncludeBoundingBoxes()
    {
        return $this->include_bounding_boxes;
    }

    /**
     * Whether bounding boxes be included in the face annotation output.
     *
     * Generated from protobuf field <code>bool include_bounding_boxes = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeBoundingBoxes($var)
    {
        GPBUtil::checkBool($var);
        $this->include_bounding_boxes = $var;

        return $this;
    }

}

