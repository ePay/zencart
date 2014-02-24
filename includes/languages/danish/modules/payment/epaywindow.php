<?php
/*
  $Id: includes\danish\english\modules\payment\epaywindow.php

	Copyright ePay / Payment solutions, (c) 2010.
	This program is free software. You are allowed to use the software but NOT allowed to modify the software. 
	It is also not legal to do any changes to the software and distribute it in your own name / brand. 

*/

define('NAVBAR_TITLE_1', 'Kassen');
define('NAVBAR_TITLE_2', 'Betal med ePay');
define('NAVBAR_TITLE_3', 'Betalingen via ePay er gennemf�rt');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_TITLE_CHECKOUT', 'Betal med dit betalingskort (ePay)');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_TITLE', 'ePay Payment Solutions');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_DESCRIPTION', 'Online betaling ved brug af kredit kort');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_EMAIL_FOOTER', 'Betalingen er nu reserveret hos PBS. N�r ordren ekspederes bliver bel�bet overf�rt til ' . STORE_NAME); 
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_OPEN_WINDOW', '�ben ePay Betalings-vinduet');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_OPEN_WINDOW_HELP', 'Du har valgt at betale ved brug af <a href="http://www.epay.dk" target="_new">ePay</a>. Hvis ePay betalings-vinduet ikke �bner automatisk, klik da p� knappen nedenfor.<br>Hvis du bruger en s�kaldt "pop-up blocker" skal du holde <b>CTRL</b> nede mens du klikker p� knappen.');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_APPROVED_HEADER', 'Din ordre er nu gennemf�rt!');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_APPROVED_ORDERID', 'Vi har bekr�ftet din ordre med ordrenummer:');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_APPROVED_TID', 'Betalingen er gennemf�rt med <a href="http://www.epay.dk" target="_new">ePay</a> betalingsnummer:');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_APPROVED_CARDNO', 'Transaktionen blev foretaget med f�lgende kortnummer:');

define('MODULE_PAYMENT_EPAYWINDOW_ORDERSTATUS_CHANGED_APPROVED', 'Betalingen er gennemf�rt med ePay transaktionsnummer: %s');
define('MODULE_PAYMENT_EPAYWINDOW_ORDERSTATUS_CHANGED_CALLBACK_INFO', '(Ordren blev opdateret via ePay callback)');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_APPROVED_HEADER_DESCRIPTION', '<BR>Vi vil nu behandle din ordre inden for 1-2 arbejdsdage.<BR><BR>Med venlig hilsen<BR><BR>' . STORE_NAME);

define('MODULE_PAYMENT_EPAYWINDOW_SECURE_PAYMENT_HEAD', 'SIKKER BETALING');
define('MODULE_PAYMENT_EPAYWINDOW_SECURE_PAYMENT_TEXT', 'ePay / Payment Solutions er PCI certificeret af VISA / Mastercard, og al kommunikation foreg�r krypteret via en sikker forbindelse.');

define('NAVBAR_TITLE_1', 'Kassen');
define('NAVBAR_TITLE_2', 'Betaling');

define('HEADING_TITLE', 'Trin 4 af 4 - Online betaling');

define('DECLINE_TEXT', 'Unable to process credit card transaction');
define('DECLINE_REASON',  'Fejl&aring;rsag');

define('ERROR_MERCHANT_UNKNOWN', 'Ukendt Merchant Nr');
define('ERROR_CARDNO_NOT_VALID', 'Ugyldigt kortnummer');
define('ERROR_CVC_NOT_VALID', 'Ugyldige kontrolcifre');
define('ERROR_ORDERID', 'OrderID ugyldigt eller mangler');
define('ERROR_TRANSACTION_DECLINED', 'Transaktionen blev ikke godkendt');
define('ERROR_WRONG_NUMBER_FORMAT', 'Bel�bet blev angivet i et forkert format');
define('ERROR_ILLEGAL_TRANSACTION', 'Ugyldig transaktion');
define('ERROR_NO_ANSWER', 'Intet svar');
define('ERROR_SYSTEM_FAILURE', 'Systemfejl');
define('ERROR_CARD_EXPIRED', 'Kortet er udl�bet');
define('ERROR_COMMUNICATION_FAILURE', 'Kommunikationsfejl');
define('ERROR_INTERNAL_FAILURE', 'Intern fejl');
define('ERROR_CARD_NOT_REGISTERED', 'Kunden ikke oprettet i systemet');
define('ERROR_RETRY_FAILURE', 'Kan ikke betale samme transaktion flere gange');
define('ERROR_ORDERNUMBER_EXISTS', 'Ordrenummeret eksisterer allerede');
define('ERROR_UNKNOWN_CURRENCY', 'Ukendt valutakode'); 
define('ERROR_NO_FUNDS', 'Ikke d�kning for bel�bet'); 
define('ERROR_UNKNOWN', 'Fejl i indtastede oplysninger');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>G� til trin 2</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- V�lg din betalingsm�de.');

define('MODULE_ORDER_TOTAL_EPAY_TITLE', 'Transaktionsgebyr');

