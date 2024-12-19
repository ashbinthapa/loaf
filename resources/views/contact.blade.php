<!-- resources/views/contact.blade.php -->
@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container ashbin-padding-top">
    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="ashbin-section">
                <div class="card">
                    <div class="card-body">
                        <p class="ashbin-title">Contact</p>

                        <!-- Display data from the Contact model -->
                        @if(!empty($data['contacts_all']) && $data['contacts_all']->isNotEmpty())
                        @foreach ($data['contacts_all'] as $contact)
                        <p class="card-text ashbin-contact-content">
                            {!! $contact->content !!}
                        </p>
                        @break <!-- Assuming you want to show only the first item -->
                        @endforeach
                        @else
                        <p>No contact data available.</p>
                        @endif

                        <!-- Display data from the ContactForm model 
            @if(!empty($data['contact_forms_all']) && $data['contact_forms_all']->isNotEmpty())
            @foreach ($data['contact_forms_all'] as $contactForm)
            <p class="card-text ashbin-contact-content">
                {!! $contactForm->message !!}
            </p>
            @endforeach
            @else
            <p>No contact form submissions available.</p>
            @endif
            -->

                        <!-- Contact form -->
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label fw-bold">Subject</label>
                                <input type="subject" name="subject" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label fw-bold">Message</label>
                                <textarea name="message" class="form-control" required rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <form class="d-flex ashbin-header-search" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </br>

            <div class="container ashbin-a-tag ashbin-widget-image">


                <h3 class="ashbin-widget-title"><span>Important Links</span></h3>
                <ul>
                    <li><a href="https://isernepal.org.np/"> ISER-N</a></li>
                    <li><a href="https://spe.psc.isr.umich.edu/"> Program in Society, Population, and Environment</a></li>
                    <li><a href="https://www.psc.isr.umich.edu/"> Population Studies Center</a></li>
                    <li><a href="https://umich.edu/"> University of Michigan</a></li>
                    <li><a href="https://www.gov.uk/government/organisations/department-for-international-development">DFID-Uk</a></li>
                    <li><a href="https://idea.isernepal.org/">IDEA</a></li>
                </ul>
                <h3 class="ashbin-widget-title"><span>Downloads</span></h3>
                <div class="ashbin-download-alingment">
                    <a href="/images/index/Household_Agriculture_and_Migration_Survey_Questionnaire_English.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        Household Agriculture Survey Questionnaire </a></br>
                    <a href="/images/index/LOAF_SST_July2015_Gallery-1.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        LOAF Specific Training</a>
                </div>
                </br>


                <h3 class="ashbin-widget-title"><span>Recent Activities</span></h3>
                <ul>
                    <li><a href="/trainings">
                            <div class="item">General Interviewing Techniques (GIT) Training</div>
                        </a>
                    </li>
                    <li><a href="/study specific training">
                            <div class="item">Study Specific Training</div>
                        </a></li>
                    <li><a href="/supervisors training">
                            <div class="item">Supervisors Training</div>
                        </a>
                    </li>
                    <li><a href="/crop cutting training">
                            <div class="item">Crop Cutting Training</div>
                        </a></li>
                    <li><a href="/survey data analysis training">
                            <div class="item">Survey Data Analysis Training</div>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

