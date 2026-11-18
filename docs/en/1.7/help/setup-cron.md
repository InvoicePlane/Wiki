# Help: Setup a Cron

If you want to use [recurring invoices](/en/1.7/modules/recurring-invoices) you have to
setup a cron
that opens the URL listed on the recurring invoices page. A cron is basically a script that runs on predefined
times. You can setup a cron that runs every minute, every third hour per day or yearly. For recurring invoices
you should run the cron daily.

There are two different ways on how to setup a cron:

- use you own web server or
- use an online service that runs the cron for you.

### Use your own Server

As there are various different types of operating software for web servers (e.g. Ubuntu, CentOS, Windows Server
or even Mac OSX Server) there is not *one* tutorial on how to setup a cron. Because of this we listed
tutorials for the most used systems below and wrote an example for Unix-based operating systems.

- [Ubuntu](https://help.ubuntu.com/community/CronHowto)
- [CentOS](https://www.centos.org/docs/5/html/Deployment_Guide-en-US/ch-autotasks.html)
- [Windows Server (2008)](http://www.myscienceisbetter.info/add-new-cron-job-on-windows-2008-server-using-task-scheduler.html)

**Example for Unix-based systems**

Open the crontab file with `crontab -e` and paste the following line:

```
0 0 * * * wget -O - https://yoursite.com/invoices/cron/recur/your-cron-key >/dev/null 2>&1
```

where `yoursite.com` is the domain you use for InvoicePlane and `your-cron-key` the cron
key from your settings.

### Use an Online Service

There are a lot of online services that offer running a cron for you, for example
[cron-job.org](https://cron-job.org/en/),
[FastCron](https://www.fastcron.com/tutorials/invoiceplane-cron)
or any other.

Please read the documentation of the service you use to know how to setup a cron with their
system.
