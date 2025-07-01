-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2020 at 09:08 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `znbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `At_Title` text NOT NULL,
  `At_content` text NOT NULL,
  `At_image` text NOT NULL,
  `At_sub_cat` int(11) NOT NULL,
  `At_category` int(11) NOT NULL,
  `At_status` text NOT NULL,
  `Document` text NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, `At_status`, `Document`) VALUES
(33, 'About Us', '<h4 style=\"text-align: left;\">Vision</h4><hr><p>To become the Premiere Banking and Housing Finance Institution with the leading market share in Zambia.</p><h4 style=\"text-align: left;\">Mission</h4><hr><p>To provide quality, affordable and sustainable Mortgage finance, financial services and other allied services for the benefit of clients, stakeholders and the society.</p>', '', 12, 1, 'Published', '../Uploads/Document/1585490992'),
(36, 'About Emmasdale Campus', '<p>LICEF SCHOOL is a non-profit making private institution run by the â€˜Lusaka Islamic Cultural and Educational Foundationâ€™ from whence LICEF derives its name. It is situated on a 12 acre campus at the Burma Road / Indus Street junction.\r\n\r\n                                Founded in 1981, primarily for the benefit of Muslim children but open to any non-Muslim, the school today comprises of a pre-school, primary and secondary section on one campus with a total enrollment in the region of 1000 plus. Enrollment begins at the age of three and a half years and a 13/14 year study programme leads to Grade 11.</p>\r\n								<p>The curriculum offers the Zambia Basic Education Syllabus leading to the Grade 9 Junior Secondary School Certificate and the Cambridge International Examinations at the end of Grade 11/12. Pupils are also prepared for entry into the secondary school via the internal â€œCheckpoint Seven Examsâ€, which replaces the government Grade 7 Exams, the latter no longer being an entry qualification into Grade 8 for LICEF. Cambridge Secondary is been introduced in 2017 at Grade Seven level.</p>', '5e81afe104529_CR 3.jpg', 9, 1, 'Published', '../Uploads/Document/1585557473'),
(39, ' DR. NGANDU UNVEILS ZNBS CORPORATE STRATEGIC PLAN (CSP)', '<hr><p><br></p><p style=\"text-align: justify;\">Minister of Finance Dr. Bwalya Ndandu (2nd from right) in the company of Zambia National Building Society (ZNBS) Board Chairman Dr. David Nama, Former BoZ Governor and ZNBS Board member</p><p style=\"text-align: justify;\">&nbsp;Dr. Michael Gondwe and ZNBS Managing Director Mr. Joseph Chikolwa unveiling the new Corporate Strategic Plan (CSP) for the period 2019 to 2023. Unveiling the strategic plan Dr. Ngandu government is pleased to note that ZNBS has continued to register growth evidenced by the declaration of dividend to the shareholder. The ZNBS also presented a cheque of K1,500,000.00 to the Minister of Finance as third dividend for the financial year 2018-2019.</p>', '5ec115975b0c8_cspfm.jpg', 17, 3, 'Published', '1589711366'),
(40, 'BEST IN BANKING - 2019 TRADE FAIR', '<div style=\"text-align: justify;\"></div><hr style=\"text-align: justify;\"><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\">ZNBS has been awarded 1st Prize in Banking Exhibit category at the 2019 Zambia International Trade Fair (ZITF) in Ndola.&nbsp;</p><p style=\"text-align: justify;\">This years trade fair was running under the theme &quot;Inclusive Growth Through Entrepreneurship&quot;. The Society also bugged second Prize in Non-Bank Financial institutions category.</p>', '5ec11714744b7_zitf1.jpg', 17, 3, 'Published', '1589712660'),
(42, 'ZNBS NYUMBA YA BANJA   PROMOTION', '<hr><p><br></p><p style=\"text-align: justify;\">Targets to empower 180 families through affordable mortgage finance Physical places endure while memories and people fade, so homes and neighborhoods become &ldquo;memory machines&rdquo; that help us keep alive some of the strongest sources of what has given our lives meaning, well-being, and happiness. Zambia National Building Society (ZNBS) is about creating these &ldquo;memory machines&rdquo;. But more importantly giving lives meaning, well-being and happiness.</p><p style=\"text-align: justify;\">&nbsp;The launch of the Nyumba Ya Banja Mortgage Promotion sets in motion the aspiration of the Society in terms of its mission to provide affordable and sustainable mortgage financial, financial services and other allied services for the benefit of the Society and other stakeholders. The ZNBS Acting Managing Director Mrs. Mildred Mutesa shared that &ldquo;Nyumba Ya Banja&rdquo; mortgage promotion has been coined against the background of family security and a sense of ownership. &ldquo;It means a home for the family and denotes a sense of family and collective ownership of the family home which ZNBS is proud to play a role in facilitating&rdquo;, Mrs. Mutesa said during the launch of the long awaited promotion. Launched on the 24th of February, 2020, the mortgage promotion attracted the interest of the Vice President of the Republic of Zambia, Mrs. Inonge Mutukwa Wina. Speaking through her representative, Housing and Infrastructure Minister, Eng. Charles Mushota at the Pamodzi Hotel in Lusaka, Mrs. Wina identified some key factors that have contributed to the rise in the housing deficit in Zambia to as Urbanization and high cost and limited availability of long term financing. &ldquo;Although there has been rapid growth of the urban population, investment in urban infrastructure has not been commensurate with the growth in population.</p><p style=\"text-align: justify;\">&nbsp;We therefore believe that we need initiatives like the Nyumba Ya Banja Mortgage Promotion to assist more Zambians with home ownership&rdquo; the Vice President said. &ldquo;My challenge to ZNBS and other financial institutions is to come together as an industry and create new and innovative ways of assisting the informal sector to also join in the journey of home ownership.&rdquo; The Nyumba Ya Banja Mortgage Promotion is set to empower 180 families and will run for a period of six (6) months beginning 24th February, 2020 targeting both men and women. ZNBS has dropped all arrangement fees from 5% to 0% during the period of the promotion. Successful customers will also get up to 100% financing of their purchase under outright purchase. This means that instead of the 75% Loan To Value (LTV) as per industry practice, ZNBS will pay out the full cost of a house.Customers will also enjoy up to 60 days&rsquo; repayment holiday from the date of disbursement of the approved mortgage. And speaking at the same function, ZNBS Board Chairperson Dr. David Nama highlighted some of the efforts the Society has put in place to address some of these challenges. &rdquo; While we understand the challenges that come with access to affordable housing and housing finance by our customers such as the high cost of borrowing and lack of security or collateral, I am happy to share with you some of the efforts that ZNBS has put in place to try and address these challenges.&nbsp;</p><ol><li style=\"text-align: justify;\">ZNBS has partnered with a number of developers for the financing of affordable housing units by off-takers.</li><li style=\"text-align: justify;\">&nbsp;ZNBS expanded its geographical presence by opening a branch in Nyimba, Eastern Province and one in Lusaka at Cosmopolitan mall. This enables us to reach far and wide in terms of service delivery.&nbsp;</li><li style=\"text-align: justify;\">In an effort to deliver affordable housing to the public, ZNBS acquired parcels of land for Housing Projects in Nyimba, Chilanga , Chikakanta Chisamba, Kabwe, Kitwe, Chililabombwe, Kalumbila, Chembe, Mansa, Kawambwa, Mwansabombwe, Mpika and Kasama districts from the respective councils.&nbsp;</li><li style=\"text-align: justify;\">Partnership with National Pension Scheme Authority (NAPSA)for the provision of Mortgages at 14% interest per annum with a repayment period of 30 years for buyers of houses at North Gate Housing Estate in Lusaka. This was against a 30-year deposit placed with the Society by NAPSA.&rdquo; The Nyumba Ya Banja Mortgage promotion is expected to end in July, 2020.</li></ol><p style=\"text-align: justify;\">&nbsp;ZNBS has also partered with Kansai Plascon to award the first 20 successful applicants with a 20 litre tin of paint and a 10% discount coupon to the remaining 160 customers that will have their mortgage applications approved.</p>', '5ec11ac76f3ce_slide1.jpg', 17, 3, 'Published', '1589713607'),
(47, 'Our Branch Network', '<h4 style=\"text-align: center;\">Visit a Branch Near You</h4><hr><p><br></p>', '5eca44d4c16a9_zambianmap.jpg', 20, 5, 'Published', '1590314197'),
(48, 'Banking', '<p>Zambia National Building Society is committed to providing its clients with the security, convenience and value for money they expect from a local Financial Institution which has been in existence for more than 30 years.</p><p>&nbsp;In a world filled with uncertainties, our aim is to grow with you and plot a steady path together that best allows you to realize your goals whatever they may be.</p><p>&nbsp;As such, we offer you a range of Banking Products and Services that will enhance your Banking experience.</p>', '5eca52a3838a4_dsc_0279.jpg', 1, 5, 'Published', '1590317732'),
(49, 'Personal Account', '<p>There are any number of reasons you may want to save. It could be for your home, child&#39;s future or even saving for your first home. Personal Savings account can be opened either as individual or joint at any of our Branches country wide. This type of account provides an opportunity to create a personal emergency fund and manage your other financial worries.</p><h4>Requirements</h4><hr><p>Minimum cash - K40.00</p><ul style=\"list-style-type: disc;\"><li>A recent, passport-size photo</li><li>A valid copy of your National Registration Card/Passport/Drivers License</li></ul><h4><em>Account Benefits</em></h4><hr><ul><li>You can deposit and withdraw as much or as little as you like-as frequently as you wish</li><li>Inter Branch Transactions - enable you to carry out transactions at any of our Branches country wide</li><li>Account Balance enquiries - account information is availed when you call in person.</li><li>Account history statements detailing your transactions</li><li>Interest is calculated on your daily balance.</li></ul><h4><em>Terms and Conditions</em></h4><hr><ul><li>Minimum Account Balance- K40.00</li><li>Monthly Account Maintenance Charge- K8.00</li><li>Inter-Branch withdraw charge-K15.00</li><li>Minimum Interest at Competitive Rates</li></ul><p><br></p>', '', 21, 5, 'Published', '1590318696'),
(50, 'Life Assurance Account', '<p>Life Assurance gives a beneficiary an opportunity of quality life after death of Parent or Guardian. The funds are held in trust for benefiaries (surviving spouse, children or dependants) at the demise of Parent or Guardian.</p><p>The Account is opened in the joint names of the appointed administrator of Estate or surviving spouse and beneficiary (child or dependant)</p><p>collect a Stop Order form from any ZNBS Branch, fill in your details, have it stamped and instruct your employer to remit your contributions every month. Stop-Order Application Form) With your first contribution you can call on the Branch, with your pay slip, recent passport-size photo and a valid copy of your National Registration Card/Passport/Drivers License.</p><h4 style=\"font-weight: normal; font-style: normal; text-decoration: none; font-family: ;\"><em>Account Benefits</em></h4><hr><ul><li>No monthly service charge</li><li>Inter Branch Transactions - enable you to carry out transactions at any of our Branches country wide.</li><li>Funds are administered by ZNBS</li><li>Costs saving on transport, accommodation, food etc as funds can be accessed at your nearest ZNBS Branch.</li><li>Account Balance enquiries - account information is availed when you call in person.</li><li>Account history statements detailing your transactions</li><li>Interest is calculated on your daily balance, capitalized and credited to your account every 30 days</li></ul><h4 style=\"font-weight: normal; font-style: normal; text-decoration: none; font-family: ;\"><em>Terms and Conditions</em></h4><hr><p>Withdrawals are only allowed twice in a year to facilitate school requirements</p>', '', 21, 5, 'Published', ''),
(51, 'Salary Account', '<p><span>Salary Account is a transition account for anyone employed and getting his/her salary through ZNBS. This type of account can be opened at any of your nearest - ZNBS Branch.</span></p><h4 style=\"font-weight: normal; font-style: normal; text-decoration: none; font-family: ;\"><em>Requirements</em></h4><hr><ul><li>The first requirement is to instruct your employer to remit your monthly salary to any ZNBS Branch of your choice. Forms can either be collected either from ZNBS or employers. ( Salary Application Form)</li><li>No cash is needed to open this account but you will be required to present your pay slip at the Branch as proof of having opened a salary account with the Branch when you go to withdraw your money.</li><li>A recent, passport-size photo</li><li>A valid copy of your National Registration Card/Passport/Drivers Licence</li></ul><h4 style=\"font-weight: normal; font-style: normal; text-decoration: none; font-family: ;\"><em>Account Benefits</em></h4><hr><ul><li>Inter Branch Transactions - enable you to cash deposits or withdrawals, from your account at any of our Branches country wide.</li><li>Account Balance enquiries - account information is availed when you call in person.</li><li>Account history statements detailing your transactions</li><li>Interest is calculated on your daily balance.</li><li>It qualifies you for a short-term friendly loan.</li></ul><h4 style=\"font-weight: normal; font-style: normal; text-decoration: none; font-family: ;\"><em>Terms and Conditions</em></h4><hr><ul><li>Minimum Account Balance- K40.00</li><li>Monthly Account Maintenance Charge- K8.00</li><li>Salary Administration Fee -K10.00</li><li>Inter-Branch withdraw charge-K15.00</li><li>Competitive Interest Rates</li><li>Four free withdrawals per month, additional withdrawal is charged</li></ul>', '', 21, 5, 'Published', ''),
(52, 'Fixed Deposit Account', '<p><span>Fixed Deposit accounts must be opened with minimum initial deposit of K500.00 and interest is payable upon maturity. When this account attains maturity, the Bank will automatically renew the principal and accrued interest for a further period as stipulated by the account holder.</span></p><p>This will help you to save money keeping money intact for a certain period(30days).</p><h4><em>Requirements</em></h4><ul><li><hr><p>Minimum cash - K500.00</p></li><li style=\"margin: 0.2em 0px; padding: 0px 0px 0px 12px; line-height: 1.2em; float: none; background-image: url(;\">A recent passport-size photo</li><li style=\"margin: 0.2em 0px; padding: 0px 0px 0px 12px; line-height: 1.2em; float: none; background-image: url(;\">A valid copy of your National Registration Card/Passport/Drivers License</li><li style=\"margin: 0.2em 0px; padding: 0px 0px 0px 12px; line-height: 1.2em; float: none; background-image: url(;\">Tax Payers Identification Number (TPIN) Certificate</li></ul><h4><em>Account Benefits</em></h4><hr><ul><li>Interest can be withdrawn at maturity</li><li>No monthly service charge.</li><li>Inter Branch Transactions - enable you to carry out transactions at any of our Branches country wide.</li><li>For amounts above K50,000 interest can be negotiated after consultation with our Treasury Department.</li><li>Account Balance enquiries - account information is availed when you call in person.</li><li>Account history statements detailing your transactions.</li><li>Interest is calculated on your daily balance.</li></ul><h4><em>Terms and Conditions</em></h4><hr><ul><li>Minimum Account Balance- K500.00</li><li>Minimum Interest at Competitive Rates</li></ul>', '', 21, 5, 'Published', ''),
(53, 'Stop Order Account', '<p>This Account is specially developed to encourage salaried workers like you to save for a period of time and prosper by not only earning Interest but acquire that dream item of yours. ZNBS is a bank that will not only protect your money but help it grow.</p><p>collect a Stop Order form from any ZNBS Branch, fill in your details, have it stamped and instruct your employer to remit your contributions every month. Stop-Order Application Form) With your first contribution you can call on the Branch, with your pay slip, recent postcard-size photo and a valid copy of your National Registration Card</p><h4 style=\"font-weight: normal; font-style: normal; text-decoration: none; font-family: ;\"><em>Account Benefits</em></h4><hr><ul><li>You need not to visit the Branch to deposit. All deductions are done through payroll.</li><li>After 6 months, you will have saved for that item you so much wanted.</li><li>Interest is calculated on your daily balance.</li><li>Plan your family&#39;s bright future - educational finance</li><li>Account history statements detailing your transactions</li><li>It qualifies you for a short-term friendly loan</li></ul><h4 style=\"font-weight: normal; font-style: normal; text-decoration: none; font-family: ;\"><em>Terms and Conditions</em></h4><hr><ul><li>Withdrawals are only allowed after (6)six monthly contributions</li><li>Minimum contribution is K50.00</li><li>Minimum Account Balance- K40.00</li><li>Monthly Account Maintenance Charge - K8.00</li><li>Inter-Branch withdraw charge-K15.00</li><li>Competitive Interest Rates</li></ul>', '', 21, 5, 'Published', '1590319421'),
(54, 'Pensioners', '<p style=\"color: rgb(42, 44, 38); font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Open an account today and enjoy the following benefits</p><ul><li>Minimum Balance K5</li><li>No account maintenance fees</li><li>Access to Loans</li></ul>', '', 0, 0, 'Published', ''),
(55, 'Stop order Plus Account', '<p>Secure your future with a stop order plus account.This account is strictly for saving purposes only. It therefore allows you to plan and save for the future.</p><h4><em>Terms and Conditions</em></h4><hr><ul><li>Optional tenure ranging from 3 months to 24 months</li><li>Minimum balance of K100</li><li>Deposit directly into account or through payroll</li><li>Withdrawals allowed at the end of agreed tenure</li></ul><h4><em>&nbsp;Benefits</em></h4><ul><li><hr><p>No bank charges</p></li><li>Interest earning</li></ul>', '', 21, 5, 'Published', '1590319612'),
(56, 'Musika Account', '<h4 style=\"text-align: left;\"><em>Designed specifically for Marketeers</em></h4><hr><ul><li>Easy to Open</li><li>NO maintenance fees</li><li>Minimum balance is ONLY K10</li><li>Minimum account opening balance K20</li><li>Saving by members on a daily basis</li><li>Access to group loans</li><li>Competitive interest rates</li><li>Flexible terms and conditions</li></ul>', '', 21, 5, 'Published', ''),
(57, 'Mortgage loans', '<p>Buying or building a house is probably the biggest investment that you will ever make in your life.At ZNBS we realise this and have come up with solutions to help you achieve your dream.</p><p>The following are the different types of mortgage products:</p><h4><em>Outright &nbsp;Purchase</em></h4><hr><p><span style=\"font-weight: normal;\">A loan for purchase of an existing property or properties.</span></p><h4><em>Construction Loan</em></h4><hr><p><span style=\"font-weight: normal;\">A loan for construction purposes where one possesses a plot or has an incomplete structure and is looking to finish it.</span></p><h4><em>Home Improvement Loan</em></h4><hr><p lang=\"en-GB\">A loan for refurbishments, renovations and extensions to an existing property.</p>', '5eca7b68dcc0d_house and family1.jpg', 24, 5, 'Published', ''),
(58, 'Mortgage Requirments', '<h4 style=\"text-align: center;\">What Do You Need To Get A Mortgage</h4><hr><ul><li>Introduction Letter From Current Employer which should clearly indicate whether you are employed on permanent or contract basis</li><li><strong>Certified</strong> Photocopy Of either National Registration Card or valid Passport</li><li>One (1) Passport Size Photo</li><li><strong>Copy</strong> of a Title Deed , Land Record Card or Occupancy License</li><li>Original Latest Payslip stamped and signed by Payroll Accountant</li><li>Latest Bank Statements for the Past (6)Six months <strong>(Original or certified copies)</strong></li><li>Proof of residence i.e. Utility bill</li><li>Approved building plans to be submitted if constructing.</li><li>Schedule of works to be submitted for all borrowing except outright purchase</li><li>Proof of payment of rates and ground rent from the council and Ministry of Lands respectively<strong>&nbsp;(attach copy of latest receipt)</strong></li><li>Copy of Contract to be attached if employed on contract.</li><li>Stage inspection fee of K500.00 within Lusaka CBD and Ndola, and K700.00 elsewhere to be paid for each site visit.</li><li><strong>Valid Lease</strong> where<strong>&nbsp;rental income</strong> is declared</li></ul><h4 lang=\"en-GB\"><em>For Outright purchase</em></h4><ol><li><hr><p>Copy of NRC of Vendor,</p></li><li><p>Offer Letter</p></li><li>Contract of sale/Letter of sale</li></ol><h4><em>The following documents through the vendor&#39;s Lawyers will be required after approval of the loan:&nbsp;</em><strong><br></strong></h4><ul><li><hr><p>Granted Consent to Assign</p></li><li align=\"JUSTIFY\" lang=\"en-GB\" style=\"margin-bottom: 0in; font-weight: normal;\">Property Transfer Tax Clearance Certificate</li><li align=\"JUSTIFY\" lang=\"en-GB\" style=\"margin-bottom: 0in; font-weight: normal;\">Duly Executed Assignment</li><li align=\"JUSTIFY\" lang=\"en-GB\" style=\"margin-bottom: 0in;\">Duly Executed Mortgage Deed</li><li align=\"JUSTIFY\" lang=\"en-GB\" style=\"margin-bottom: 0in; font-weight: normal;\">Original Certificate Of Title, Land Record Card or Occupancy License</li></ul><h6><strong><span style=\"color: rgb(0, 0, 0);\">Clients to open one of the two accounts below when the application reaches offer stage</span></strong></h6><h4 lang=\"en-GB\"><em>Type of Account Minimum balance Maintenance fees</em></h4><ul><li><hr><p>Mortgage Fixed deposit account K1,000.00 with no maintenance fees</p></li><li>Mortgage savings account K700.00 with maintenace fee of K22.00</li></ul><h4><em>Requirements For Account Opening</em></h4><ul><li><hr><p align=\"LEFT\" lang=\"en-GB\" style=\"margin-bottom: 0in;\">Introduction Letter From Current Employer</p></li><li><p align=\"LEFT\" lang=\"en-GB\" style=\"margin-bottom: 0in;\">Photocopy Of National Registration Card <strong>( Certified)</strong></p></li><li><p align=\"LEFT\" lang=\"en-GB\" style=\"margin-bottom: 0in;\">Two (2) Passport Size Photos</p></li><li><p align=\"LEFT\" lang=\"en-GB\" style=\"margin-bottom: 0in;\">Utility bill</p></li><li>Hand written application letter</li></ul><p><span style=\"font-size: x-small;\"><strong>Note :&nbsp;</strong></span>Mortgage application form and CRB fees are not refundable. for details contact your nearest branch.</p>', '', 24, 5, 'Published', ''),
(59, 'FAQ on Mortgages', '<p>FAQ</p>', '', 24, 5, 'Published', ''),
(60, 'ZNBS Mobile banking', '<h4 style=\"text-align: center;\">Banking at your fingertips<em><hr></em></h4><p border=\"0\" class=\"fr-fir fr-dii\" height=\"459\" width=\"229\">environment you feel most comfortable with. You can get alerts and notifications and check balances.</p><p>Discover quick, simple and convenient way to take command of your bank account, on your mobile phone the following advantages:</p><ul><li><p style=\"margin-bottom: 0in;\">Convenient way to access your account</p></li><li><p style=\"margin-bottom: 0in;\">Safe and Secure Banking</p></li><li><p style=\"margin-bottom: 0in;\">No need of queuing up at ATMs to check balances.</p></li><li><p>Banking services without Internet</p></li></ul><p>Our mobile banking services work with almost all types of handsets and help you access your Bank account anytime, anywhere.</p><p>A quick and easy registration is all you need to avail ZNBS Mobile Banking services.</p><p>Get started with Mobile Banking by dialing *6868# and subscribe NOW!</p><p><em><strong>Ts and Cs Apply</strong></em></p><p><br></p><p><br></p>', '', 22, 5, 'Published', ''),
(61, 'Internet banking', '<p>Internet banking</p>', '', 22, 5, 'Published', ''),
(62, 'Agency banking', '<p>Agency Banking</p>', '', 22, 5, 'Published', ''),
(63, 'How to', '<p>How to</p>', '', 22, 5, 'Published', ''),
(64, 'ZNBS society properties', '<div class=\"row\"><div class=\"col-sm\"><h4 style=\"margin-left: 20px;\">Lusaka</h4><ul><li style=\"margin-left: 20px;\">Society House,Cairo Road</li><li style=\"margin-left: 20px;\">Century House, Cairo Road</li><li style=\"margin-left: 20px;\">Permanent House, Cairo Road</li><li style=\"margin-left: 20px;\">Central Arcades, Chachacha Road</li><li style=\"margin-left: 20px;\">Chachcha House, Chachacha Road</li></ul><hr style=\"margin-left: 20px;\"><h4 align=\"LEFT\" style=\"margin-left: 20px;\">Ndola&nbsp;</h4><ul><li style=\"margin-left: 20px;\">Nordesia House, Buteko Avenue</li><li style=\"margin-left: 20px;\">Bwafwano House, Buteko Avenue</li><li style=\"margin-left: 20px;\">Security House, Buteko Avenue</li></ul><hr style=\"margin-left: 20px;\"><h4 align=\"LEFT\" style=\"margin-left: 20px;\">Mufulira&nbsp;</h4><ul><li style=\"margin-left: 20px;\">Security and Nordesia House, Buteko Avenue</li></ul><hr></div><div class=\"col-sm\"><h4 align=\"LEFT\" style=\"margin-left: 20px;\">Choma&nbsp;</h4><ul><li style=\"margin-left: 20px;\">Permanent House, Livingstone Road</li></ul><hr><h4 style=\"margin-left: 20px;\">Livingstone</h4><ul><li style=\"margin-left: 20px;\">Permanent House, Mosi-o-Tunya Road</li></ul><hr style=\"margin-left: 20px;\"><h4 align=\"LEFT\" style=\"margin-left: 20px;\">Chingola&nbsp;</h4><ul><li style=\"margin-left: 20px;\">Permanent House, Kitwe/Kwacha Road</li><li style=\"margin-left: 20px;\">Bwafwano House, Kwacha Road</li></ul><hr style=\"margin-left: 20px;\"><h4 style=\"margin-left: 20px;\">Kitwe </h4><ul><li style=\"margin-left: 20px;\">Permanent House, City Square</li></ul><hr style=\"margin-left: 20px;\"><h4 style=\"margin-left: 20px;\">Chililabombwe</h4><ul><li style=\"margin-left: 20px;\">Permanent House, President Avenue/Penn Brooke Road</li></ul></div></div>', '', 25, 6, 'Published', ''),
(65, 'Vacant spaces For Rent', '<h4>PERMANENT HOUSE, LUSAKA</h4><hr><p><span lang=\"EN-GB\">This is a four storey multi-tenanted commercial property situated along Cairo Road within the Central Business District of Lusaka. The building is easily accessible as it fronts Cairo Road which is easily accessible with complimentary properties in the vicinity.</span></p><p><span lang=\"EN-GB\">An internal floor space of 3,192.99 Square metres available for occupation from the ground floor to the third floor.</span></p><p><br></p><h4>CENTURY HOUSE, LUSAKA</h4><hr><p>This is a four storey commercial building with a penthouse flat to upper floor. It is well located in the central business district of Lusaka along Cairo Road which makes it easily asccessible as it is a very busy road. The building is in close proximity to competing and complementary properties. An internal floor space of 2127.23 sq.m is available for occupation from the ground floor to the fourth floor.</p>', '5ecb9932ab04c_rent1.jpg', 25, 6, 'Published', '1590401331rent19.pdf'),
(66, ' Property Customer Care', '<p><span>Details available soon</span></p>', '', 25, 6, 'Published', ''),
(67, 'Office Space Application', '<p>Download the form below to Apply for Office Rentals</p>', '', 25, 6, 'Published', '1590407542OFFICE RENT APPLICATION FORM.pdf'),
(70, 'Best Evaluated Bidder - Core Banking System', '', '', 26, 7, 'Published', '1590639169BEST EVALUATED BIDDER - CORE BANKING.pdf'),
(71, ' Best Evaluated Bidder - ICT Equipment', '', '', 26, 7, 'Published', '1590639374bestbidder.pdf'),
(72, 'MANAGING DIRECTOR â€“ ZNBS 1', '<p><br></p><p><strong>MAIN PURPOSE OF THE JOB</strong></p><p><br></p><p>To implement policy decisions of the Shareholder and the Board of Directors, initiate programmes, advise and report to the Board of Directors on all aspects and functions in order to ensure sustainability and growth of Zambia National Building Society as a primary mortgage financing institution within the framework of policies established by the Shareholder and the Board of Directors.</p><p><strong>MAIN DUTIES AND RESPONSIBILITIES:</strong></p><p><br></p><ol><li>&middot; To support the Vision, Mission and Mandate of ZNBS by assuming a leadership role in the Society, implementing the necessary strategies, policies and plans and managing the operations and resources of the Society in a responsible and accountable manner that ensures effective achievement of the Society&rsquo;s strategic objectives;</li><li>&middot; To spearhead the corporate planning process for the Society and provide strategic direction to the planning process in order to ensure that ZNBS&rsquo;s plans are in conformance with set criteria and in alignment with ZNBS&rsquo;s mission, vision, goals and objectives;</li><li>&middot; To evaluate the Society&rsquo;s departmental budgets and plans and provide guidance in ensuring that submissions are realistic and attainable and thereafter present the consolidated Budget to the Board for approval;</li><li>&middot; To ensure, in conjunction with Heads of Departments, timely preparations and submission of long and medium term plans, annual budgets and periodic financial reports for the Society&#39;s operations for consideration by the Board of Directors and other stakeholders;</li><li>&middot; To propose plans to the Board of Directors for development of new financial services to be provided by the Society in pursuit of its organizational mandate;</li><li>&middot; To ensure that the Society has the right caliber of human and other resources and to make submissions to the Board of Directors for the procurement of such resources as are deemed necessary for the effective implementation of the Society&rsquo;s strategic objectives;</li><li>&middot; To provide executive leadership and business acumen with overall responsibility for business growth and profitability of the Society;</li><li>&middot; To evaluate programmes/projects and regularly report performance against set indicators to the Board of Directors including recommendations for overcoming adverse deviations from set objectives;</li><li>&middot; To coordinate the efforts of Staff, Management and the Board of Directors to ensure unity of purpose towards the achievement of the mission and objectives of the Society;</li><li>&middot; To ensure that the Society has the necessary strategic Information Systems and Technologies to run its business and processes effectively;</li><li>&middot; To ensure formulation, implementation and adherence to effective procurement and supplies policies, procedures and programmes and ensure that they comply with ZPPA guidelines;</li><li>&middot; To prepare and present to the Board and relevant bodies periodic reports of the Society&rsquo;s performance and related matters for information and decision making;</li><li>&middot; To ensure that the Society adheres to all risk and regulatory compliance requirements;</li><li>&middot; To ensure industrial harmony within the Society;</li><li>&middot; To agree with, monitor and review subordinates performance to ensure that they meet their performance objectives and devise remedial measures to address short comings in performance;</li><li>&middot; To undertake such other tasks and responsibilities as the Board may deem necessary and appropriate.</li></ol><p><br></p><p><strong>QUALIFICATIONS AND EXPERIENCE</strong></p><ol><li>&middot; Full Grade 12 certificate</li><li>&middot; Bachelor&rsquo;s Degree in Business Administration, Economics, Accountancy, Banking and Finance or related discipline;</li><li>&middot; Master&rsquo;s Degree in Business Administration, Economics, Banking or related financial discipline;</li><li>&nbsp; &nbsp;Professional qualification/certification is an added advantage;</li><li>Minimum five (5) years experience at Senior Management or Executive Management level in the financial or banking sector;</li><li>Experience at Chief Executive Officer level is an added advantage.</li></ol><p><strong>REQUIRED COMPETENCIES</strong></p><ol><li> Demonstrated excellent strategic and business acumen skills;</li><li>Excellent interpersonal and influencing skills with ability to partner with a dynamic leadership team;</li><li>Proven knowledge of corporate governance, regulatory framework and risk management in the banking and financial sector;</li><li>&middot; Proactive stakeholder management capability;</li><li>&middot; Strong credit management experience and;</li><li>Innovative change management skills.</li></ol><p><br></p><p>Appropriately qualified and interested candidates meeting the above credentials must submit application letters enclosing a detailed curriculum vitae (CV), with three (3) traceable references and copies of academic/professional qualifications to the undersigned by 31st January 2020 with the position applied for clearly marked on the envelope.</p><p><br></p><p><br></p><p>The Board Chairman</p><p>Zambia National Building Society&#39;</p><p>Century House</p><p>PO Box 30420</p><p>LUSAKA</p><p><br></p><p>Email: executiverecruitment@znbs.co.zm or</p><p>Hand -drop at Century House, Third Floor, Cairo, Road, Lusaka.</p><p>Please note that only short-listed candidates will be contacted.</p><p><br></p><p>&nbsp;</p>', '', 29, 8, 'Published', ''),
(200, 'About Us', '\r\nIntro\r\n\r\n', '', 12, 1, 'Published', '');

-- --------------------------------------------------------

--
-- Table structure for table `asset_categories`
--

DROP TABLE IF EXISTS `asset_categories`;
CREATE TABLE IF NOT EXISTS `asset_categories` (
  `category_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset_categories`
--

INSERT INTO `asset_categories` (`category_id`, `Name`, `Description`) VALUES
(10, 'Residential Plot', 'Residents'),
(11, 'farm Plot', 'farm'),
(12, 'House', 'house');

-- --------------------------------------------------------

--
-- Table structure for table `at_categories`
--

DROP TABLE IF EXISTS `at_categories`;
CREATE TABLE IF NOT EXISTS `at_categories` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `at_categories`
--

INSERT INTO `at_categories` (`ID`, `Name`) VALUES
(0, 'Jobs'),
(1, 'About_us'),
(2, 'Services'),
(3, 'News'),
(4, 'Content'),
(5, 'banking_Finance'),
(6, 'property_Estate'),
(7, 'Tender'),
(8, 'Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `branch_tbl`
--

DROP TABLE IF EXISTS `branch_tbl`;
CREATE TABLE IF NOT EXISTS `branch_tbl` (
  `branch_id` int(11) NOT NULL,
  `branch_name` text NOT NULL,
  `Address1` text NOT NULL,
  `Address 2` text NOT NULL,
  `Town` text NOT NULL,
  `Contact_no1` text NOT NULL,
  `Contact_no2` text NOT NULL,
  `email` text NOT NULL,
  `google_map` text NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_tbl`
