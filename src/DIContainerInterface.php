<?php declare(strict_types = 1);

namespace SevenPercent;

interface DIContainerInterface {

	public function setItem(string $key, $value);

	public function getItem(string $key);
}
