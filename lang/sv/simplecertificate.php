<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language strings for the simplecertificate module
 *
 * @package    mod
 * @subpackage simplecertificate
 * @copyright  Carlos Alexandre S. da Fonseca <carlos.alexandre@outlook.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['modulename'] = 'Simple Certificate';
$string['modulenameplural'] = 'Simple Certificates';
$string['pluginname'] = 'Simple Certificate';
$string['viewcertificateviews'] = 'Visa {$a} utfärdade certifikat';
$string['summaryofattempts'] = 'Summering över tidigare utfärdade certifikat';
$string['issued'] = 'Utfärdat';
$string['coursegrade'] = 'Kursbetyg';
$string['getcertificate'] = 'Hämta ditt certifikat';
$string['awardedto'] = 'Utfärdat till';
$string['receiveddate'] = 'Utfärdat datum';
$string['grade'] = 'Betyg';
$string['code'] = 'Kod';
$string['report'] = 'Rapport';
$string['opendownload'] = 'Klicka på knappen nedanför för att spara certifikatet till din dator.';
$string['openemail'] = 'Klicka på knappen nedanför för att få certifikatet skickat till dig via E-post.';
$string['openwindow'] = 'Klicka på knappen nedanför för visa certifikatet i ett nytt fönster.';
$string['hours'] = 'timmar';
$string['keywords'] = 'certifikat, kurs, pdf, moodle';
$string['pluginadministration'] = 'Administratation av certifikat';
$string['deletissuedcertificates'] = 'Ta bort utfärdade certifikat.';
$string['nocertificatesissued'] = 'Det finns inga utfärdade certifikat.';

// Form.
$string['certificatename'] = 'Namn';
$string['certificateimage'] = 'Bildfil';
$string['certificatetext'] = 'Text på certifikat';
$string['certificatetextx'] = 'Horisontell position för text';
$string['certificatetexty'] = 'Vertikal position för text';
$string['height'] = 'Höjd på certifikat';
$string['width'] = 'Bredd på certifikat';
$string['coursename'] = 'Alternativt kursnamn';
$string['intro'] = 'Introduktion';
$string['printoutcome'] = 'Skriv ut resultat';
$string['printdate'] = 'Utskriftsdatum';

// Second Page.
$string['secondpageoptions'] = 'Certifikatets baksida';
$string['enablesecondpage'] = 'Aktivera baksida på certifikat';
$string['enablesecondpage_help'] = 'Aktivera innehåll på certifikates baksida. Om inaktivt visas enbart QR-koden på baksidan (om en sådan angivits)';
$string['secondimage'] = 'Bildfil för baksida';
$string['secondimage_help'] = 'Bild som kommer visas på certifikatets baksida';
$string['secondpagetext'] = 'Text på baksidan';

$string['secondpagex'] = 'Horisontell position för text på baksidan';
$string['secondpagey'] = 'Vertikal position för text på baksidan';
$string['secondtextposition'] = 'Position för texten på baksidan';
$string['secondtextposition_help'] = 'Anger x- och y-koordinaterna (i millimeter) för texten på baksidan';

// QR Code.
$string['printqrcode'] = 'Visa QR-kod på certifikat';
$string['printqrcode_help'] = 'Visa eller dölj QR-kod på certifikatet';
$string['codex'] = 'Horisontell position för QR-kod';
$string['codey'] = 'Vertikal position för QR-kod';
$string['qrcodeposition'] = 'Position för QR-kod';
$string['qrcodeposition_help'] = 'Anger x- och y-koordinaterna (i millimeter) för texten på baksidan';
$string['defaultcodex'] = 'Förinställd horisontell position för QR-kod';
$string['defaultcodey'] = 'Förinställd vertikal position för QR-kod';

// Date options.
$string['issueddate'] = 'Utfärdandedatum';
$string['completiondate'] = 'Slutförande av kurs';
$string['coursestartdate'] = 'Startdatum för kurs';
$string['datefmt'] = 'Datumformat';

// Date format options.
$string['userdateformat'] = 'Datumformat för valt användarspråk';

