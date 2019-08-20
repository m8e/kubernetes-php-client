<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\IngressList as IngressList;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Ingress as TheIngress;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\IngressList as IngressListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\Ingress as TheIngressV1beta1;

class Ingress extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind Ingress
     *
     * @return IngressList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/ingresses"
        		,[
        		]
        	)
        	, 'listExtensionsV1beta1IngressForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Ingress
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return IngressList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1NamespacedIngress'
        );
    }

    /**
     * create an Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param TheIngress $Model
     * @param array $queries
     * @return TheIngress|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createExtensionsV1beta1NamespacedIngress'
        );
    }

    /**
     * delete collection of Ingress
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionNamespacedIngress'
        );
    }

    /**
     * read the specified Ingress
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheIngress|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedIngress'
        );
    }

    /**
     * replace the specified Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheIngress $Model
     * @param array $queries
     * @return TheIngress|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedIngress'
        );
    }

    /**
     * delete an Ingress
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1NamespacedIngress'
        );
    }

    /**
     * partially update the specified Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheIngress|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedIngress'
        );
    }

    /**
     * read status of the specified Ingress
     *
     * @param $namespace
     * @param $name
     * @return TheIngress|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}/status"
        		,[
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedIngressStatus'
        );
    }

    /**
     * replace status of the specified Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheIngress $Model
     * @param array $queries
     * @return TheIngress|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedIngressStatus'
        );
    }

    /**
     * partially update status of the specified Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheIngress|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/ingresses/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedIngressStatus'
        );
    }

    /**
     * watch individual changes to a list of Ingress. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/ingresses"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1IngressListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Ingress. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/ingresses"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedIngressList'
        );
    }

    /**
     * watch changes to an object of kind Ingress. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedIngress'
        );
    }

    /**
     * list or watch objects of kind Ingress
     *
     * @return IngressListV1beta1|mixed
     */
    public function listForAllNamespacesNetworkingV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/ingresses"
        		,[
        		]
        	)
        	, 'listNetworkingV1beta1IngressForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Ingress
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return IngressListV1beta1|mixed
     */
    public function listNetworkingV1beta1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listNetworkingV1beta1NamespacedIngress'
        );
    }

    /**
     * create an Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param TheIngressV1beta1 $Model
     * @param array $queries
     * @return TheIngressV1beta1|mixed
     */
    public function createNetworkingV1beta1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createNetworkingV1beta1NamespacedIngress'
        );
    }

    /**
     * delete collection of Ingress
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionNetworkingV1beta1($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteNetworkingV1beta1CollectionNamespacedIngress'
        );
    }

    /**
     * read the specified Ingress
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheIngressV1beta1|mixed
     */
    public function readNetworkingV1beta1($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readNetworkingV1beta1NamespacedIngress'
        );
    }

    /**
     * replace the specified Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheIngressV1beta1 $Model
     * @param array $queries
     * @return TheIngressV1beta1|mixed
     */
    public function replaceNetworkingV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceNetworkingV1beta1NamespacedIngress'
        );
    }

    /**
     * delete an Ingress
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteNetworkingV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteNetworkingV1beta1NamespacedIngress'
        );
    }

    /**
     * partially update the specified Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheIngressV1beta1|mixed
     */
    public function patchNetworkingV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchNetworkingV1beta1NamespacedIngress'
        );
    }

    /**
     * read status of the specified Ingress
     *
     * @param $namespace
     * @param $name
     * @return TheIngressV1beta1|mixed
     */
    public function readStatusNetworkingV1beta1($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses/{$name}/status"
        		,[
        		]
        	)
        	, 'readNetworkingV1beta1NamespacedIngressStatus'
        );
    }

    /**
     * replace status of the specified Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $namespace
     * @param $name
     * @param TheIngressV1beta1 $Model
     * @param array $queries
     * @return TheIngressV1beta1|mixed
     */
    public function replaceStatusNetworkingV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\Ingress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceNetworkingV1beta1NamespacedIngressStatus'
        );
    }

    /**
     * partially update status of the specified Ingress
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheIngressV1beta1|mixed
     */
    public function patchStatusNetworkingV1beta1($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1beta1/namespaces/{$namespace}/ingresses/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchNetworkingV1beta1NamespacedIngressStatus'
        );
    }

    /**
     * watch individual changes to a list of Ingress. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesNetworkingV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/watch/ingresses"
        		,[
        		]
        	)
        	, 'watchNetworkingV1beta1IngressListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Ingress. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchListNetworkingV1beta1($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/watch/namespaces/{$namespace}/ingresses"
        		,[
        		]
        	)
        	, 'watchNetworkingV1beta1NamespacedIngressList'
        );
    }

    /**
     * watch changes to an object of kind Ingress. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchNetworkingV1beta1($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/watch/namespaces/{$namespace}/ingresses/{$name}"
        		,[
        		]
        	)
        	, 'watchNetworkingV1beta1NamespacedIngress'
        );
    }


}

