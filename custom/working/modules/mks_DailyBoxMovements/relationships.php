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
    'id' => '9e9bdc27-3eb1-db9a-e2a9-5ce04396fb26',
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
    'from_studio' => true,
  ),
  'mks_dailyboxmovements_created_by' => 
  array (
    'id' => '9ec7b7ad-d968-cb1f-f630-5ce043ca2747',
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
    'from_studio' => true,
  ),
  'mks_dailyboxmovements_assigned_user' => 
  array (
    'id' => '9eee882b-2fd1-2977-ce07-5ce043bfb1df',
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
    'from_studio' => true,
  ),
  'securitygroups_mks_dailyboxmovements' => 
  array (
    'id' => '9f11cff3-c3fe-96b8-a3f3-5ce043943ef9',
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
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => 'default',
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'mks_dailyboxmovements_mks_paymentscash_1' => 
  array (
    'id' => 'aeed067d-e840-ebf3-c7e2-5ce04347133e',
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
    'id' => 'b150f9df-1cf6-3545-2602-5ce043a5e8b7',
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
    'rhs_label' => 'Movimiento Manual',
    'lhs_label' => 'Mov. Caja Diaria',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'mks_DailyBoxMovements',
    'rhs_module' => 'mks_Movement',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mks_dailyboxmovements_mks_movement_1',
  ),
);