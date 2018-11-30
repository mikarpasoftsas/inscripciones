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
  'mks_paymentplan_modified_user' => 
  array (
    'id' => 'b8c21577-7fae-b635-bf42-5bff2364b019',
    'relationship_name' => 'mks_paymentplan_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PaymentPlan',
    'rhs_table' => 'mks_paymentplan',
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
  'mks_paymentplan_created_by' => 
  array (
    'id' => 'b8ec7bcb-4055-a669-a926-5bff23bd6bd6',
    'relationship_name' => 'mks_paymentplan_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PaymentPlan',
    'rhs_table' => 'mks_paymentplan',
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
  'mks_paymentplan_assigned_user' => 
  array (
    'id' => 'b917a43e-730c-fa14-6e99-5bff23701d2a',
    'relationship_name' => 'mks_paymentplan_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PaymentPlan',
    'rhs_table' => 'mks_paymentplan',
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
  'securitygroups_mks_paymentplan' => 
  array (
    'id' => 'b94515c6-d042-519c-6f02-5bff239e3e53',
    'relationship_name' => 'securitygroups_mks_paymentplan',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PaymentPlan',
    'rhs_table' => 'mks_paymentplan',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mks_PaymentPlan',
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
  'mks_paymentplan_mks_planfees' => 
  array (
    'id' => 'd3994ed7-e2ae-f4d9-e579-5bff23c76634',
    'relationship_name' => 'mks_paymentplan_mks_planfees',
    'lhs_module' => 'mks_PaymentPlan',
    'lhs_table' => 'mks_paymentplan',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PlanFees',
    'rhs_table' => 'mks_planfees',
    'rhs_key' => 'id',
    'join_table' => 'mks_paymentplan_mks_planfees_c',
    'join_key_lhs' => 'mks_paymentplan_mks_planfeesmks_paymentplan_ida',
    'join_key_rhs' => 'mks_paymentplan_mks_planfeesmks_planfees_idb',
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
  'mks_paymentplan_mks_discountrules' => 
  array (
    'id' => 'd3e2a8c9-b3b1-b570-8e00-5bff235eccf0',
    'relationship_name' => 'mks_paymentplan_mks_discountrules',
    'lhs_module' => 'mks_PaymentPlan',
    'lhs_table' => 'mks_paymentplan',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_DiscountRules',
    'rhs_table' => 'mks_discountrules',
    'rhs_key' => 'id',
    'join_table' => 'mks_paymentplan_mks_discountrules_c',
    'join_key_lhs' => 'mks_paymentplan_mks_discountrulesmks_paymentplan_ida',
    'join_key_rhs' => 'mks_paymentplan_mks_discountrulesmks_discountrules_idb',
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
  'mks_paymentplan_mks_courses' => 
  array (
    'id' => 'd408a4ce-ea11-f227-4817-5bff23e84adb',
    'relationship_name' => 'mks_paymentplan_mks_courses',
    'lhs_module' => 'mks_Courses',
    'lhs_table' => 'mks_courses',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_PaymentPlan',
    'rhs_table' => 'mks_paymentplan',
    'rhs_key' => 'id',
    'join_table' => 'mks_paymentplan_mks_courses_c',
    'join_key_lhs' => 'mks_paymentplan_mks_coursesmks_courses_ida',
    'join_key_rhs' => 'mks_paymentplan_mks_coursesmks_paymentplan_idb',
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
  'mks_paymentplan_securitygroups_1' => 
  array (
    'rhs_label' => 'Filiales',
    'lhs_label' => 'Plan de Pagos',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'admin',
    'lhs_module' => 'mks_PaymentPlan',
    'rhs_module' => 'SecurityGroups',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mks_paymentplan_securitygroups_1',
  ),
);