@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.development') ?></h2>

<p><?php echo trans('general.development.subtitle') ?></p>

<ul>
    <li><a href="#project-planning" ><?php echo trans('general.development.project_planning') ?></a></li>
    <li><a href="#access-the-development-files" ><?php echo trans('general.development.access_dev_files') ?></a></li>
    <li><a href="#versioning-and-branching-model" ><?php echo trans('general.development.versioning_branching_model') ?></a></li>
    <li><a href="#pull-requests" ><?php echo trans('general.development.pull_requests') ?></a></li>
    <li><a href="#phpstorm-license" ><?php echo trans('general.development.phpstorm') ?></a></li>
</ul>

<hr class="hr-xl">

<h3 id="project-planning"><?php echo trans('general.development.project_planning') ?></h3>

<p><?php echo trans('general.development.project_planning.text') ?></p>

<hr>

<h3 id="access-the-development-files"><?php echo trans('general.development.access_dev_files') ?></h3>

<p><?php echo trans('general.development.access_dev_files.text') ?></p>

<p><?php echo trans('general.development.access_dev_files.ssh') ?></p>
<pre>git clone git@github.com:InvoicePlane/InvoicePlane.git
git checkout development</pre>

<p><?php echo trans('general.development.access_dev_files.https') ?></p>
<pre>https://github.com/InvoicePlane/InvoicePlane.git
git checkout development</pre>

<hr>

<h3 id="versioning-and-branching-model"><?php echo trans('general.development.versioning_branching_model') ?></h3>

<h4><?php echo trans('general.development.versioning') ?></h4>

<ul>
    <li><b>Major release:</b> v1, v2, v3,... (<code>future</code> branch)</li>
    <li><b>Minor release:</b> v1.x, v2.x, v3.x,... (<code>development</code> branch)</li>
    <li><b>Patch release:</b> v1.x.x, v2.x.x, v3.x.x,... (<code>hotfixes</code> branch)</li>
</ul>

<h4><?php echo trans('general.development.branching_model') ?></h4>

<ul>
    <li><b>master</b>: <?php echo trans('general.development.branching_model.master') ?></li>
    <li><b>hotfixes</b>: <?php echo trans('general.development.branching_model.hotfixes') ?></li>
    <li><b>development</b>: <?php echo trans('general.development.branching_model.development') ?></li>
</ul>

<p><?php echo trans('general.development.versioning_branching_model.blog_notice') ?></p>

<hr>

<h3 id="pull-requests"><?php echo trans('general.development.pull_requests') ?></h3>

<p><?php echo trans('general.development.pull_requests.text') ?></p>

<hr>

<h3 id="phpstorm-license"><?php echo trans('general.development.phpstorm') ?></h3>

<p><?php echo trans('general.development.phpstorm.text') ?></p>

@stop