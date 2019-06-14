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
  'mks_dailyboxmovements_modified_user' => 
  array (
    'id' => '7c6db91d-c753-5dd5-e505-5cfa7a1e6b2e',
    'relationship_name' => 'mks_dailyboxmovements_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_DailyBoxMovements',
    'rhs_table' => 'mks_dailyboxmovements',
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
  'mks_dailyboxmovements_created_by' => 
  array (
    'id' => '7c9bf944-dfb0-958b-3508-5cfa7ad3cadc',
    'relationship_name' => 'mks_dailyboxmovements_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_DailyBoxMovements',
    'rhs_table' => 'mks_dailyboxmovements',
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
  'mks_dailyboxmovements_assigned_user' => 
  array (
    'id' => '7cc2567e-87a4-761f-8e6f-5cfa7aae2d05',
    'relationship_name' => 'mks_dailyboxmovements_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_DailyBoxMovements',
    'rhs_table' => 'mks_dailyboxmovements',
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
  'securitygroups_mks_dailyboxmovements' => 
  array (
    'id' => '7ce5022e-54ac-1a99-2c04-5cfa7afc1070',
    'relationship_name' => 'securitygroups_mks_dailyboxmovements',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_DailyBoxMovements',
    'rhs_table' => 'mks_dailyboxmovements',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mks_DailyBoxMovements',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'admin',
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'mks_dailyboxmovements_mks_paymentscash_1' => 
  array (
    'id' => '92f62cf5-6dfb-af2b-cf8e-5cfa7a45f05e',
    'relationship_name' => 'mks_dailyboxmovements_mks_paymentscash_1',
    'lhs_module' => 'mks_DailyBoxMovements',
    'lhs_table' => 'mks_dailyboxmovements',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PaymentsCash',
    'rhs_table' => 'mks_paymentscash',
    'rhs_key' => 'id',
    'join_table' => 'mks_dailyboxmovements_mks_paymentscash_1_c',
    'join_key_lhs' => 'mks_dailybae34vements_ida',
    'join_key_rhs' => 'mks_dailyboxmovements_mks_paymentscash_1mks_paymentscash_idb',
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
  'mks_dailyboxmovements_mks_paymentstransfer_1' => 
  array (
    'id' => '9573fe80-67dc-be7c-e295-5cfa7a93d596',
    'relationship_name' => 'mks_dailyboxmovements_mks_paymentstransfer_1',
    'lhs_module' => 'mks_DailyBoxMovements',
    'lhs_table' => 'mks_dailyboxmovements',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PaymentsTransfer',
    'rhs_table' => 'mks_paymentstransfer',
    'rhs_key' => 'id',
    'join_table' => 'mks_dailyboxmovements_mks_paymentstransfer_1_c',
    'join_key_lhs' => 'mks_dailyb1213vements_ida',
    'join_key_rhs' => 'mks_dailyb92a4ransfer_idb',
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
  'mks_dailyboxmovements_mks_movement_1' => 
  array (
    'id' => '95eda283-d2f7-931d-4ae1-5cfa7aa71e45',
    'relationship_name' => 'mks_dailyboxmovements_mks_movement_1',
    'lhs_module' => 'mks_DailyBoxMovements',
    'lhs_table' => 'mks_dailyboxmovements',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Movement',
    'rhs_table' => 'mks_movement',
    'rhs_key' => 'id',
    'join_table' => 'mks_dailyboxmovements_mks_movement_1_c',
    'join_key_lhs' => 'mks_dailyboxmovements_mks_movement_1mks_dailyboxmovements_ida',
    'join_key_rhs' => 'mks_dailyboxmovements_mks_movement_1mks_movement_idb',
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