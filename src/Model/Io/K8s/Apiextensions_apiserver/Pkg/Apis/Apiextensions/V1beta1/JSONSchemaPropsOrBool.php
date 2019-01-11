<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * JSONSchemaPropsOrBool represents JSONSchemaProps or a boolean value. Defaults to
 * true for the boolean property.
 */
class JSONSchemaPropsOrBool extends \KubernetesRuntime\AbstractModel
{

    /**
     * @var boolean
     */
    public $Allows = null;

    /**
     * @var JSONSchemaProps
     */
    public $Schema = null;


}
