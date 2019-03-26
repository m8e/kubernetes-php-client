<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * EventSeries contain information on series of events, i.e. thing that was/is
 * happening continuously for some time.
 */
class EventSeries extends \KubernetesRuntime\AbstractModel
{

    /**
     * Number of occurrences in this series up to the last heartbeat time
     *
     * @var integer
     */
    public $count = null;

    /**
     * Time of the last occurrence observed
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\MicroTime
     */
    public $lastObservedTime = null;

    /**
     * State of this Series: Ongoing or Finished
     *
     * @var string
     */
    public $state = null;

    protected $isRawObject = true;


}
