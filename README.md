ApiGator
--------
A simple Symfony 2/3 
(UriRequest-JsonResponse) API REST HttpClient 
powered by CURL (only GET method 4 now)

Offers a Symfony service to get data from all type of 
API REST using Curl but without worry about it :)
 
1. Get 1 Apigator , is free :

    $apigator = $this->get('apigator');
2. Send Request:
  
    Set the uri $apigator->setUri("www.yourApi.com/apikey/resource');
3. Get Response:
    $apigator->getArrayResponse()//or json or other types.
    
Installation
------------
include on require of your composer: 

"pascualmg/apigator": "dev-master"

Then add the bundle on your appkernel.php


