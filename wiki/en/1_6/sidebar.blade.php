<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-general"
       class="has-submenu @if($current_dir != 'general') collapsed @endif">
        General information
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-general" class="submenu collapse @if($current_dir == 'general') show @endif">
        <li><a href="{{ url('en/1.0/general/about') }}">What is InvoicePlane?</a></li>
        <li><a href="{{ url('en/1.0/general/changelog') }}">Changelog</a></li>
        <li><a href="{{ url('en/1.0/general/license') }}">License</a></li>
        <li><a href="{{ url('en/1.0/general/faq') }}">FAQ</a></li>
    </ul>
</li>
<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-getting-started"
       class="has-submenu @if($current_dir != 'getting-started') collapsed @endif">
        Getting started
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-getting-started" class="submenu collapse @if($current_dir == 'getting-started') show @endif">
        <li><a href="{{ url('en/1.6/getting-started/requirements') }}">Requirements</a></li>
        <li><a href="{{ url('en/1.6/getting-started/installation') }}">Installation</a></li>
        <li><a href="{{ url('en/1.6/getting-started/quickstart') }}">Quickstart (Tutorial)</a></li>
        <li><a href="{{ url('en/1.6/getting-started/updating-ip') }}">Updating InvoicePlane</a></li>
    </ul>
</li>
<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-modules"
       class="has-submenu @if($current_dir != 'modules') collapsed @endif">
        Modules
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-modules" class="submenu collapse @if($current_dir == 'modules') show @endif">
        <li><a href="{{ url('en/1.6/modules/clients') }}">Clients</a></li>
        <li><a href="{{ url('en/1.6/modules/quotes') }}">Quotes</a></li>
        <li><a href="{{ url('en/1.6/modules/invoices') }}">Invoices</a></li>
        <li><a href="{{ url('en/1.6/modules/recurring-invoices') }}">Recurring Invoices</a></li>
        <li><a href="{{ url('en/1.6/modules/payments') }}">Payments</a></li>
    </ul>
</li>
<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-settings"
       class="has-submenu @if($current_dir != 'settings') collapsed @endif">
        Settings
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-settings" class="submenu collapse @if($current_dir == 'settings') show @endif">
        <li><a href="{{ url('en/1.6/settings/general') }}">General Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/invoices') }}">Invoice Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/quotes') }}">Quotes Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/taxes') }}">Tax Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/email') }}">eMail Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/online-payments') }}">Online Payments</a></li>
        <li><a href="{{ url('en/1.6/settings/updatecheck') }}">Updatecheck</a></li>
        <li><a href="{{ url('en/1.6/settings/custom-fields') }}">Custom Fields</a></li>
        <li><a href="{{ url('en/1.6/settings/email-templates') }}">eMail Templates</a></li>
        <li><a href="{{ url('en/1.6/settings/invoice-groups') }}">Invoice Groups</a></li>
        <li><a href="{{ url('en/1.6/settings/payment-methods') }}">Payment Methods</a></li>
        <li><a href="{{ url('en/1.6/settings/taxrates') }}">Taxrates</a></li>
        <li><a href="{{ url('en/1.6/settings/user-accounts') }}">User Accounts</a></li>
    </ul>
</li>
<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-templates"
       class="has-submenu @if($current_dir != 'templates') collapsed @endif">
        Templates
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-templates" class="submenu collapse @if($current_dir == 'templates') show @endif">
        <li><a href="{{ url('en/1.6/templates/using-templates') }}">Using Templates</a></li>
        <li><a href="{{ url('en/1.6/templates/customize-templates') }}">Customize Templates</a></li>
    </ul>
</li>
<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-system"
       class="has-submenu @if($current_dir != 'system') collapsed @endif">
        System
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-system" class="submenu collapse @if($current_dir == 'system') show @endif">
        <li><a href="{{ url('en/1.6/system/translation-localization') }}">Translation / Localization</a></li>
        <li><a href="{{ url('en/1.6/system/importing-data') }}">Importing Data</a></li>
        <li><a href="{{ url('en/1.6/system/upgrade-from-fusioninvoice') }}">Upgrade from FusionInvoice</a></li>
    </ul>
</li>