<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1;

class SelfSubjectRulesReviewSpec extends \KubernetesRuntime\AbstractModel
{

    /**
     * Namespace to evaluate rules for. Required.
     *
     * @var string
     */
    public $namespace = null;

    protected $isRawObject = true;


}
