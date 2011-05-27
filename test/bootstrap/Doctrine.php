<?php

include(dirname(__FILE__).'/unit.php');

// As for the front controllers, we initialize a configuration object for the test environment:
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);

// We create a database manager. It initializes the Doctrine connection by loading the databases.yml configuration file.
new sfDatabaseManager($configuration);

// We load our test data by using Doctrine_Core::loadData():
Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');