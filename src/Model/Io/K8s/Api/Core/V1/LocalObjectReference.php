<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * LocalObjectReference contains enough information to let you locate the
 * referenced object inside the same namespace.
 */
class LocalObjectReference extends \KubernetesRuntime\AbstractModel
{

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @var string
     */
    public $name = null;

    protected $isRawObject = true;


}
