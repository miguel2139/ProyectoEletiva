<?php

declare (strict_types=1);
namespace ps_metrics_module_v4_0_6\PhpParser\NodeVisitor;

use ps_metrics_module_v4_0_6\PhpParser\Node;
use ps_metrics_module_v4_0_6\PhpParser\NodeVisitorAbstract;
/**
 * This visitor can be used to find and collect all nodes satisfying some criterion determined by
 * a filter callback.
 */
class FindingVisitor extends NodeVisitorAbstract
{
    /** @var callable Filter callback */
    protected $filterCallback;
    /** @var Node[] Found nodes */
    protected $foundNodes;
    public function __construct(callable $filterCallback)
    {
        $this->filterCallback = $filterCallback;
    }
    /**
     * Get found nodes satisfying the filter callback.
     *
     * Nodes are returned in pre-order.
     *
     * @return Node[] Found nodes
     */
    public function getFoundNodes() : array
    {
        return $this->foundNodes;
    }
    public function beforeTraverse(array $nodes)
    {
        $this->foundNodes = [];
        return null;
    }
    public function enterNode(Node $node)
    {
        $filterCallback = $this->filterCallback;
        if ($filterCallback($node)) {
            $this->foundNodes[] = $node;
        }
        return null;
    }
}
