<?php

/**
 * @author Mehshan Mustafa <m.mustafa@mehshan.com>
 */
class Async extends OK_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->validate_request()) {
			log_message('error', 'Async request denied.');
			show_404();
		}
	}

	public function notify() {
		ignore_user_abort(true);
		$this->load->model('user_model');

		$uid = $this->input->get('uid');

		if (isset($uid)) {
			$results = $this->user_model->get($uid)->result_array();

			if (count($results) == 1) {
				$user = $results[0];
				$subject = $this->input->get('subject');
				$message = $this->input->get('message');
				$push = $this->input->get('push');

				if (isset($push)) {
					$this->push($user, $push);
				}

				if (isset($subject) && isset($message)) {
					$this->email($user, $subject, $message);
				}
			}
		}
	}

	private function push($user, $message) {
		$this->load->driver('push');
		$this->push->push($user['uid'], $message);
	}

	private function email($user, $subject, $message) {
		$data = array(
			"title" => $subject,
			"username" => $user["username"],
			"content" => $message
		);

		$body = $this->load->view('email/send-content', $data, TRUE);

		$this->load->driver('mailer');

		$this->mailer->user = $user;
		$this->mailer->subject = $subject;
		$this->mailer->message = $message;

		$this->mailer->email();
	}

	private function validate_request() {
		$this->config->load('async', FALSE, TRUE);
		$key = $this->config->item('async_key');

		if (!empty($key)) {
			$input_key = $this->input->get('key');

			if (empty($input_key) || $input_key != $key) {
				return false;
			}
		}

		return true;
	}

}