--

INSERT INTO `branch_tbl` (`branch_id`, `branch_name`, `Address1`, `Address 2`, `Town`, `Contact_no1`, `Contact_no2`, `email`, `google_map`) VALUES
(1, 'Main Branch', 'P.O Box 30420, 10101', 'Century House,Cairo road', 'Lusaka', '+260 211 229191', '+260 211 225510', 'info@znbs.co.zm', ''),
(2, 'Ndola Regional Office', 'P.O. Box 70601', '', 'Ndola', '+260 (21) 612897 ', '615811', '', '      '),
(3, 'Mufulira Branch', 'P.O. Box 40430', '', 'Mufulira', '+260(212)', '411483', 'mufulira@znbs.co.zm', ''),
(4, 'Mufulira Friendly Centre', 'P.O. Box 40430', '', ' Mufulira', ' +260 (212) 410928', '', 'mufulira@znbs.co.zm', ''),
(5, 'Mpika Branch', 'P.O. Box 450134', '', ' Mpika', '+260 (214)370537', '+260 955 3705385', ' mpika@znbs.co.zm', ''),
(6, 'Mansa Branch', 'P.O. Box 710200', '', 'Mansa', ' +260 (212) 821928', '', 'mansa@znbs.co.zm', ''),
(7, 'Kapiri Mposhi Branch', 'P.O. Box 810227', '', 'Kapiri Mposhi', '+260 (215) 271049 ', '271045', ' kapiri@znbs.co.zm', ''),
(8, 'Livingstone Branch', 'P.O. Box 60303', '', 'Livingstone', '+260(213) 320162 ', '321637', ' livingstone@znbs.co.zm', ''),
(9, 'Mazabuka Branch', ' P.O. Box 670484 ', '', 'Mazabuka', '+260 (213) 230863', '230763', ' mazabuka@znbs.co.zm', ''),
(10, 'Mongu Branch', 'P.O. Box 910050', '', 'Mongu', '+260 (217) 221209 ', '221809', ' mongu@znbs.co.zm', ''),
(11, 'Luanshya Branch', 'P.O. Box 90430', '', 'Luanshya', ' +260 (212) 510240', '510932', 'luanshya@znbs.co.zm', ''),
(12, 'Solwezi Branch', ' P.O. Box 70901', '', 'Solwezi', '+260 (218) 821645', '821642', 'solwezi@znbs.co.zm', ''),
(13, 'Kasama Branch', 'P.O. Box 410526', '', 'Kasama', '+260 (214) 221231', '', ' kasama@znbs.co.zm', ''),
(14, 'Society House Branch', 'P.O. Box 30420', '', 'Lusaka', '+260 (211) 223411', '237405', 'society@znbs.co.zm', ''),
(15, 'Society Friendly Centre', ' P.O. Box 30420 ', '', 'Lusaka', '+260 (211) 239937', '', 'society@znbs.co.zm', ''),
(16, 'Permanent House Branch', 'P.O. Box 30420', '', 'Lusaka', '+260 (211) 224003', '225129', 'permanent@znbs.co.zm', ''),
(17, 'Kabwe Branch', 'P.O. Box 80403', '', 'Kabwe', '+260 (215) 224595', '223718', 'kabwe@znbs.co.zm', ''),
(18, 'Chipata Branch', 'P.O. Box 510299', '', ' Chipata', '+260 (216)221728 ', '223768', ' chipata@znbs.co.zm', ''),
(19, 'Choma Branch', 'P.O. Box 630120', '', 'Choma', '+260 (213) 220355', '', 'choma@znbs.co.zm', ''),
(20, 'Soweto Agency', 'P.O. Box 30420', '', 'Lusaka', '+260 (211) 842053', '', 'permanent@znbs.co.zm', ''),
(21, 'Chililabombwe Branch', 'P.O. Box 210430', '', 'Chililabombwe', '+260 (212) 382965', '380746', 'chililabombwe@znbs.co.zm', ''),
(22, 'Chingola Branch', 'P.O. Box 10596', '', 'Chingola', '+260 (212) 311530', '313159', 'chingola@znbs.co.zm', ''),
(23, 'Nyimba Branch', 'P.O. Box 570167', '', 'Nyimba', '+260 (216) 374050', '', 'nyimba@znbs.co.zm', ''),
(24, 'Kitwe Branch', 'P.O. Box 20601', '', 'Kitwe', '+260 (212) 223235', '227105', ' kitwe@znbs.co.zm', ''),
(25, 'Kitwe Friendly Centre', 'P.O. Box 20601', '', 'Kitwe', '+260 (212) 225340', '', 'kitwe@znbs.co.zm', ''),
(26, 'Ndola branch', 'P.O. Box 70901', '', 'Ndola', '+260 (212) 614818', '612848', 'ndola@znbs.co.zm', '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=254 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263),
(240, 'RS', 'SERBIA', 'Serbia', 'SRB', 688, 381),
(241, 'AP', 'ASIA PACIFIC REGION', 'Asia / Pacific Region', '0', 0, 0),
(242, 'ME', 'MONTENEGRO', 'Montenegro', 'MNE', 499, 382),
(243, 'AX', 'ALAND ISLANDS', 'Aland Islands', 'ALA', 248, 358),
(244, 'BQ', 'BONAIRE, SINT EUSTATIUS AND SABA', 'Bonaire, Sint Eustatius and Saba', 'BES', 535, 599),
(245, 'CW', 'CURACAO', 'Curacao', 'CUW', 531, 599),
(246, 'GG', 'GUERNSEY', 'Guernsey', 'GGY', 831, 44),
(247, 'IM', 'ISLE OF MAN', 'Isle of Man', 'IMN', 833, 44),
(248, 'JE', 'JERSEY', 'Jersey', 'JEY', 832, 44),
(249, 'XK', 'KOSOVO', 'Kosovo', '---', 0, 381),
(250, 'BL', 'SAINT BARTHELEMY', 'Saint Barthelemy', 'BLM', 652, 590),
(251, 'MF', 'SAINT MARTIN', 'Saint Martin', 'MAF', 663, 590),
(252, 'SX', 'SINT MAARTEN', 'Sint Maarten', 'SXM', 534, 1),
(253, 'SS', 'SOUTH SUDAN', 'South Sudan', 'SSD', 728, 211);

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

DROP TABLE IF EXISTS `customer_tbl`;
CREATE TABLE IF NOT EXISTS `customer_tbl` (
  `cif_id` int(25) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(18) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city_town` varchar(100) DEFAULT NULL,
  `genda` varchar(10) DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `Picture` text NOT NULL,
  `Province` text NOT NULL,
  PRIMARY KEY (`cif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1246 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`cif_id`, `first_name`, `last_name`, `email`, `mobile_number`, `address1`, `address2`, `city_town`, `genda`, `date_joined`, `Picture`, `Province`) VALUES
(1234, 'Mweemba', 'Hachita', 'mw33mba@gmail.com', '977519229', 'plot 16514/1080 this roadsss', 'Kamwala ', 'Lusaka', 'Male', '2018-02-05', '', ''),
(1235, 'joyce', 'Milanzi', 'joyce.jm@gmail.com', '+26097937133', '', '', '', '', '2018-04-30', '', ''),
(1243, 'Fabian', 'Shamano', 'mw33mba@gmail.com', ' 977519229', 'plot 16514/1080 this road', 'Kamwala', 'Lusaka', 'Male', '2019-06-13', '', 'Muchinga'),
(1244, 'Fabian', 'Shamano', 'mw33mba@gmail.com', ' 977519229', 'plot 16514/1080 this road', 'Kamwala', 'Lusaka', 'Male', '2019-06-13', '', 'Muchinga'),
(1245, '', 'wsws', '', ' ', '', '', '', '12', '2020-02-17', '', 'Lusaka');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
CREATE TABLE IF NOT EXISTS `directors` (
  `Identity` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Firstname` text NOT NULL,
  `LastName` text NOT NULL,
  `picture` text NOT NULL,
  `Role` text NOT NULL,
  PRIMARY KEY (`Identity`),
  UNIQUE KEY `Identity` (`Identity`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`Identity`, `Title`, `Firstname`, `LastName`, `picture`, `Role`) VALUES
(8, 'Dr.', 'David ', 'Nama', '5ec0f4e784f11_chair.jpg', 'Chairman'),
(9, 'Mr.', 'Raymond ', 'Mpundu', '5ec0f531778b5_director mpundu.jpg', 'Member'),
(10, 'Ms.', 'Rachael ', 'Zyambo', '5ec0f564ef4fe_1.jpg', 'Member'),
(11, 'Mr.', 'Reuben ', 'Mutolo', '5ec0f5ad30350_director mutolo.jpg', 'Member'),
(12, 'Ms.', 'Jane ', 'Kabwela', '5ec0f5cce9141_anne.jpg', 'Member'),
(13, 'Mr.', 'George ', 'Chisanga', '5ec0f5f0b996f_director chisanga.jpg', 'Member'),
(14, 'Dr.', 'Michael ', 'Gondwe', '5ec0f61596648_director gondwe.jpg', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `downlaod_categories`
--

DROP TABLE IF EXISTS `downlaod_categories`;
CREATE TABLE IF NOT EXISTS `downlaod_categories` (
  `Categoty_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`Categoty_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downlaod_categories`
--

INSERT INTO `downlaod_categories` (`Categoty_id`, `name`) VALUES
(1, 'Quarterly Financial Statements'),
(2, 'Tender Documents'),
(5, 'Media'),
(6, 'Banking'),
(7, 'Mortgage'),
(8, 'Annual Reports'),
(9, 'Newsletter'),
(10, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

DROP TABLE IF EXISTS `downloads`;
CREATE TABLE IF NOT EXISTS `downloads` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` text NOT NULL,
  `address` text NOT NULL,
  `category` text NOT NULL,
  `Status` text NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`document_id`, `tittle`, `address`, `category`, `Status`) VALUES
(1, 'Term Events', 'Uploads/Document/1582690821Landlord and Tenant (Business Premises) Act (1).pdf', '2', 'Published'),
(4, 'Teachers', 'Uploads/Document/1582690821Landlord and Tenant (Business Premises) Act (1).pdf', '1', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `employees_tbl`
--

DROP TABLE IF EXISTS `employees_tbl`;
CREATE TABLE IF NOT EXISTS `employees_tbl` (
  `emp_id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(18) DEFAULT NULL,
  `whatsapp` text NOT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city_town` varchar(100) DEFAULT NULL,
  `genda` varchar(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `jobRole` text DEFAULT NULL,
  `Qualification_level` varchar(40) NOT NULL,
  `qualification_Area` varchar(100) NOT NULL,
  `Category` text NOT NULL,
  `Picture` text NOT NULL,
  `brief_profile` text NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=894990 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees_tbl`
--

INSERT INTO `employees_tbl` (`emp_id`, `Title`, `first_name`, `last_name`, `date_of_birth`, `email`, `mobile_number`, `whatsapp`, `address1`, `address2`, `city_town`, `genda`, `country`, `date_joined`, `jobRole`, `Qualification_level`, `qualification_Area`, `Category`, `Picture`, `brief_profile`) VALUES
(0736, '', 'Mweemba Wilber', 'Hachita', '1983-12-12', 'mw33mba@gmail.com', '+260977519229', '+260977519229', '16514/1080', 'Kamwala South', 'Lusaka', 'Male', 'Zambia', '2013-03-22', 'ICT Teacher', 'Bachelors Digree', 'Computer Science', 'Employee', 'mweemba.jpg', ''),
(0989, 'Mr.', 'Christopher Lubumbe ', 'Kapoma ', '1900-09-09', 'e@tha.com', '0977666666', '', 'addrsss', 'address', 'Lusaka', 'Male', 'Zambia', '0000-00-00', 'Director Human Resources', 'Digree', '', 'Senior Management', '5ec0ce90d7f22_dhra.jpg', 'Degree in Human Resources Management\r\nHigher Diploma in Human Resources Management\r\n\r\nFull member of the Zambia Institute of Human\r\n\r\nResources Management (ZIHRM)\r\n\r\n\r\nMr Kapoma is a qualified and experienced Human Resources Practitioner with 17 years of work experience in Human<br>\r\n\r\nResources  Management and Administration of which 9 years is at Executive Management level gained mostly from the financial and transport sectors.<br>\r\n\r\nPreviously he worked as Director Human Resources for Railway Systems of Zambia and Zambia Railways Limited. He has also worked for National Airports Corporation Limited, Project Concern International (USAID Funded) and Commence Bank in the infancy of his career.<br>\r\n\r\nHe served as a Board Committee Member for the Human Resources, Legal and Customer Service Committee for Zambia Electricity Supply Corporation Limited (ZESCO). He is currently a Board Committee Member for the Human Capital and Administration Committee for Road Development Agency (RDA).														\r\n														\r\n																\r\n\r\n											'),
(3434, 'Mrs.', 'Vivian ', 'Milumbe', '1900-09-09', 'e@tha.com', '0977666666', '', 'N/A', 'N/A', 'Lusaka', 'Male', 'Zambia', '0000-00-00', 'Chief Operations Officer', 'Masters', '', 'Senior Management', '5ec0cbf635a21_coo2.jpg', 'Mrs Vivian Milumbe is a qualified and experienced Information and Communications Technology (ICT) professional, who has worked for reputable financial institutions in Zambia. Mrs Milumbe holds a Master of Business Administration Degree from Herriot Watt University, Bsc in Computing from Greenwich University and an advanced Professional Diploma in Banking from Zambia Institute of Banking and Financial Services (ZIBFS).<br>\r\n\r\nShe has over 20 years of experience in the financial services industry having worked<br>\r\nfor Cavmont Capital Bank as ICT Manager, Pan African Building Society as Chief Operations Officer and Bayport Financial Services as Head of ICT.<br>\r\n\r\n\r\nHer overall experience includes Managing Information systems environments, Banking and Treasury Operations and managing alternative service delivery channels in the Financial Industry. She is a member of the Institute of Directors, Information and Communication Association of Zambia and the Institute of Banking and Financial Services.														\r\n														\r\n																\r\n\r\n																									\r\n														\r\n																\r\n\r\n											'),
(4334, 'Mrs.', 'Mildred Nyamizyu ', 'Mutesa', '1986-09-09', 'e@tha.com', '0977666666', '', 'addrsss', 'address', 'Lusaka', 'Male', 'Zambia', '0000-00-00', 'Acting Managing Director/ Director Finance', 'Masters', '', 'Senior Management', '5ec0c5979bde3_df.jpg', 'She is a Fellow of the Association of Chartered Certified Accountants (ACCA), and an Associate member of the Zambia Institute of Chartered Accounts (ZICA).\r\nMrs Mutesa also holds a Masters of Business Administration from Herriot Watt University, a Bachelor of Accountancy Degree from the Copperbelt University and a professional accounting qualification, ACCA.<br>\r\n\r\nCurrently a member of the Board of Trustees for the Zambia National Building Society and previously a member of the Board of Trustees for the Afrox Zambia limited Pension scheme.<br>\r\n\r\nWith over 12 years work experience, she has worked across a number of sectors including, audit assurance services, manufacturing and financial services.\r\nShe has held various positions including Director Finance and Management Accountant/Company Secretary of Afrox Zambia Limited, and Senior Auditor at  PricewaterhouseCoopers (PwC). She also had a short stint with the Bank of Zambia.\r\n\r\n												\r\n														\r\n																\r\n\r\n											'),
(9938, 'Mr.', 'Malcolm ', 'Chabala', '1900-09-09', 'e@tha.com', '0977666666', '', 'N/A', 'N/A', 'Lusaka', 'Male', 'Zambia', '0000-00-00', 'Director Banking and Mortgage', 'Masters', '', 'Senior Management', '5ec0cdedc39c2_dbm.jpg', 'Mr Malcolm Chabala is a Chartered Accountant and Certified Banker. He joins\r\nthe Society with over 18 years banking experience in Retail Banking, SME Banking, sales, customer service, branch management, operations, governance and operational risk management gained at both Standard Chartered Bank Zambia and Barclays Bank Zambia.\r\n\r\nHe holds a Master of Arts Degree in International Development from the University of Manchester UK,Bachelor of Arts Degree from the University of Zambia, Association of Certified Chartered Accountant (ACCA), Professional Diploma in Banking and Financial Services.\r\n\r\nMr Chabala also holds Post Graduate Diploma in Financial Management. Before joining ZNBS he was the Value Centre General Manager for Shared Distribution at Standard Chartered Bank Zambia and he has also held several management positions in the past including Head Acquisitions and Alliances, Head Sales - SME Banking, and Head of Finance, Infrastructure and Governance.\r\nMr. Chabala is a Board Member for World Vision Zambia and Habitat for Humanity Zambia.\r\n\r\n													\r\n														\r\n																\r\n\r\n											'),
(98090, 'Mr.', 'Elijah Esau ', 'Chulu', '1986-09-09', 'e@tha.com', '0977666666', '', 'N/A', 'N/A', 'Lusaka', 'Male', 'Zambia', '0000-00-00', 'Director Risk', 'Masters', '', 'Senior Management', '5ec0cd5be8cf4_dr2.jpg', 'M.BA. Finance and Accounting from National University, San Diego, California USA, B.A Economics from University of Zambia. He also holds certifications in risk and project management.\r\n\r\nMr. Chulu has over 17 years of both local and international banking experience, having worked for Barclays Bank and Europe Arab Bank in the UK and Barclays Bank Zambia.\r\n\r\nHis overall experience in banking includes, Retail and Corporate Sales, Retail Risk Management, International Trade and Cash Management, Business Support and Restructuring as well as Leverage Finance.<br>\r\n\r\nIn his previous role, he worked as Head of Retail Credit Risk for Barclays Bank Zambia PLC  for the last 8 years and was a member of the Executive Leadership Team.<br>\r\n\r\nMr. Chulu is also a Board Member for World Vision Zambia and a member of the Audit and Risk Committee.														\r\n														\r\n																\r\n\r\n																									\r\n														\r\n																\r\n\r\n											'),
(894989, 'Ms.', 'Mutinta ', 'Syulikwa', '1900-09-09', 'e@tha.com', '0977666666', '', 'N/A', 'N/A', 'Lusaka', 'Female', 'Zambia', '0000-00-00', 'Society Secretary', 'Digree', '', 'Senior Management', '5ec0ccaf02ff4_act.jpg', 'Holder of a Bachelor of Law Degree and a member of the Law Association of Zambia.<br>\r\nShe has over 8 years experience in law having practised as an advocate in the private sector prior before joining the Society.\r\n											');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `fees_id` int(20) NOT NULL AUTO_INCREMENT,
  `feename` text NOT NULL,
  `amount` double NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`fees_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `Image_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Category` text NOT NULL,
  `Status` text NOT NULL,
  PRIMARY KEY (`Image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Image_id`, `Name`, `Address`, `Category`, `Status`) VALUES
(2, 'Licef main', '5e8025465546b_DSC_0006.JPG', 'Malata', 'Unpublished'),
(3, 'licef2', '5e59131d87c4d_gallery (4).jpg', 'Burma', 'Published'),
(4, 'Licef main1', '5e5914519d1e9_gallery (1).jpg', 'Administration', 'Unpublished'),
(5, 'Schhol main 2', '5e59174f6bca9_gallery (7).jpg', 'Events', 'Published'),
(6, 'media center', '5e591776a0912_gallery (7).jpg', 'Burma', 'Published'),
(7, 'Malata', '5e766b1bbfa43_LICEF 6.jpg', 'Burma', 'Published'),
(8, 'Malata2', '5e766b3dc6720_LIB.jpg', 'Malata', 'Published'),
(9, 'Malata3', '5e766b6c23b38_LICEF 25.jpg', 'Malata', 'Published'),
(10, 'Main', '5e766ef959d54_LICEF 13.jpg', 'Burma', 'Published'),
(11, 'hhh', '5e99120266da0_ENTRANCE.jpg', 'Administration', 'Published'),
(12, 'pic3', '5e99124d9e1b9_LICEF 12.jpg', 'Administration', 'Published'),
(13, 'Library', '5e991af68f914_LIB.jpg', 'Administration', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `loan_types`
--

DROP TABLE IF EXISTS `loan_types`;
CREATE TABLE IF NOT EXISTS `loan_types` (
  `loan_id` int(11) NOT NULL,
  `loan_name` text NOT NULL,
  `interest` double NOT NULL,
  `maximum_tanure` int(11) DEFAULT NULL,
  `minum_tanure` int(11) NOT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_types`
--

INSERT INTO `loan_types` (`loan_id`, `loan_name`, `interest`, `maximum_tanure`, `minum_tanure`) VALUES
(1, 'Mortgage', 24, 240, 12),
(2, 'Friendly Loan', 38.5, 60, 12),
(3, 'Building Loan', 37, 60, 12),
(4, 'PSMD', 37, 60, 12),
(5, 'Salary Advance', 3.38, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_email`
--

DROP TABLE IF EXISTS `newsletter_email`;
CREATE TABLE IF NOT EXISTS `newsletter_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parant_guardian`
--

DROP TABLE IF EXISTS `parant_guardian`;
CREATE TABLE IF NOT EXISTS `parant_guardian` (
  `parent_id` int(6) NOT NULL AUTO_INCREMENT,
  `pnt_title` text NOT NULL,
  `pnt_last_names` text NOT NULL,
  `pnt_other_names` text NOT NULL,
  `ptn_Address` text NOT NULL,
  `ptn_mobile` text NOT NULL,
  `ptn_telephone` text NOT NULL,
  `ptn_email` text NOT NULL,
  `ptn_identity_no` text NOT NULL,
  `no_student` text NOT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parant_guardian`
--

INSERT INTO `parant_guardian` (`parent_id`, `pnt_title`, `pnt_last_names`, `pnt_other_names`, `ptn_Address`, `ptn_mobile`, `ptn_telephone`, `ptn_email`, `ptn_identity_no`, `no_student`) VALUES
(4, 'Mr', 'Hachita', 'Mweemba', 'plot 16514/1080 this road', '0977519229', '0977519229', 'mw33mba@gmail.com', '8787878787', '2019201003'),
(5, '', 'Hachita', 'Mweemba', 'plot 16514/1080 this road', '0977519229', '0977519229', 'mw33mba@gmail.com', '8787878787', '2019201004'),
(9, 'Doc', 'Hachita', 'Mweemba', 'plot 16514/1080 this road', '0977519229', '0977519229', 'mw33mba@gmail.com', '8787878787', '2019201008'),
(10, '', 'Hachita', 'Mweemba', 'plot 16514/1080 this road', '0977519229', '0977519229', 'mw33mba@gmail.com', '8787878787', '2019201008'),
(11, '', '', '', '', '', '', '', '', '20192010010'),
(12, '', 'Hachita', 'Mweemba', 'plot 16514/1080 this road', '0977519229', '0977519229', 'mw33mba@gmail.com', '8787878787', '2019101002'),
(13, '', 'Hachita', 'Mweemba', 'plot 16514/1080 this road', '0977519229', '0977519229', 'mw33mba@gmail.com', '8787878787', '2019201002'),
(14, '', 'Hachita', 'Mweemba', 'plot 16514/1080 this road', '0977519229', '0977519229', 'mw33mba@gmail.com', '8787878787', '2019201003'),
(15, '', 'Hachita', 'Mweemba', 'plot 16514/1080 this road', '0977519229', '0977519229', 'mw33mba@gmail.com', '8787878787', '2019101005');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(12) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `payment_date` date NOT NULL,
  `payment_naration` text NOT NULL,
  `amount` double NOT NULL,
  `student_id` text NOT NULL,
  `year` int(4) NOT NULL,
  `trimester` int(11) NOT NULL,
  `recieved_by` text NOT NULL,
  `reciept_no` int(10) UNSIGNED ZEROFILL NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reciepts`
--

DROP TABLE IF EXISTS `reciepts`;
CREATE TABLE IF NOT EXISTS `reciepts` (
  `receipt_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `total` double NOT NULL,
  `student_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `session_no` int(11) NOT NULL,
  `reciept_by` text NOT NULL,
  `payment_mode` text NOT NULL,
  PRIMARY KEY (`receipt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondary_school_result`
--

DROP TABLE IF EXISTS `secondary_school_result`;
CREATE TABLE IF NOT EXISTS `secondary_school_result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `result` int(11) NOT NULL,
  `grade` text NOT NULL,
  `student_id` text NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=InnoDB AUTO_INCREMENT=310 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secondary_school_result`
--

INSERT INTO `secondary_school_result` (`result_id`, `subject`, `result`, `grade`, `student_id`) VALUES
(120, 'English', 78, '', '20190101002'),
(121, '', 60, '', '20190101002'),
(122, 'Physics', 56, '', '20190101002'),
(123, 'Chemestry', 67, '', '20190101002'),
(124, 'English Literature', 78, '', '20190101002'),
(125, 'Biology', 67, '', '20190101002'),
(126, 'Accounts', 66, '', '20190101002'),
(127, 'Art', 80, '', '2019201008'),
(128, '', 50, '', '2019201008'),
(129, 'Chemestry', 50, '', '2019201008'),
(130, 'Science', 40, '', '2019201008'),
(131, 'Mathematics', 10, '', '2019201008'),
(132, 'English', 56, '', '2019201008'),
(133, 'Biology', 67, '', '2019201008'),
(134, 'Art', 80, '', '2019201008'),
(135, '', 50, '', '2019201008'),
(136, 'Chemestry', 50, '', '2019201008'),
(137, 'Science', 40, '', '2019201008'),
(138, 'Mathematics', 10, '', '2019201008'),
(139, 'English', 56, '', '2019201008'),
(140, 'Biology', 67, '', '2019201008'),
(141, 'Art', 80, '', '2019201008'),
(142, '', 50, '', '2019201008'),
(143, 'Chemestry', 50, '', '2019201008'),
(144, 'Science', 40, '', '2019201008'),
(145, 'Mathematics', 10, '', '2019201008'),
(146, 'English', 56, '', '2019201008'),
(147, 'Biology', 67, '', '2019201008'),
(148, 'Art', 80, '', '2019201008'),
(149, '', 50, '', '2019201008'),
(150, 'Chemestry', 50, '', '2019201008'),
(151, 'Science', 40, '', '2019201008'),
(152, 'Mathematics', 10, '', '2019201008'),
(153, 'English', 56, '', '2019201008'),
(154, 'Biology', 67, '', '2019201008'),
(155, 'Art', 80, '', '2019201008'),
(156, '', 50, '', '2019201008'),
(157, 'Chemestry', 50, '', '2019201008'),
(158, 'Science', 40, '', '2019201008'),
(159, 'Mathematics', 10, '', '2019201008'),
(160, 'English', 56, '', '2019201008'),
(161, 'Biology', 67, '', '2019201008'),
(246, 'English', 10, '', '098787'),
(247, 'English', 80, '', '098787'),
(248, '', 60, '', '098787'),
(249, 'English', 50, '', '098787'),
(250, 'English', 89, '', '098787'),
(251, 'English', 10, '', '098787'),
(252, 'English', 56, '', '098787'),
(253, 'English', 0, '', '098787'),
(254, 'English', 80, '', '098787'),
(255, '', 60, '', '098787'),
(256, 'English', 50, '', '098787'),
(257, 'English', 89, '', '098787'),
(258, 'English', 10, '', '098787'),
(259, 'English', 56, '', '098787'),
(260, 'English', 0, '', '098787'),
(261, 'English', 0, '', '20192010010'),
(262, '', 0, '', '20192010010'),
(263, 'English', 0, '', '20192010010'),
(264, 'English', 0, '', '20192010010'),
(265, 'English', 0, '', '20192010010'),
(266, 'English', 0, '', '20192010010'),
(267, 'English', 0, '', '20192010010'),
(268, 'Mathematics', 0, '', '2019101002'),
(269, '', 0, '', '2019101002'),
(270, 'English', 0, '', '2019101002'),
(271, 'English', 0, '', '2019101002'),
(272, 'English', 0, '', '2019101002'),
(273, 'English', 0, '', '2019101002'),
(274, 'English', 0, '', '2019101002'),
(275, 'English', 2, '', '2019201002'),
(276, '', 1, '', '2019201002'),
(277, 'Agriculture', 2, '', '2019201002'),
(278, 'Biology', 3, '', '2019201002'),
(279, 'Mathematics', 1, '', '2019201002'),
(280, 'Mathematics', 5, '', '2019201002'),
(281, 'Chemestry', 2, '', '2019201002'),
(282, 'English', 1, '', '2019201003'),
(283, '', 1, '', '2019201003'),
(284, 'English', 5, '', '2019201003'),
(285, 'Agriculture', 4, '', '2019201003'),
(286, 'Agriculture', 3, '', '2019201003'),
(287, 'Science', 0, '', '2019201003'),
(288, '', 0, '', '2019201003'),
(289, 'English', 1, '', '2019201005'),
(290, '', 2, '', '2019201005'),
(291, 'Science', 3, '', '2019201005'),
(292, 'Biology', 4, '', '2019201005'),
(293, 'Agriculture', 3, '', '2019201005'),
(294, '', 0, '', '2019201005'),
(295, '', 0, '', '2019201005'),
(296, 'English', 1, '', '2019201005'),
(297, '', 2, '', '2019201005'),
(298, 'Science', 3, '', '2019201005'),
(299, 'Biology', 4, '', '2019201005'),
(300, 'Agriculture', 3, '', '2019201005'),
(301, '', 0, '', '2019201005'),
(302, '', 0, '', '2019201005'),
(303, 'English', 1, '', '2019101005'),
(304, 'Agriculture', 8, '', '2019101005'),
(305, 'Agriculture', 6, '', '2019101005'),
(306, 'Science', 4, '', '2019101005'),
(307, 'Mathematics', 2, '', '2019101005'),
(308, 'Mathematics', 6, '', '2019101005'),
(309, 'Biology', 5, '', '2019101005');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `Id` int(11) NOT NULL,
  `collegename` text NOT NULL,
  `currentyear` int(4) NOT NULL,
  `currentsession` int(11) NOT NULL,
  `passmark` int(11) NOT NULL,
  `logo` text NOT NULL,
  `t_pin` int(12) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`Id`, `collegename`, `currentyear`, `currentsession`, `passmark`, `logo`, `t_pin`, `Status`) VALUES
(1, 'Munali hills College', 2019, 1, 50, 'media/image/1552269529logo..jpg', 78678676, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_document`
--

DROP TABLE IF EXISTS `student_document`;
CREATE TABLE IF NOT EXISTS `student_document` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `location_url` text NOT NULL,
  `student_id` text NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=274 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_document`
--

INSERT INTO `student_document` (`doc_id`, `description`, `location_url`, `student_id`) VALUES
(78, 'ID Copy', 'media/StudentDocuments/1546974883download (1).pdf', '098787'),
(79, 'Secondary School Certificate', 'media/StudentDocuments/15469748839B1-ICT.xlsx', '098787'),
(80, 'Secondary School Transcript', 'media/StudentDocuments/154697488319491353.png', '098787'),
(81, 'pass port size photo1', 'media/StudentDocuments/1546974883Page breaks and Section Breaks.docx', '098787'),
(82, 'bghghg', 'media/StudentDocuments/1546974883ssslogo.jpg', '201901010010'),
(83, 'hghhgh', 'media/StudentDocuments/1546974883staff party.pub', '201901010010'),
(84, 'hghghgh', 'media/StudentDocuments/1546974883school system.docx', '201901010010'),
(85, 'ID Copy', 'media/StudentDocuments/1546974897download (1).pdf', '201901010011'),
(86, 'Secondary School Certificate', 'media/StudentDocuments/15469748979B1-ICT.xlsx', '201901010011'),
(87, 'Secondary School Transcript', 'media/StudentDocuments/154697489719491353.png', '201901010011'),
(88, 'pass port size photo1', 'media/StudentDocuments/1546974897Page breaks and Section Breaks.docx', '201901010011'),
(89, 'bghghg', 'media/StudentDocuments/1546974897ssslogo.jpg', '201901010011'),
(90, 'hghhgh', 'media/StudentDocuments/1546974897staff party.pub', '201901010011'),
(91, 'hghghgh', 'media/StudentDocuments/1546974897school system.docx', '201901010011'),
(92, 'ID Copy', 'media/StudentDocuments/1546974963download (1).pdf', '201901010012'),
(93, 'Secondary School Certificate', 'media/StudentDocuments/15469749639B1-ICT.xlsx', '201901010012'),
(94, 'Secondary School Transcript', 'media/StudentDocuments/154697496319491353.png', '201901010012'),
(95, 'pass port size photo1', 'media/StudentDocuments/1546974963Page breaks and Section Breaks.docx', '201901010012'),
(96, 'bghghg', 'media/StudentDocuments/1546974963ssslogo.jpg', '201901010012'),
(97, 'hghhgh', 'media/StudentDocuments/1546974963staff party.pub', '201901010012'),
(98, 'hghghgh', 'media/StudentDocuments/1546974963school system.docx', '201901010012'),
(99, 'ID Copy', 'media/StudentDocuments/1547021706codeit-squarelogo-1519900963899.png', '20190101002'),
(100, 'Secondary School Certificate', 'media/StudentDocuments/1547021706551911.pdf', '20190101002'),
(101, 'Secondary School Transcript', 'media/StudentDocuments/1547021706bright.jpg', '20190101002'),
(102, 'pass port size photo1', 'media/StudentDocuments/1547021706Address Bar.docx', '20190101002'),
(103, 'Certificate1', 'media/StudentDocuments/1547021706IMG_0034.jpg', '20190101002'),
(104, 'Certificate2', 'media/StudentDocuments/1547021706IMG_0055.jpg', '20190101002'),
(105, 'Certificate3', 'media/StudentDocuments/1547021706DSC00281.jpg', '20190101002'),
(106, 'ID Copy', 'media/StudentDocuments/15482259209019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(107, 'Secondary School Certificate', 'media/StudentDocuments/1548225920High school teenage life.docx', '2019201008'),
(108, 'Secondary School Transcript', 'media/StudentDocuments/15482259209019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(109, 'pass port size photo1', 'media/StudentDocuments/15482259209019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(110, 'hbABSNB', 'media/StudentDocuments/1548225920High school teenage life.docx', '2019201008'),
(111, 'ABNBNAB', 'media/StudentDocuments/15482259209019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(112, 'BVBVBABN', 'media/StudentDocuments/1548225920High school teenage life.docx', '2019201008'),
(113, 'ID Copy', 'media/StudentDocuments/15482262569019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(114, 'Secondary School Certificate', 'media/StudentDocuments/1548226256High school teenage life.docx', '2019201008'),
(115, 'Secondary School Transcript', 'media/StudentDocuments/15482262569019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(116, 'pass port size photo1', 'media/StudentDocuments/15482262569019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(117, 'hbABSNB', 'media/StudentDocuments/1548226256High school teenage life.docx', '2019201008'),
(118, 'ABNBNAB', 'media/StudentDocuments/15482262569019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(119, 'BVBVBABN', 'media/StudentDocuments/1548226256High school teenage life.docx', '2019201008'),
(120, 'ID Copy', 'media/StudentDocuments/15482262569019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(121, 'Secondary School Certificate', 'media/StudentDocuments/1548226256High school teenage life.docx', '2019201008'),
(122, 'Secondary School Transcript', 'media/StudentDocuments/15482262569019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(123, 'pass port size photo1', 'media/StudentDocuments/15482262569019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(124, 'hbABSNB', 'media/StudentDocuments/1548226256High school teenage life.docx', '2019201008'),
(125, 'ABNBNAB', 'media/StudentDocuments/15482262569019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(126, 'BVBVBABN', 'media/StudentDocuments/1548226256High school teenage life.docx', '2019201008'),
(127, 'ID Copy', 'media/StudentDocuments/15482267809019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(128, 'Secondary School Certificate', 'media/StudentDocuments/1548226780High school teenage life.docx', '2019201008'),
(129, 'Secondary School Transcript', 'media/StudentDocuments/15482267809019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(130, 'pass port size photo1', 'media/StudentDocuments/15482267809019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(131, 'hbABSNB', 'media/StudentDocuments/1548226780High school teenage life.docx', '2019201008'),
(132, 'ABNBNAB', 'media/StudentDocuments/15482267809019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(133, 'BVBVBABN', 'media/StudentDocuments/1548226780High school teenage life.docx', '2019201008'),
(134, 'ID Copy', 'media/StudentDocuments/15482268309019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(135, 'Secondary School Certificate', 'media/StudentDocuments/1548226830High school teenage life.docx', '2019201008'),
(136, 'Secondary School Transcript', 'media/StudentDocuments/15482268309019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(137, 'pass port size photo1', 'media/StudentDocuments/15482268309019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(138, 'hbABSNB', 'media/StudentDocuments/1548226830High school teenage life.docx', '2019201008'),
(139, 'ABNBNAB', 'media/StudentDocuments/15482268309019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201008'),
(140, 'BVBVBABN', 'media/StudentDocuments/1548226830High school teenage life.docx', '2019201008'),
(212, 'Secondary School Certificate', 'media/StudentDocuments/1548237699MR. HACHITA.pdf', '2019201004'),
(214, 'pass port size photo1', 'media/StudentDocuments/15482376999019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201004'),
(218, 'ID Copy', 'media/StudentDocuments/15482380412018 GRADE 9 INTERNAL EXAMINATION TIME TABLE-FINAL (1).pdf', '2019201004'),
(219, 'Secondary School Certificate', 'media/StudentDocuments/1548238041MR. HACHITA.pdf', '2019201004'),
(220, 'Secondary School Transcript', 'media/StudentDocuments/15482380419019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201004'),
(221, 'pass port size photo1', 'media/StudentDocuments/15482380419019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '2019201004'),
(222, '', 'media/StudentDocuments/1548238041', '2019201004'),
(223, '', 'media/StudentDocuments/1548238041', '2019201004'),
(224, '', 'media/StudentDocuments/1548238041', '2019201004'),
(225, 'ID Copy', 'media/StudentDocuments/1548239058High school teenage life.docx', '098787'),
(226, 'Secondary School Certificate', 'media/StudentDocuments/1548239058MR. HACHITA.pdf', '098787'),
(227, 'Secondary School Transcript', 'media/StudentDocuments/15482390582018 GRADE 9  INTERNAL EXAMINATION TIME TABLE-FINAL (1).pdf', '098787'),
(228, 'pass port size photo1', 'media/StudentDocuments/1548239058High school teenage life.docx', '098787'),
(229, 'aaaa', 'media/StudentDocuments/15482390582018 GRADE 9  INTERNAL EXAMINATION TIME TABLE-FINAL (1).pdf', '098787'),
(230, '', 'media/StudentDocuments/15482390582018 GRADE 9  INTERNAL EXAMINATION TIME TABLE-FINAL (1).pdf', '098787'),
(231, '', 'media/StudentDocuments/15482390589019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '098787'),
(232, 'ID Copy', 'media/StudentDocuments/1548239172High school teenage life.docx', '098787'),
(233, 'Secondary School Certificate', 'media/StudentDocuments/1548239172MR. HACHITA.pdf', '098787'),
(234, 'Secondary School Transcript', 'media/StudentDocuments/15482391722018 GRADE 9  INTERNAL EXAMINATION TIME TABLE-FINAL (1).pdf', '098787'),
(235, 'pass port size photo1', 'media/StudentDocuments/1548239172High school teenage life.docx', '098787'),
(236, 'aaaa', 'media/StudentDocuments/15482391722018 GRADE 9  INTERNAL EXAMINATION TIME TABLE-FINAL (1).pdf', '098787'),
(237, '', 'media/StudentDocuments/15482391722018 GRADE 9  INTERNAL EXAMINATION TIME TABLE-FINAL (1).pdf', '098787'),
(238, '', 'media/StudentDocuments/15482391729019_G9 PROVISIONAL REGISTER_21_09_2018.pdf', '098787'),
(239, 'ID Copy', 'media/StudentDocuments/1548645480', '20192010010'),
(240, 'Secondary School Certificate', 'media/StudentDocuments/1548645480', '20192010010'),
(241, 'Secondary School Transcript', 'media/StudentDocuments/1548645480', '20192010010'),
(242, 'pass port size photo1', 'media/StudentDocuments/1548645480', '20192010010'),
(243, '', 'media/StudentDocuments/1548645480', '20192010010'),
(244, '', 'media/StudentDocuments/1548645480', '20192010010'),
(245, '', 'media/StudentDocuments/1548645480', '20192010010'),
(246, 'ID Copy', 'media/StudentDocuments/1549279130', '2019101002'),
(247, 'Secondary School Certificate', 'media/StudentDocuments/1549279130', '2019101002'),
(248, 'Secondary School Transcript', 'media/StudentDocuments/1549279130', '2019101002'),
(249, 'pass port size photo1', 'media/StudentDocuments/1549279130', '2019101002'),
(250, '', 'media/StudentDocuments/1549279130', '2019101002'),
(251, '', 'media/StudentDocuments/1549279130', '2019101002'),
(252, '', 'media/StudentDocuments/1549279130', '2019101002'),
(253, 'ID Copy', 'media/StudentDocuments/1549348271download (1).pdf', '2019201002'),
(254, 'Secondary School Certificate', 'media/StudentDocuments/1549348271551911.pdf', '2019201002'),
(255, 'Secondary School Transcript', 'media/StudentDocuments/1549348271download (1).pdf', '2019201002'),
(256, 'pass port size photo1', 'media/StudentDocuments/1549348271IMG_20190129_105103.jpg', '2019201002'),
(257, '', 'media/StudentDocuments/1549348271', '2019201002'),
(258, '', 'media/StudentDocuments/1549348271', '2019201002'),
(259, '', 'media/StudentDocuments/1549348271', '2019201002'),
(260, 'ID Copy', 'media/StudentDocuments/1549349131', '2019201003'),
(261, 'Secondary School Certificate', 'media/StudentDocuments/1549349131', '2019201003'),
(262, 'Secondary School Transcript', 'media/StudentDocuments/1549349131', '2019201003'),
(263, 'pass port size photo1', 'media/StudentDocuments/1549349131', '2019201003'),
(264, '', 'media/StudentDocuments/1549349131', '2019201003'),
(265, '', 'media/StudentDocuments/1549349131', '2019201003'),
(266, '', 'media/StudentDocuments/1549349131', '2019201003'),
(267, 'ID Copy', 'media/StudentDocuments/1553217118', '2019101005'),
(268, 'Secondary School Certificate', 'media/StudentDocuments/1553217118', '2019101005'),
(269, 'Secondary School Transcript', 'media/StudentDocuments/1553217118', '2019101005'),
(270, 'pass port size photo1', 'media/StudentDocuments/1553217118', '2019101005'),
(271, '', 'media/StudentDocuments/1553217118', '2019101005'),
(272, '', 'media/StudentDocuments/1553217118', '2019101005'),
(273, '', 'media/StudentDocuments/1553217118', '2019101005');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

DROP TABLE IF EXISTS `student_tbl`;
CREATE TABLE IF NOT EXISTS `student_tbl` (
  `Student_id` varchar(15) NOT NULL,
  `title` text NOT NULL,
  `st_first_name` varchar(50) NOT NULL,
  `st_last_name` varchar(50) NOT NULL,
  `st_innitial` varchar(50) NOT NULL,
  `st_gender` varchar(50) NOT NULL,
  `st_dob` date NOT NULL,
  `st_national_id` varchar(10) NOT NULL,
  `st_national_id_no` text NOT NULL,
  `st_occupation` varchar(50) NOT NULL,
  `st_religion` text NOT NULL,
  `st_marital_status` text NOT NULL,
  `st_mother_tongue` text NOT NULL,
  `st_physical_disability` text NOT NULL,
  `st_phys_address1` text NOT NULL,
  `st_phys_address2` text NOT NULL,
  `st_phys_address3` text NOT NULL,
  `st_phys_province` text NOT NULL,
  `st_phys_country` text NOT NULL,
  `st_postal_address1` text NOT NULL,
  `st_postal_address2` text NOT NULL,
  `st_postal_address3` text NOT NULL,
  `st_postal_Province` text NOT NULL,
  `st_postal_country` text NOT NULL,
  `st_mobile_no` text NOT NULL,
  `st_tele_no` text NOT NULL,
  `st_email` text NOT NULL,
  `st_fax` text NOT NULL,
  `parent_guardian_id` text NOT NULL,
  `guardian_relationship` text NOT NULL,
  `st_program_choice1` text NOT NULL,
  `level` text NOT NULL,
  `mode` varchar(30) NOT NULL,
  `school_name_attended` text NOT NULL,
  `school_address` text NOT NULL,
  `sec_school_year` text NOT NULL,
  `examination_no` text NOT NULL,
  `examination_body` text NOT NULL,
  `Date_of_first_reg` date NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `Sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sub_name` text NOT NULL,
  `Category_id` int(11) NOT NULL,
  PRIMARY KEY (`Sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`Sub_id`, `Sub_name`, `Category_id`) VALUES
(1, 'Banking', 5),
(12, 'About Us', 1),
(13, 'History', 1),
(14, 'Introductions', 1),
(15, 'Newletter', 3),
(16, 'Services', 2),
(17, 'New_Notices', 3),
(18, 'Profile', 4),
(20, 'Branch', 5),
(21, 'Account Types', 5),
(22, 'Digital Banking', 5),
(23, 'banking loans', 5),
(24, 'Mortgages', 5),
(25, 'ZNBS Properties', 6),
(26, 'Tender Award Notices', 7),
(27, 'Running Tenders', 7),
(28, 'Procurement Plan', 7),
(29, 'Vacancies', 8);

-- --------------------------------------------------------

--
-- Table structure for table `survey_response`
--

DROP TABLE IF EXISTS `survey_response`;
CREATE TABLE IF NOT EXISTS `survey_response` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` text NOT NULL,
  `Method` text NOT NULL,
  `Date_sumitted` date NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_response`
--

INSERT INTO `survey_response` (`r_id`, `FirstName`, `LastName`, `Email`, `Method`, `Date_sumitted`) VALUES
(1, 'Mweemba', 'Hachita', 'mw33mba@gmail.com', 'Newspaper', '2020-05-17'),
(2, 'Mildred Nyamizyu', 'Mutesa', 'e@tha.com', 'Newspaper', '2020-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

DROP TABLE IF EXISTS `user_tbl`;
CREATE TABLE IF NOT EXISTS `user_tbl` (
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `branch` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `Position` text NOT NULL,
  `active` int(11) NOT NULL,
  `Staff_no` int(11) NOT NULL,
  `profile_picture` text NOT NULL,
  `last_pass_change` date NOT NULL,
  `emp_id` int(3) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`username`, `password`, `email`, `contact_no`, `branch`, `level`, `Position`, `active`, `Staff_no`, `profile_picture`, `last_pass_change`, `emp_id`, `Status`, `date_created`) VALUES
('mweemba', '$2y$11$hZtcIqIyswJHRW3QIJ.UU.CNjlrAurhKq/kmOYNu/WbQGhspilPNq', 'mw33mba@gmail.com', '977519229', 1, 1, 'Supper Admin', 1, 736, 'media/image/ProfileImages/1546765117DSC_0083.JPG', '2020-03-30', 345, 'Approved', '2018-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

DROP TABLE IF EXISTS `vacancy`;
CREATE TABLE IF NOT EXISTS `vacancy` (
  `Job_id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Date_posted` date NOT NULL,
  `Closingdate` date NOT NULL,
  `HowToApply` text NOT NULL,
  `Status` text NOT NULL,
  PRIMARY KEY (`Job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`Job_id`, `Title`, `Date_posted`, `Closingdate`, `HowToApply`, `Status`) VALUES
(1, 'Managing Director', '2020-03-01', '0000-00-00', 'To nurture Muslim learners in particular in such a way that they can aptly convey the pristine beauty of Islam through their knowledge and practice', 'Published'),
(2, 'Secondary School Teacher', '2020-03-27', '0000-00-00', 'To nurture Muslim learners in particular in such a way that they can aptly convey the pristine beauty of Islam through their knowledge and practice', 'Unpublished'),
(3, 'Secondary School Teacher', '0000-00-00', '0000-00-00', 'To nurture Muslim learners in particular in such a way that they can aptly convey the pristine beauty of Islam through their knowledge and practice', 'Unpublished'),
(4, 'Secondary School Teacher', '0000-00-00', '0000-00-00', 'To nurture Muslim learners in particular in such a way that they can aptly convey the pristine beauty of Islam through their knowledge and practice', 'Unpublished'),
(5, 'Secondary School Teacher', '0000-00-00', '0000-00-00', 'To nurture Muslim learners in particular in such a way that they can aptly convey the pristine beauty of Islam through their knowledge and practice', 'Unpublished'),
(6, 'Secondary School Teacher', '2020-03-24', '0000-00-00', 'To nurture Muslim learners in particular in such a way that they can aptly convey the pristine beauty of Islam through their knowledge and practice', 'Unpublished');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy_qualification`
--

DROP TABLE IF EXISTS `vacancy_qualification`;
CREATE TABLE IF NOT EXISTS `vacancy_qualification` (
  `Qualif_id` int(11) NOT NULL AUTO_INCREMENT,
  `qualification` text NOT NULL,
  `Vacancy_id` int(11) NOT NULL,
  PRIMARY KEY (`Qualif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy_qualification`
--

INSERT INTO `vacancy_qualification` (`Qualif_id`, `qualification`, `Vacancy_id`) VALUES
(1, 'To impart the highest possible standard of education, (within the regulations set by the Ministry of Education governing the running of private educational institutions), ensuring that there is no conflict with Islamic ideology.', 1),
(2, 'For the Muslim learners from different Islamic families and backgrounds to develop dynamically and confidently as true Muslims.', 1),
(3, 'For the Muslim learners in particular to be able to have an awareness, pride and confidence in their own Islamic religion, language and culture, and yet be tolerant of other faiths and cultures.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vaca_responsibilites`
--

DROP TABLE IF EXISTS `vaca_responsibilites`;
CREATE TABLE IF NOT EXISTS `vaca_responsibilites` (
  `respons_id` int(11) NOT NULL AUTO_INCREMENT,
  `Responsibility` text NOT NULL,
  `vanancy_id` int(11) NOT NULL,
  PRIMARY KEY (`respons_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaca_responsibilites`
--

INSERT INTO `vaca_responsibilites` (`respons_id`, `Responsibility`, `vanancy_id`) VALUES
(1, '\nsahbjkahjkwqhdeqjowhejqwheqwhe', 1),
(2, '	For the Muslim learners from different Islamic families and backgrounds to develop dynamically and confidently as true Muslims.\n', 1),
(3, 'nbhjkh', 1),
(4, 'jkhbnmsbnmsbmnaBS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vanancy_descitipn`
--

DROP TABLE IF EXISTS `vanancy_descitipn`;
CREATE TABLE IF NOT EXISTS `vanancy_descitipn` (
  `vac_descript_id` int(11) NOT NULL AUTO_INCREMENT,
  `Description` text NOT NULL,
  `vanancy_id` int(11) NOT NULL,
  PRIMARY KEY (`vac_descript_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vanancy_descitipn`
--

INSERT INTO `vanancy_descitipn` (`vac_descript_id`, `Description`, `vanancy_id`) VALUES
(2, 'For the Muslim learners from different Islamic families and backgrounds to develop dynamically and confidently as true Muslims.', 1),
(3, 'mjbhghjghjg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

DROP TABLE IF EXISTS `years`;
CREATE TABLE IF NOT EXISTS `years` (
  `years` int(11) NOT NULL,
  UNIQUE KEY `years` (`years`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`years`) VALUES
(1900),
(1901),
(1902),
(1903),
(1904),
(1905),
(1906),
(1907),
(1908),
(1909),
(1910),
(1911),
(1912),
(1913),
(1914),
(1915),
(1916),
(1917),
(1918),
(1919),
(1920),
(1921),
(1922),
(1923),
(1924),
(1925),
(1926),
(1927),
(1928),
(1929),
(1930),
(1931),
(1932),
(1933),
(1934),
(1935),
(1936),
(1937),
(1938),
(1939),
(1940),
(1941),
(1942),
(1943),
(1944),
(1945),
(1946),
(1947),
(1948),
(1949),
(1950),
(1951),
(1952),
(1953),
(1954),
(1955),
(1956),
(1957),
(1958),
(1959),
(1960),
(1961),
(1962),
(1963),
(1964),
(1965),
(1966),
(1967),
(1968),
(1969),
(1970),
(1971),
(1972),
(1973),
(1974),
(1975),
(1976),
(1977),
(1978),
(1979),
(1980),
(1981),
(1982),
(1983),
(1984),
(1985),
(1986),
(1987),
(1988),
(1989),
(1990),
(1991),
(1992),
(1993),
(1994),
(1995),
(1996),
(1997),
(1998),
(1999),
(2000),
(2001),
(2002),
(2003),
(2004),
(2005),
(2006),
(2007),
(2008),
(2009),
(2010),
(2011),
(2012),
(2013),
(2014),
(2015),
(2016),
(2017),
(2018),
(2019),
(2020),
(2021),
(2022),
(2023),
(2024),
(2025),
(2026),
(2027),
(2028),
(2029),
(2030),
(2031),
(2032),
(2033),
(2034),
(2035),
(2036),
(2037),
(2038),
(2039),
(2040),
(2041),
(2042),
(2043),
(2044),
(2045),
(2046),
(2047),
(2048),
(2049),
(2050);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
