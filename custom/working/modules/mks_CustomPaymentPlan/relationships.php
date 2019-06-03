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
  'mks_custompaymentplan_modified_user' => 
  array (
    'id' => '727f3a0a-7921-12e0-6ca5-5c74201b61c4',
    'relationship_name' => 'mks_custompaymentplan_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CustomPaymentPlan',
    'rhs_table' => 'mks_custompaymentplan',
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
  'mks_custompaymentplan_created_by' => 
  array (
    'id' => '72b8e642-f5c7-22b6-cf64-5c7420f68888',
    'relationship_name' => 'mks_custompaymentplan_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CustomPaymentPlan',
    'rhs_table' => 'mks_custompaymentplan',
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
  'mks_custompaymentplan_assigned_user' => 
  array (
    'id' => '72f09549-b187-4c49-c0ec-5c742054492c',
    'relationship_name' => 'mks_custompaymentplan_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CustomPaymentPlan',
    'rhs_table' => 'mks_custompaymentplan',
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
  'securitygroups_mks_custompaymentplan' => 
  array (
    'id' => '73246036-cc36-e875-cf2a-5c74208d2629',
    'relationship_name' => 'securitygroups_mks_custompaymentplan',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CustomPaymentPlan',
    'rhs_table' => 'mks_custompaymentplan',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mks_CustomPaymentPlan',
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
  'mks_custompaymentplan_mks_customplanfees' => 
  array (
    'id' => '9cc0e5a5-0dd4-8bf8-6712-5c74209c5c28',
    'relationship_name' => 'mks_custompaymentplan_mks_customplanfees',
    'lhs_module' => 'mks_CustomPaymentPlan',
    'lhs_table' => 'mks_custompaymentplan',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CustomPlanFees',
    'rhs_table' => 'mks_customplanfees',
    'rhs_key' => 'id',
    'join_table' => 'mks_custompaymentplan_mks_customplanfees_c',
    'join_key_lhs' => 'mks_customed0dentplan_ida',
    'join_key_rhs' => 'mks_custompaymentplan_mks_customplanfeesmks_customplanfees_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'mks_custompaymentplan_mks_registration' => 
  array (
    'id' => '9e0884ac-c9d9-2d53-67dc-5c74204a2945',
    'relationship_name' => 'mks_custompaymentplan_mks_registration',
    'lhs_module' => 'mks_Registration',
    'lhs_table' => 'mks_registration',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CustomPaymentPlan',
    'rhs_table' => 'mks_custompaymentplan',
    'rhs_key' => 'id',
    'join_table' => 'mks_custompaymentplan_mks_registration_c',
    'join_key_lhs' => 'mks_custompaymentplan_mks_registrationmks_registration_ida',
    'join_key_rhs' => 'mks_custompaymentplan_mks_registrationmks_custompaymentplan_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'mks_customdiscountrules_mks_custompaymentplan' => 
  array (
    'id' => '9e403669-52af-97cc-bd12-5c74205b652f',
    'relationship_name' => 'mks_customdiscountrules_mks_custompaymentplan',
    'lhs_module' => 'mks_CustomPaymentPlan',
    'lhs_table' => 'mks_custompaymentplan',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CustomDiscountRules',
    'rhs_table' => 'mks_customdiscountrules',
    'rhs_key' => 'id',
    'join_table' => 'mks_customdiscountrules_mks_custompaymentplan_c',
    'join_key_lhs' => 'mks_custom2713entplan_ida',
    'join_key_rhs' => 'mks_custom34c2ntrules_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'mks_custompaymentplan_mks_registrationreceipts_1' => 
  array (
    'rhs_label' => 'Recibos',
    'lhs_label' => 'Plan de Pagos Personalizado',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'mks_CustomPaymentPlan',
    'rhs_module' => 'mks_RegistrationReceipts',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  ),
);