<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Projects</title>

    <!-- ExtJS -->
    <script type="text/javascript" src="../../examples/shared/include-ext.js"></script>
    <script type="text/javascript" src="../../examples/shared/options-toolbar.js"></script>

    <!-- Shared -->
    <link rel="stylesheet" type="text/css" href="../shared/example.css" />

    <!-- GC -->


    <!-- Example -->
    <script type="text/javascript" src="projects.js"></script>
    <style type="text/css">
        /* Styling of global error indicator */
        .form-error-state {
            font-size: 11px;
            padding-left: 20px;
            height: 16px;
            line-height: 18px;
            background-repeat: no-repeat;
            background-position: 0 0;
            cursor: default;
        }

        /* Error details tooltip */
        .errors-tip .error {
            font-style: italic;
        }
    </style>
</head>
<body>
<!--
    <h1>Registration Form</h1>

    <p>This example shows a common site registration form. The form appears simple but it shows a few special things: </p>
    <ul class="feature-list">
        <li>The display of field errors has been customized. Fields have <code>msgTarget:'none'</code> so
            the errors are not displayed with the individual fields; instead event listeners are attached
            to the FormPanel to group up all error messages into a custom global error indicator, with a
            persistent tooltip showing the error details.</li>
        <li>The "Terms of Use" link has an event handler attached so it opens the page in a modal Ext window.</li>
        <li>The password fields have custom validation attached to verify the user enters the same value in both.</li>
        <li>The submit button has <code>formBind:true</code> so it is only enabled when the form becomes valid.</li>
    </ul>

    <p>The js is not minified so it is readable. See <a href="registration.js">registration.js</a>.</p>
