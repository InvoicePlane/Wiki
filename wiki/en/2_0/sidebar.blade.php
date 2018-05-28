<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-general"
       class="has-submenu @if($current_dir != 'general') collapsed @endif">
        General information
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-general" class="submenu collapse @if($current_dir == 'general') show @endif">
        <li><a href="{{ url('en/2.0/general/about') }}">What is InvoicePlane?</a></li>
        <li><a href="{{ url('en/2.0/general/changelog') }}">Changelog</a></li>
        <li><a href="{{ url('en/2.0/general/license') }}">License</a></li>
        <li><a href="{{ url('en/2.0/general/faq') }}">FAQ</a></li>
    </ul>
</li>
<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-getting-started"
       class="has-submenu @if($current_dir != 'getting-started') collapsed @endif">
        Getting started
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-getting-started" class="submenu collapse @if($current_dir == 'getting-started') show @endif">
        <li><a href="{{ url('en/2.0/getting-started/requirements') }}">Requirements</a></li>
        <li><a href="{{ url('en/2.0/getting-started/installation') }}">Installation</a></li>
        <li><a href="{{ url('en/2.0/getting-started/task-scheduler') }}">Task Scheduler</a></li>
        <li><a href="{{ url('en/2.0/getting-started/updating-ip') }}">Updating InvoicePlane</a></li>
    </ul>
</li>
<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-modules"
       class="has-submenu @if($current_dir != 'user-guide') collapsed @endif">
        User Guide
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-modules" class="submenu collapse @if($current_dir == 'user-guide') show @endif">
        <li><a href="{{ url('en/2.0/user-guide/clients') }}">Clients</a></li>
        <li><a href="{{ url('en/2.0/user-guide/quotes') }}">Quotes</a></li>
        <li><a href="{{ url('en/2.0/user-guide/invoices') }}">Invoices</a></li>
        <li><a href="{{ url('en/2.0/user-guide/recurring-invoices') }}">Recurring Invoices</a></li>
        <li><a href="{{ url('en/2.0/user-guide/payments') }}">Payments</a></li>
        <li><a href="{{ url('en/2.0/user-guide/expenses') }}">Expenses</a></li>
        <li><a href="{{ url('en/2.0/user-guide/system-settings') }}">System Settings</a></li>
    </ul>
</li>
<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-settings"
       class="has-submenu @if($current_dir != 'customization') collapsed @endif">
        Customization
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-settings" class="submenu collapse @if($current_dir == 'customization') show @endif">
        <li><a href="{{ url('en/2.0/customization/custom-fields') }}">Custom Fields</a></li>
        <li><a href="{{ url('en/2.0/customization/email-templates') }}">Email Templates</a></li>
        <li><a href="{{ url('en/2.0/customization/invoice-templates') }}">Invoice Templates</a></li>
        <li><a href="{{ url('en/2.0/customization/translations') }}">Translations</a></li>
    </ul>
</li>
<li>
    <a href="#" data-toggle="collapse" data-target="#submenu-10-templates"
       class="has-submenu @if($current_dir != 'add-ons') collapsed @endif">
        Add-Ons
        <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
    </a>
    <ul id="submenu-10-templates" class="submenu collapse @if($current_dir == 'add-ons') show @endif">
        <li><a href="{{ url('en/2.0/add-ons/time-tracking') }}">Time Tracking</a></li>
    </ul>
</li>
