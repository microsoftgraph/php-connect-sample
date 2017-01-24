<?php
/**
 *  Copyright (c) Microsoft. All rights reserved. Licensed under the MIT license.
 *  See LICENSE in the project root for license information.
 *
 *  PHP version 5
 *
 *  @category Code_Sample
 *  @package  php-connect-sample
 *  @author   Microsoft
 *  @license  MIT License
 *  @link     http://github.com/microsoftgraph/php-connect-sample
 */

namespace Microsoft\Graph\Connect;
 
/**
 *  Stores constant and configuration values used through the app
 *
 *  @class    Constants
 *  @category Code_Sample
 *  @package  php-connect-sample
 *  @author   Microsoft
 *  @license  MIT License
 *  @link     http://github.com/microsoftgraph/php-connect-sample
 */
class Constants
{
    const CLIENT_ID          = 'ENTER_YOUR_CLIENT_ID';
    const CLIENT_SECRET      = 'ENTER_YOUR_SECRET';
    const REDIRECT_URI       = 'http://localhost:8002/login';
    const AUTHORITY_URL      = 'https://login.microsoftonline.com/common';
    const AUTHORIZE_ENDPOINT = '/oauth2/v2.0/authorize';
    const TOKEN_ENDPOINT     = '/oauth2/v2.0/token';
    const RESOURCE_ID        = 'https://graph.microsoft.com';
    const SENDMAIL_ENDPOINT  = '/v1.0/me/sendmail';
    const SCOPES             = 'profile openid email offline_access User.Read Mail.Send';

    const EMAIL_SUBJECT      = "Test Email from the Microsoft Graph PHP Connect Sample";
    const HTML_EMAIL         = "<html><head> <meta http-equiv=\'Content-Type\' content=\'text/html; charset=us-ascii\'> <title></title> </head><body style=\'font-family:calibri\'> <p>Congratulations!</p> <p>This is a message from the Microsoft Graph PHP Connect sample. You're well on your way to incorporating Office 365 services in your apps. </p> <h3>What&#8217;s next?</h3> <ul><li>Check out <a href=\"https://graph.microsoft.com\" target=\'_blank\'>graph.microsoft.com</a> to start building apps for accessing data, intelligence, and insights coming from the Microsoft cloud.</li><li>Head over to the <a href=\"http://graph.microsoft.io/docs\" target=\"blank\">Microsoft Graph reference</a> to explore the rest of the APIs.</li><li>Browse other <a href=\"https://github.com/microsoftgraph\" target=\"_blank\">samples on GitHub</a> to see more of the APIs in action.</li></ul> <h3>Give us feedback</h3> <ul><li>If you have any trouble running this sample, please <a href=\"https://github.com/microsoftgraph/php-connect-sample/issues\" target=\"_blank\">log an issue</a>.</li><li>Questions about Microsoft Graph development in general should be posted to <a href=\"http://stackoverflow.com/questions/tagged/microsoftgraph/\" target=\"blank\">Stack Overflow</a>. Make sure that your questions or comments are tagged with [microsoftgraph].</li></ul><p>Thanks and happy coding!<br>Your Office 365 Development team </p> <div style=\'text-align:center; font-family:calibri\'> <table style=\'width:100%; font-family:calibri\'> <tbody> <tr> <td><a href=\"https://github.com/microsoftgraph/php-connect-sample\">See on GitHub</a> </td> <td><a href=\"https://officespdev.uservoice.com/forums/224641-general/category/72301-documentation-guidance\">Suggest on UserVoice</a> </td> <td><a href=\"http://twitter.com/share?text=I%20just%20started%20developing%20apps%20for%20%23PHP%20using%20the%20%23MicrosoftGraph%20Connect%20app%20%40OfficeDev&amp;url=https://github.com/microsoftgraph/php-connect-sample\">Share on Twitter</a> </td> </tr> </tbody> </table> </div>  </body> </html>";
}
