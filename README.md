ApiGator
--------
(UriRequest-JsonResponse) API REST HttpClient 
powered by CURL (only GET method 4 now)

Offers a service to get data from all type of 
API REST using Curl but without worry about it :)
 
1. Get 1 Apigator , is free :

    $apigator = new ApigGator();
2. Send Request:
  
    Set the uri $apigator->setUri("www.yourApi.com/apikey/resource');
3. Get Response:
    $apigator->getArrayResponse()//or json or other types.
    
Installation
------------
include on require of your composer: 

"pascualmg/apigator": "dev-master"

or composer require pascualmg/apigator 

