<?php
$aLang = array(
	"charset" => "UTF-8",
	"PAGE_CHECKOUT_PAYMENT_NUMBER" => "Kartennummer",
	"PAGE_CHECKOUT_PAYMENT_SECURITYCODE" => "CVC",
	"PAGE_CHECKOUT_PAYMENT_HOLDERNAME" => "Karteninhaber",
	"PAGE_CHECKOUT_PAYMENT_VALIDUNTIL" => "G&uuml;ltig bis",
	"PAGE_CHECKOUT_PAYMENT_ACCOUNTHOLDER" => "Kontoinhaber",
	"PAGE_CHECKOUT_PAYMENT_ACCOUNT" => "Kontonummer",
	"PAGE_CHECKOUT_PAYMENT_BANKCODE" => "Bankleitzahl",
	"PAGE_CHECKOUT_PAYMENT_IBAN" => "IBAN",
	"PAGE_CHECKOUT_PAYMENT_BIC" => "BIC",
	"PAGE_CHECKOUT_PAYMENT_MONTH_JAN" => "Januar",
	"PAGE_CHECKOUT_PAYMENT_MONTH_FEB" => "Februar",
	"PAGE_CHECKOUT_PAYMENT_MONTH_MAR" => "M&auml;rz",
	"PAGE_CHECKOUT_PAYMENT_MONTH_APR" => "April",
	"PAGE_CHECKOUT_PAYMENT_MONTH_MAY" => "Mai",
	"PAGE_CHECKOUT_PAYMENT_MONTH_JUN" => "Juni",
	"PAGE_CHECKOUT_PAYMENT_MONTH_JUL" => "Juli",
	"PAGE_CHECKOUT_PAYMENT_MONTH_AUG" => "August",
	"PAGE_CHECKOUT_PAYMENT_MONTH_OCT" => "Oktober",
	"PAGE_CHECKOUT_PAYMENT_MONTH_SEP" => "September",
	"PAGE_CHECKOUT_PAYMENT_MONTH_NOV" => "November",
	"PAGE_CHECKOUT_PAYMENT_MONTH_DEC" => "Dezember",
	"PAYMILL_VALIDATION_CARDNUMBER" => "Bitte geben Sie eine g&uuml;ltige Kreditkartennummer ein.",
	"PAYMILL_VALIDATION_ACCOUNTNUMBER" => "Bitte geben Sie eine g&uuml;ltige Kontonummer ein",
	"PAYMILL_VALIDATION_BANKCODE" => "Bitte geben Sie eine g&uuml;ltige Bankleitzahl an",
	"PAYMILL_VALIDATION_IBAN" => "Bitte geben Sie eine g&uuml;ltige IBAN an.",
	"PAYMILL_VALIDATION_BIC" => "Bitte geben Sie eine g&uuml;ltige BIC an.",
	"PAYMILL_VALIDATION_EXP" => "Ung&uuml;ltiges Ablaufdatum",
	"PAYMILL_VALIDATION_CVC" => "Ung&uuml;ltige CVC",
	"PAYMILL_VALIDATION_CARDHOLDER" => "Bitte geben Sie einen Inhabernamen an.",
	"PAYMILL_VALIDATION_ACCOUNTHOLDER" => "Bitte geben Sie den Namen des Kontoinhabers an",
	"PAYMILL_CC_POWERED_TEXT" => "Sichere Kreditkartenzahlung powered by ",
	"PAYMILL_ELV_POWERED_TEXT" => "ELV powered by ",
	"PAGE_CHECKOUT_PAYMENT_CC_TOOLTIP" => "Hinter dem CVV-Code bzw. CVC verbirgt sich ein Sicherheitsmerkmal von Kreditkarten, &uuml;blicherweise handelt es sich dabei um eine drei- bis vierstelligen Nummer. Der CVV-Code befindet sich auf VISA-Kreditkarten. Der gleiche Code ist auch auf MasterCard-Kreditkarten zu finden, hier allerdings unter dem Namen CVC. Die Abk&uuml;rzung CVC steht dabei f&uuml;r Card Validation Code. Bei VISA wird der Code als Card Verification Value-Code bezeichnet. &Auml;hnlich wie bei Mastercard und VISA gibt es auch bei Diners Club, Discover und JCB eine dreistellige Nummer, die meist auf der R&uuml;ckseite der Karte zu finden ist. Bei Maestro-Karten gibt es mit und ohne dreistelligen CVV. Wird eine Maestro-Karte ohne CVV verwendet kann einfach 000 eingetragen werden. American Express verwendet die CID (Card Identification Number). Dabei handelt es sich um eine vierstellige Nummer, die meist auf der Vorderseite der Karte, rechts oberhalb der Kartennummer zu finden ist.",
	"PAYMILL_10001" => "General undefined response.",
	"PAYMILL_10002" => "Still waiting on something.",
	"PAYMILL_20000" => "General success response.",
	"PAYMILL_40000" => "General problem with data.",
	"PAYMILL_40001" => "General problem with payment data.",
	"PAYMILL_40100" => "Problem with credit card data.",
	"PAYMILL_40101" => "Problem with cvv.",
	"PAYMILL_40102" => "Card expired or not yet valid.",
	"PAYMILL_40103" => "Limit exceeded.",
	"PAYMILL_40104" => "Card invalid.",
	"PAYMILL_40105" => "Expiry date not valid.",
	"PAYMILL_40106" => "Credit card brand required.",
	"PAYMILL_40200" => "Problem with bank account data.",
	"PAYMILL_40201" => "Bank account data combination mismatch.",
	"PAYMILL_40202" => "User authentication failed.",
	"PAYMILL_40300" => "Problem with 3d secure data.",
	"PAYMILL_40301" => "Currency / amount mismatch",
	"PAYMILL_40400" => "Problem with input data.",
	"PAYMILL_40401" => "Amount too low or zero.",
	"PAYMILL_40402" => "Usage field too long.",
	"PAYMILL_40403" => "Currency not allowed.",
	"PAYMILL_50000" => "General problem with backend.",
	"PAYMILL_50001" => "Country blacklisted.",
	"PAYMILL_50100" => "Technical error with credit card.",
	"PAYMILL_50101" => "Error limit exceeded.",
	"PAYMILL_50102" => "Card declined by authorization system.",
	"PAYMILL_50103" => "Manipulation or stolen card.",
	"PAYMILL_50104" => "Card restricted",
	"PAYMILL_50105" => "Invalid card configuration data.",
	"PAYMILL_50200" => "Technical error with bank account.",
	"PAYMILL_50201" => "Card blacklisted.",
	"PAYMILL_50300" => "Technical error with 3D secure.",
	"PAYMILL_50400" => "Decline because of risk issues.",
	"PAYMILL_50500" => "General timeout.",
	"PAYMILL_50501" => "Timeout on side of the acquirer.",
	"PAYMILL_50502" => "Risk management transaction timeout",
	"PAYMILL_50600" => "Duplicate transaction.",
	"PAYMILL_field_invalid_country" => "Invalid country for sepa transactions",
	"PAYMILL_field_invalid_iban" => "Invalid IBAN",
	"PAYMILL_internal_server_error" => "The communication with the psp failed.",
	"PAYMILL_invalid_public_key" => "The public key is invalid.",
	"PAYMILL_invalid_payment_data" => "Paymentmethod, card type currency or country not authorized",
	"PAYMILL_unknown_error" => "Unknown Error",
	"PAYMILL_3ds_cancelled" => "3-D Secure process has been canceled by the user",
	"PAYMILL_field_invalid_card_number" => "Bitte geben Sie eine g&uuml;ltige Kreditkartennummer ein.",
	"PAYMILL_field_invalid_card_exp_year" => "Invalid Expiry Year",
	"PAYMILL_field_invalid_card_exp_month" => "Invalid Expiry Month",
	"PAYMILL_field_invalid_card_exp" => "Ung&uuml;ltiges Ablaufdatum",
	"PAYMILL_field_invalid_card_cvc" => "Ung&uuml;ltige CVC",
	"PAYMILL_field_invalid_card_holder" => "Bitte geben Sie einen Inhabernamen an.",
	"PAYMILL_field_invalid_amount_int" => "Missing amount for 3-D Secure",
	"PAYMILL_field_invalid_amount" => "Missing amount for 3-D Secure",
	"PAYMILL_field_invalid_currency" => "Invalid currency for 3-D Secure",
	"PAYMILL_PRENOTIFICATION_TEXT" => "Die Lastschrift wird zu dem folgenden Termin eingezogen:",
	"PAYMILL_DATE_FORMAT" => "d.m.Y"
);
