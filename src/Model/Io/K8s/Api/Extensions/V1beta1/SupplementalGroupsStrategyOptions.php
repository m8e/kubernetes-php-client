<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * SupplementalGroupsStrategyOptions defines the strategy type and options used to
 * create the strategy.
 */
class SupplementalGroupsStrategyOptions extends \KubernetesRuntime\AbstractModel
{

    /**
     * Ranges are the allowed ranges of supplemental groups.  If you would like to
     * force a single supplemental group then supply a single range with the same start
     * and end.
     *
     * @var IDRange[]
     */
    public $ranges = null;

    /**
     * Rule is the strategy that will dictate what supplemental groups is used in the
     * SecurityContext.
     *
     * @var string
     */
    public $rule = null;


}
