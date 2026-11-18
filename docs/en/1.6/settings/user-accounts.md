# User Accounts

InvoicePlane can contain an unlimited number of user accounts (both Administrator and Guest), but there is no
real level of ownership or separation between different administrator accounts. Each administrator account has
full access to the entire system and can see all data system-wide. Guest accounts are read-only and can be
restricted to see invoices, quotes and payments for the client or clients you specify.

## User Types

**Administrator**

An administrator account has full access to the entire system. Administrators can create and delete clients,
invoices, payments, users, and everything else in the system. The account created during installation is an
administrator account. If you don't want somebody having full access to all of your data, do not create an
administrator account for them.

**Guest (Read Only)**

There may be times where you need to allow a user into your system, but with limited access. Guest accounts allow
you to create a user account which can only view quotes, invoices and payments for one or more clients. A guest
account may be created for a particular client, in which case you would create the account and grant access to
only that client. A guest account may also be created for an accountant, in which case you might create the
account and grant access to more than just one client.

## Viewing Users

To view the user list, click the settings icon  near the right hand side
of the main menu and select `User Accounts`.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_useraccounts.jpg)](https://invoiceplane.com/content/screenshots/web/ip_useraccounts.jpg)

To navigate between pages, use the pager buttons located on the submenu bar.

The `Options` button at the end of each row displays a menu from which you can edit or delete an user.

## Add an User Account

To add a new user account, click the settings icon  near the right hand
side of the main menu, select `User Accounts`, and click the `New` button near the top
right of the page.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_useraccounts_form.jpg)](https://invoiceplane.com/content/screenshots/web/ip_useraccounts_form.jpg)

To create the user account, provide the user's name (typically their full name), email address (this is what
they'll use to log in with), password and password verification. When selecting the user type, choose between
`Administrator` or `Guest`. Once the user type has been selected, the rest of the form
will display below the initial form.

If `Administrator` was selected as the user type, several fields will be made available to complete,
such as their address and location information and contact information. Fill in the fields and press the `Save` button near the top right of the page.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_useraccounts_form.jpg)](https://invoiceplane.com/content/screenshots/web/ip_useraccounts_form.jpg)

If `Guest` was selected as the user type, an area will be made available from which you can give
access to one or more clients for the `Guest` user account. To provide access to a single client,
press the `Add Client` button, begin typing the name of the client in to the form and select the
client when they appear in the list. Press the `Submit` button. If you want you can add
another client to the user account. If not press `Cancel`. Don't forget to save the user
account.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_useraccounts_add_client.jpg)](https://invoiceplane.com/content/screenshots/web/ip_useraccounts_add_client.jpg)

If a guest account is not a client, but instead an accountant, you will probably want to provide them with access
to more than just a single client. In that case, press the `Add Client` button, begin typing the name
of the first client in to the form and select the client when they appear in the list. Press the `Submit` button and begin typing the next client name. Rinse, wash and repeat until
each client the guest should have access to has been added to the list. Press the Close button and then press
the `Save` button near the top of the page when finished.

No matter if the account is an Administrator account or a Guest account, all users use the same URL to log in. Be
sure and provide your login URL to any users who you create accounts for.
