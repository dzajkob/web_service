web_service
===========

Simple soap. Use wsdl. To use must change some url in wsdl.

URL to change in wsdl:
Line 3:
  From: targetNamespace="http://localhost/web_service/sayHello" to : targetNamespace="your_url_location_web_service_file/sayHello"
Line 4:
  From: xmlns:tns="http://localhost/web_service/sayHello"  to : xmlns:tns="your_url_location_web_service_file/sayHello"
Line 54:
  From: <soap:address location="http://localhost/web_service/Service.php"/> to : <soap:address location="your_url_location_web_service_file/Service.php"/>

OR if you use xampp ora another like this one apache, then just past folder called: 'web_service' to root of 'htdocs' folder and that's all.
WSDL have comment in Polish but if any one want to have comment in English please send to me msg and I wil add comment in Eng.

I apologize for my language mistakes.
