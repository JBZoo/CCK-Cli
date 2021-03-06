<?php
/**
 * JBZoo CCK Cli
 *
 * This file is part of the JBZoo CCK package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package   CCK Cli
 * @license   MIT
 * @copyright Copyright (C) JBZoo.com,  All rights reserved.
 * @link      https://github.com/JBZoo/CCK-Cli
 * @author    Sergey Kalistratov <kalistratov.s.m@gmail.com>
 */

defined('JBZOO_CLI') or die;

return array(
    'params'     => array(
        'step_size'     => 25,
        'app_list'      => array(1),            //  Application id,
        'site_name'     => 'My site name',
        'company_name'  => 'My company name',
        'type_list'     => array('product'),    //  Item types
        'currency_rate' => 'default',           //  Exchange rates used by site
                                                //  CBRF - Central Bank of Russia exchange rate
                                                //  NBU  - The course of the National Bank of Ukraine
                                                //  NBK  - National Bank of Kazakhstan Course
                                                //  CB   - User Bank country course
        'file_path'     => 'cli/jbzoo/resources/sources',
        'file_name'     => 'yml'
    ),
);
