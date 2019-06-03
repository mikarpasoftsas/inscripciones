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


$relationships = array (
  'mks_box_modified_user' => 
  array (
    'id' => '890dbe59-19ff-680c-51f2-5c76ee2cfc0a',
    'relationship_name' => 'mks_box_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Box',
    'rhs_table' => 'mks_box',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mks_box_created_by' => 
  array (
    'id' => '89400778-3f4b-e342-6c02-5c76ee45421c',
    'relationship_name' => 'mks_box_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Box',
    'rhs_table' => 'mks_box',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mks_box_assigned_user' => 
  array (
    'id' => '89722438-1b1c-cc89-faa4-5c76eeb50a59',
    'relationship_name' => 'mks_box_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Box',
    'rhs_table' => 'mks_box',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'securitygroups_mks_box' => 
  array (
    'id' => '89b02251-9931-d866-a233-5c76ee2df683',
    'relationship_name' => 'securitygroups_mks_box',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Box',
    'rhs_table' => 'mks_box',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mks_Box',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => 'admin',
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mks_box_securitygroups' => 
  array (
    'id' => 'd8e29c04-a2fe-8c48-03d9-5c76ee37c366',
    'relationship_name' => 'mks_box_securitygroups',
    'lhs_module' => 'mks_Box',
    'lhs_table' => 'mks_box',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'id',
    'join_table' => 'mks_box_securitygroups_c',
    'join_key_lhs' => 'mks_box_securitygroupsmks_box_ida',
    'join_key_rhs' => 'mks_box_securitygroupssecuritygroups_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'admin',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'mks_box_mks_paymentscash_1' => 
  array (
    'id' => 'db9e164c-23f8-b795-53a4-5c76eee22deb',
    'relationship_name' => 'mks_box_mks_paymentscash_1',
    'lhs_module' => 'mks_Box',
    'lhs_table' => 'mks_box',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PaymentsCash',
    'rhs_table' => 'mks_paymentscash',
    'rhs_key' => 'id',
    'join_table' => 'mks_box_mks_paymentscash_1_c',
    'join_key_lhs' => 'mks_box_mks_paymentscash_1mks_box_ida',
    'join_key_rhs' => 'mks_box_mks_paymentscash_1mks_paymentscash_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mks_box_mks_paymentstransfer_1' => 
  array (
    'id' => 'deb2a469-8441-732d-a96e-5c76ee062afe',
    'relationship_name' => 'mks_box_mks_paymentstransfer_1',
    'lhs_module' => 'mks_Box',
    'lhs_table' => 'mks_box',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PaymentsTransfer',
    'rhs_table' => 'mks_paymentstransfer',
    'rhs_key' => 'id',
    'join_table' => 'mks_box_mks_paymentstransfer_1_c',
    'join_key_lhs' => 'mks_box_mks_paymentstransfer_1mks_box_ida',
    'join_key_rhs' => 'mks_box_mks_paymentstransfer_1mks_paymentstransfer_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
);