$string['printgrade'] = 'Visa betyg';
$string['gradefmt'] = 'Betygsformat';
// Grade format options.
$string['gradeletter'] = 'Bokstavsbetyg';
$string['gradepercent'] = 'Procentbetyg';
$string['gradepoints'] = 'Poängbetyg';
$string['coursetimereq'] = 'Nödvändigt antal minuter på kursen';
$string['emailteachers'] = 'Skicka E-post till handledare';
$string['emailothers'] = 'Skicka E-post till andra';
$string['emailfrom'] = 'Från-namn';
$string['delivery'] = 'Leverans';
// Delivery options.
$string['openbrowser'] = 'Öppna i nytt fönster';
$string['download'] = 'Tvinga nedladdning';
$string['emailcertificate'] = 'E-post';
$string['nodelivering'] = 'Inget utskick. Kursdeltagaren kommer få detta certifikat på annat sätt';
$string['emailoncompletion'] = 'E-post vid slutförande av kurs';
// Form options help text.
$string['certificatename_help'] = 'Namn på certifikat';
$string['certificatetext_help'] = 'Text som visas på certifikatets baksida. Här kan man ange platshållare som sedan ersätts av t.ex. Namn, Betyg osv. De platshållare du kan använda är:
<ul>
<li>{USERNAME} -> Användarnamn</li>
<li>{COURSENAME} -> Kursnamn (eller alternativt kursnamn om ett sådant angivits)</li>
<li>{GRADE} -> Betyg/li>
<li>{DATE} -> Datum</li>
<li>{OUTCOME} -> Resultat</li>
<li>{TEACHERS} -> Förteckning över handledare</li>
<li>{IDNUMBER} -> Användarens ID-nummer</li>
<li>{FIRSTNAME} -> Förnamn</li>
<li>{LASTNAME} -> Efternamn</li>
<li>{EMAIL} -> E-post</li>
<li>{ICQ} -> ICQ</li>
<li>{SKYPE} -> Skype</li>
<li>{YAHOO} -> Yahoo messenger</li>
<li>{AIM} -> AIM</li>
<li>{MSN} -> MSN</li>
<li>{PHONE1} -> Telefonnummer 1</li>
<li>{PHONE2} -> Telefonnummer 2</li>
<li>{INSTITUTION} -> Institution</li>
<li>{DEPARTMENT} -> Avdelning</li>
<li>{ADDRESS} -> Adress</li>
<li>{CITY} -> Ort</li>
<li>{COUNTRY} -> Land</li>
<li>{URL} -> Användarens hemsida</li>
<li>{CERTIFICATECODE} -> Certifikatskod</li>
<li>{USERROLENAME} -> Användarens roll i kursen</li>
<li>{TIMESTART} -> Datum för registrering på kurs</li>
<li>{USERIMAGE} -> Bild från användarprofil</li>
<li>{USERRESULTS} -> Betyg från övriga kursaktiviteter</li>
<li>{PROFILE_xxxx} -> Anpassade fält från användarprofilen</li>
</ul>
In order to use custom profiles fields you must use "PORFILE_" prefix, for example: you has created a custom profile with shortname of "birthday," so the text mark used on certificate must be {PROFILE_BIRTHDAY}.
The text can use basic html, basic fonts, tables,  but avoid any position definition.';

$string['textposition'] = 'Position för certifikatstexten';
$string['textposition_help'] = 'Anger x- och y-koordinaterna (i millimeter) för texten';
$string['size'] = 'Storlek';
$string['size_help'] = 'Anger bredd och höjd på ceertifikatet (i millimeter). Standardinställningen är "A4 liggande"';
$string['coursename_help'] = 'Alternativt kursnamn';
$string['certificateimage_help'] = 'Bilden som kommer visas på certifikatet';

$string['printoutcome_help'] = 'You can choose any course outcome to print the name of the outcome and the user\'s received outcome on the certificate.  An example might be: Assignment Outcome: Proficient.';
$string['printdate_help'] = 'This is the date that will be printed, if a print date is selected. If the course completion date is selected but the student has not completed the course, the date received will be printed. You can also choose to print the date based on when an activity was graded. If a certificate is issued before that activity is graded, the date received will be printed.';
$string['datefmt_help'] = 'Enter a valid PHP date format pattern (<a href="http://www.php.net/manual/en/function.strftime.php"> Date Formats</a>). Or, leave it empty to use the format of the user\'s chosen language.';
$string['printgrade_help'] = 'You can choose any available course grade items from the gradebook to print the user\'s grade received for that item on the certificate.  The grade items are listed in the order in which they appear in the gradebook. Choose the format of the grade below.';
$string['gradefmt_help'] = 'There are three available formats if you choose to print a grade on the certificate:
<ul>
<li>Percentage Grade: Prints the grade as a percentage.</li>
<li>Points Grade: Prints the point value of the grade.</li>
<li>Letter Grade: Prints the percentage grade as a letter.</li>
</ul>';

$string['coursetimereq_help'] = 'Enter here the minimum amount of time, in minutes, that a student must be logged into the course before they will be able to receive the certificate.';
$string['emailteachers_help'] = 'If enabled, then teachers are alerted with an email whenever students receive a certificate.';
$string['emailothers_help'] = 'Enter the email addresses here, separated by a comma, of those who should be alerted with an email whenever students receive a certificate.';
$string['emailfrom_help'] = 'Alternate email form name';
$string['delivery_help'] = 'Choose here how you would like your students to get their certificate.
<ul>
<li>Open in Browser: Opens the certificate in a new browser window.</li>
<li>Force Download: Opens the browser file download window.</li>
<li>Email Certificate: Choosing this option sends the certificate to the student as an email attachment.</li>
<li>After a user receives their certificate, if they click on the certificate link from the course homepage, they will see the date they received their certificate and will be able to review their received certificate.</li>
</ul>';

// Form Sections.
$string['issueoptions'] = 'Alternativ för utfärdande';
$string['designoptions'] = 'Alternativ för utseende';

// Emails text.
$string['emailstudentsubject'] = 'Ditt certifikat för {$a->course}';
$string['emailstudenttext'] = '
Hej {$a->username},

		Bifogat hittar du ditt certifikat från kursen: {$a->course}.


