# Payments

## View Payments

To view the payment list, click `Payments` from the main menu and select `View Payments`.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_payments.jpg)](https://invoiceplane.com/content/screenshots/web/ip_payments.jpg)

To navigate between pages, use the pager buttons located on the submenu bar.

## Entering a Payment

To enter a payment, either choose `Payments` from the main menu and select `Enter Payment`,
or from the payment list, click the `New` button near the top right of the page.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_payments_form.jpg)](https://invoiceplane.com/content/screenshots/web/ip_payments_form.jpg)

When entering a payment, first select the invoice to enter the payment for. This will default the invoice amount
into the Amount field. Adjust the date and amount, if necessary, and optionally select the payment method and
enter any pertinent notes and press the `Save` button near the top right of the page.

## Online Payments

InvoicePlane can be configured to allow clients to make payments online. The only payment gateway currently
tested with InvoicePlane is Stripe.

### Configure Stripe for Online Payments

To configure InvoicePlane integration with Stripe, you must first have a valid Stripe API Secret Key. If you
don't, follow [these
instructions](https://stripe.com/docs/keys#create-api-secret-key) first to obtain the credentials.

Once you have your API credentials, perform the following in InvoicePlane:

1. Click the `Settings` icon and choose the `System Settings` entry.
2. Click the `online payment` tab.
3. Set `Enable Online Payments` to `Yes`.
4. Choose `Stripe` as a merchant driver (only one available in InvoicePlane 1.6).
5. Enter the Secret Key and the Publishable Key obtained from Stripe.
6. Select the appropriate currency code.
7. Press the `Save` button.

Once configured, send your client the `Guest URL` (found at the bottom of the Invoice Edit screen) and
they will be able to pay their invoice from the link. Optionally, you can also create a Guest User account in
which the client can log into and view and pay their invoices.