<p style="box-sizing: border-box; overflow-wrap: break-word; margin: 0px 0px 10px; line-height: 1.8; font-family: Raleway; font-size: 14px; background-color: #ffffff;">As per the institute&rsquo;s research capacity building goal, our institute (ISER-N) is, in collaboration with the Institute for Social Research (ISR) at University of Michigan and other collaborating universities, regularly offering various short courses on Survey Methods. ISR is the world&rsquo;s largest university based research institute devoted to the study of the social sciences. Working together over one and half decades now, ISER-N and ISR has developed advanced research and teaching expertise and infrastructures including a sophisticated long distance learning center. The courses offered at ISER-N are designed to provide theoretical understanding as well as practical applications of the state-of-the-art survey research methods and analytical techniques. They build upon a combination of both long-term in-house expertise in Nepal and expertise of its collaborating institutions. This strategy has been highly successful in utilizing culturally appropriate setting specific expertise as well as cutting-edge research methods and analytical techniques that have been continuously developed and rigorously used in advanced countries. In order to maintain excellence and keep up to date its research capacity, ISER-N adopts a collaborative capacity building strategy with academic institutions around the world and has been successfully completed following training programs to date.</p>
<div><button class="ashbin-accordion">Nepali Students, Scholars and Research Staff Trained in USA </button>
    <div class="ashbinpanel">
        <p>1. Summer Institute Courses, Survey Research Center, University of Michigan &ndash; 50 Participants<br />2. Long-term Academic Training &ndash; 13 Participants<br />3. Other Seminar and Workshops &ndash; 6 Participants</p>
    </div>
    <button class="ashbin-accordion">International Students, Research Scholars and Post Doctoral Fellows Field Training in Nepal </button>
    <div class="ashbinpanel">
        <p>1. Undergraduate Students &ndash; 9 Participants<br />2. Graduate Students &ndash; 27 Participants<br />3. Post Doctoral Fellows/Junior Faculty &ndash; 8 Participants<br />4. Policy Communication Fellows &ndash; 5 Participants</p>
    </div>
    <button class="ashbin-accordion">On Site Training: Training and Workshops</button>
    <div class="ashbinpanel">
        <p>1. Data Users&rsquo; Workshop &ndash; 121 Participants<br />2. Training on Survey Research Techniques &amp; Survey Data Analysis &ndash; 236 Participants<br />3. General Interviewing Techniques Training &ndash; 577 Participants<br />4. Interns- 3 Participants</p>
    </div>
    <button class="ashbin-accordion">Digital Survey Presentation</button>
    <div class="ashbinpanel">
        <p class="MsoBodyText">Stone, Lyman (2024). <em><span style="font-family: 'Liberation Serif',serif; mso-bidi-font-family: 'Lohit Devanagari';">Digital survey presentation: Types of providers</span></em>.</p>
        <p class="MsoBodyText">The presentation titled <em><span style="font-family: 'Liberation Serif',serif; mso-bidi-font-family: 'Lohit Devanagari';">Digital Survey Presentation: Types of Providers</span></em> by Lyman Stone discussed various digital survey platforms and their features. It categorized providers into three types: full-service commercial platforms, medium-service XLSForm hosts, and do-it-yourself protocols. Full-service commercial platforms, such as Alchemer and Qualtrics, host data externally, can recruit respondents, and manage workflows. Medium-service XLSForm hosts, like KoboToolbox, ODK, and Survey CTO, also host data externally but offer limited proprietary features and require significant learning to use effectively. Do-it-yourself protocols, such as self-hosted ODK, provide flexibility for advanced users but require technical expertise.</p>
        <p class="MsoBodyText">In this presentation we mainly discussed about alchemer, which was later tested in a web browser and found to have limitations, including the inability to work offline, which is essential for the project. Additionally, it incurred extra costs for multimedia question types and was not suitable for use by different user. As a result, Alchemer was deemed unsuitable for the project.</p>
        <p>Number of Participants &ndash; 6 Participants</p>
    </div>
    <button class="ashbin-accordion">Data Analysis Training using Stata Software</button>
    <div class="ashbinpanel">
        <div class="row">
            <div class="col-6">
                <p class="MsoNormal" style="margin-bottom: 0in;"><span style="font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Training Program: Data Analysis Training using Stata Software<br /></span><span style="font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Trainers: Prof. Sarah Brauner-Otto, Khandys Agnant<br />Venue: Institute for Social and Environmental Research Nepal, Fulbari<br />Dates: 02 to 05 December 2024<br />Time: 10:00 AM&nbsp;-&nbsp;4:00 PM<br />Duration: Four days</span></p>
                <p class="MsoNormal" style="text-align: justify;"><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">This report&nbsp;summarizes&nbsp;the successful completion of the Comprehensive Training Workshop on Data Analysis Using Stata Software, conducted by Prof. Sarah Brauner-Otto and Khandys Agnant from 02 to 05 December 2024 at the Institute for Social and Environmental Research Nepal, Fulbari. The&nbsp;design of the&nbsp;workshop&nbsp;aimed&nbsp;to&nbsp;enhancing&nbsp;the ISERN staff&rsquo;s and student&rsquo;s skills in statistical data analysis, targeting&nbsp;those&nbsp;participants&nbsp;with the desire&nbsp;to&nbsp;enhance&nbsp;their analytical data analysis skills and&nbsp;seek&nbsp;practical knowledge for their academic and professional work.</span></p>
                <p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Overview of the Workshop<br /></span></strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">The Data Analysis Training using Stata Software&nbsp;equipped&nbsp;participants with an in-depth understanding of statistical analysis techniques and tools&nbsp;that&nbsp;are vital&nbsp;for effective data handling. This workshop aimed at equipping individuals with practical knowledge to carry out advanced data analysis tasks using Stata software.</span></p>

            </div>
            <div class="col-6"><img class="img-fluid m-2" src="../../../images/gallery/data analysis training using stata 05 dec 2024.png" style="width:auto; height:200px" /></div>
        </div>
        <p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Day 1: Introduction to Stata and Data Types<br /></span></strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif; mso-fareast-font-family: 'Times New Roman';">On the first day, Adina Gurung was started the welcome with ISERN introduction and ISERN goals.</span><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;"> And Professor Sarah continued an overview of Stata Software, followed by&nbsp;talks&nbsp;on the types of data and their&nbsp;importance&nbsp;in&nbsp;relation&nbsp;to&nbsp;statistical analysis.&nbsp;The discussions during&nbsp;this session&nbsp;created&nbsp;awareness&nbsp;among&nbsp;participants&nbsp;about&nbsp;the&nbsp;role&nbsp;of&nbsp;Stata&nbsp;in&nbsp;accomplishing&nbsp;different&nbsp;data analysis&nbsp;jobs. Instructor Khandys </span><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif; mso-fareast-font-family: 'Times New Roman';">covering topics such as tabulation, code generation, recode , data Labelling and practical exercises.</span></p>
        <p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Day 2:&nbsp;Conceptual&nbsp;and&nbsp;Statistical&nbsp;Analysis<br /></span></strong><span style="font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Day&nbsp;Two&nbsp;also&nbsp;focused&nbsp;on&nbsp;basic&nbsp;statistics&nbsp;concepts:&nbsp;notation, normal distribution, measures of dispersion, confidence intervals, and hypothesis testing all&nbsp;those&nbsp;things&nbsp;one&nbsp;should&nbsp;know&nbsp;to&nbsp;understand&nbsp;data behavior&nbsp;or&nbsp;carry&nbsp;out any&nbsp;hypothesis-driven analysis. The focus was&nbsp;enabling&nbsp;the&nbsp;participants to&nbsp;accurately&nbsp;interpret statistical results&nbsp;and apply&nbsp;the&nbsp;insights&nbsp;to real-world&nbsp;problems.</span></p>
        <p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Day 3: Univariate and Bivariate Statistics<br /></span></strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Third day was&nbsp;focused&nbsp;on&nbsp;the estimation and interpretation of univariate and bivariate statistics.&nbsp;The&nbsp;participants learned how to analyze&nbsp;data for one&nbsp;variable&nbsp;(univariate) and&nbsp;two variables (bivariate), gaining practical skills in&nbsp;the&nbsp;interpretation&nbsp;of data&nbsp;and&nbsp;analysis of&nbsp;correlation.</span></p>
        <p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Day 4: Multivariate Regression and Presentations<br /></span></strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">In&nbsp;the final day, participants&nbsp;learned&nbsp;some&nbsp;advanced&nbsp;multivariate regression techniques:&nbsp;OLS&nbsp;and Logit regression models. These advanced techniques&nbsp;will&nbsp;enable&nbsp;them&nbsp;to&nbsp;dig&nbsp;more&nbsp;deeply into the&nbsp;relationships&nbsp;of&nbsp;several&nbsp;variables. The workshop&nbsp;ended&nbsp;with&nbsp;the&nbsp;presentation&nbsp;of&nbsp;work&nbsp;by participants,&nbsp;where&nbsp;they applied&nbsp;the&nbsp;techniques&nbsp;they&nbsp;had&nbsp;learned&nbsp;on real-world data.</span></p>
        <p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Participants</span></strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;"><br />The&nbsp;following&nbsp;were&nbsp;in&nbsp;attendance&nbsp;at&nbsp;the&nbsp;workshop&nbsp;and&nbsp;were&nbsp;active&nbsp;in discussions and&nbsp;exercises throughout the program: <br />1. Dr. Ananta Dahal - Student<br />2. Asmi Paudel &ndash; Student <br />3. Bibek Sapkota-<span style="mso-spacerun: yes;">&nbsp; </span>ISERN staff<br />4. Goma Rai- Student<br />5. Kamana Ghimire- ISERN staff<br />6. Manila Chaudhary- Student <br />7. Sabina Shrestha- Student<br /></span><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">8. Shurendra Ghimire- Student<br /></span><span style="font-family: 'Times New Roman', serif; font-size: 12pt;">9. Adina Guurng- ISERN staff</span><span style="font-family: 'Times New Roman', serif; font-size: 12pt;">&nbsp;</span></p>
        <p class="MsoNormal"><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Conclusion<br /></span></strong><span style="font-family: 'Times New Roman', serif; font-size: 12pt;">The Data Analysis Training using Stata Software workshop successfully met its objectives, providing participants with the skills necessary to perform statistical data analysis. Feedback from the participants highlighted the effectiveness of the workshop, noting the practical nature of the training and its relevance to both academic and professional work.</span></p>
        <p class="MsoNormal"><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">Participants completed the workshop with a stronger understanding of statistical concepts and the confidence to apply Stata software to their data analysis tasks. </span></p>
    </div>
</div>