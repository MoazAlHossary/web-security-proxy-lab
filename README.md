# web-security-proxy-lab
The primary objective of this homework is to gain hands-on experience with TLS termination proxy servers and understand how they function as intermediaries between a web client and a web server. By using proxy tools like Burp Suite, OWASP ZAP, and Fiddler, we will intercept, modify, and analyze HTTP(S) requests and responses to simulate real-world attack scenarios and security testing techniques.

Goals:
1. Deploy a Local Web Server and Implement Authentication Forms:
- Set up an Apache web server to host a functional website.
- Design a home page with basic content, navigation, and links to authentication forms.
- Implement two login pages—one using the GET method and another using POST—to simulate different request handling mechanisms.

2. Analyze and Modify HTTP Traffic Using Burp Suite:
- Capture HTTP requests and inspect request components such as headers, cookies, and parameters.
- Modify the target hostname in a request to simulate a redirection attempt.
- Experiment with non-standard headers and test requests using different HTTP versions to analyze server behavior.
- Change request methods, such as converting POST requests to GET, and examine how this affects authentication security.

3.Intercept and Modify Responses with OWASP ZAP:
- Capture server responses and insert a Set-Cookie header to observe its effect on subsequent requests.
- Modify cookie attributes such as expiration date, Secure, HTTPOnly, and Path to evaluate security implications.
- Set cookies to expire immediately and analyze the authentication behavior of the website.

4. Compare HTTP vs. HTTPS Traffic Interception Using Fiddler:
- Capture HTTP traffic and analyze how unencrypted requests and responses are fully visible.
- Intercept HTTPS traffic without installing a certificate and evaluate the encryption mechanisms in place.
- Identify the key differences in security, including TLS handshake details, encryption methods, and protocol behavior.
