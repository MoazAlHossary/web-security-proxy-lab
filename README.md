# web-security-proxy-lab
The aim of this project is to get hands-on experience with TLS termination proxy servers as an intermediary between a web client or a web interface and a web server. We will use the proxy tools (Burp Suite, OWASP ZAP, and Fiddler) to intercept, modify and analyze HTTP(S) requests and responses for the purpose of simulating real world attack scenarios and security testing methods. 

## Objectives:
1. Creating, Deploying a Local Web Server, and Authentication Forms.
- set up a functioning website on an Apache Web server.
- First page should be a home page with basic content, navigation, links to authentication forms.
- Create two different types of login pages—one using the GET method and another of these will simulate post request, for the purpose of analyzing how to deal with different requests. 
 
2. It will use Burp Suite To Analyze and modify HTTP Traffic.
- Capture HTTP requests and further inspect constituents of the request, for example, headers, cookies, parameters, etc.
- In order to simulate redirection, try to change the target hostname in your request.
- Test the requests with some non standard headers, use different versions of HTTP and see what server is given the response to.
- Change your request method such as POST to GET and find out what security issues it brings up with regard to authentication.

3. Modifying and Intercept Responses using OWASP ZAP.
- See the Set-Cookie response from the server and capture the server inserting the Set-Cookie response and the subsequent request effects.
- Attribute changes in cookies like expiration date, Secure, HTTPOnly, Path and security implications of the same.
- Set cookies to expire immediately and see how the website behaves regarding the authentication.

4. HTTP vs HTTPS Traffic interception in Fiddler
- Capture Http traffic and analyze the requests and reponses
- Capture HTTPs traffic and analyze the requests and reponses
- diffrentiate between both in terms of security


### Skills learned
- Practicale experience with HTTP request and response manipulation using various tools.
- Understading TLS termination proxies.
- Intercept, modify and analyze HTTP traffic.
- Expand knowldge in various attacks such as host header injection, cookie manipulation and HTTP manipulation.
- Gain experience with diffrent tools that are essentials in sectors like Web Securty and Penetration Testing.


### Tools Used
- XAMPP
- Burp Suite
- OWASP ZAP
- Fiddler


- ## Steps <br>
#Burp Suite<br>
 ## a) Try to change the hostname to www.google.com.
<img width="932" alt="fig4" src="https://github.com/user-attachments/assets/6dcd1168-72eb-4115-881b-d06af6a2e169" />    
<br> Figure 1: Changing Hostname in Burp Suite in the intercept tab. <br>

In the screenshot above, in the intercept tab the Host header is changed from our loopback address to www.google.com to redirect the request to a different server.

<img width="1279" alt="fig 2" src="https://github.com/user-attachments/assets/9c04626c-ebc0-4ae6-b183-553185a23267" />   
Figure 2: Modified hostname HTTP Request and Response in Burp Suite.<br>

After sending the modified request, we move to the HTTP history tab and we can see our modified request with its response. We can see that the request was still accepted, responding with a 200 OK HTTP code message. This is because the host header is usually for virtual hosting, since the request was still sent to our loopback, the server still processed it despite changing the host header to google.
However this still highlights a common vulnerability as improperly configured servers can be subject to Host Header injection attack.

Let try using the repeater 
<img width="1280" alt="fig3" src="https://github.com/user-attachments/assets/433e9bc9-0162-45f2-ad1c-7732ef8ae8e3" />
Figure 3: Changing target from loopback to google in repeater.<br>
To effectively redirect the request to Google’s web server, we changed the target at the top from our loopback to www.google.com, this should successfully forward the traffic to google instead of our loopback address.

<img width="932" alt="fig4" src="https://github.com/user-attachments/assets/69201d2a-38af-4bd4-b6ac-d64cafa12054" />
<br> Figure 4: 404 Not Found <br>
The response of our modified request returned a 404 Not Found Error, this is because our website is in a local directory and Google’s server does not recognize our /final directory since it's there. Therefore resulting in a 404 Not Found error.

## B) Try GET requests with additional nonstandard headers and different HTTP versions. Why do some attackers prefer to use HTTP/1.0?

<img width="1280" alt="fig5" src="https://github.com/user-attachments/assets/3fa6e244-b6f3-42b8-a663-4f4cc4159813" />

Figure 5: Enable HTTP/1.0 in request and response <br>
Both requests to the server and responses to the client are enabled to have HTTP/1.0. 

Why do some attackers prefer to use HTTP/1.0?
Since HTTP/1.0 lacks modern security features such as persistent connections (keep-alive), attackers often prefer to use HTTP/1.0, which is much easier to manipulate and exploit server behaviors.

Some of the reasons why attacker prefer HTTP/1:
Lack of header restriction
No persistent connections
Proxy server manipulation

<img width="1280" alt="fig5" src="https://github.com/user-attachments/assets/f089c19d-6d04-4ccf-9a19-5e02ef745aaf" />
Figure 6: Add an extra header using HTTP/1.0 <br>

