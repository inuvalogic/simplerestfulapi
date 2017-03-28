<?php

namespace Api\Controller;

use Api\Core\Response;
use Api\Model\ArtikelModel;

class ArtikelController extends BaseController
{
	public function get()
	{
		$id = $this->uri_segment(1);

		if ($id!=false)
		{
			$row = ArtikelModel::one($id);

			if ($row!=false)
			{
				$output = array(
					'id' => $row['id'],
					'judul' => $row['judul'],
					'isi' => $row['isi'],
					'gambar' => $row['gambar'],
					'judul_gambar' => $row['judul_gambar'],
				);

				Response::sent(200, $output);

			} else {
				Response::sent(400);
			}

		} else {
			
			$data = ArtikelModel::all();

			if ($data!=false)
			{
				$output = array();
				$a = 0;
				foreach ($data as $row) {
					$output[$a]['id'] = $row['id'];
					$output[$a]['judul'] = $row['judul'];
					$output[$a]['isi'] = $row['isi'];
					$output[$a]['gambar'] = $row['gambar'];
					$output[$a]['judul_gambar'] = $row['judul_gambar'];
					$a++;
				}

				Response::sent(200, $output);

			} else {
				Response::sent(400);
			}
		}
	}

	public function post()
	{
		if (!isset($_POST['judul'])){
			Response::sent(400);
			exit;
		}

		if (!isset($_POST['isi'])){
			Response::sent(400);
			exit;
		}

		$data = array(
			'judul' => $_POST['judul'],
			'isi' => $_POST['isi'],
		);

		$id = ArtikelModel::insert($data);

		if ($id!=false){
			Response::sent(200, array('id' => $id));
		} else {
			Response::sent(400);
		}
	}

	public function put()
	{
		$params = $this->get_stream_data();

		if (!isset($params['judul'])){
			Response::sent(400);
			exit;
		}

		if (!isset($params['isi'])){
			Response::sent(400);
			exit;
		}

		$id = $this->uri_segment(1);

		if ($id!=false)
		{
			$row = ArtikelModel::one($id);

			if ($row!=false)
			{
				$data = array(
					'id' => $row['id'],
					'judul' => $params['judul'],
					'isi' => $params['isi'],
				);

				$update = ArtikelModel::update($data);

				if ($update!=false){
					Response::sent(200, array('status' => true));
				} else {
					Response::sent(400);
				}
			} else {
				Response::sent(400);
			}
		} else {
			Response::sent(400);
		}
	}

	public function delete()
	{
		$id = $this->uri_segment(1);

		if ($id!=false)
		{
			$row = ArtikelModel::one($id);

			if ($row!=false)
			{
				$delete = ArtikelModel::delete($row['id']);

				if ($delete!=false){
					Response::sent(200, array('status' => true));
				} else {
					Response::sent(400);
				}
			} else {
				Response::sent(400);
			}
		} else {
			Response::sent(400);
		}
	}
}