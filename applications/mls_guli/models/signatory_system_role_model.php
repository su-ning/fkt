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
 * purview_system_role_model CLASS
 *
 * 系统权限角色添加、删除、修改管理功能
 *
 * @package         MLS
 * @subpackage      Models
 * @category        Models
 * @author          sun
 */
load_m("Signatory_system_role_base_model");

class Signatory_system_role_model extends Signatory_system_role_base_model
{

  /**
   * 类初始化
   */
  public function __construct()
  {
    parent::__construct();
  }
}

/* End of file purview_system_role_model.php */
/* Location: ./app/models/purview_system_role_model.php */
