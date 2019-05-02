<?php

class PrivacyLevels {
	const PUBLIC='public';
	const PRIVATE='private';

	public function getPrivacyLevels()
	{
		return [self::PUBLIC, self::PRIVATE];
	}
}