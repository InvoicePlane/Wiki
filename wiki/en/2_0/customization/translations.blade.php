@extends('layouts.master')

@section('title')
    Translations
@endsection

@section('content')

    <h2 class="page-title">Translations</h2>

    <ul>
        <li><a href="#how-to-translate">How do I translate InvoicePlane into my own language?</a></li>
        <li><a href="#can-i-share">Can I share my translation for others to use?</a></li>
    </ul>

    <hr>

    <span class="anchor" id="how-to-translate"></span>
    <h3>How do I translate InvoicePlane into my own language?</h3>

    <p>
        The translation files for InvoicePlane live in the resources/lang folder. To translate InvoicePlane
        into your
        native language, create a new folder inside resources/lang for your language and then copy the files
        from
        resources/lang/en into your specific language folder. Once the files have been copied, you can begin the
        translation.
    </p>

    <p>
        The example below demonstrates the structure of the language files. In the example below, account_setup
        is the
        language key used to reference the English phrase 'Account Setup'. Translate each of the phrases after
        the => to
        your language. Do not change the language keys on the left.
    </p>

    <pre>
return [
    'account_setup'                      => 'Account Setup',
    'active'                             => 'Active',
    'active_client'                      => 'Active Client',
    'add_client'                         => 'Add Client',
    ...
</pre>

    <p>Might become:</p>

    <pre>
return [
    'account_setup'                      => 'Configuración de la cuenta',
    'active'                             => 'Activo',
    'active_client'                      => 'Cliente activo',
    'add_client'                         => 'Crear cliente',
    ...
</pre>

    <hr>

    <span class="anchor" id="can-i-share"></span>
    <h3>Can I share my translation for others to use?</h3>

    <p>
        Absolutely. Email a zipped copy of your contribution to
        <a href="mailto:mail@invoiceplane.com">mail@invoiceplane.com</a> and we'll be happy to include
        it in the release package for others to use.
    </p>

@endsection
