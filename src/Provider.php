<?php
declare(strict_types=1);

namespace SuperKernel\Annotation;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
final readonly class Provider
{
	public function __construct(public string $class, public int $priority = 0)
	{
	}
}