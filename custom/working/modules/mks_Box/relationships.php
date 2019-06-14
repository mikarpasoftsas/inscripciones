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
  'mks_box_securitygroups' => 
  array (
    'id' => '179bd561-fd4a-ed8b-a64b-5d003b0d5625',
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
    'from_studio' => true,
  ),
  'mks_box_modified_user' => 
  array (
    'id' => '181b7bbd-45c3-c90d-9dc2-5d003b46fd45',
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
    'from_studio' => true,
  ),
  'mks_box_created_by' => 
  array (
    'id' => '1a28edb2-eedd-dbe1-919c-5d003b077e13',
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
    'from_studio' => true,
  ),
  'mks_box_assigned_user' => 
  array (
    'id' => '1aba8846-8cd3-b516-a955-5d003bd82ad3',
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
    'from_studio' => true,
  ),
  'securitygroups_mks_box' => 
  array (
    'id' => '1d0ff886-1b91-a00f-2596-5d003b9663c7',
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
    'from_studio' => true,
  ),
  'mks_box_mks_paymentscash_1' => 
  array (
    'id' => '1d856026-843f-11e4-d0d0-5d003b02ae49',
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
    'id' => '2673e941-1311-3fc4-3288-5d003ba8e71c',
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
  'mks_box_mks_authdestinationbox_1' => 
  array (
    'rhs_label' => 'Aut.  Cajas Destino',
    'lhs_label' => 'Cajas',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'mks_Box',
    'rhs_module' => 'mks_AuthDestinationBox',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mks_box_mks_authdestinationbox_1',
  ),
);