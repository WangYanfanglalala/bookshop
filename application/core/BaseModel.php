<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 10:34
 */
class BaseModel extends CI_Model
{
    protected $key = 'id';

    public function __construct($tbl_name = '')
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('core/TCore');
        if ($tbl_name) {
            $this->tableName = $tbl_name;
        }
    }

    /** 插入一条记录
     * @param $data
     * @return int 插入失败返回0，成功返回生成的id
     */
    public function insert($data)
    {
        $flags = $this->db->insert($this->tableName, $data);
        if ($flags) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    /** 批量插入
     * @param $data
     * @return int
     */
    public function insert_batch($data)
    {
        $flags = $this->db->insert_batch($this->tableName, $data);
        if ($flags) {
            return $this->db->affected_rows();
        } else {
            return 0;
        }
    }

    /**
     * 删除，支持主键删除和条件删除
     * @param $where ，字符串或者数组 $array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
     * @return mixed
     */
    public function delete($where)
    {
        if (is_numeric($where)) {
            $where[$this->key] = $where;
        }
        $flag = $this->db->delete($this->tableName, $where);
        return $flag;
    }

    /**
     * 更新
     * @param $data 要更新的数据
     * @param $where ，字符串或者数组 $array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
     * @return mixed
     */
    public function update($data, $where)
    {
        $flag = $this->db->update($this->tableName, $data, $where);
        return $flag;
    }

    /** 查询单条数据
     * @param string $field
     * @param $where 字符串或者数组 $array = array('name !=' => $name, 'id <' => $id, 'date >' => $date)
     * @param $type object or array
     */
    public function getRow($field = "*", $where, $type = "array")
    {
        $this->db->select($field);
        $this->db->where($where);
        $query = $this->db->get($this->tableName);
        $row = $query->row(0, $type);
        return $row;
    }

    /** 查询多条数据
     * @param $table
     * @param int $page
     * @param int $pageSize
     * @param string $field
     * @param $where
     * @param string $orderBy
     * @param string $type
     * @return mixed
     */
    public function getList($page = 1, $pageSize = 100, $field = "*", $where, $orderBy = "id desc", $type = "array")
    {
        $this->db->select($field);
        $this->db->where($where);
        $this->db->order_by($orderBy);
        $offset = ($page - 1) * $pageSize;
        $query = $this->db->get($this->tableName, $pageSize, $offset);
        $list = $query->result($type);
        return $list;
    }
}

?>