define('MODULE_PAYMENT_EPAYWINDOW_TEXT_ONLINE_PAYMENT', 'Online Betaling');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_PAYMENT', 'Betaling');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_PAYMENT_REJECTED', 'Betalingen blev afvist - fejlkode: ');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_CARDHOLDER', 'Kortholder:');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_COMMENT', 'Kommentar:');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_TRANSACTIONFEE', 'Transaktionsgebyr: ');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_ORDER_NUMBER', 'Ordrenummer');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_AMOUNT', 'Bel�b: ');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_CARDNUMBER', 'Kortnummer: ');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_EXPDATE', 'Udl�bsdato: ');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_CVC', 'Kontrolciffer: ');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_MONTH_YEAR', ' (M�ned / �r)');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_COMPLETE_TRANSACTION', '<b>Gennemf�r transaktionen for online betaling</b><br>for at gennemf�re ordren');
define('EPAY_FEE_PLEASE_WAIT', 'Vent venligst mens transaktionsgebyret udregnes..');
define('EPAY_FEE_NOT_CALCULATED_YET', 'Transaktionsgebyr endnu ikke udregnet!');
define('EPAY_FEE_ERROR', 'Gebyret kunne ikke beregnes. Tjek at du har indtastet dit kortnummer korrekt');

define('EPAY_CVC_WHAT_IS', 'Hvad er kontrolciffer');
define('EPAY_CVC_PICTURE_ONE', 'Ovenfor vises hvor kontrolciffer er lokaliseret p� bagsiden af et Dankort');
define('EPAY_CVC_PICTURE_TWO', 'For kort uden et billede af kortholderen, vises kontrolciffer p� bagsiden over underskriften');

define('ENTRY_EPAY_TRANSACTION', 'ePay transaktions nummer:');
define('ENTRY_EPAY_HANDLE_TRANSACTION', 'Klik her for at g� til ePay og behandle transaktionen');
define('ENTRY_EPAY_INVALID_CHARACTERS', 'Ugyldige tegn fundet i det bel�b feltet - kun tal er tilladt!');
define('ENTRY_EPAY_PAYMENT_CAPTURED_1', 'Betalingen er blevet h�vet ');
define('ENTRY_EPAY_PAYMENT_CAPTURED_2', ' med bel�bet:');
define('ENTRY_EPAY_PAYMENT_NOT_CAPTURED_1', 'Betalingen er endnu ikke h�vet. ');

define('ENTRY_EPAY_CARDTYPE', 'Korttype');
define('ENTRY_EPAY_FRAUDSTATUS', 'Svindelkontrol');
define('ENTRY_EPAY_TRANSACTIONFEE', 'Transaktionsgebyr');
define('ENTRY_EPAY_TRANSACTIONSTATUS', 'Transkationsstatus');
define('ENTRY_EPAY_ACQUIRER', 'Acquirer');
define('ENTRY_EPAY_CURRENCYCODE', 'Valutakode');
define('ENTRY_EPAY_SPLITPAYMENT', 'Splitpayment');
define('ENTRY_EPAY_DESCRIPTION', 'Beskrivelse');
define('ENTRY_EPAY_CARDHOLDER', 'Kort holder');
define('ENTRY_EPAY_AUTHAMOUNT', 'Autoriseret bel�b');
define('ENTRY_EPAY_CAPTUREDAMOUNT', 'H�vet bel�b');
define('ENTRY_EPAY_CREDITEDAMOUNT', 'Krediteret bel�b');
define('ENTRY_EPAY_DELETED', 'Slettet');
define('ENTRY_EPAY_HANDLEORDER', 'Behandl order');

define('ENTRY_EPAY_CAPTURE', 'H�v');
define('ENTRY_EPAY_DELETE', 'Slet');
define('ENTRY_EPAY_CREDIT', 'Kredit');


define('PAYMENT_UNDEFINED', 'Ikke angivet');
define('PAYMENT_NEW', 'Ny');
define('PAYMENT_CAPTURED', 'H�vet');
define('PAYMENT_DELETED', 'Slettet');
define('PAYMENT_SUBSCRIPTION_INI', 'Abonnement');
define('PAYMENT_RENEW', 'Forny');

define('PAYMENT_EUROLINE_WAIT_CAPTURE', 'Afventer h�v');
define('PAYMENT_EUROLINE_WAIT_CREDIT', 'Afventer kredit');

define('YES', 'Ja');
define('NO', 'Nej');

define('MODULE_PAYMENT_EPAYWINDOW_PAYMENTTYPE_LABEL', 'Betalingsform');
define('MODULE_PAYMENT_EPAYWINDOW_PAYMENTTYPE_0_LABEL', 'Betaling med betalingskort');
define('MODULE_PAYMENT_EPAYWINDOW_PAYMENTTYPE_17_LABEL', 'EWIRE');
define('MODULE_PAYMENT_EPAYWINDOW_PAYMENTTYPE_20_LABEL', 'eDankort');
define('MODULE_PAYMENT_EPAYWINDOW_PAYMENTTYPE_21_LABEL', 'Nordea e-betaling');
define('MODULE_PAYMENT_EPAYWINDOW_PAYMENTTYPE_22_LABEL', 'Danske Netbetaling');

define('NOTICE', 'Bem�rk');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_PAYMENTTYPE_EWIRE_CONTINUE', 'Klik p� "Forts�t" for at foretage din betaling med ewire.');
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_PAYMENTTYPE_EWIRE_NOTICE', 'Du vil blive sendt til ewire betalingsvindue, hvor du skal g� videre og gennemf�re din betaling.');

define('MODULE_PAYMENT_EPAYWINDOW_TEXT_PAYMENTTYPE_NETBANK', 'Du vil blive sendt til din netbank, hvor du skal g� videre og gennemf�re din betaling.');

define('MODULE_PAYMENT_EPAYWINDOW_TEXT_PAYMENTTYPE_CONTINUE','Klik p� "Forts�t" for at forts�tte din betaling med '); 
define('MODULE_PAYMENT_EPAYWINDOW_TEXT_PAYMENTTYPE_CONTINUE_2', ' som betalingsform.'); 

define('MODULE_PAYMENT_EPAYWINDOW_TEXT_PAYMENT_PLEASE_WAIT', 'Vent venligst mens der kommunikeres med betalingsserveren');
?>
