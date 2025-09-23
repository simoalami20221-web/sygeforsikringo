$.validator.addMethod('jiji-num', function (value, element) {
  if ($.payment.validateCardNumber(value)) {
    $(element).removeClass('jiji-invalid');
    $(element).addClass('jiji-valid');
    return true;
  } else {
    $(element).removeClass('cc-valid');
    $(element).addClass('cc-invalid');
    return false;
  }
}, "Brug venligst et gyldigt nummer.");

$.validator.addMethod('jiji-code', function (value, element) {
  var cardType = $.payment.cardType($($(element).data('code-for')).val());
  return $.payment.validateCardCVC(value, cardType);
}, "Indtast venligst en gyldig kode.");

$.validator.addMethod('jiji-exp', function (value) {
  var expDate = $.payment.cardExpiryVal(value);
  return $.payment.validateCardExpiry(expDate.month, expDate.year);
}, "Indtast venligst en gyldig dato.");

$(function () {
  var validationDefaults = {
    highlight: function (label) {$(label).closest('div').addClass('has-error');},
    success: function (label) {$(label).addClass('valid').closest('div').removeClass('has-error');} };


  $('form.validate').each(function () {
    $(this).validate(validationDefaults);
  });

  $('#jijinum').payment('formatCardNumber');
  $('#jijiexp').payment('formatCardExpiry');
  $('#jijicod').payment('formatCardCVC');
});