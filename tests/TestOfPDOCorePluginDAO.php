<?php
/**
 *
 * ThinkUp/tests/TestOfPDOCorePluginDAO.php
 *
 * Copyright (c) 2009-2012 Gina Trapani
 *
 * LICENSE:
 *
 * This file is part of ThinkUp (http://thinkupapp.com).
 *
 * ThinkUp is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any
 * later version.
 *
 * ThinkUp is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with ThinkUp.  If not, see
 * <http://www.gnu.org/licenses/>.
 *
 * @author Gina Trapani <ginatrapani[at]gmail[dot]com>
 * @license http://www.gnu.org/licenses/gpl.html
 * @copyright 2009-2012 Gina Trapani
 */
require_once dirname(__FILE__).'/init.tests.php';
require_once THINKUP_WEBAPP_PATH.'_lib/extlib/simpletest/autorun.php';
require_once THINKUP_WEBAPP_PATH.'config.inc.php';
require_once THINKUP_WEBAPP_PATH.'plugins/twitter/model/class.TwitterInstance.php';

class TestOfPDOCorePluginDAO extends ThinkUpUnitTestCase {

    public function testInitDAO() {
        $test_dao = new TestCorePluginMySQLDAO();
        $this->assertNotNull(TestCorePluginMySQLDAO::$PDO);
    }

    public function testGetFields() {
        $test_dao = new TestCorePluginMySQLDAO();
        $fields = $test_dao->getFieldListForTesting();
        $this->assertEqual($fields, "#prefix#test_data.id, test_name, test_id");
    }
}