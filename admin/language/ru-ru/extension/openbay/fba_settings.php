<?php
$_['heading_title'] = 'Настройки';
//ALT Settings
$_['text_openbay'] = 'OpenBay Pro';
$_['text_fba'] = 'Fulfillment by Amazon'; //TODO
$_['text_success'] = 'Your settings have been saved'; //TODO
$_['text_status'] = 'Статус';
//ALT Состояние
//ALT Status
//ALT Статус заказа
//ALT Статус возврата
$_['text_account_ok'] = 'Connection to Fulfillment by Amazon OK'; //TODO
$_['text_api_ok'] = 'API connection OK'; //TODO
$_['text_api_status'] = 'API connection'; //TODO
$_['text_edit'] = 'Edit Fulfillment by Amazon settings'; //TODO
$_['text_standard'] = 'Standard'; //TODO
$_['text_expedited'] = 'Expedited'; //TODO
$_['text_priority'] = 'Приоритет';
$_['text_fillorkill'] = 'Fill or Kill'; //TODO
$_['text_fillall'] = 'Fill All'; //TODO
$_['text_fillallavailable'] = 'Fill All Available'; //TODO
$_['text_prefix_warning'] = 'Do not change this setting after orders have been sent to Amazon, only set this when you first install.'; //TODO
$_['text_disabled_cancel'] = 'Disabled - do not automatically cancel fulfillments'; //TODO
$_['text_validate_success'] = 'Your API details are working correctly! You must press save to ensure settings are saved.'; //TODO
$_['text_register_banner'] = 'Click here if you need to register for an account'; //TODO
$_['entry_api_key'] = 'API token'; //TODO
$_['entry_encryption_key'] = 'Encryption key 1'; //TODO
$_['entry_encryption_iv'] = 'Encryption key 2'; //TODO
$_['entry_account_id'] = 'Account ID'; //TODO
$_['entry_send_orders'] = 'Send orders automatically'; //TODO
$_['entry_fulfill_policy'] = 'Fulfillment policy'; //TODO
$_['entry_shipping_speed'] = 'Default shipping speed'; //TODO
$_['entry_debug_log'] = 'Enable debug logging'; //TODO
$_['entry_new_order_status'] = 'New fulfillment trigger'; //TODO
$_['entry_order_id_prefix'] = 'Order ID Prefix'; //TODO
$_['entry_only_fill_complete'] = 'All items must be FBA'; //TODO
$_['help_api_key'] = 'This is your API token, obtain this from your OpenBay Pro account area'; //TODO
$_['help_encryption_key'] = 'This is your Encryption key #1, obtain this from your OpenBay Pro account area'; //TODO
$_['help_encryption_iv'] = 'This is your Encryption key #2, obtain this from your OpenBay Pro account area'; //TODO
$_['help_account_id'] = 'This is the account ID that matches the registered Amazon account for OpenBay Pro, obtain this from your OpenBay Pro account area'; //TODO
$_['help_send_orders'] = 'Orders containing matching Fulfillment by Amazon products will be send to Amazon automatically'; //TODO
$_['help_fulfill_policy'] = 'The default fulfillment policy (FillAll - All fulfillable items in the fulfillment order are shipped. The fulfillment order remains in a processing state until all items are either shipped by Amazon or cancelled by the seller. FillAllAvailable - All fulfillable items in the fulfillment order are shipped. All unfulfillable items in the order are cancelled by Amazon.FillOrKill - If an item in a fulfillment order is determined to be unfulfillable before any shipment in the order moves to the Pending status (the process of picking units from inventory has begun), then the entire order is considered unfulfillable. However, if an item in a fulfillment order is determined to be unfulfillable after a shipment in the order moves to the Pending status, Amazon cancels as much of the fulfillment order as possible.)'; //TODO
$_['help_shipping_speed'] = 'This is the default shipping speed category to apply to new orders, different service levels may incurr different costs'; //TODO
$_['help_debug_log'] = 'Debug logs will record information to a log file about actions the module does. This should be left enabled to help find the cause of any problems.'; //TODO
$_['help_new_order_status'] = 'This is the order status which will trigger the order to be created for fulfillment. Ensure that this is using a status only after you have received payment.'; //TODO
$_['help_order_id_prefix'] = 'Having an order prefix will help identify orders that have come from your store not from other integrations. This is very helpful when merchants sell on many marketplaces and use FBA'; //TODO
$_['help_only_fill_complete'] = 'This will only allow orders to be sent for fulfillment if ALL items in the order are matched to a Fulfillment by Amazon item. If any item is not then the whole order will remain unfilled.'; //TODO
$_['error_api_connect'] = 'Failed to connect to the API'; //TODO
$_['error_account_info'] = 'Unable to verify API connection to Fulfillment by Amazon '; //TODO
$_['error_api_key'] = 'The API token is invalid'; //TODO
$_['error_api_account_id'] = 'The Account ID is invalid'; //TODO
$_['error_encryption_key'] = 'The Encryption key #1 is invalid'; //TODO
$_['error_encryption_iv'] = 'The Encryption key #2 is invalid'; //TODO
$_['error_validation'] = 'There was an error validating your details'; //TODO
$_['tab_api_info'] = 'API details'; //TODO
$_['button_verify'] = 'Verify details'; //TODO