<img width="1279" alt="fig6" src="https://github.com/user-attachments/assets/695170fe-572e-4245-8d35-dd3ec5bf0dce" />
Figure 7: Request sent successfully <br>
In the screenshot above we can see our modified header with an additional custom header was accepted since we changed the HTTP version from HTTP/1.1 to HTTP/1.0. The server responded with a 200 OK meaning the request was successful, meaning the website accepts HTTP/1.0 making it prone to many attacks such as downgrade attack and header injection.

## c) When requesting the form page, try a GET request, but change the POST to GET using a proxy

<img width="1280" alt="fig7" src="https://github.com/user-attachments/assets/0e17b13a-4444-4cca-a435-06838a225aae" />
Figure 8: Sign in using post <br>
The screenshot above demonstrates a login attempt using the POST method from our website. We can ensure we logged in using POST from our credentials taken within the body of the HTTP request, which is what mainly differentiates between GET and POST, also in the header it is mentioned that the request is sent as POST.
<br>
<br>

<img width="409" alt="fig8" src="https://github.com/user-attachments/assets/8031f096-5c42-4c9b-9478-bbc3a7f22592" /><br>
Figure 9: Right click request and click change method <br>

<img width="1280" alt="fig9" src="https://github.com/user-attachments/assets/27619bef-6011-407f-971c-45fd37d88a01" /><br>
Figure 10: Send and analyze response <br>
We changed the method from POST to GET using the “Change Request Method” option in Burp Suite, and we can see a response of 200 OK meaning our modified request was accepted. Moreover this affected our website by redirecting us to the post login page mentioning that we logged in using GET and not POST, which ensures we succesfully manipulated the Request.

# ZAP

## a. Try to control the usage of this Cookie by intercepting the request and adding additional headers such as HTTPOnly, Secure, Expiration Date, and Path.
![image](https://github.com/user-attachments/assets/6d5dd245-85c2-43f3-bf2c-8a4c40ebe05a)<br>
Figure 11: Configuring zap
Go to Network>Local server Proxies, then set the address to localhost and the port to 8080

<img width="965" alt="image" src="https://github.com/user-attachments/assets/11887eb0-d7bb-4766-8126-e6f295ae782e" />
Figure 12: enable HUD 

![image](https://github.com/user-attachments/assets/9b7386ae-3298-499f-8c18-fe51a8d9bd69)
Figure 13 Refresh to enable HUD mode

<img width="1286" alt="image" src="https://github.com/user-attachments/assets/a308261e-5b02-447d-b89d-569244aadee8" />
Figuree 14:

<img width="1277" alt="image" src="https://github.com/user-attachments/assets/31fe0c12-da52-4205-902b-76747a41515f" />
Figuree 15: Refresh page to get response and add cookie in response tab

<img width="1277" alt="image" src="https://github.com/user-attachments/assets/5a495760-3ff5-4dd6-8490-ea461bb9a0ba" />
Figuree 16: F12 + storage, you will find the cookie added

Lets delete that cookie and try to add another but with httponly, secure flags and same site.
<img width="1277" alt="image" src="https://github.com/user-attachments/assets/c99f2fa9-f6f9-4a94-a5e5-0123e97ac11d" />
Figure 17: Add another cookie but with flags

<img width="1275" alt="image" src="https://github.com/user-attachments/assets/a9f6cfbb-a640-4f11-ab34-65d59f67db7e" />
Figure 18: Flags are set

<img width="1201" alt="image" src="https://github.com/user-attachments/assets/ae7abca7-818e-4fc7-a969-f8d21c2172b3" />
Figure 19: making new request to check if cookie is present

## b. Try to set the Expiration date of the cookie to an older date than the current date.
<img width="1276" alt="image" src="https://github.com/user-attachments/assets/0fe29623-541f-4960-ad23-741800b05743" />
Figure 20: Add outdated cookie

![image](https://github.com/user-attachments/assets/c5c4ebf0-66c1-4437-b43d-a1ed62ed6d2c)
Figure 21: Outdated cookie gets deleted

#Fiddler
![image](https://github.com/user-attachments/assets/1349c81d-1844-4acd-b697-107e3f76c202)

![image](https://github.com/user-attachments/assets/c564d48b-1c02-4619-a7d2-e9cff19ac83b)

![image](https://github.com/user-attachments/assets/10f1d23a-be95-4d90-9114-392e2fadb820)

![image](https://github.com/user-attachments/assets/1067fa71-9ed0-414d-ba1b-83cd698ff412)


https

![image](https://github.com/user-attachments/assets/81a8498b-86ae-445d-a1b4-ad36a7df1488)

![image](https://github.com/user-attachments/assets/2cca9c37-e31a-4d8e-aca8-629c44d9a9c4)

![image](https://github.com/user-attachments/assets/5619a334-26cd-4e1d-9c8b-3ed3532b2d13)

![image](https://github.com/user-attachments/assets/c7a630d9-607b-4ca5-ad5a-30dfa2171847)
