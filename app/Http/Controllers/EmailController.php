<?php
/**
 *  Copyright (c) Microsoft. All rights reserved. Licensed under the MIT license.
 *  See LICENSE in the project root for license information.
 *
 *  PHP version 5
 *
 *  @category Code_Sample
 *  @package  php-connect-sample
 *  @author   Caitlin Bales <caitlin.bales@microsoft.com>
 *  @license  MIT License
 *  @link     http://github.com/microsoftgraph/php-connect-sample
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Microsoft\Graph\Connect\Constants;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

/**
 *  Handles the creation of the email and sends the request
 *  to Microsoft Graph
 *
 *  @class    EmailController
 *  @category Code_Sample
 *  @package  php-connect-sample
 *  @author   Caitlin Bales <caitlin.bales@microsoft.com>
 *  @license  MIT License
 *  @link     http://github.com/microsoftgraph/php-connect-sample
 */
class EmailController extends Controller 
{ 
	/**
	* Queries Microsoft Graph to get the current logged-in
	* user's info
	*
	* @return Microsoft\Graph\Model\User The current user
	*/
	public function getMe()
	{
		if (session_status() == PHP_SESSION_NONE)
			session_start();

		$graph = new Graph();
		$graph->setAccessToken($_SESSION['access_token']);

		$me = $graph->createRequest("get", "/me")
					->setReturnType(Model\User::class)
					->execute();
		return $me;
	}

	/**
	* Email view
	*
	* @return view /email
	*/
	public function showUserInfo()
	{
		$me = $this->getMe();

		return view('email', array('name' => $me->getGivenName(), 'email' => $me->getMail(), 'status' => null));
	}

	/**
	* Send email from the current user to the POST 
	* form email provided
	*
	* @return view /email
	*/
	public function sendEmail()
	{
		if (session_status() == PHP_SESSION_NONE)
			session_start();
		$graph = new Graph();
		$graph->setAccessToken($_SESSION['access_token']);
		$me = $this->getMe();

		//Create a new sender object
		$sender = new Model\Recipient();
		$sEmail = new Model\EmailAddress();
		$sEmail->setName($me->getGivenName());
		$sEmail->setAddress($me->getMail());
		$sender->setEmailAddress($sEmail);
		
		//Create a new recipient object
		$recipient = new Model\Recipient();
		$rEmail = new Model\EmailAddress();
		$rEmail->setAddress($_POST['input_email']);
		$recipient->setEmailAddress($rEmail);

		//Set the body of the message
		$body = new Model\ItemBody();
		$body->setContent(Constants::HTML_EMAIL);
		$body->setContentType(Model\BodyType::HTML);

		//Create a new message
		$mail = new Model\Message();
		$mail->setSubject(Constants::EMAIL_SUBJECT)
			 ->setBody($body)
			 ->setSender($sender)
			 ->setFrom($sender)
			 ->setToRecipients(array($recipient));

		//Send the mail through Graph
		$request = $graph->createRequest("POST", "/me/sendMail")
						 ->attachBody($mail);
		$request->execute();

		//Return to the email view
		return view('email', array('name' => $me->getGivenName(), 'email' => $me->getMail(), 'status' => 'success'));
	}
}
