<?php
// Text
$_['text_title'] 				= 'PayPal';
$_['text_reason'] 				= 'RAZÃO';
$_['text_attn_email']			= 'ATENÇÃO: O pedido do Paypal %s necessita de verificação manual';
$_['text_testmode']	   	 		= 'ATENÇÃO!!! O Gateway de Pagamento está em \"Modo de Teste\". Sua conta não será cobrada.';
$_['text_tax']	 				= 'Taxa';

// Error
$_['error_referer'] 			= 'PP_Standard - Possible Scam: IPN/PDT Referrer URL "%s" was not Paypal.com. Order needs manual verification';
$_['error_amount_mismatch']		= 'PP_Standard - Possible Scam: IPN/PDT Price "%s" does not match OpenCart Total "%s". Order needs manual verification';
$_['error_email_mismatch']		= 'PP_Standard - Possible Scam: IPN/PDT Receiver Email does not match seller email. Order needs manual verification';
$_['error_verify']				= 'PP_Standard - IPN/PDT Auto-Verification Failed. This is often caused by strange characters in the customer address or name. Verify manually.';
$_['error_non_complete']		= 'PP_Standard - Non-complete order status received for order. Research needed.';
$_['error_no_data']				= 'PP_Standard - No data/response from verification.';
?>