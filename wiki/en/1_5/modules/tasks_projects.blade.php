@extends('layouts.master')

@section('title')
    Tasks and Projects
@endsection

@section('content')

    <h2 class="page-title">Tasks and Projects</h2>

    <p>InvoicePlane provides basic task management that is integrated into the invoice workflow. You can link tasks to projects and projects to clients to structure everthing.</p>

    <h3 id="projects">
        Projects <?php IP::headlineLink('/en/1.5/modules/tasks_projects#projects'); ?>
    </h3>

    <p>Projects can be added from the navigation bar. You can chose the project name and a client. Choosing a client is optional. If you choose a client, tasks that are assigned to this project can onl be added to invoices for the same client.</p>

    <h3 id="tasks">
        Tasks <?php IP::headlineLink('/en/1.5/modules/tasks_projects#tasks'); ?>
    </h3>

    <p>Tasks can be added from the navigation bar. They have several fields that are explained in the following table.</p>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Field</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Task name</td>
                <td>The title or name of the task. Normally a short headword or sentence</td>
            </tr>
            <tr>
                <td>Task description</td>
                <td>Can contain a long text that discribes the task. Can also be used to store notes.</td>
            </tr>
            <tr>
                <td>Task price</td>
                <td>The price set here will be used in invoices to properly store tasks. The task price is the same as the product price.</td>
            </tr>
            <tr>
                <td>Tax Rate</td>
                <td>Task tax rates are the same like product tax rates. It will be added to the task price if added to an invoice.</td>
            </tr>
            <tr>
                <td>Finish date</td>
                <td>Also called deadline, it defines the date where the task should be finished. Tasks are displayed as overdue (red color) if the finish date has already passed.</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>The task status defines the current state of the task. More information can be found below.</td>
            </tr>
            <tr>
                <td>Project</td>
                <td>This optional select can be used to link tasks to projects.</td>
            </tr>
        </table>
    </div>

    <h4 id="task-status">
        Task Status <?php IP::headlineLink('/en/1.5/modules/tasks_projects#task-status'); ?>
    </h4>

    <p>A task can have one off the following statuses. Please notice that only completed tasks can be added to invoices.</p>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Status</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><span class="status status-draft">Not started</span></td>
                <td>The title or name of the task. Normally a short headword or sentence</td>
            </tr>
            <tr>
                <td><span class="status status-in-progress">In progress</span></td>
                <td>The task is currently in progress. Someone works on the task.</td>
            </tr>
            <tr>
                <td><span class="status status-completed">Completed</span></td>
                <td>The task was completed and is ready to be added to an invoice.</td>
            </tr>
        </table>
    </div>

    <h4 id="tasks-invoices">
        Tasks in Invoices <?php IP::headlineLink('/en/1.5/modules/tasks_projects#tasks-invoices'); ?>
    </h4>

    <p>Inside invoices you can add tasks to an invoice. Therefore, use the "Add Task" button. This will open a new panel where all available tasks will be listed. Please notice that the following requirements must be fullfilled for a tasks to be available:</p>

    <ul>
        <li>the task must be have the status <span class="status status-completed">Completed</span>.</li>
        <li>the task must either have no linked project or the client of the current invoice must match theclient that is assigned to the linked project.</li>
    </ul>


    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.5/modules/payments',
                    'title' => 'Invoices',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.5/modules/payments',
                    'title' => 'Payments',
                    'type' => 'article'
            )
    );
    ?>

@stop