<?php
class CH_Model extends CI_Model {
    public $_table_name;
    public $_prefix;
    private $_primary_key = 'id';

    public function __construct() {
        parent::__construct();
        $this->_prefix = config_item('db_prefix');
    }

    public function insert($data) {
        $this->db->insert($this->_table_name, $data);
        return $this->db->insert_id();
    }

    public function update($data, $id) {
        //unset($data[$this->_primary_key], $data[config_item('csrf_token_name')]);
        $this->db->where($this->_primary_key, $id);
        return $this->db->update($this->_table_name, $data);
    }

    public function delete($id) {
        $id = intval($id);
        return $deleted = $this->db->query("DELETE FROM `{$this->_table_name}` WHERE `{$this->_primary_key}` = ?", array($id));
    }

    public function all($order = '') {
        $order = $order ? " ORDER BY {$order}" : "";
        $sql = "SELECT * FROM `{$this->_table_name}`{$order}";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function hits($id) {
        $id = intval($id);
        $sql = "UPDATE `{$this->_table_name}` SET `hits` = `hits` + 1 WHERE id = ?";
        $this->db->query($sql, array($id));
    }

    public function ar_insert($data) {
        $this->db->insert($this->_table_name, $data);
        return $this->db->insert_id();
    }

    public function ar_update($data, $id) {
        unset($data[$this->_primary_key]);
        $this->db->where($this->_primary_key, $id);
        return $this->db->update($this->_table_name, $data);
    }

    public function D($id) {
        $id = intval($id);
        return $deleted = $this->db->query("DELETE FROM `{$this->_table_name}` WHERE `{$this->_primary_key}` = ?", array($id));
    }

    public function get_by_id($id) {
        $id = intval($id);
        $query = $this->db->query("SELECT * FROM `{$this->_table_name}` WHERE {$this->_primary_key} = {$id}");
        return $query->first_row();
    }

    public function set_table_name($table_name) {
        $this->_table_name = $this->_prefix.$table_name;
    }
    public function set_primary_key($primary_key) {
        $this->_primary_key = $primary_key;
    }
    public function set_prefix($prefix) {
        $this->_prefix = $prefix;
    }
}