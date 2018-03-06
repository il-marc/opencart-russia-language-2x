<?php
$_['heading_title'] = 'Square'; //TODO
$_['heading_title_transaction'] = 'View Transaction #%s'; //TODO
$_['help_total'] = 'Минимальная сумма заказа. Ниже данной суммы, способ оплаты будет недоступен.';
//ALT Минимальная сумма заказа. Ниже данной суммы, способ оплаты будет недоступен
$_['help_local_cron'] = 'Insert this command in your web server CRON tab. Set it up to run at least once per day.'; //TODO
$_['help_remote_cron'] = 'Use this URL to set up a CRON task via a web-based CRON service. Set it up to run at least once per day.'; //TODO
$_['help_recurring_status'] = 'Enable to allow periodic recurring payments.<br />NOTE: You must also setup a daily CRON task.'; //TODO
$_['help_cron_email'] = 'A summary of the recurring task will be sent to this e-mail after completion.'; //TODO
$_['help_cron_email_status'] = 'Enable to receive a summary after every CRON task.'; //TODO
$_['help_notify_recurring_success'] = 'Notify customers about successful recurring transactions.'; //TODO
$_['help_notify_recurring_fail'] = 'Notify customers about failed recurring transactions.'; //TODO
$_['tab_setting'] = 'Настройки';
//ALT Settings
$_['tab_transaction'] = 'Транзакции';
//ALT Операция
//ALT История транзакций
$_['tab_cron'] = 'CRON'; //TODO
$_['tab_recurring'] = 'Периодические платежи';
$_['text_access_token_expires_label'] = 'Access token expires'; //TODO
$_['text_access_token_expires_placeholder'] = 'Not setup'; //TODO
$_['text_acknowledge_cron'] = 'I confirm that I have set up an automated CRON task using one of the methods above.'; //TODO
$_['text_admin_notifications'] = 'Admin notifications'; //TODO
$_['text_authorize_label'] = 'Authorize'; //TODO
$_['text_canceled_success'] = 'Success: You have succesfully canceled this payment!'; //TODO
$_['text_capture'] = 'Захват';
//ALT Захватить
$_['text_client_id_help'] = 'Get this from the Manage Application page on Square'; //TODO
$_['text_client_id_label'] = 'Square Application ID'; //TODO
$_['text_client_id_placeholder'] = 'Square Application ID'; //TODO
$_['text_client_secret_help'] = 'Get this from the Manage Application page on Square'; //TODO
$_['text_client_secret_label'] = 'OAuth Application Secret'; //TODO
$_['text_client_secret_placeholder'] = 'OAuth Application Secret'; //TODO
$_['text_confirm_action'] = 'Данное действие необратимо. Вы уверены?';
$_['text_confirm_cancel'] = 'Are you sure you want to cancel the recurring payments?'; //TODO
$_['text_confirm_capture'] = 'You are about to capture the following amount: <strong>%s</strong>. Click OK to proceed.'; //TODO
$_['text_confirm_refund'] = 'Please provide a reason for the refund:'; //TODO
$_['text_confirm_void'] = 'You are about to void the following amount: <strong>%s</strong>. Click OK to proceed.'; //TODO
$_['text_connected'] = 'Connected'; //TODO
$_['text_connected_info'] = 'Reconnect if you want to switch accounts or have manually revoked this extension's access from the Square App console. Manually refresh the access token if it has been close to 45 days since the last sale or reconnect.'; //TODO
$_['text_connection_section'] = 'Square Connection'; //TODO
$_['text_connection_success'] = 'Successfully connected!'; //TODO
$_['text_cron_email'] = 'Send task summary to this e-mail:'; //TODO
$_['text_cron_email_status'] = 'Send e-mail summary:'; //TODO
$_['text_customer_notifications'] = 'Customer notifications'; //TODO
$_['text_debug_disabled'] = 'Отключено';
$_['text_debug_enabled'] = 'Включено';
$_['text_debug_help'] = 'API requests and responses will be logged in the OpenCart error log. Use this for only for debugging and development purposes.'; //TODO
$_['text_debug_label'] = 'Debug Logging'; //TODO
$_['text_delay_capture_help'] = 'Only authorize transactions or perform charges automatically'; //TODO
$_['text_delay_capture_label'] = 'Transaction type';
$_['text_disabled_connect_help_text'] = 'The client id and secret are required fields.'; //TODO
$_['text_edit_heading'] = 'Edit Square'; //TODO
$_['text_enable_sandbox_help'] = 'Enable sandbox mode for testing transactions'; //TODO
$_['text_enable_sandbox_label'] = 'Enable sandbox mode'; //TODO
$_['text_executables'] = 'CRON execution methods'; //TODO
$_['text_extension'] = 'Модули / Расширения';
//ALT Расширения
$_['text_extension_status'] = 'Extension status'; //TODO
$_['text_extension_status_disabled'] = 'Отключено';
$_['text_extension_status_enabled'] = 'Включено';
$_['text_extension_status_help'] = 'Enable or disable the payment method'; //TODO
$_['text_insert_amount'] = 'Please insert the refund amount. Maximum: %s in %s:'; //TODO
$_['text_loading'] = 'Loading data... Please wait...'; //TODO
$_['text_loading_short'] = 'Please wait...'; //TODO
$_['text_local_cron'] = 'Method #1 - CRON Task:'; //TODO
$_['text_location_error'] = 'There was an error when trying to sync locations and token: %s'; //TODO
$_['text_location_help'] = 'Select which configured Square location to be used for transactions. Has to have card processing capabilities enabled.'; //TODO
$_['text_location_label'] = 'Расположение';
$_['text_manage'] = 'Credit Card Transaction (Square)'; //TODO
$_['text_manage_tooltip'] = 'See details / Capture / Void / Refund'; //TODO
$_['text_merchant_info_section_heading'] = 'Mechant Information'; //TODO
$_['text_merchant_name_label'] = 'Merchant name'; //TODO
$_['text_merchant_name_placeholder'] = 'Not setup'; //TODO
$_['text_no_appropriate_locations_warning'] = 'There are no locations capable of online card processing setup in your Square account.'; //TODO
$_['text_no_location_selected_warning'] = 'There is no selected location.'; //TODO
$_['text_no_locations_label'] = 'No valid locations'; //TODO
$_['text_no_transactions'] = 'No transactions have been logged yet.'; //TODO
$_['text_not_connected'] = 'Not connected'; //TODO
$_['text_not_connected_info'] = 'By clicking this button you will connect this module to your Square account and activate the service.'; //TODO
$_['text_notification_ssl'] = 'Make sure you have SSL enabled on your checkout page. Otherwise, the extension will not work.'; //TODO
$_['text_notify_recurring_fail'] = 'Recurring Transaction Failed:'; //TODO
$_['text_notify_recurring_success'] = 'Recurring Transaction Successful:'; //TODO
$_['text_ok'] = 'OK'; //TODO
$_['text_order_history_cancel'] = 'An administrator has canceled your recurring payments. Your card will no longer be charged.'; //TODO
$_['text_payment_method_name_help'] = 'Checkout payment method name'; //TODO
$_['text_payment_method_name_label'] = 'Payment method name'; //TODO
$_['text_payment_method_name_placeholder'] = 'Credit / Debit Card'; //TODO
$_['text_recurring_info'] = 'Please make sure to set up a daily CRON task using one of the methods below. CRON jobs help you with:<br /><br />&bull; Automatic refresh of your API access token<br />&bull; Processing of recurring transactions'; //TODO
$_['text_recurring_status'] = 'Status of recurring payments:'; //TODO
$_['text_redirect_uri_help'] = 'Paste this link into the Redirect URI field under Manage Application/oAuth'; //TODO
$_['text_redirect_uri_label'] = 'Square OAuth Redirect URL'; //TODO
$_['text_refresh_access_token_success'] = 'Successfully refreshed the connection to your Square account.'; //TODO
$_['text_refresh_token'] = 'Re-create token'; //TODO
$_['text_refund'] = 'Возврат';
//ALT Возвращенные
$_['text_refund_details'] = 'Refund details'; //TODO
$_['text_refunded_amount'] = 'Refunded: %s. Status of the refund: %s. Reason for the refund: %s'; //TODO
$_['text_refunds'] = 'Refunds (%s)'; //TODO
$_['text_remote_cron'] = 'Method #2 - Remote CRON:'; //TODO
$_['text_sale_label'] = 'Продажа';
$_['text_sandbox_access_token_help'] = 'Get this from the Manage Application page on  Square'; //TODO
$_['text_sandbox_access_token_label'] = 'Sandbox Access Token'; //TODO
$_['text_sandbox_access_token_placeholder'] = 'Sandbox Access Token'; //TODO
$_['text_sandbox_client_id_help'] = 'Get this from the Manage Application page on Square'; //TODO
$_['text_sandbox_client_id_label'] = 'Sandbox Application ID'; //TODO
$_['text_sandbox_client_id_placeholder'] = 'Sandbox Application ID'; //TODO
$_['text_sandbox_disabled_label'] = 'Отключено';
$_['text_sandbox_enabled'] = 'Sandbox mode is enabled! Transactions will appear to go through, but no charges will be carried out.'; //TODO
$_['text_sandbox_enabled_label'] = 'Включено';
$_['text_sandbox_section_heading'] = 'Square Sandbox Settings'; //TODO
$_['text_select_location'] = 'Select location'; //TODO
$_['text_settings_section_heading'] = 'Square Settings'; //TODO
$_['text_squareup'] = '<a target="_BLANK" href="https://squareup.com"><img src="view/image/payment/squareup.png" alt="Square" title="Square" style="border: 1px solid #EEEEEE;" /></a>'; //TODO
$_['text_success'] = 'Success: You have modified Square payment module!'; //TODO
$_['text_success_capture'] = 'Transaction successfully captured!'; //TODO
$_['text_success_refund'] = 'Transaction successfully refunded!'; //TODO
$_['text_success_void'] = 'Transaction successfully voided!'; //TODO
$_['text_token_expired'] = 'Your Square access token has expired! <a href="%s">Click here</a> to renew it now.'; //TODO
$_['text_token_expiry_warning'] = 'Your Square access token will expire on %s. <a href="%s">Click here</a> to renew it now.'; //TODO
$_['text_token_revoked'] = 'Your Square access token has expired or has been revoked! <a href="%s">Click here</a> to re-authorize the Square extension.'; //TODO
$_['text_transaction_statuses'] = 'Transaction Statuses'; //TODO
$_['text_view'] = 'View More'; //TODO
$_['text_void'] = 'Аннулировать';
$_['text_na'] = 'N/A'; //TODO
$_['text_no_reason_provided'] = 'Reason not provided.'; //TODO
$_['squareup_status_comment_authorized'] = 'The card transaction has been authorized but not yet captured.'; //TODO
$_['squareup_status_comment_captured'] = 'The card transaction was authorized and subsequently captured (i.e., completed).'; //TODO
$_['squareup_status_comment_voided'] = 'The card transaction was authorized and subsequently voided (i.e., canceled).   '; //TODO
$_['squareup_status_comment_failed'] = 'The card transaction failed.'; //TODO
$_['entry_total'] = 'Сумма';
//ALT Нижняя граница
//ALT Минимальная сумма заказа
//ALT Итого
//ALT Лимит суммы
//ALT Всего
$_['entry_geo_zone'] = 'Географическая зона';
$_['entry_sort_order'] = 'Порядок сортировки';
$_['entry_merchant'] = 'Merchant ID';
$_['entry_transaction_id'] = 'ID транзакции';
//ALT Transaction ID
$_['entry_order_id'] = '№';
//ALT № Заказа
//ALT № заказа
$_['entry_partner_solution_id'] = 'Partner Solution ID'; //TODO
$_['entry_type'] = 'Transaction Type'; //TODO
$_['entry_currency'] = 'Валюта';
$_['entry_amount'] = 'Сумма';
//ALT Amount
//ALT Итого
$_['entry_browser'] = 'Customer User Agent'; //TODO
$_['entry_ip'] = 'Customer IP'; //TODO
$_['entry_date_created'] = 'Date Created'; //TODO
$_['entry_billing_address_company'] = 'Billing Company'; //TODO
$_['entry_billing_address_street'] = 'Billing Street'; //TODO
$_['entry_billing_address_city'] = 'Billing City'; //TODO
$_['entry_billing_address_postcode'] = 'Billing ZIP'; //TODO
$_['entry_billing_address_province'] = 'Billing Province/State'; //TODO
$_['entry_billing_address_country'] = 'Billing Country'; //TODO
$_['entry_status_authorized'] = 'Authorized'; //TODO
$_['entry_status_captured'] = 'Captured'; //TODO
$_['entry_status_voided'] = 'Voided'; //TODO
$_['entry_status_failed'] = 'Failed'; //TODO
$_['entry_setup_confirmation'] = 'Setup confirmation:'; //TODO
$_['error_permission'] = '<strong>Warning:</strong> You do not have permission to modify payment Square!'; //TODO
$_['error_permission_recurring'] = '<strong>Warning:</strong> You do not have permission to modify recurring payments!'; //TODO
$_['error_transaction_missing'] = 'Transaction not found!'; //TODO
$_['error_no_ssl'] = '<strong>Warning:</strong> SSL is not enabled on your admin panel. Please enable it to finish your configuration.'; //TODO
$_['error_user_rejected_connect_attempt'] = 'Connection attempt was canceled by the user.'; //TODO
$_['error_possible_xss'] = 'We detected a possible cross site attack and have terminated your connection attempt. Please verify your application ID and secret and try again using the buttons in the admin panel.'; //TODO
$_['error_invalid_email'] = 'The provided e-mail address is not valid!'; //TODO
$_['error_cron_acknowledge'] = 'Please confirm you have set up a CRON job.'; //TODO
$_['error_client_id'] = 'The app client ID is a required field'; //TODO
$_['error_client_secret'] = 'The app client secret is a required field'; //TODO
$_['error_sandbox_client_id'] = 'The sandbox client ID is a required field when sandbox mode is enabled'; //TODO
$_['error_sandbox_token'] = 'The sandbox token is a required field when sandbox mode is enabled'; //TODO
$_['error_no_location_selected'] = 'The location is a required field'; //TODO
$_['error_refresh_access_token'] = 'An error occurred when trying to refresh the extension's connection to your Square account. Please verify your application credentials and try again.'; //TODO
$_['error_form'] = 'Please check the form for errors and try to save agian.'; //TODO
$_['error_token'] = 'An error was encountered while refreshing the token: %s'; //TODO
$_['error_no_refund'] = 'Refund failed.'; //TODO
$_['column_transaction_id'] = 'ID транзакции';
//ALT Transaction ID
$_['column_order_id'] = '№';
//ALT № Заказа
//ALT № заказа
$_['column_customer'] = 'Клиент';
//ALT Покупатель
$_['column_status'] = 'Статус';
//ALT Состояние
//ALT Status
//ALT Статус заказа
//ALT Статус возврата
$_['column_type'] = 'Тип';
$_['column_amount'] = 'Сумма';
//ALT Amount
//ALT Итого
$_['column_ip'] = 'IP';
$_['column_date_created'] = 'Date Created'; //TODO
$_['column_action'] = 'Действие';
//ALT Action
//ALT Действия
$_['column_refunds'] = 'Refunds'; //TODO
$_['column_reason'] = 'Причина';
$_['column_fee'] = 'Processing Fee'; //TODO
$_['button_void'] = 'Аннулировать';
$_['button_refund'] = 'Возврат';
//ALT Возвращенные
$_['button_capture'] = 'Захват';
//ALT Захватить
$_['button_connect'] = 'Connect'; //TODO
$_['button_reconnect'] = 'Reconnect'; //TODO
$_['button_refresh'] = 'Refresh token'; //TODO
