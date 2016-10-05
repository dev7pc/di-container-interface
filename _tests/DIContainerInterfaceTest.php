<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use SevenPercent\DIContainerInterface;

class DIContainerInterfaceTest extends TestCase {

	public function testBasicFunctionality() {
		$this->assertTrue(new class implements DIContainerInterface {
			public function setItem(string $key, $value) {
			}
			public function getItem(string $key) {
			}
		} instanceof DIContainerInterface);
	}
}
