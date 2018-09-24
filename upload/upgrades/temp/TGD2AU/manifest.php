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



// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'mks',
  'author' => 'MiKarpaSoft',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Courses',
  'published_date' => '2018-09-18 21:52:24',
  'type' => 'module',
  'version' => 1537307544,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Courses',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'mks_Courses',
      'class' => 'mks_Courses',
      'path' => 'modules/mks_Courses/mks_Courses.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'mks_SubjectMatter',
      'class' => 'mks_SubjectMatter',
      'path' => 'modules/mks_SubjectMatter/mks_SubjectMatter.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'mks_CoursesDetail',
      'class' => 'mks_CoursesDetail',
      'path' => 'modules/mks_CoursesDetail/mks_CoursesDetail.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/mks_courses_mks_coursesdetail_mks_Courses.php',
      'to_module' => 'mks_Courses',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/mks_courses_securitygroups_mks_Courses.php',
      'to_module' => 'mks_Courses',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/mks_courses_mks_coursesdetailMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/mks_courses_securitygroupsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/mks_Courses',
      'to' => 'modules/mks_Courses',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/mks_SubjectMatter',
      'to' => 'modules/mks_SubjectMatter',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/mks_CoursesDetail',
      'to' => 'modules/mks_CoursesDetail',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/mks_CoursesDetail.php',
      'to_module' => 'mks_CoursesDetail',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/mks_CoursesDetail.php',
      'to_module' => 'mks_CoursesDetail',
      'language' => 'es_ES',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/mks_Courses.php',
      'to_module' => 'mks_Courses',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/mks_Courses.php',
      'to_module' => 'mks_Courses',
      'language' => 'es_ES',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/SecurityGroups.php',
      'to_module' => 'SecurityGroups',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/SecurityGroups.php',
      'to_module' => 'SecurityGroups',
      'language' => 'es_ES',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/mks_Courses.php',
      'to_module' => 'mks_Courses',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/mks_Courses.php',
      'to_module' => 'mks_Courses',
      'language' => 'es_ES',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_ES.lang.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/mks_courses_mks_coursesdetail_mks_CoursesDetail.php',
      'to_module' => 'mks_CoursesDetail',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/mks_courses_mks_coursesdetail_mks_Courses.php',
      'to_module' => 'mks_Courses',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/mks_courses_securitygroups_SecurityGroups.php',
      'to_module' => 'SecurityGroups',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/mks_courses_securitygroups_mks_Courses.php',
      'to_module' => 'mks_Courses',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
        'SecurityGroups' => 'mks_courses_securitygroups_name',
      ),
    ),
  ),
);