@php
define('PAGE','about')
@endphp
@section('title')
Privacy & Policy
@endsection
@extends('frontend.layout.master')
@section('content')
<style>

 
 .abouts p{
     color: #000;
     margin:  0;
     letter-spacing:-.2px ;
 }

    .btns{
background: var(--brand-two);
padding: .6rem 2rem;
transition: all .5s ease-in;
color: #fff;
border-radius: 50px;
max-width: 200px;
text-align: center;
    }
    .btns:hover{
color: #fff;

    }
    h3{
      color:#000;
      font-size: 1rem;
      margin-top: .8rem;
    }
  h1{
      font-size: 2rem
  }
</style>
 
{{-- <div class="container"> --}}
   
        <div class="container mt-4 abouts">
<br>
<br>

<h1 class="text-center">
    Privacy Policy for Somerville Communication
</h1>
<br>
<p>
    
At Somerville Communication, accessible from [website], one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that are collected and recorded by Somerville Communication and how we use it.
<br>
If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us [contact detail].
This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collected in Somerville Communication. This policy does not apply to any information collected offline or via channels other than this website.
</p>
<h3>
    
Consent
</h3>
<p>
    You agree to consent to our Privacy Policy and Agree to Its Terms as Mentioned by visiting our website.
</p>
<h3>
    Information we collect
</h3>
<p>
    The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.
</p>
<p>
    If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.
</p>
<h3>
    How we use your information
</h3>
<p>
    We use the information we collect in various ways, including to:
Provide, operate, and maintain our website
Improve, personalize, and expand our website
Understand and analyze how you use our website
Develop new products, services, features, and functionality
Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes
Make an easy environment for accessing our service
Send you emails
Find and prevent fraud
Log Files
</p>
<p>
    Somerville Communication follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any personally identifiable information. The purpose of the information is to analyze trends, administer the site, track users' movement, save the cart on the website for easy use, and gather demographic information.
</p>
<h3> Cookies and Web Beacons</h3>
<p>
   
Like any other website, Somerville Communication uses “cookies”. These cookies are used to store information including visitors' preferences, visitors’ previous saved carts, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.
</p>
<h3>Advertising Partners Privacy Policies</h3>
<p>
    You may consult this list to find the Privacy Policy for each of the advertising partners of Somerville Communication.
</p>
<p>
    Third-party ad servers or ad networks use technologies like cookies, JavaScript, or Web Beacons used in their respective advertisements and links that appear on Somerville Communication, which are sent directly to users' browsers. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.
Note that Somerville Communication has no access to or control over these cookies that are used by third-party advertisers.
</p>
<h3>Third-Party Privacy Policies</h3>
<p>
    Somerville Communication's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt out of certain options.
</p>
<br>
You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.
<br>
CCPA Privacy Rights (Do Not Sell My Personal Information)
Under the CCPA, among other rights, California consumers have the right to:
Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.
Request that a business deletes any personal data about the consumer that a business has collected.
<br>
Request that a business that sells a consumer's personal data, not sell the consumer's personal data.
<br>
If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us info@somervillecommunications.com
GDPR Data Protection Rights
We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:
<strong>The right to access</strong> – You have the right to request copies of your personal data. We may charge you a small fee for this service.

<br>
<strong>The right to rectification</strong> – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.
<br>
<strong>The right to erasure</strong> – You have the right to request that we erase your personal data, under certain conditions.
<br>
<strong>The right to restrict processing</strong> – You have the right to request that we restrict the processing of your personal data, under certain conditions.
The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.
<br>
<strong>The right to data portability</strong> – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.
If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.
Children's Information
<br>
Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.
<br>
Somerville Communication does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.






<br>
<br>

<a href="{{ route('/') }}" class="btns">Back</a>

</div>



  
		@endsection