DETTA ÄR ETT AUTOMATISKT GENERERAT E-POSTMEDDELANDE - DU KAN INTE SVARA PÅ DETTA MEDDELANDE.';

$string['emailteachermail'] = '
{$a->student} har fått sitt certifikat: \'{$a->certificate}\'
för kursen {$a->course}.

Du kan granska det här:

    {$a->url}';

$string['emailteachermailhtml'] = '
{$a->student} har fått sitt certifikat: \'<i>{$a->certificate}</i>\'
för kursen {$a->course}.

Du kan granska det här:

    <a href="{$a->url}">Rapport över certifikat</a>.';

// Admin settings page.
$string['defaultwidth'] = 'Förinställd bredd';
$string['defaultheight'] = 'Förinställd höjd';
$string['defaultcertificatetextx'] = 'Förinställd horisontell position för text';
$string['defaultcertificatetexty'] = 'Förinställd vertikal position för text';

// Erros.
$string['filenotfound'] = 'Filen kunde inte hittas';
$string['invalidcode'] = 'Ogiltig certifikatskod';
$string['cantdeleteissue'] = 'Ett fel uppstod då certifikaten skulle tas bort';
$string['requiredtimenotmet'] = 'Du behöver ha tillbringat minst {$a->requiredtime} minuter i denna kurs för att kunna erhålla detta certifikat';

// Verify certificate page.
$string['certificateverification'] = 'Verifiering av certifikat';

// Settings.
$string['certlifetime'] = 'Behåll utfärdade certifikat: (månader)';
$string['certlifetime_help'] = 'This specifies the length of time you want to keep issued certificates. Issued certificates that are older than this age are automatically deleted.';
$string['neverdeleteoption'] = 'Ta aldrig bort';

$string['variablesoptions'] = 'Others Options';
$string['getcertificate'] = 'Hämta certifikat';
$string['verifycertificate'] = 'Verifiera certifikat';

$string['qrcodefirstpage'] = 'Visa QR-kod på framsidan';
$string['qrcodefirstpage_help'] = 'Print QR Code in the first page';

// Tabs String.
$string['standardview'] = 'Utfärda ett testcertifikat';
$string['issuedview'] = 'Utfärdade certifikat';
$string['bulkview'] = 'Bulk operations';

$string['cantissue'] = 'The certificate can\'t be issued, because the user hasn\'t met activity conditions';

// Bulk texts.
$string['onepdf'] = 'Ladda ned certifikaten som en samlad PDF-fil';
$string['multipdf'] = 'Ladda ned certifikaten som en ZIP-fil';
$string['sendtoemail'] = 'Skicka till användarens E-postadress';
$string['showusers'] = 'Visa';
$string['completedusers'] = 'Användare som uppfyllde villkoren för slutförande';
$string['allusers'] = 'Alla användare';
$string['bulkaction'] = 'Choose a Bulk Operation';
$string['bulkbuttonlabel'] = 'Skicka';
$string['emailsent'] = 'E-postmeddelandena har skickats';
$string['signcertificate'] = 'Signera certifikaten';
$string['certificatessigned'] = 'Certifikaten har signerats';


$string['issueddownload'] = 'Utfärdat certifikat [id: {$a}] har laddats ned';

$string['defaultperpage'] = 'Antal certifikat per sida';
$string['defaultperpage_help'] = 'Antal certifikat att visa per sida (max. 200)';

// For Capabilities.
$string['simplecertificate:addinstance'] = "Lägg till certifikatsaktivitet";
$string['simplecertificate:manage'] = "Hantera aktivitet";
$string['simplecertificate:view'] = "Visa aktivitet";

$string['usercontextnotfound'] = 'User context not found';
$string['usernotfound'] = 'User not found';
$string['coursenotfound'] = 'Course not found';
$string['issuedcertificatenotfound'] = 'Issued certificate not found';
$string['awardedsubject'] = 'Awarded certificate notification: {$a->certificate} issued to {$a->student}';
$string['certificatenot'] = 'Simple certificate instance not found';
$string['modulename_help'] = 'The simple certificate activity module enables the teacher to create a custom certificate that can be issued to participants who have completed the teacher’s specified requirements.';
$string['timestartdatefmt'] = 'Enrollment start date format';
$string['timestartdatefmt_help'] = 'Enter a valid PHP date format pattern (<a href="http://www.php.net/manual/en/function.strftime.php"> Date Formats</a>). Or, leave it empty to use the format of the user\'s chosen language.';
$string['certificatecopy'] = 'COPY';
$string['upgradeerror'] = 'Error while upgrading $a';
$string['notreceived'] = 'No issued certificate';

// Verify envent.
$string['eventcertificate_verified'] = 'Certificate verified';
$string['eventcertificate_verified_description'] = 'The user with id {$a->userid} verified the certificate with id {$a->certificateid}, issued to user with id {$a->certiticate_userid}.';
$string['deleteall'] = "Delete All";
$string['deleteselected'] = "Delete Selected";




