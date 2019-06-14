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
  'mks_registration_mks_registrationreceipts_1' => 
  array (
    'id' => '24d9ac10-08e5-786a-28bd-5c8a73f90b2d',
    'relationship_name' => 'mks_registration_mks_registrationreceipts_1',
    'lhs_module' => 'mks_Registration',
    'lhs_table' => 'mks_registration',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_RegistrationReceipts',
    'rhs_table' => 'mks_registrationreceipts',
    'rhs_key' => 'id',
    'join_table' => 'mks_registration_mks_registrationreceipts_1_c',
    'join_key_lhs' => 'mks_registration_mks_registrationreceipts_1mks_registration_ida',
    'join_key_rhs' => 'mks_regist608feceipts_idb',
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
  'mks_registration_contacts' => 
  array (
    'id' => '2830e42f-3b16-0d5a-d51c-5c8a73d57465',
    'relationship_name' => 'mks_registration_contacts',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Registration',
    'rhs_table' => 'mks_registration',
    'rhs_key' => 'id',
    'join_table' => 'mks_registration_contacts_c',
    'join_key_lhs' => 'mks_registration_contactscontacts_ida',
    'join_key_rhs' => 'mks_registration_contactsmks_registration_idb',
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
    'id' => '285bbd7f-caaa-d93f-9430-5c8a73ca077b',
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
  'accounts_mks_registration_1' => 
  array (
    'id' => '28b055f8-5ace-0b47-3332-5c8a73e7acd8',
    'relationship_name' => 'accounts_mks_registration_1',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Registration',
    'rhs_table' => 'mks_registration',
    'rhs_key' => 'id',
    'join_table' => 'accounts_mks_registration_1_c',
    'join_key_lhs' => 'accounts_mks_registration_1accounts_ida',
    'join_key_rhs' => 'accounts_mks_registration_1mks_registration_idb',
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
  'mks_registration_securitygroups_1' => 
  array (
    'id' => '28dbb8ef-f378-bd12-0f51-5c8a736b27f8',
    'relationship_name' => 'mks_registration_securitygroups_1',
    'lhs_module' => 'mks_Registration',
    'lhs_table' => 'mks_registration',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'id',
    'join_table' => 'mks_registration_securitygroups_1_c',
    'join_key_lhs' => 'mks_registration_securitygroups_1mks_registration_ida',
    'join_key_rhs' => 'mks_registration_securitygroups_1securitygroups_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'admin',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mks_refinances_mks_registration' => 
  array (
    'id' => '29037e76-b42f-6158-e133-5c8a734c8780',
    'relationship_name' => 'mks_refinances_mks_registration',
    'lhs_module' => 'mks_Registration',
    'lhs_table' => 'mks_registration',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Refinances',
    'rhs_table' => 'mks_refinances',
    'rhs_key' => 'id',
    'join_table' => 'mks_refinances_mks_registration_c',
    'join_key_lhs' => 'mks_refinances_mks_registrationmks_registration_ida',
    'join_key_rhs' => 'mks_refinances_mks_registrationmks_refinances_idb',
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
  'mks_registration_modified_user' => 
  array (
    'id' => '5ccd0a82-7b62-808c-b969-5c8a736868af',
    'relationship_name' => 'mks_registration_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Registration',
    'rhs_table' => 'mks_registration',
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
  'mks_registration_created_by' => 
  array (
    'id' => '5f680092-8ba7-9159-6dd8-5c8a732630ca',
    'relationship_name' => 'mks_registration_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Registration',
    'rhs_table' => 'mks_registration',
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
  'mks_registration_assigned_user' => 
  array (
    'id' => '62030f4f-ef71-7bdf-fb94-5c8a73221ad5',
    'relationship_name' => 'mks_registration_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Registration',
    'rhs_table' => 'mks_registration',
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
  'securitygroups_mks_registration' => 
  array (
    'id' => '64a4040b-6ee8-4a02-52c4-5c8a7336191c',
    'relationship_name' => 'securitygroups_mks_registration',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_Registration',
    'rhs_table' => 'mks_registration',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mks_Registration',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'admin',
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'mks_registration_mks_management_1' => 
  array (
    'rhs_label' => 'Gestión',
    'lhs_label' => 'Matriculas',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'mks_Registration',
    'rhs_module' => 'mks_Management',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mks_registration_mks_management_1',
  ),
);