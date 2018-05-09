@extends('layouts.master')

@section('title')
    Help: Setup a Cron
@endsection

@section('content')

    <h2 class="page-title">Help: Setup a Cron</h2>

    <p>
        If you want to use <a href="{{ url('en/1.5/modules/recurring-invoices') }}">recurring invoices</a> you have to
        setup a cron
        that opens the url listed on the recurring invoices page. A cron is basically a script that runs on predefined
        times. You can setup a cron that runs every minute, every third hour per day or yearly. For recurring invoices
        you should run the cron daily.
    </p>

    <p>There are two different ways on how to setup a cron:</p>

    <ul>
        <li>use you own web server or</li>
        <li>use an online service that runs the cron for you.</li>
    </ul>

    <h4 id="setup-server">
        Use your own Server <?php IP::headlineLink('/en/1.5/help/setup-cron#setup-server'); ?>
    </h4>

    <p>
        As there are various different types of operating software for web servers (e.g. Ubuntu, CentOS, Windows Server
        or even Mac OSX Server) there is not <em>one</em> tutorial on how to setup a cron. Because of this we listed
        tutorials for the most used systems below and wrote an example for Unix-based operating systems.
    </p>

    <ul>
        <li>
            <a href="https://help.ubuntu.com/community/CronHowto" class="ext">Ubuntu</a>
        </li>
        <li>
            <a href="https://www.centos.org/docs/5/html/Deployment_Guide-en-US/ch-autotasks.html" class="ext">CentOS</a>
        </li>
        <li>
            <a href="http://www.myscienceisbetter.info/add-new-cron-job-on-windows-2008-server-using-task-scheduler.html"
               class="ext">Windows Server (2008)</a>
        </li>
    </ul>

    <p><b>Example for Unix-based systems</b></p>

    <p>
        Open the crontab file with <code>crontab -e</code> and paste the following line:
    </p>

    <pre>0 0 * * * wget -O - http://yoursite.com/invoices/cron/recur/your-cron-key >/dev/null 2>&1</pre>

    <p>
        where <code>yoursite.com</code> is the domain you use for InvoicePlane and <code>your-cron-key</code> the cron
        key from your settings.
    </p>

    <h4 id="setup-online">
        Use an Online Service <?php IP::headlineLink('/en/1.5/help/setup-cron#online'); ?>
    </h4>

    <p>
        There are a lot of online services that offer running a cron for you, for example
        <a href="https://cron-job.org/en/" class="ext">cron-job.org</a>,
        <a href="http://www.mywebcron.com" class="ext">mywebcron.com</a>
        or any other.
        <br/>
        Please read the documentation of the service you use to know how to setup a cron with their
        system.
    </p>

@stop