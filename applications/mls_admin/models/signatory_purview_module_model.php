<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MLS
 *
 * MLS系统类库
 *
 * @package         MLS
 * @author          EllisLab Dev Team
 * @copyright       Copyright (c) 2006 - 2014
 * @link            http://mls.house.com
 * @since           Version 1.0
 */

// ------------------------------------------------------------------------

/**
 * signatory_purview_module_model CLASS
 *
 * 权限模块添加、删除、修改管理功能
 *
 * @package         MLS
 * @subpackage      Models
 * @category        Models
 * @author          sun
 */
load_m("Purview_module_base_model");

class Signatory_purview_module_model extends Purview_module_base_model
{

  /**
   * 类初始化
   */
  public function __construct()
  {
    parent::__construct();
  }
}

/* End of file signatory_purview_module_model.php */
/* Location: ./app/models/signatory_purview_module_model.php */
