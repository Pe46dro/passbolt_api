<?php
declare(strict_types=1);

/**
 * Test runner bootstrap.
 *
 * Add additional configuration/setup your application needs when running
 * unit tests in this file.
 */

use CakephpTestMigrator\Migrator;
use CakephpTestSuiteLight\Sniffer\SnifferRegistry;

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/bootstrap.php';

$_SERVER['PHP_SELF'] = '/';

Migrator::migrate();
SnifferRegistry::get('test')->markAllTablesAsDirty();
