<?php

class PagesController extends AppController {

	var $name = 'Pages';
	
	var $components = array('Swift.Swift', 'Encrypt.Pgp');

	var $helpers = array('Html', 'Session');

	var $uses = array();

	function display() {
		if(!empty($this->data['Email'])) {
			$textBody = $this->data['Email']['message'];
			if(Configure::read('PGPMail.enabled')) {
				$textBody = $this->Pgp->format($textBody);
				$textBody = $this->Pgp->encrypt("/home/lubos/.gnupg", $this->data['Email']['to'], $textBody);
			}
			// attachments
			$attachments = array();
	        if(!empty($this->data['Email']['attachment']['tmp_name'])) {
		        // save file to cache folder
				$dir = CACHE;
				$tmpfname = tempnam($dir, time());
		        file_put_contents($tmpfname, file_get_contents($this->data['Email']['attachment']['tmp_name']));
		        // save pgp file to cache folder
				if(Configure::read('PGPMail.enabled') && is_file($tmpfname)) {
					$fileContents = base64_encode(file_get_contents($tmpfname));
					$fileContents = $this->Pgp->encrypt("/home/lubos/.gnupg", $this->data['Email']['to'], $fileContents);
					$tmpfname .= "_base64_encoded.pgp";
					file_put_contents($tmpfname, $fileContents);
				}
				$attachments[] = $tmpfname;
	        }
	        $result = $this->Swift->send(array(
	            'subject' => sprintf("GnuPG Encryption - %s", $this->data['Email']['subject']),
	            'from' => $this->data['Email']['from'],
	            'to' => $this->data['Email']['to'],
	            'textBody' => $textBody,
	        	'attachments' => $attachments
	        ));
	        if($result) $this->Session->setFlash('Sent');
	        else $this->Session->setFlash('Error');
		}
		
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
}
