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
  'mks_box_mks_collectionconcepts_1' => 
  array (
    'id' => '1420177d-5d28-8f6b-6c5b-5c76bf513212',
    'relationship_name' => 'mks_box_mks_collectionconcepts_1',
    'lhs_module' => 'mks_Box',
    'lhs_table' => 'mks_box',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CollectionConcepts',
    'rhs_table' => 'mks_collectionconcepts',
    'rhs_key' => 'id',
    'join_table' => 'mks_box_mks_collectionconcepts_1_c',
    'join_key_lhs' => 'mks_box_mks_collectionconcepts_1mks_box_ida',
    'join_key_rhs' => 'mks_box_mks_collectionconcepts_1mks_collectionconcepts_idb',
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
  'mks_registrationreceipts_mks_collectionconcepts_1' => 
  array (
    'id' => '148bd613-7580-f1b8-6d1f-5c76bf80cb8e',
    'relationship_name' => 'mks_registrationreceipts_mks_collectionconcepts_1',
    'lhs_module' => 'mks_RegistrationReceipts',
    'lhs_table' => 'mks_registrationreceipts',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CollectionConcepts',
    'rhs_table' => 'mks_collectionconcepts',
    'rhs_key' => 'id',
    'join_table' => 'mks_registrationreceipts_mks_collectionconcepts_1_c',
    'join_key_lhs' => 'mks_regist10ebeceipts_ida',
    'join_key_rhs' => 'mks_registf2c4oncepts_idb',
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
  'mks_collectionconcepts_modified_user' => 
  array (
    'id' => 'f020ebaa-9e22-20f3-bb65-5c76bffcaeb3',
    'relationship_name' => 'mks_collectionconcepts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CollectionConcepts',
    'rhs_table' => 'mks_collectionconcepts',
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
  'mks_collectionconcepts_created_by' => 
  array (
    'id' => 'f053ee27-ad5d-f542-0179-5c76bff8c9b7',
    'relationship_name' => 'mks_collectionconcepts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CollectionConcepts',
    'rhs_table' => 'mks_collectionconcepts',
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
  'mks_collectionconcepts_assigned_user' => 
  array (
    'id' => 'f08625db-9962-7d87-89e7-5c76bf128482',
    'relationship_name' => 'mks_collectionconcepts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CollectionConcepts',
    'rhs_table' => 'mks_collectionconcepts',
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
  'securitygroups_mks_collectionconcepts' => 
  array (
    'id' => 'f0b57be8-0ed4-9de3-6aac-5c76bfb1195f',
    'relationship_name' => 'securitygroups_mks_collectionconcepts',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_CollectionConcepts',
    'rhs_table' => 'mks_collectionconcepts',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mks_CollectionConcepts',
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
  'mks_collectionconcepts_mks_customplanfees_1' => 
  array (
    'lhs_module' => 'mks_CollectionConcepts',
    'rhs_module' => 'mks_CustomPlanFees',
    'relationship_type' => 'one-to-one',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mks_collectionconcepts_mks_customplanfees_1',
  ),
);