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
