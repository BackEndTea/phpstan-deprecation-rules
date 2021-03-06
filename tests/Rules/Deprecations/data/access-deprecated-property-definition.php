<?php

namespace AccessDeprecatedProperty;

trait FooTrait
{

	public $fooFromTrait;

	/**
	 * @deprecated
	 */
	public $deprecatedFooFromTrait;

}

class Foo {

	use FooTrait;

	public $foo;

	/**
	 * @deprecated
	 */
	public $deprecatedFoo;

	/**
	 * @deprecated Use something else instead.
	 */
	public $deprecatedWithDescription;

}
