[{assign var="oxConfig" value=$oView->getConfig()}]
[{assign var="currency" value=$oView->getActCurrency()}]
<link rel="stylesheet" type="text/css" href="[{ $oViewConf->getBaseDir() }]modules/paymill/paymill_styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    var PAYMILL_PUBLIC_KEY = '[{$oxConfig->getShopConfVar('PAYMILL_PUBLICKEY')}]';
    var PAYMILL_AMOUNT = '[{php}]
                            $amount = oxSession::getInstance()->getBasket()->getPrice()->getBruttoPrice();
                            $amount = round($amount * 100);
                            print $amount;
                          [{/php}]';
    var PAYMILL_CURRENCY = '[{$currency->name}]';
</script>
<script type="text/javascript" src="https://bridge.paymill.de/"></script>
<script type="text/javascript">
$.noConflict();
jQuery(document).ready(function ($) {
    $('.card-number').keyup(function() {
        switch(paymill.cardType($('.card-number').val())){
            case 'Visa':
                $('.card-icon').html('<img src="[{ $oViewConf->getBaseDir() }]modules/paymill/icon_visa.png" >');
                $('.card-icon').show();
                break;
            case 'MasterCard':
                $('.card-icon').html('<img src="[{ $oViewConf->getBaseDir() }]modules/paymill/icon_mastercard.png" >');
                $('.card-icon').show();
                break;
            default:
                $('.card-icon').hide();
                break;
        }
    });

    function PaymillResponseHandler(error, result) {
        if (error) {
            // Zeigt den Fehler überhalb des Formulars an
            $(".payment-errors").text(error.apierror);
            $(".payment-errors").css("display","inline-block");
        } else {
            $(".payment-errors").css("display","none");
            $(".payment-errors").text("");
            var form = $("#payment");
            // Token
            var token = result.token;
            // Token in das Formular einfügen damit es an den Server übergeben wird
            form.append("<input type='hidden' name='paymillToken' value='" + token + "'/>");
            form.get(0).submit();
        }
        $("#paymentNextStepBottom").removeAttr("disabled");
    }

    $("#payment").submit(function (event) {
        // Absenden Button deaktivieren um weitere Klicks zu vermeiden
        $('#paymentNextStepBottom').attr("disabled", "disabled");
        paymenttype = $('#payment_paymill_cc').attr('checked') ? 'cc' : $('#payment_paymill_elv').attr('checked') ? 'elv': 'other';
        switch (paymenttype) {
            case "cc":
                if (false == paymill.validateCardNumber($('.card-number').val())) {
                    $(".payment-errors.cc").text('[{ oxmultilang ident="PAYMILL_VALIDATION_CARDNUMBER" }]');
                    $(".payment-errors.cc").css("display","inline-block");
                    $("#paymentNextStepBottom").removeAttr("disabled");
                    return false;
                }
                if (false == paymill.validateExpiry($('.card-expiry-month').val(), $('.card-expiry-year').val())) {
                    $(".payment-errors.cc").text('[{ oxmultilang ident="PAYMILL_VALIDATION_EXP" }]');
                    $(".payment-errors.cc").css("display","inline-block");
                    $("#paymentNextStepBottom").removeAttr("disabled");
                    return false;
                }

                if ($('.card-holdername').val() == '') {
                    $(".payment-errors.cc").text('[{ oxmultilang ident="PAYMILL_VALIDATION_CARDHOLDER" }]');
                    $(".payment-errors.cc").css("display","inline-block");
                    $("#paymentNextStepBottom").removeAttr("disabled");
                    return false;
                }
                var params = {
                    amount_int:     PAYMILL_AMOUNT,  // E.g. "15" for 0.15 Eur
                    currency:       PAYMILL_CURRENCY,    // ISO 4217 e.g. "EUR"
                    number:         $('.card-number').val(),
                    exp_month:      $('.card-expiry-month').val(),
                    exp_year:       $('.card-expiry-year').val(),
                    cvc:            $('.card-cvc').val(),
                    cardholder:     $('.card-holdername').val()
                };
                break;
            case "elv":
                if (false == $('.elv-holdername').val()) {
                    $(".payment-errors.elv").text('[{ oxmultilang ident="PAYMILL_VALIDATION_ACCOUNTHOLDER" }]');
                    $(".payment-errors.elv").css("display","inline-block");
                    $("#paymentNextStepBottom").removeAttr("disabled");
                    return false;
                }
                if (false == paymill.validateAccountNumber($('.elv-account').val())) {
                    $(".payment-errors.elv").text('[{ oxmultilang ident="PAYMILL_VALIDATION_ACCOUNTNUMBER" }]');
                    $(".payment-errors.elv").css("display","inline-block");
                    $("#paymentNextStepBottom").removeAttr("disabled");
                    return false;
                }
                if (false == paymill.validateBankCode($('.elv-bankcode').val())) {
                    $(".payment-errors.elv").text('[{ oxmultilang ident="PAYMILL_VALIDATION_BANKCODE" }]');
                    $(".payment-errors.elv").css("display","inline-block");
                    $("#paymentNextStepBottom").removeAttr("disabled");
                    return false;
                }
                var params = {
                    number:         $('.elv-account').val(),
                    bank:           $('.elv-bankcode').val(),
                    accountholder:  $('.elv-holdername').val()
                };
                break;
             default:
                 $("#paymentNextStepBottom").removeAttr("disabled");
                 return true;
                 break;
        }
        paymill.createToken(params, PaymillResponseHandler);
        return false;
    });
});
</script>
[{$smarty.block.parent}]