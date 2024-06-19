@include('layouts.mainsite.header')

<script>
	$('.signup_page').addClass('current_menu');
</script>
<section class="enter enter_reg">
    <div class="container-fluid">
        <div class="enter_page__bg">
            <img src="{{asset('')}}main/images/calc_left.svg" alt="">
        </div>
        <div class="enter_page__bg enter_page__bg_right">
            <img src="{{asset('')}}main/images/calc_right.svg" alt="">
        </div>
        <img src="{{asset('')}}main/images/calc_icon.svg" alt="" class="enter_page__logo">
        <h1 class="enter_page__title text_center">How do I sign up?</h1>
        <p class="mx-auto enter_page__subtitle text_center">
            Hello, to register you need to provide a login, email to which you have access and a password.
        </p>
        <div class="enter_page__nav">
            <a href="/">
                <img src="{{asset('')}}main/images/icon_home.svg" alt="">
                Back to home
            </a>
            <a href="/signin">
                <img src="{{asset('')}}main/images/icon_enter_user.svg" alt="">
                I have an account
            </a>
        </div>

        <form id="Registration" class="">

        <div class="enter__row">

            

                <div class="enter__item">
                    <div class="enter__group">
                        <img src="{{asset('')}}main/images/icon_input_user.svg" alt="">
                        <p class="enter__input_name">Enter your login</p>
                        <div class="enter__input placeholder__group_input">
                            <input id="reg-login" name="login" type="text" class="order__input placeholder__input ">
                            <p class="place_span">
                                <img src="{{asset('')}}main/images/icon_placeholder.svg" alt=""> Please enter
                                your login...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="enter__item">
                    <div class="enter__group">
                        <img src="{{asset('')}}main/images/icon_input_mail.svg" alt="">
                        <p class="enter__input_name">Enter your email</p>
                        <div class="enter__input placeholder__group_input">
                            <input id="reg-email" name="email" type="text" class="order__input placeholder__input">
                            <p class="place_span">
                                <img src="{{asset('')}}main/images/icon_placeholder.svg" alt=""> Please enter
                                your email...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="enter__item">
                    <div class="enter__group">
                        <img src="{{asset('')}}main/images/icon_input_pass.svg" alt="">
                        <p class="enter__input_name">Enter your pass</p>
                        <div class="enter__input placeholder__group_input">
                            <input id="reg-pass" name="password" type="password" class="order__input placeholder__input order__input_pass">
                            <p class="place_span">
                                <img src="{{asset('')}}main/images/icon_placeholder.svg" alt=""> Please enter
                                your pass...
                            </p>
                            <button class="show_pass"></button>
                        </div>
                    </div>
                </div>
                <div class="enter__item">
                    <div class="enter__group">
                        <img src="{{asset('')}}main/images/icon_input_confirmpass.svg" alt="">
                        <p class="enter__input_name">Confirm your pass</p>
                        <div class="enter__input placeholder__group_input">
                            <input id="reg-pass-2" name="password_2" type="password" class="order__input placeholder__input order__input_pass">
                            <p class="place_span">
                                <img src="{{asset('')}}main/images/icon_placeholder.svg" alt=""> Please confirm
                                your pass...
                            </p>
                            <button class="show_pass"></button>
                        </div>
                    </div>
                </div>
                
                <div class="modal__item-input" style="width: 100%;margin: auto;">
                    <div style="width: fit-content; margin: auto;">
                        <label class="containerch">
                            <input type="checkbox" class="termchek">
                              I have read and agree to the <a class="termsandcond" style="color: #7e7ee2;">Services Agreement and Privacy Policy</a>.
                              <span class="checkmark"></span>
                        </label>    
                    </div>
                </div>
                
                <style>
                    #benefits_modal .modal__alert-text p{
                        text-align: justify;
                    }
                    #benefits_modal .modal__alert-text a{
                        color: #000;
                    }
                </style>
                
                <script>
                    $(".termsandcond").click(function(e){
                        alertHead = "Services Agreement and Privacy Policy";
                        alertText = `USER AGREEMENT
                            
                            TERMS AND DEFINITIONS USED IN THIS AGREEMENT
                            The terms listed below in this Agreement have the following meanings:
                            1.1. Site - the entirety of all information (textual and graphical) located on the internet at <a href="https://MintBit.co">https://MintBit.co</a>, owned by the company "MintBit".
                            1.2. Site Administration - employees of "MintBit" authorized to change information on the Site.
                            1.3. User of the Site (hereinafter - User) - an individual using the "MintBit" Site.
                            1.4. Parties - "MintBit" and the User of the Site who have entered into this Agreement.
                            
                            GENERAL PROVISIONS
                            2.1. This User Agreement (hereinafter - Agreement) applies to the MintBit Site located on the internet at <a href="https://MintBit.co">https://MintBit.co</a>.
                            2.2. The Site is owned by the company "MintBit".
                            2.3. This Agreement regulates the relationship between "MintBit" and the User of the Site.
                            2.4. "MintBit" reserves the right to change, add, or delete clauses of this Agreement at any time without notifying the User.
                            2.5. Continued use of the Site by the User implies acceptance of the terms of the Agreement and any amendments made to it.
                            2.6. The User is personally responsible for checking this Agreement for changes.
                            2.7. The Agreement enters into force from the moment the User agrees to its terms, either by viewing the Site or by completing the registration process. The User is considered to have accepted the terms of the Agreement in full, without any reservations or exceptions.
                            
                            SUBJECT OF THE AGREEMENT
                            3.1. The subject of this Agreement is to provide the User with access to information and online services presented on the Site.
                            3.2. The Site provides the User with the following types of services:
                            Free access to information (textual and graphical) with the right to view such information;
                            Access to site search and navigation tools;
                            Provision of opportunities for the User to mine cryptocurrency, invest, reinvest, withdraw funds, and exchange;
                            Access to information about services offered, special promotions, bonuses, and discounts;
                            Ordering of services.
                            3.3. This Agreement covers all existing services on the Site at the current time, as well as any subsequent modifications and services that may appear in the future.
                            3.4. Access to the Site is provided free of charge.
                            3.5. This Agreement is a public offer. By accessing the Site, the User agrees to the terms of the Agreement and is considered to have joined this Agreement.
                            3.6. The use of materials and services of the Site is governed by the laws of Spain.
                            
                            RIGHTS AND OBLIGATIONS OF THE PARTIES
                            4.1. MintBit company has the right to:
                            4.1.1. Change the rules of using the Site, as well as change the content of the Site. Changes come into effect from the moment of publication of a new version of the Agreement on the Site.
                            4.1.2. Restrict access to the Site or its parts in case of User's violation of the terms of this Agreement or platform rules.
                            4.2. The User has the right to:
                            4.2.1. Access and use the Site for informational and similar purposes, as well as access to online services presented on the Site.
                            4.2.2. Ask any questions related to the services presented on the Site and other information posted on the Site using the "Contacts" section of the Site.
                            4.2.3. Use the Site solely for the purposes and in the manner provided for by the Agreement and not prohibited by Spanish law.
                            4.3. The User of the Site undertakes to:
                            4.3.1. Respect the property and non-property rights of authors and other right holders when using the Site.
                            4.3.2. Not take actions that may be considered as disrupting the normal operation of the Site.
                            4.3.3. Not disseminate any confidential and protected by Spanish law information about individuals or legal entities using the Site.
                            4.3.4. Avoid any actions that may violate the confidentiality of information protected by Spanish law.
                            4.3.5. Not use the Site for distributing advertising information.
                            4.3.6. Not use the Site services to:
                            - Upload content that is illegal, violates the rights of third parties, promotes violence, cruelty, hatred, or discrimination based on racial, national, gender, religious, social characteristics, contains false information and/or insults to specific individuals, organizations, government bodies.
                            - Incite unlawful actions, as well as assist individuals whose actions are aimed at violating restrictions and prohibitions in force in Spain.
                            - Violate the rights of minors and/or harm them in any form.
                            - Impersonate another person or representative of an organization and/or community without sufficient rights to do so, including the Site Administration.
                            - Mislead about the properties and characteristics of any service posted on the Site.
                            - Incorrectly compare services, as well as form a negative attitude towards persons using/not using certain services, or condemn such persons.
                            
                            4.4. The User is prohibited from:
                            4.4.1. Disrupting the proper functioning of the Site.
                            4.4.2. Circumventing the navigational structure of the Site to obtain or attempt to obtain any information, documents, or materials by any means not expressly provided by the Site's services.
                            4.4.3. Unauthorized access to the Site's functions, any other systems, or networks related to this Site, as well as any services offered on the Site.
                            4.4.4. Violating the security or authentication system on the Site.
                            4.4.5. Tracking or attempting to track any information about any other User of the Site.
                            4.4.6. Using the Site for any purposes prohibited by Spanish law, as well as inciting any unlawful activity or other activity that violates the rights of "MintBit" company or other individuals.
                            
                            USAGE OF THE WEBSITE
                            
                            5.1. The Site may not be copied, published, reproduced, transmitted, or distributed in any way, in whole or in part, without the prior written consent of MintBit Company.
                            5.2. The Site is protected by copyright, as well as other rights related to intellectual property, and legislation on unfair competition.
                            5.3. Online ordering on the Site does not require registration on the Site.
                            5.4. The User is personally responsible for maintaining the confidentiality of information, as well as for all activities conducted on behalf of the User without exception.
                            5.5. This Agreement applies to all additional provisions and terms for the provision of services on the Site.
                            5.6. Information posted on the Site should not be interpreted as an amendment to this Agreement.
                            5.7. The site administration has the right to make changes to the list of services offered on the Site and the prices applicable to the services provided at any time without notifying the User.
                            5.8. The document "Privacy Policy" regulates, in the relevant part, and applies to the use of the Site by the User.
                            
                            LIABILITY
                            
                            6.1. Any losses that the User may incur as a result of intentional or negligent violation of any provision of this Agreement, as well as due to unauthorized access to the communications of another User, are not reimbursed by MintBit company.
                            6.2. MintBit is not responsible for:
                            6.2.1. Delays or failures in the process of performing operations, arising due to force majeure, as well as any cases of malfunctions in telecommunication, computer, electrical, and other related systems.
                            6.2.2. Actions of translation systems, payment systems, and for delays associated with their operation.
                            6.2.3. Improper functioning of the Site if the User does not have the necessary technical means for its use, and also does not assume any obligations to provide users with such means.
                            
                            VIOLATION OF TERMS OF USE AGREEMENT
                            
                            7.1. MintBit Company reserves the right to disclose any information collected about the User of the Site if such disclosure is necessary in connection with an investigation or complaint regarding the improper use of the Site or to identify the User who may violate or interfere with the rights of MintBit Company or the rights of other Users of the Site.
                            7.2. MintBit Company has the right to disclose any information about the User that it deems necessary to comply with the provisions of applicable law or court decisions, to ensure compliance with the terms of this Agreement, and to protect the rights of Users.
                            7.3. MintBit Company has the right to disclose information about the User if Spanish law requires or permits such disclosure.
                            7.4. MintBit Company has the right to terminate access to the Site without prior notice to the User if the User violates this Agreement or the terms of use of the Site contained in other documents, as well as in case of termination of the Site's operation or due to technical malfunctions.
                            7.5. MintBit Company is not liable to the User or third parties for the termination of access to the Site in case the User violates any provision of this Agreement or any other document containing terms of use of the Site.
                            
                            DISPUTE RESOLUTION
                            
                            8.1. In the event of any disagreements or disputes between the Parties to this Agreement, a mandatory condition before going to court is the submission of a claim (a written proposal for voluntary settlement of the dispute sent to the technical support email).
                            8.2. The recipient of the claim within 30 calendar days from the date of its receipt notifies the claimant of the results of the claim consideration in writing.
                            8.3. If it is impossible to resolve the dispute voluntarily, any of the Parties has the right to apply to the court to protect their rights granted to them by the current legislation of Spain.
                            8.4. In case of violation of the conditions of this paragraph, any claim or cause of action is extinguished by the statute of limitations.
                            
                            ADDITIONAL CONDITIONS
                            
                            9.1. MintBit Company does not accept proposals from the User regarding changes to this User Agreement.
                            9.2. User feedback and questions posted on the Site are not confidential information and may be used by MintBit Company without restrictions.
                            
                            
                            
                            PRIVACY POLICY
                            
                            DEFINITION OF TERMS
                            In this Privacy Policy, the following terms are used:
                            1.1. Site - the entirety of all information (text and graphics) located on the Internet at <a href="https://MintBit.co">https://MintBit.co</a>, owned by MintBit Company.
                            1.2. Site Administration - employees of MintBit Company authorized to change information on the Site.
                            1.3. Site User (hereinafter - User) - an individual using the MintBit Company Site.
                            1.4. Parties - MintBit Company and the Site User who have entered into this Agreement.
                            1.5. Personal Data - any information related directly or indirectly to an identified or identifiable natural person (personal data subject).
                            1.6. Personal Data Processing - any action (operation) or set of actions (operations) performed with personal data using automation tools or without using such tools, including collection, recording, systematization, accumulation, storage, updating (modification), extraction, use, transfer (distribution, provision, access), depersonalization, blocking, deletion, destruction of personal data.
                            1.7. Confidentiality of Personal Data - a mandatory requirement for compliance by MintBit Company, the User, or any other person who has access to personal data not to allow their distribution without the consent of the personal data subject or the presence of another legal basis.
                            1.8. Cookies - technical data sent by the Site to the User over the Internet, stored on the User's device used to view the Site, and transmitted to the Site from the User's device used to view the Site each time the Site is visited.
                            1.9. IP Address - the technical address of the User on the Internet.
                            
                            GENERAL PROVISIONS
                            2.1. This Privacy Policy of personal data (hereinafter - Privacy Policy) applies to all information that the Site may receive about the User while using the Site and its services.
                            2.2. User's use of the Site means acceptance of this Privacy Policy and the terms of processing the User's personal data.
                            2.3. In case of disagreement with the terms of the Privacy Policy, the User is obliged to stop using the Site.
                            2.4. This Privacy Policy directly applies only to the Site. MintBit Company does not control and is not responsible for third-party sites that the User can go to through links available on the Site.
                            2.5. MintBit Company does not verify the accuracy of the personal data provided by the Site User.
                            
                            SUBJECT OF PRIVACY POLICY
                            3.1. This Privacy Policy establishes the obligations of MintBit Company to non-disclosure and ensuring the confidentiality regime for personal data that the User provides when registering on the Site.
                            3.2. Personal data permitted for processing under this Privacy Policy is provided by the User by filling out the registration form on the Site at <a href="https://MintBit.co">https://MintBit.co</a> and includes the following information:
                            3.2.1. User's login;
                            3.2.2. User's email;
                            3.2.3. User's password;
                            3.2.4. User's password confirmation.
                            3.3. Disabling Cookies may result in the inability to access the Site.
                            3.4. The Site collects IP addresses of Users. This information is used to ensure the technical operation of the Site.
                            3.5. Any other personal information not specified above (order history, devices used by the User to view the Site, etc.) is subject to reliable storage and non-distribution, except as provided in clause 5.2. and clause 5.3. of this Privacy Policy.
                            
                            4. PURPOSES OF USER PERSONAL INFORMATION COLLECTION
                            
                            MintBit Company may use the User's personal data for the following purposes:
                            
                            4.1. User identification, order processing, and/or conclusion of a contract for the provision of services remotely or their payment.
                            4.2. Providing the User with access to personalized information.
                            4.3. Establishing feedback with the User, including sending notifications, requests regarding the use of the Site, provision of services, payment, processing of requests and applications from the User.
                            4.4. Creating an account for online service ordering or payment if the User has consented to creating an account by completing the registration procedure on the Site.
                            4.5. Notifying the User of the Site about the status of online service orders or their payment.
                            4.6. Processing and receiving payments.
                            4.7. Providing the User with customer and technical support in case of problems related to the use of the Site.
                            4.8. Providing the User, with their consent, with updates to the range of services, special offers, price information, newsletters, and other information on behalf of MintBit Company or on behalf of MintBit Company partners.
                            4.9. Conducting advertising activities.
                            4.10. Providing the User with access to websites or services of MintBit Company partners for obtaining products, updates, and services.
                            
                            5. METHODS AND TERMS OF PERSONAL INFORMATION PROCESSING
                            
                            5.1. Processing of User's personal data is carried out without any time limit, by any lawful means, including in information systems of personal data using automation tools or without using such tools.
                            5.2. The User agrees that MintBit Company may transfer personal data to third parties.
                            5.3. User's personal data may be transferred to authorized state bodies of Spain only on the grounds and in the manner established by the legislation of Spain.
                            5.4. In case of loss or disclosure of personal data, MintBit Company informs the User about the loss or disclosure of personal data.
                            5.5. MintBit Company takes the necessary organizational and technical measures to protect the User's personal information from unauthorized or accidental access, destruction, alteration, blocking, copying, distribution, as well as from other unlawful actions of third parties.
                            5.6 MintBit Company, together with the User, takes all necessary measures to prevent losses or other negative consequences caused by the loss or disclosure of the User's personal data.
                            
                            6. OBLIGATIONS OF THE PARTIES
                            
                            6.1. The User is obliged to provide accurate personal information necessary for using the Site.
                            6.2. MintBit Company is obliged to:
                            6.2.1. Use the received information exclusively for the purposes specified in clause 4 of this Privacy Policy.
                            6.2.2. Ensure the confidentiality of confidential information, not to disclose it without the prior written permission of the User, as well as not to sell, exchange, publish, or disclose in any other possible way the transferred personal data of the User, except for clauses 5.2. and 5.3. of this Privacy Policy.
                            6.2.3. Take precautions to protect the confidentiality of the User's personal data in accordance with the procedure usually used to protect such information in the existing business turnover.
                            6.2.4. Block personal data related to the relevant User from the moment of the User's request or request of the User's legal representative or authorized body for the protection of the rights of personal data subjects for the period of verification in case of revealing inaccurate personal data or illegal actions.
                            
                            7. LIABILITY OF THE PARTIES
                            
                            7.1. MintBit Company that has not fulfilled its obligations is not responsible for losses incurred by the User due to the unlawful use of personal data in accordance with the legislation of the Russian Federation, except as provided in clauses 5.2., 5.3., and 7.2. of this Privacy Policy.
                            7.2. In case of loss or disclosure of Confidential Information, MintBit Company is not responsible if this confidential information:
                            7.2.1. Became public domain before its loss or disclosure.
                            7.2.2. Was received from a third party before it was received by MintBit Company.
                            7.2.3. Was disclosed with the User's consent.
                            7.2.4. Was disclosed by third-party websites and services whose links are present on the Site, in case the User uses such links and services.
                            
                            7.3. The User is solely responsible for the possible consequences of providing inaccurate and/or incomplete personal data.
                            
                            8. DISPUTE RESOLUTION
                            
                            8.1. Before going to court with a claim for disputes arising from the relationship between the Parties, it is mandatory to submit a claim (a written proposal for the voluntary settlement of the dispute).
                            8.2. The recipient of the claim within 30 calendar days from the date of its receipt notifies the claimant in writing of the results of the claim consideration.
                            8.3. In case of failure to reach an agreement, the dispute shall be referred to the court at the location of LLC "Trophy Russ Consult" in accordance with the current legislation of the Russian Federation.
                            8.4. This Privacy Policy and the relationship between the User and MintBit Company are governed by the current legislation of Spain.
                            
                            9. ADDITIONAL TERMS
                            
                            9.1. MintBit Company has the right to make changes to this Privacy Policy without the User's consent.
                            9.2. Changes to the Privacy Policy come into force from the moment they are posted on the Site.
                            9.3. All proposals or questions regarding this Privacy Policy should be reported to MintBit Company through the feedback form on the Site.
                            9.4. The current Privacy Policy is posted on the Site.

                        `;
                        
                        
                        createBenefitsModal(alertHead, '', alertText.replace(/\n/g, "<br>"), 'icon_success');
                        $(".termchek").removeAttr('checked');
                    })
                    
                
                </script>

                
                    <script src="https://www.hCaptcha.com/1/api.js" async="" defer=""></script>

                    <div class="modal__item-input" style="width: 100%;margin: auto;">
                        <div class="captcha" style="margin: auto;width: fit-content;">
                            <div class="h-captcha" data-theme="" data-sitekey="2827a667-6929-4a6f-a25b-66a7531f0ebc"></div>
                        </div>
                    </div>

                


                <div class="enter__item">
                    <button class="enter__btn open__popup" data-popup="enter__popup">
                        <img src="{{asset('')}}main/images/icon_confirm_arrow.svg" alt="">
                        Confirm
                    </button>
                </div>

            

        </div>

        </form>

    </div>
</section>




	<script>
		$(".get__bonus__button").click(function() {
			$('.modal__overflow-layer').toggleClass('visible');
  			$('.modal__sign-up').addClass('visible');
		});
	</script>

@include('layouts.mainsite.footer')