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
  'mks_academicgroups_modified_user' => 
  array (
    'id' => '7225c3ed-0e9b-a584-e421-5bd1d552f24e',
    'relationship_name' => 'mks_academicgroups_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_AcademicGroups',
    'rhs_table' => 'mks_academicgroups',
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
    'lhs_subpanel' => 'default',
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'mks_academicgroups_created_by' => 
  array (
    'id' => '72780678-d8a1-a2de-2c13-5bd1d5d97150',
    'relationship_name' => 'mks_academicgroups_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_AcademicGroups',
    'rhs_table' => 'mks_academicgroups',
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
    'lhs_subpanel' => 'default',
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'mks_academicgroups_assigned_user' => 
  array (
    'id' => '72baca76-cf08-aa4e-60f3-5bd1d56047b7',
    'relationship_name' => 'mks_academicgroups_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_AcademicGroups',
    'rhs_table' => 'mks_academicgroups',
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
    'lhs_subpanel' => 'default',
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'securitygroups_mks_academicgroups' => 
  array (
    'id' => '72ff253a-4e4a-50fd-b350-5bd1d57772ba',
    'relationship_name' => 'securitygroups_mks_academicgroups',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_AcademicGroups',
    'rhs_table' => 'mks_academicgroups',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mks_AcademicGroups',
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
  'mks_academicgroups_securitygroups' => 
  array (
    'id' => '936daab8-71ae-90ba-e8ec-5bd1d5f5b77e',
    'relationship_name' => 'mks_academicgroups_securitygroups',
    'lhs_module' => 'mks_AcademicGroups',
    'lhs_table' => 'mks_academicgroups',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'id',
    'join_table' => 'mks_academicgroups_securitygroups_c',
    'join_key_lhs' => 'mks_academicgroups_securitygroupsmks_academicgroups_ida',
    'join_key_rhs' => 'mks_academicgroups_securitygroupssecuritygroups_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'admin',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'mks_academicgroups_mks_groupschedule' => 
  array (
    'id' => '93b6e6ce-6e5b-6b67-c500-5bd1d53e07ed',
    'relationship_name' => 'mks_academicgroups_mks_groupschedule',
    'lhs_module' => 'mks_AcademicGroups',
    'lhs_table' => 'mks_academicgroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_GroupSchedule',
    'rhs_table' => 'mks_groupschedule',
    'rhs_key' => 'id',
    'join_table' => 'mks_academicgroups_mks_groupschedule_c',
    'join_key_lhs' => 'mks_academicgroups_mks_groupschedulemks_academicgroups_ida',
    'join_key_rhs' => 'mks_academicgroups_mks_groupschedulemks_groupschedule_idb',
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
  'mks_academicgroups_users' => 
  array (
    'id' => '940861d3-158f-72e1-0776-5bd1d526c32d',
    'relationship_name' => 'mks_academicgroups_users',
    'lhs_module' => 'mks_AcademicGroups',
    'lhs_table' => 'mks_academicgroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'join_table' => 'mks_academicgroups_users_c',
    'join_key_lhs' => 'mks_academicgroups_usersmks_academicgroups_ida',
    'join_key_rhs' => 'mks_academicgroups_usersusers_idb',
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
  'mks_academicgroups_mks_groupmatters_1' => 
  array (
    'id' => '94b3d152-6b32-655c-ed1d-5bd1d52dd64e',
    'relationship_name' => 'mks_academicgroups_mks_groupmatters_1',
    'lhs_module' => 'mks_AcademicGroups',
    'lhs_table' => 'mks_academicgroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mks_GroupMatters',
    'rhs_table' => 'mks_groupmatters',
    'rhs_key' => 'id',
    'join_table' => 'mks_academicgroups_mks_groupmatters_1_c',
    'join_key_lhs' => 'mks_academicgroups_mks_groupmatters_1mks_academicgroups_ida',
    'join_key_rhs' => 'mks_academicgroups_mks_groupmatters_1mks_groupmatters_idb',
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
  'mks_academicgroups_mks_teacher_1' => 
  array (
    'rhs_label' => 'Docentes',
    'lhs_label' => 'Grupos',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'mks_AcademicGroups',
    'rhs_module' => 'mks_Teacher',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mks_academicgroups_mks_teacher_1',
  ),
);