-->    



    <div id="legalese" class="x-hidden">
        <h2>Terms of Use</h2>
        <p>Agreement between User and Sencha Inc., and its affiliates and subsidiaries (collectively "Sencha"). This web site is offered to you, the User, conditioned upon your acceptance without modification of the terms, conditions and notices contained herein ("Terms"). Your use of this web site constitutes your agreement to all such terms, conditions and notices.  Sencha reserves the right to update the Terms at any time without notice to you. The most current version of the Terms can be reviewed by clicking on the "Terms of Use" hypertext link located at the bottom of our web pages.</p>
        <h3>Description of Services</h3>
        <p>Sencha provides you with access to a variety of resources, including developer tools, download areas, communication forums and product information (collectively "Services"). The Services, including any updates, enhancements, new features, and/or the addition of any related web properties, are subject to the Terms. </p>
        <h3>Copyright Notice</h3>
        <p>The contents of all material available on the site are copyrighted by Sencha unless otherwise indicated. All rights are reserved by Sencha and, except as permitted in any license grant, may not be reproduced, downloaded, disseminated, published, or transferred in any form or by any means, except with the prior written permission of Sencha.</p>
        <h3>Legal Notice and Disclaimer</h3>
        <p>INFORMATION ON THIS SITE IS PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE OR NON-INFRINGEMENT.</p>
        <p>Sencha (including its employees and agents) assumes no responsibility for consequences from the use of the information herein, or in any respect for the content of such information, including, but not limited to, delays, errors or omissions, the accuracy or reasonableness of information, the defamatory nature of statements, ownership of copyright or other intellectual property rights, and the violation of property, privacy or personal rights of others. SENCHA IS NOT RESPONSIBLE FOR, AND EXPRESSLY DISCLAIMS ALL LIABILITY FOR, DAMAGES OF ANY KIND ARISING OUT OF USE, REFERENCE OR RELIANCE ON SUCH INFORMATION.</p>
        <p>IN NO EVENT SHALL SENCHA AND/OR ITS RESPECTIVE SUPPLIERS BE LIABLE FOR ANY SPECIAL, INDIRECT OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF SOFTWARE, DOCUMENTS, PROVISION OF OR FAILURE TO PROVIDE SERVICES, OR INFORMATION AVAILABLE FROM THE SERVICES.</p>
        <h3>No Unlawful or Prohibited Use</h3>
        <p>As a condition of your use of this web site, you warrant to Sencha that you will not use this web site or any information contained on the web site for any purpose that is unlawful or prohibited by these Terms.  You may not use the Services in any manner that could damage, disable, overburden, or impair any Sencha server, or the network(s) connected to any Sencha server, or interfere with any other party's use and enjoyment of any Services. You may not attempt to gain unauthorized access to any Services, other accounts, computer systems or networks connected to any Sencha server or to any of the Services, through hacking, password mining or any other means. You may not obtain or attempt to obtain any materials or information through any means not intentionally made available through the Services.</p>
        <h3>Personal and Non-Commercial Use of Services</h3>
        <p>Unless otherwise specified, the Services are for your personal and non-commercial use. You may not modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer, or sell any information, software, products or services obtained from the Services.</p>
        <h3>Returns Policy</h3>
        <p>Sencha does not accept returns of software, products, training, services, or any other item obtained from the Services.</p>
        <h3>Privacy and Protection of Personal Information</h3>
        <p>See the Privacy Statement disclosures relating to the collection and use of your information.</p>
        <h3>Links to Other Internet Sites</h3>
        <p>At certain places on this site, live "links" to other Internet addresses can be accessed ("Linked Sites"). Such Linked Sites contain information created, published, maintained, or otherwise posted by institutions or organizations independent of Sencha. Sencha does not endorse, approve, certify or control these Linked Sites and does not guarantee the accuracy, completeness, efficacy, timeliness or correct sequencing of information that they contain. Use of Linked Sites is voluntary, and should only be undertaken after an independent review of the accuracy, completeness, efficacy and timeliness of information contained therein. In addition, it is the user's responsibility to take precautions to ensure that material selected from such Linked Sites is free of such items as viruses, worms, Trojan horses and other items of a destructive nature. Sencha is not responsible for, and expressly disclaims all liability for, damages of any kind arising out of the use of such Linked Sites, or reference to or reliance on information contained therein.</p>
        <h3>Special License Restrictions for Non-Human Visitors</h3>
        <p>Special restrictions on a visitor's license to access the Website apply to Non-Human Visitors. Non-Human Visitors include, but are not limited to, web spiders, bots, indexers, robots, crawlers, harvesters, or any other computer programs designed to access, read, compile or gather content from the Website automatically.</p>
        <p>Email addresses on this site are considered proprietary intellectual property. It is recognized that these email addresses are provided for human visitors alone. You acknowledge and agree that each email address the Website contains has a value not less than US $50. You further agree that the compilation, storage, and/or distribution of these addresses substantially diminishes the value of these addresses. Intentional collection, harvesting, gathering, and/or storing this Website's email addresses is recognized as a violation of this agreement and expressly prohibited.</p>
        <h3>Records of Visitor Use and Abuse</h3>
        <p>You consent to having your Internet Protocol address recorded. An email address may appear immediately below (the "Identifier") if we suspect potential abuse. The Identifier is uniquely matched to your Internet Protocol address. Visitors agree not to use this address for any reason.</p>
        <p>VISITORS AGREE THAT HARVESTING, GATHERING, STORING, TRANSFERRING TO A THIRD PARTY OR SENDING ANY MESSAGE(S) TO THE IDENTIFIER CONSTITUTES AN ACCEPTANCE AND SUBSEQUENT BREACH OF THESE TERMS OF SERVICE.</p>
        <h3>Notice Specific to Software Offered on this Web Site</h3>
        <p>Any software that is made available to download from the Services ("Software") is the copyrighted work of Sencha and/or its suppliers. Use of the Software is governed by the terms referenced on the Website with respect to each Software at the time of purchase, or at the time of download if no purchase is made ("License Agreement"). No permission is granted  to install or use any Software without first agreeing to the License Agreement terms.</p>
        <p>The Software is made available for download solely for use according to the License Agreement. Any reproduction or redistribution of the Software not in accordance with the License Agreement is expressly prohibited by law, and may result in severe civil and criminal penalties. Violators will be prosecuted to the maximum extent possible.</p>
        <p>WITHOUT LIMITING THE FOREGOING, COPYING OR REPRODUCTION OF THE SOFTWARE TO ANY OTHER SERVER OR LOCATION FOR FURTHER REPRODUCTION OR REDISTRIBUTION IS EXPRESSLY PROHIBITED, UNLESS SUCH REPRODUCTION OR REDISTRIBUTION IS EXPRESSLY PERMITTED BY THE LICENSE AGREEMENT. </p>
        <p>THE SOFTWARE IS WARRANTED, IF AT ALL, ONLY ACCORDING TO THE TERMS OF THE LICENSE AGREEMENT. EXCEPT AS WARRANTED IN THE LICENSE AGREEMENT, SENCHA HEREBY DISCLAIMS ALL WARRANTIES AND CONDITIONS WITH REGARD TO THE SOFTWARE, INCLUDING ALL WARRANTIES AND CONDITIONS OF MERCHANTABILITY, WHETHER EXPRESS, IMPLIED OR STATUTORY, FITNESS FOR A PARTICULAR PURPOSE, TITLE AND NON-INFRINGEMENT.</p>
        <h3>Governmental Use</h3>
        <p>Any Software which is downloaded from the Services for or on behalf of the United States of America, its agencies and/or instrumentalities ("U.S. Government"), is provided with Restricted Rights. Use, duplication, or disclosure by the U.S. Government is subject to restrictions as set forth in subparagraph (c)(1)(ii) of the Rights in Technical Data and Computer Software clause at DFARS 252.227-7013 or subparagraphs (c)(1) and (2) of the Commercial Computer Software - Restricted Rights at 48 CFR 52.227-19, as applicable. Manufacturer is Sencha, One Sencha Way, Redmond, WA 98052-6399.</p>
        <h3>Notice Specific to Documents Made Available on this Web Site</h3>
        <p>Permission to use Documents (such as white papers, press releases, datasheets and FAQs) offered as a part of the Services is granted, provided that (1) Sencha’s copyright notice appears in all copies and that both the copyright notice and this permission notice appear, (2) use of such Documents from the Services is for informational and non-commercial or personal use only and will not be copied or posted on any network computer or broadcast in any media, and (3) no modifications of any Documents are made. </p>
        <p>Accredited educational institutions, such as K-12, universities, private/public colleges, and state community colleges, may download and reproduce the Documents for distribution in the classroom. Distribution outside the classroom requires express written permission. Use for any other purpose is expressly prohibited by law, and may result in severe civil and criminal penalties. Violators will be prosecuted to the maximum extent possible.</p>
        <p>Documents specified above do not include the design or layout of the Sencha.com web site or any other Sencha owned, operated, licensed or controlled site. Elements of the Sencha web sites are protected by trade dress, trademark, unfair competition, and other laws and may not be copied or imitated in whole or in part. No logo, graphic, sound or image from any Sencha web site may be copied or retransmitted unless expressly permitted by Sencha.</p>
        <h3>Services Requiring Member Accounts</h3>
        <p>If any of the Services requires you to open an account, you must complete the registration process by providing us with current, complete and accurate information as prompted by the applicable registration form. You may also be required to choose a password and a user name. You are entirely responsible for maintaining the confidentiality of your password and account. Furthermore, you are entirely responsible for any and all activities that occur under your account. You agree to notify Sencha immediately of any unauthorized use of your account or any other breach of security. Sencha will not be liable for any loss that you may incur as a result of someone else using your password or account, either with or without your knowledge. However, you could be held liable for losses incurred by Sencha or another party due to someone else using your account or password. You may not use anyone else's account at any time, without the permission of the account holder.</p>
        <h3>Restrictions on Use of Services</h3>
        <p>The Services may contain e-mail services, bulletin board services, chat areas, news groups, forums, communities, personal web pages, calendars, photo albums, file cabinets and/or other message or communication facilities designed to enable you to communicate with others (each a "Communication Service" and collectively "Communication Services"). You agree to use the Communication Services only to post, send and receive messages and material that are proper and, when applicable, related to the particular Communication Service. By way of example, and not as a limitation, you agree that when using the Communication Services, you will not:</p>
        <ul>
            <li>Use the Communication Services in connection with surveys, contests, pyramid schemes, chain letters, junk email, spamming or any duplicative or unsolicited messages (commercial or otherwise).</li>
            <li>Defame, abuse, harass, stalk, threaten or otherwise violate the legal rights (such as rights of privacy and publicity) of others.</li>
            <li>Publish, post, upload, distribute or disseminate any inappropriate, profane, defamatory, obscene, indecent or unlawful topic, name, material or information.</li>
            <li>Upload, or otherwise make available, files that contain images, photographs, software or other material protected by intellectual property laws, including, by way of example, and not as limitation, copyright or trademark laws (or by rights of privacy or publicity) unless you own or control the rights thereto or have received all necessary consent to do the same.</li>
            <li>Use any material or information, including images or photographs, which are made available through the Services in any manner that infringes any copyright, trademark, patent, trade secret, or other proprietary right of any party.</li>
            <li>Upload files that contain viruses, Trojan horses, worms, time bombs, cancelbots, corrupted files, or any other similar software or programs that may damage the operation of another's computer or property of another.</li>
            <li>Advertise or offer to sell or buy any goods or services for any business purpose, unless such Communication Services specifically allows such messages.</li>
            <li>Download any file posted by another user of a Communication Service that you know, or reasonably should know, cannot be legally reproduced, displayed, performed, and/or distributed in such manner.</li>
            <li>Falsify or delete any copyright management information, such as author attributions, legal or other proper notices or proprietary designations or labels of the origin or source of software or other material contained in a file that is uploaded.</li>
            <li>Restrict or inhibit any other user from using and enjoying the Communication Services.</li>
            <li>Violate any code of conduct or other guidelines which may be applicable for any particular Communication Service.</li>
            <li>Harvest or otherwise collect information about others, including e-mail addresses.</li>
            <li>Violate any applicable laws or regulations.</li>
            <li>Create a false identity for the purpose of misleading others.</li>
            <li>Use, download or otherwise copy, or provide (whether or not for a fee) to a person or entity any directory of users of the Services or other user or usage information or any portion thereof.</li>
        </ul>
        <p>Sencha has no obligation to monitor the Communication Services. However, Sencha reserves the right to review materials posted to the Communication Services and to remove any materials in its sole discretion. Sencha reserves the right to terminate your access to any or all of the Communication Services at any time, without notice, for any reason whatsoever.</p>
        <p>Sencha reserves the right at all times to disclose any information as Sencha deems necessary to satisfy any applicable law, regulation, legal process or governmental request, or to edit, refuse to post or to remove any information or materials, in whole or in part, in Sencha's sole discretion.</p>
        <p>Always use caution when giving out any personally identifiable information about yourself or your children in any Communication Services. Sencha does not control or endorse the content, messages or information found in any Communication Services and, therefore, Sencha specifically disclaims any liability with regard to the Communication Services and any actions resulting from your participation in any Communication Services. Managers, hosts, and the Community Support Team are not authorized Sencha spokespersons, and their views do not necessarily reflect those of Sencha.</p>
        <p>Materials uploaded to the Communication Services may be subject to posted limitations on usage, reproduction and/or dissemination; you are responsible for adhering to such limitations if you download the materials.</p>
        <h3>Submissions to Sencha and our Web Site</h3>
        <p>Sencha does not claim ownership of the materials you provide to Sencha (including feedback and suggestions) or post, upload, input or submit to any Services or its associated services for review by the general public, or by the members of any public or private community, (each a "Submission" and collectively "Submissions"). However, by posting, uploading, inputting, providing or submitting ("Posting") your Submission you are granting Sencha and necessary sublicensees permission to use your Submission (including, without limitation, all Sencha Services), including, without limitation, the license rights to: copy, distribute, transmit, publicly display, publicly perform, reproduce, edit, translate and reformat your Submission; to publish your name in connection with your Submission; and the right to sublicense such rights to any supplier of the Services.</p>
        <p>No compensation will be paid with respect to the use of your Submission, as provided herein. Sencha is under no obligation to post or use any Submission you may provide and Sencha may remove any Submission at any time in its sole discretion.</p>
        <p>By Posting a Submission you warrant and represent that you own or otherwise control all of the rights to your Submission as described in these Terms including, without limitation, all the rights necessary for you to provide, post, upload, input or submit the Submissions.</p>
        <p>In addition to the warranty and representation set forth above, by Posting a Submission that contain images, photographs, pictures or that are otherwise graphical in whole or in part ("Images"), you warrant and represent that (a) you are the copyright owner of such Images, or that the copyright owner of such Images has granted you permission to use such Images or any content and/or images contained in such Images consistent with the manner and purpose of your use and as otherwise permitted by these Terms of Use and the Services, (b) you have the rights necessary to grant the licenses and sublicenses described in these Terms, and (c) that each person depicted in such Images, if any, has provided consent to the use of the Images as set forth in these Terms, including, by way of example, and not as a limitation, the distribution, public display and reproduction of such Images. By Posting Images, you are granting (a) to all members of your private community (for each such Images available to members of such private community), and/or (b) to the general public (for each such Images available anywhere on the Services, other than a private community), permission to use your Images in connection with the use, as permitted by these Terms, of any of the Services, (including, by way of example, and not as a limitation, making prints and gift items which include such Images), and including, without limitation, a non-exclusive, world-wide, royalty-free license to: copy, distribute, transmit, publicly display, publicly perform, reproduce, edit, translate and reformat your Images without having your name attached to such Images, and the right to sublicense such rights to any supplier of the Services. No compensation will be paid with respect to the use of your Images.</p>
        <h3>Claims of Copyright Infringement</h3>
        <p>Pursuant to Title 17, United States Code, Section 512(c)(2), notifications of claimed copyright infringement should be sent to licensing@sencha.com</p>
        <h3>UNSOLICITED IDEA SUBMISSION POLICY.</h3>
        <p>NEITHER SENCHA NOR ANY OF ITS EMPLOYEES ACCEPT OR CONSIDER UNSOLICITED IDEAS, INCLUDING IDEAS FOR NEW ADVERTISING CAMPAIGNS, NEW PROMOTIONS, NEW PRODUCTS OR TECHNOLOGIES, PROCESSES, MATERIALS, MARKETING PLANS OR NEW PRODUCT NAMES. PLEASE DO NOT SEND ANY ORIGINAL CREATIVE ARTWORK, SAMPLES, DEMOS, OR OTHER WORKS. THE SOLE PURPOSE OF THIS POLICY IS TO AVOID POTENTIAL MISUNDERSTANDINGS OR DISPUTES WHEN SENCHA'S PRODUCTS OR MARKETING STRATEGIES MIGHT SEEM SIMILAR TO IDEAS SUBMITTED TO SENCHA. SO, PLEASE DO NOT SEND YOUR UNSOLICITED IDEAS TO SENCHA OR ANYONE AT SENCHA. IF, DESPITE OUR REQUEST THAT YOU NOT SEND US YOUR IDEAS AND MATERIALS, YOU STILL SEND THEM, PLEASE UNDERSTAND THAT SENCHA MAKES NO ASSURANCES THAT YOUR IDEAS AND MATERIALS WILL BE TREATED AS CONFIDENTIAL OR PROPRIETARY.</p>
        <h3>Trademarks</h3>
        <p>There are a number of proprietary logos, trademarks and service marks (collectively "Trademarks") displayed on our Website and via the Services. All such Trademarks (whether registered or not registered) are the property of Sencha.  By displaying any Trademarks, Sencha is not granting you a license or the right to use any of the Trademarks nor should anything contained in any Services be construed or interpreted as granting you by implication or otherwise a license or any right to use any of the Trademarks without the prior express written permission of Sencha.</p>
        <h3>General</h3>
        <p>Sencha reserves the right to terminate this agreement at any time for any reason, including, but not limited to, violating any of the terms or conditions of this agreement.</p>
        <p>By accessing you agree that disputes arising out of or relating to the contents or use of this web site are to be governed by the laws of the State of California. You consent to the exclusive jurisdiction of courts sitting in the State of California in all disputes arising out of or relating to the contents or use of this web site.</p>
        <p>If any part of this agreement is determined to be invalid or unenforceable pursuant to applicable law, including without limitation, the warranty disclaimers and liability limitations set forth above, then the invalid or unenforceable provisions will be deemed superseded by a valid, enforceable provision that most closely matches the intent of the original provision and the remainder of the agreement shall continue in full force and effect.</p>
        <p>This agreement constitutes the entire agreement between you and Sencha with respect to the use of this web site and it supersedes all prior or contemporaneous communications and proposals, whether electronic, oral or written, between you and Sencha with respect to this web site. A printed version of this agreement and of any notice given in electronic form shall be admissible in judicial or administrative proceedings based upon or relating to this agreement to the same extent and subject to the same conditions as other business documents and records originally generated and maintained in printed form.</p>
        <p>Any rights not expressly granted herein are reserved.</p>
    </div>
    <div id="form1"></div>
    <div id="tabs1">
        <div id="script" class="x-hide-display">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed metus nibh, sodales a, porta at, vulputate
            eget, dui. Pellentesque ut nisl. Maecenas tortor turpis, interdum non, sodales non, iaculis ac, lacus.
            <br/><br/>
            Vestibulum auctor, tortor quis iaculis malesuada, libero lectus bibendum purus, sit amet tincidunt quam turpis
            vel lacus. In pellentesque nisl non sem. Suspendisse nunc sem, pretium eget, cursus a, fringilla vel, urna.</p>
        </div>
        <div id="markup" class="x-hide-display">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed metus nibh, sodales a, porta at, vulputate
            eget, dui. Pellentesque ut nisl. Maecenas tortor turpis, interdum non, sodales non, iaculis ac, lacus.
            Vestibulum auctor, tortor quis iaculis malesuada, libero lectus bibendum purus, sit amet tincidunt quam turpis
            vel lacus. In pellentesque nisl non sem. Suspendisse nunc sem, pretium eget, cursus a, fringilla vel, urna.
            <br/><br/>
            Aliquam commodo ullamcorper erat. Nullam vel justo in neque porttitor laoreet. Aenean lacus dui, consequat eu,
            adipiscing eget, nonummy non, nisi. Morbi nunc est, dignissim non, ornare sed, luctus eu, massa. Vivamus eget
            quam. Vivamus tincidunt diam nec urna. Curabitur velit.</p>
        </div>
    </div>
    <br>

</body>
</html>
