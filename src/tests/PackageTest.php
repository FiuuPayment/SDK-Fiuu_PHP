<?php declare(strict_types=1);

require_once(__DIR__."/../support/helpers.php");

use PHPUnit\Framework\TestCase;
use Fiuu\Payment as FiuuPayment;

final class PackageTest extends TestCase
{
    public function testCanDiscoverThisPackage(): void
    {
        $this->assertTrue(
            class_exists(FiuuPayment::class)
        );
    }

    /**
     * @depends testCanDiscoverThisPackage
     */
    public function testCanInstantateBaseClass(): void
    {
        $fiuu = new FiuuPayment(null, null, null, null);

        $this->assertNotNull($fiuu);
        $this->assertEquals(get_class($fiuu), FiuuPayment::class);
    }
}
