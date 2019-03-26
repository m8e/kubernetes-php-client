<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference extends \KubernetesRuntime\AbstractModel
{

    /**
     * `name` is the name of the service. Required
     *
     * @var string
     */
    public $name = null;

    /**
     * `namespace` is the namespace of the service. Required
     *
     * @var string
     */
    public $namespace = null;

    /**
     * `path` is an optional URL path which will be sent in any request to this
     * service.
     *
     * @var string
     */
    public $path = null;


}

