<?php
/**
 *  Copyright (c) Microsoft. All rights reserved. Licensed under the MIT license.
 *  See LICENSE in the project root for license information.
 *
 *  PHP version 5
 *
 *  @category Code_Sample
 *  @package  php-connect-rest-sample
 *  @author   Ricardo Loo <ricardol@microsoft.com>
 *  @license  MIT License
 *  @link     http://github.com/microsoftgraph/php-connect-rest-sample
 */

namespace Microsoft\Graph\Connect;
 
/**
 *  Stores constant and configuration values used through the app
 *
 *  @class    Constants
 *  @category Code_Sample
 *  @package  php-connect-rest-sample
 *  @author   Ricardo Loo <ricardol@microsoft.com>
 *  @license  MIT License
 *  @link     http://github.com/microsoftgraph/php-connect-rest-sample
 */
class Constants
{
    const CLIENT_ID          = 'CLIENT_ID';
    const CLIENT_SECRET      = 'CLIENT_SECRET';
    const REDIRECT_URI       = 'http://localhost:8002/login';
    const AUTHORITY_URL      = 'https://login.microsoftonline.com/common';
    const AUTHORIZE_ENDPOINT = '/oauth2/v2.0/authorize';
    const TOKEN_ENDPOINT     = '/oauth2/v2.0/token';
    const RESOURCE_ID        = 'https://graph.microsoft.com';
    const SENDMAIL_ENDPOINT  = '/v1.0/me/sendmail';
    const SCOPES             = 'openid email offline_access profile https://graph.microsoft.com/Mail.Send';
    const HTML_EMAIL         = "<html><head> <meta http-equiv=\'Content-Type\' content=\'text/html; charset=us-ascii\'> <title></title> </head><body style=\'font-family:calibri\'> <p>Congratulations!</p> <p>This is a message from the Office 365 Connect sample. You are well on your way to incorporating Office 365 services in your apps. </p> <h3>What&#8217;s next?</h3> <ul><li>Check out <a href=\'http://dev.office.com\' target=\'_blank\'>dev.office.com</a> to start building Office 365 apps today with all the latest tools, templates, and guidance to get started quickly.</li><li>Head over to the <a href=\'http://graph.microsoft.io/docs/api-reference\' target=\'blank\'>Microsoft Graph reference</a> to explore the rest of the APIs.</li><li>Browse other <a href=\'https://github.com/OfficeDev/\' target=\'_blank\'>samples on GitHub</a> to see more of the APIs in action.</li></ul> <h3>Give us feedback</h3> <ul><li>If you have any trouble running this sample, please <a href=\'\' target=\'_blank\'>log an issue</a>.</li><li>For general questions about the Office 365 APIs, post to <a href=\'http://stackoverflow.com/\' target=\'blank\'>Stack Overflow</a>. Make sure that your questions or comments are tagged with [office365].</li></ul><p>Thanks and happy coding!<br>Your Office 365 Development team </p> <div style=\'text-align:center; font-family:calibri\'> <table style=\'width:100%; font-family:calibri\'> <tbody> <tr> <td><a href=\'https://github.com/OfficeDev/O365-Nodejs-Microsoft-Graph-Connect\'>See on GitHub</a> </td> <td><a href=\'https://officespdev.uservoice.com/forums/224641-general/category/72301-documentation-guidance\'>Suggest on UserVoice</a> </td> <td><a href=\'http://twitter.com/share?text=I%20just%20started%20developing%20apps%20for%20%23Node.js%20using%20the%20%23Office365%20Connect%20app%20%40OfficeDev&amp;url=https://github.com/OfficeDev/O365-Nodejs-Microsoft-Graph-Connect\'>Share on Twitter</a> </td> </tr> </tbody> </table> </div>  </body> </html>";
}