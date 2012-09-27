--TEST--
ZE2 Tests that an undefined static setter emits an error
--FILE--
<?php

class AccessorTest {
	public static $b {
		get;
	}
}

unset(AccessorTest::$b);
?>
--EXPECTF--
Fatal error: Cannot unset property AccessorTest::$b, no setter defined. in %s on line %d
