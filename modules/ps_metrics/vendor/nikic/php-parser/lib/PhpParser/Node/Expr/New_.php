<?php

declare (strict_types=1);
namespace ps_metrics_module_v4_0_6\PhpParser\Node\Expr;

use ps_metrics_module_v4_0_6\PhpParser\Node;
use ps_metrics_module_v4_0_6\PhpParser\Node\Arg;
use ps_metrics_module_v4_0_6\PhpParser\Node\Expr;
use ps_metrics_module_v4_0_6\PhpParser\Node\VariadicPlaceholder;
class New_ extends CallLike
{
    /** @var Node\Name|Expr|Node\Stmt\Class_ Class name */
    public $class;
    /** @var array<Arg|VariadicPlaceholder> Arguments */
    public $args;
    /**
     * Constructs a function call node.
     *
     * @param Node\Name|Expr|Node\Stmt\Class_ $class      Class name (or class node for anonymous classes)
     * @param array<Arg|VariadicPlaceholder>  $args       Arguments
     * @param array                           $attributes Additional attributes
     */
    public function __construct($class, array $args = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->class = $class;
        $this->args = $args;
    }
    public function getSubNodeNames() : array
    {
        return ['class', 'args'];
    }
    public function getType() : string
    {
        return 'Expr_New';
    }
    public function getRawArgs() : array
    {
        return $this->args;
    }
}
