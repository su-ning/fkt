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
 * Personnel_log_model CLASS
 *
 * 日志信息类
 *
 * @package         MLS
 * @subpackage      Models
 * @category        Models
 * @author          sun
 */
load_m("Personnel_log_base_model");

class Personnel_log_model extends Personnel_log_base_model
{

  /**
   * 类初始化
   */
  public function __construct()
  {
    parent::__construct();
    $this->_tbl1 = 'personnel_log';
    $this->_tbl2 = 'broker_info';
    $this->_tbl3 = 'agency';
  }

  //列表数据
  public function get_list_by($where, $start = 0, $limit = 20,
                              $order_key = 'id', $order_by = 'DESC')
  {
    //查询字段
    $this->db_city->select("{$this->_tbl1}.*,{$this->_tbl2}.truename,{$this->_tbl3}.name AS agency_name");

    if ($where) {
      //查询条件
      $this->db_city->where($where);
    }

    $this->db_city->from($this->_tbl1);
    $this->db_city->join($this->_tbl2, "{$this->_tbl1}.broker_id = {$this->_tbl2}.broker_id");
    $this->db_city->join($this->_tbl3, "{$this->_tbl2}.agency_id = {$this->_tbl3}.id");

    //排序条件
    $this->db_city->order_by($this->_tbl1 . '.' . $order_key, $order_by);
    if ($start >= 0 && $limit > 0) {
      $this->db_city->limit($limit, $start);
    }
    //返回结果
    return $this->db_city->get()->result_array();
  }
}

/* End of file personnel_log_model.php */
/* Location: ./app/models/personnel_log_model.php */
