# Importing Data

InvoicePlane can import data from any system as long as it is provided in comma delimited CSV format and is
structured according to the details below. The data import tool can be accessed by clicking the Settings icon
and choosing the Import Data item.

The import tool assumes the following:

The file names will be exactly as they are listed below.
All of the columns listed below must be present in the files, even if there is no data in the column.
The first row of each file must contain the file headings, and those headings must be named exactly as they are
listed below.
The files must all be in comma delimited CSV format.
The files to import must be located in your uploads/import folder.
The email address in the invoice file must be an email address of an actual user account currently in
InvoicePlane.
If any of the rules above are not met, the import will not work as expected.

**File names and columns**

- clients.csv
  - client\_name
  - client\_address\_1
  - client\_address\_2
  - client\_city
  - client\_state
  - client\_zip
  - client\_country
  - client\_phone
  - client\_fax
  - client\_mobile
  - client\_email
  - client\_web
  - client\_vat\_id
  - client\_tax\_code
  - client\_active (1 for active, 0 for inactive)
- invoices.csv
  - user\_email
  - client\_name
  - invoice\_date\_created (yyyy-mm-dd format)
  - invoice\_date\_due (yyyy-mm-dd format)
  - invoice\_number
  - invoice\_terms
- invoice\_items.csv
  - invoice\_number
  - item\_tax\_rate (ex: 7.8 would indicate 7.8%)
  - item\_date\_added (yyyy-mm-dd format)
  - item\_name
  - item\_description
  - item\_quantity
  - item\_price (without any currency symbols)
- payments.csv
  - invoice\_number
  - payment\_method (ex: Cash, Credit or PayPal)
  - payment\_date (yyyy-mm-dd format)
  - payment\_amount (without any currency symbols)
  - payment\_note
