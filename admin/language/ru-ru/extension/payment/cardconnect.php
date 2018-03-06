<?php
$_['heading_title'] = 'CardConnect'; //TODO
$_['tab_settings'] = 'Настройки';
//ALT Settings
$_['tab_order_status'] = 'Статус заказа';
//ALT Статус заказа после оплаты
$_['text_extension'] = 'Модули / Расширения';
//ALT Расширения
$_['text_success'] = 'Success: You have modified CardConnect payment module!'; //TODO
$_['text_edit'] = 'Edit CardConnect'; //TODO
$_['text_cardconnect'] = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>'; //TODO
$_['text_payment'] = 'Оплата';
//ALT Платеж
$_['text_authorize'] = 'Authorize'; //TODO
$_['text_live'] = 'Live'; //TODO
$_['text_test'] = 'Test'; //TODO
$_['text_no_cron_time'] = 'The cron has not yet been executed'; //TODO
$_['text_payment_info'] = 'Платежная информация';
//ALT Способ оплаты
$_['text_payment_method'] = 'Способ оплаты';
$_['text_card'] = 'Card'; //TODO
$_['text_echeck'] = 'eCheck'; //TODO
$_['text_reference'] = 'Ссылка';
//ALT Связь
$_['text_update'] = 'Обновить';
$_['text_order_total'] = 'Сумма заказа';
$_['text_total_captured'] = 'Total Captured'; //TODO
$_['text_capture_payment'] = 'Capture Payment'; //TODO
$_['text_refund_payment'] = 'Refund Payment'; //TODO
$_['text_void'] = 'Аннулировать';
$_['text_transactions'] = 'Транзакции';
//ALT Операция
//ALT История транзакций
$_['text_column_type'] = 'Тип';
$_['text_column_reference'] = 'Ссылка';
//ALT Связь
$_['text_column_amount'] = 'Сумма';
//ALT Amount
//ALT Итого
$_['text_column_status'] = 'Статус';
//ALT Состояние
//ALT Status
//ALT Статус заказа
//ALT Статус возврата
$_['text_column_date_modified'] = 'Изменено';
//ALT Дата изменения
$_['text_column_date_added'] = 'Дата';
//ALT Дата добавления
//ALT Добавлено
//ALT Создан
//ALT Дата создания
$_['text_column_update'] = 'Обновить';
$_['text_column_void'] = 'Аннулировать';
$_['text_confirm_capture'] = 'Are you sure you want to capture the payment?'; //TODO
$_['text_confirm_refund'] = 'Are you sure you want to refund the payment?'; //TODO
$_['text_inquire_success'] = 'Inquire was successful'; //TODO
$_['text_capture_success'] = 'Capture request was successful'; //TODO
$_['text_refund_success'] = 'Refund request was successful'; //TODO
$_['text_void_success'] = 'Void request was successful'; //TODO
$_['entry_merchant_id'] = 'Merchant ID';
$_['entry_api_username'] = 'API Username';
//ALT API имя
$_['entry_api_password'] = 'API Password';
$_['entry_token'] = 'Secret Token'; //TODO
$_['entry_transaction'] = 'Транзакция';
$_['entry_environment'] = 'Environment'; //TODO
$_['entry_site'] = 'Site'; //TODO
$_['entry_store_cards'] = 'Store Cards'; //TODO
$_['entry_echeck'] = 'eCheck'; //TODO
$_['entry_total'] = 'Сумма';
//ALT Нижняя граница
//ALT Минимальная сумма заказа
//ALT Итого
//ALT Лимит суммы
//ALT Всего
$_['entry_geo_zone'] = 'Географическая зона';
$_['entry_status'] = 'Статус';
//ALT Состояние
//ALT Status
//ALT Статус заказа
//ALT Статус возврата
$_['entry_logging'] = 'Debug Logging'; //TODO
$_['entry_sort_order'] = 'Порядок сортировки';
$_['entry_cron_url'] = 'Cron Job URL'; //TODO
$_['entry_cron_time'] = 'Cron Job Last Run'; //TODO
$_['entry_order_status_pending'] = 'Ожидание';
//ALT Ожидает
$_['entry_order_status_processing'] = 'В процессе';
$_['help_merchant_id'] = 'Your personal CardConnect account merchant ID.'; //TODO
$_['help_api_username'] = 'Your username to access the CardConnect API.'; //TODO
$_['help_api_password'] = 'Your password to access the CardConnect API.'; //TODO
$_['help_token'] = 'Enter a random token for security or use the one generated.'; //TODO
$_['help_transaction'] = 'Choose 'Payment' to capture the payment immediately or 'Authorize' to have to approve it.'; //TODO
$_['help_site'] = 'This determines the first part of the API URL. Only change if instructed.'; //TODO
$_['help_store_cards'] = 'Whether you want to store cards using tokenization.'; //TODO
$_['help_echeck'] = 'Whether you want to offer the ability to pay using an eCheck.'; //TODO
$_['help_total'] = 'The checkout total the order must reach before this payment method becomes active. Must be a value with no currency sign.'; //TODO
$_['help_logging'] = 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise.'; //TODO
$_['help_cron_url'] = 'Set a cron job to call this URL so that the orders are auto-updated. It is designed to be ran a few hours after the last capture of a business day.'; //TODO
$_['help_cron_time'] = 'This is the last time that the cron job URL was executed.'; //TODO
$_['help_order_status_pending'] = 'The order status when the order has to be authorized by the merchant.'; //TODO
$_['help_order_status_processing'] = 'The order status when the order is automatically captured.'; //TODO
$_['button_inquire_all'] = 'Inquire All'; //TODO
$_['button_capture'] = 'Захват';
//ALT Захватить
$_['button_refund'] = 'Возврат';
//ALT Возвращенные
$_['button_void_all'] = 'Void All'; //TODO
$_['button_inquire'] = 'Inquire'; //TODO
$_['button_void'] = 'Аннулировать';
$_['error_permission'] = 'Warning: You do not have permission to modify payment CardConnect!'; //TODO
$_['error_merchant_id'] = 'Неверный Merchant ID !';
$_['error_api_username'] = 'Необходимо заполнить API Username!';
$_['error_api_password'] = 'Необходимо заполнить API Password!';
$_['error_token'] = 'Secret Token Required!'; //TODO
$_['error_site'] = 'Site Required!'; //TODO
$_['error_amount_zero'] = 'Amount must be higher than zero!'; //TODO
$_['error_no_order'] = 'No matching order info!'; //TODO
$_['error_invalid_response'] = 'Invalid response received!'; //TODO
$_['error_data_missing'] = 'Missing data!'; //TODO
$_['error_not_enabled'] = 'Module not enabled!'; //TODO
