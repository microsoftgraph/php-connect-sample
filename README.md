# Microsoft Graph Connect Sample for PHP

This sample shows how to connect a PHP web app to a Microsoft work or school (Azure Active Directory) or personal (Microsoft) account using the Microsoft Graph API to send an email. It uses the Microsoft Graph [PHP Client Library](https://github.com/microsoftgraph/msgraph-sdk-php) to work with data returned by Microsoft Graph. In addition, the sample uses the Office Fabric UI for styling and formatting the user experience.

![PHP Connect sample screenshot](/readme-images/php-connect-sample.png)

## Prerequisites

This sample requires the following:

- Either a Microsoft account or Office 365 for Business account. You can sign up for an Office 365 Developer subscription that includes the resources that you need to start building Office 365 apps.
- [PHP](http://php.net/) 5.6^ or 7
- [Composer](https://getcomposer.org/), a dependency manager for PHP

## Register the application

1. Sign in to the [App Registration Portal](https://apps.dev.microsoft.com/) using either your personal, work, or school account.
2. Choose **Add an app**
3. Enter a name for the app and choose **Create application**.

    The registration page displays, listing the properties of your app.
    
4. Copy the Application ID. This is the unique identifier for your app.
5. Under **Application Secrets**, choose **Generate New Password**. Copy the password from the **New password generated** dialog. 

    You'll use the application ID and password to configure the sample app in the next section.

6. Upder **Platforms**, choose **Add platform**.
7. Choose **Web**.
8. Make sure the **Allow Implicit Flow** check box is selected, and enter http://localhost:8000/oauth.php as the Redirect URI. 

    The allow Implicit Flow option enables the hybrid flow. During authentication, this enables the app to receive both sign-in info (the id_token) and artifacts (in this case, an authorization code) that the app can use to obtain an access token.
    
9. Choose **Save**.

## Configure and run the sample

1. Download or clone the Microsoft Graph Connect Sample for PHP

2. Open the sample solution in your favorite IDE.

3. In the graph.php file in the config directory, replace the ENTER_YOUR_CLIENT_ID and ENTER_YOUR_SECRET placeholder values with the application ID and password you copied during registration.

4. Install the project's dependencies: 

    ```composer install```
    
5. Rename .env.example to .env and run ```php artisan key:generate```
    
6. Run ```php artisan serve``` to run the sample.

7. Navigate to `http://localhost:8000` in your web browser.

8. Sign in with your account and grant the requested permissions.

9. Choose the *Get email address* button. When the operation completes, the email address of the signed-in user is displayed on the page.

10. Optionally edit the recipient list and email subject, and then choose the Send email button. When the mail is sent, a success message is displayed below the button.

## Troubleshooting

### Error: Unable to get local issuer certificate

You receive the following error after providing your credentials to the sign in page.
```
SSL certificate problem: unable to get local issuer certificate
```

cURL can't verify the validity of the Microsoft certificate when trying to issue a request call to get tokens. You must configure cURL to use a certificate when issuing https requests by following these steps:  

1. Download the cacert.pem file from [cURL website](http://curl.haxx.se/docs/caextract.html). 
2. Open your php.ini file and add the following line

	```
	curl.cainfo = "path_to_cacert/cacert.pem"
	```

## What's Next?

This sample helps get you registered and making calls to Microsoft Graph. You can now try different calls using the Microsoft Graph library for PHP. Explore the [Microsoft Graph documentation](https://graph.microsoft.io/en-us/docs) to see what you can do with your favorite Microsoft products. You can try:

1. Copying a OneDrive file to another folder
2. Performing cell functions with Excel
3. Navigating your organization's directory
4. Paging through a list of emails

## Contributing ##

This project has adopted the [Microsoft Open Source Code of Conduct](https://opensource.microsoft.com/codeofconduct/). For more information see the [Code of Conduct FAQ](https://opensource.microsoft.com/codeofconduct/faq/) or contact [opencode@microsoft.com](mailto:opencode@microsoft.com) with any additional questions or comments.

## Questions and comments

We'd love to get your feedback about the PHP Connect sample. You can send your questions and suggestions to us in the [Issues](https://github.com/microsoftgraph/php-connect-rest-sample/issues) section of this repository.

Questions about Microsoft Graph development in general should be posted to [Stack Overflow](http://stackoverflow.com/questions/tagged/Office365+API). Make sure that your questions or comments are tagged with [MicrosoftGraph] and [API].
  
## Additional resources

* [Microsoft Graph](http://graph.microsoft.io/)
* [Office 365 APIs platform overview](https://msdn.microsoft.com/office/office365/howto/platform-development-overview)
* [Getting started with Office 365 APIs](http://dev.office.com/getting-started/office365apis)
* [Office UI Fabric](https://github.com/OfficeDev/Office-UI-Fabric)

## Copyright
Copyright (c) 2016 Microsoft. All rights reserved.
