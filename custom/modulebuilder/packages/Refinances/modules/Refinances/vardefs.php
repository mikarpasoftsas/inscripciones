<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


$vardefs = array (
  'fields' => 
  array (
    'debt' => 
    array (
      'required' => false,
      'name' => 'debt',
      'vname' => 'LBL_DEBT',
      'type' => 'float',
      'massupdate' => 0,
      'default' => '0.00',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'surcharge' => 
    array (
      'required' => false,
      'name' => 'surcharge',
      'vname' => 'LBL_SURCHARGE',
      'type' => 'float',
      'massupdate' => 0,
      'default' => '0.00',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '2',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'discount' => 
    array (
      'required' => false,
      'name' => 'discount',
      'vname' => 'LBL_DISCOUNT',
      'type' => 'float',
      'massupdate' => 0,
      'default' => '0.00',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'total_debt' => 
    array (
      'required' => false,
      'name' => 'total_debt',
      'vname' => 'LBL_TOTAL_DEBT',
      'type' => 'float',
      'massupdate' => 0,
      'default' => '0.00',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'id_autoincrement' => 
    array (
      'required' => false,
      'name' => 'id_autoincrement',
      'vname' => 'LBL_ID_AUTOINCREMENT',
      'type' => 'autoincrement',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 80,
      'size' => '20',
      'dbType' => 'varchar',
      'format' => '{RFM}{-}{y}{-}{00000000}{-}{}',
      'start_number' => '00000001',
    ),
  ),
  'relationships' => 
  array (
  ),
);