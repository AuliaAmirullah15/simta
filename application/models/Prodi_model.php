<?php

class Prodi_model extends CI_Model {

private $primary_key='id_PS';
private $table_name='program_studi';


function __construct() {
	parent::__construct();
}

function get_paged_list()
{
	return $this->db->get($this->table_name);
	/*
	if(empty($order_column)|| empty($order_type))
	$this->db->order_by($this->primary_key,'asc');
	else
	$this->db->order_by($order_column,$order_type);
	return $this->db->get($this->table_name,$limit, $offset); */
	
}

    function get_judul_ta($nim)
    {
        $this->db->select('*')->from('pengajuan_judul')->where('nim',$nim)->where('status_kelayakan !=','simpan sementara');
        return $this->db->get();
    }

    function save_bidang($data)
    {
        $this->db->insert('bidang_ilmu',$data);
        return $this->db->insert_id();
    }
    
function get_data_bidang($id)
{
    $this->db->select('*')->from('bidang_ilmu')->where('id',$id);
    return $this->db->get();
}
    
function get_bidang_ilmu($id_prodi)
{
    $this->db->select('*')->from('bidang_ilmu')->where('prodi',$id_prodi);
    return $this->db->get();
}

function get_paged_list_update($kd)
{
	$this->db->where($this->primary_key,$kd);
	return $this->db->get($this->table_name);
	
}

function count_all() {
	return $this->db->count_all($this->table_name);
}

function get_by_id($id) {
	$this->db->where($this->primary_key,$id);
	return $this->db->get($this->table_name);
}

function save($person) {
	$this->db->insert($this->table_name,$person);
	return $this->db->insert_id();
}

function update($id,$person) {
	$this->db->where($this->primary_key,$id);
	$this->db->update($this->table_name,$person);
}

function delete($id) {

	$this->db->where($this->primary_key,$id);
	$this->db->delete($this->table_name);
}
    
function get_kuota(){
    $this->db->select('stambuk, SUM(kuota) as kuota');
    $this->db->from('kuota_bimbingan');
    $this->db->group_by('stambuk');
    $this->db->order_by('stambuk', 'ASC');
    
    return $this->db->get();
}
}