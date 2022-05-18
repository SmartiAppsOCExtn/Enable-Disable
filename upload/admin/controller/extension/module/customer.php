<?php
class ControllerExtensionModuleCustomer extends Controller {
	public function index() {
		$this->load->language('extension/module/customer');

		$this->document->setTitle($this->language->get('heading_title'));

		if (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];

			unset($this->session->data['error']);
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/customer', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['user_token'] = $this->session->data['user_token'];

		$data['export'] = $this->url->link('extension/module/customer/export', 'user_token=' . $this->session->data['user_token'], true);
		
		$this->load->model('extension/module/customer');

		$data['tables'] = $this->model_extension/module/customer->getTables();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/customer', $data));
	}
	
	public function import() {
		$this->load->language('extension/module/customer');
		
		$json = array();
		
		if (!$this->user->hasPermission('modify', 'extension/module/customer')) {
			$json['error'] = $this->language->get('error_permission');
		}
		
		if (isset($this->request->files['import']['tmp_name']) && is_uploaded_file($this->request->files['import']['tmp_name'])) {
			$filename = tempnam(DIR_UPLOAD, 'bac');
			
			move_uploaded_file($this->request->files['import']['tmp_name'], $filename);
		} elseif (isset($this->request->get['import'])) {
			$filename = DIR_UPLOAD . basename(html_entity_decode($this->request->get['import'], ENT_QUOTES, 'UTF-8'));
		} else {
			$filename = '';
		}
		
		if (!is_file($filename)) {
			$json['error'] = $this->language->get('error_file');
		}	
		
		if (isset($this->request->get['position'])) {
			$position = $this->request->get['position'];
		} else {
			$position = 0; 	
		}
				
		if (!$json) {
			// We set $i so we can batch execute the queries rather than do them all at once.
			$i = 0;
			$start = false;
			
			$handle = fopen($filename, 'r');

			fseek($handle, $position, SEEK_SET);
			
			while (!feof($handle) && ($i < 100)) {
				$position = ftell($handle);

				$line = fgets($handle, 1000000);
				
				if (substr($line, 0, 14) == 'TRUNCATE TABLE' || substr($line, 0, 11) == 'INSERT INTO') {
					$sql = '';
					
					$start = true;
				}

				if ($i > 0 && (substr($line, 0, 24) == 'TRUNCATE TABLE `oc_user`' || substr($line, 0, 30) == 'TRUNCATE TABLE `oc_user_group`')) {
					fseek($handle, $position, SEEK_SET);

					break;
				}

				if ($start) {
					$sql .= $line;
				}
				
				if ($start && substr($line, -2) == ";\n") {
					$this->db->query(substr($sql, 0, strlen($sql) -2));
					
					$start = false;
				}
					
				$i++;
			}

			$position = ftell($handle);

			$size = filesize($filename);

			$json['total'] = round(($position / $size) * 100);

			if ($position && !feof($handle)) {
				$json['next'] = str_replace('&amp;', '&', $this->url->link('extension/module/customer/import', 'user_token=' . $this->session->data['user_token'] . '&import=' . $filename . '&position=' . $position, true));
			
				fclose($handle);
			} else {
				fclose($handle);
				
				unlink($filename);

				$json['success'] = $this->language->get('text_success');

				$this->cache->delete('*');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function export() {
		$this->load->language('extension/module/customer');

		if (!isset($this->request->post['customer'])) {
			$this->session->data['error'] = $this->language->get('error_export');

			$this->response->redirect($this->url->link('extension/module/customer', 'user_token=' . $this->session->data['user_token'], true));
		} elseif (!$this->user->hasPermission('modify', 'extension/module/customer')) {
			$this->session->data['error'] = $this->language->get('error_permission');

			$this->response->redirect($this->url->link('extension/module/customer', 'user_token=' . $this->session->data['user_token'], true));
		} else {
			$this->response->addheader('Pragma: public');
			$this->response->addheader('Expires: 0');
			$this->response->addheader('Content-Description: File Transfer');
			$this->response->addheader('Content-Type: application/octet-stream');
			$this->response->addheader('Content-Disposition: attachment; filename="' . DB_DATABASE . '_' . date('Y-m-d_H-i-s', time()) . '_backup.sql"');
			$this->response->addheader('Content-Transfer-Encoding: binary');

			$this->load->model('module/customer');

			$this->response->setOutput($this->model_extension/module/customer->import($this->request->post['customer']));		
		}
	}	
}