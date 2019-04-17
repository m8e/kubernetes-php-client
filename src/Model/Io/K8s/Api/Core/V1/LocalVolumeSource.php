<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Local represents directly-attached storage with node affinity (Beta feature)
 */
class LocalVolumeSource extends \KubernetesRuntime\AbstractModel
{

    /**
     * Filesystem type to mount. It applies only when the Path is a block device. Must
     * be a filesystem type supported by the host operating system. Ex. "ext4", "xfs",
     * "ntfs". The default value is to auto-select a fileystem if unspecified.
     *
     * @var string
     */
    public $fsType = null;

    /**
     * The full path to the volume on the node. It can be either a directory or block
     * device (disk, partition, ...).
     *
     * @var string
     */
    public $path = null;

    protected $isRawObject = true;


}

